<?php require_once(dirname(__FILE__).'/include/config.inc.php');
$cid = empty($cid) ? '' : intval($cid);
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <?php echo GetHeader(1,$cid); ?>

    <link href="templates/default/style/reset.css" type="text/css" rel="stylesheet" />
    <link href="templates/default/style/common.css" type="text/css" rel="stylesheet" />
    <link href="templates/default/style/index.css" type="text/css" rel="stylesheet" />

    <!-- 二级页样式 -->
    <link href="templates/default/style/info.css" type="text/css" rel="stylesheet" />

    <!-- 组件样式 -->
    <link href="templates/default/style/banner.css" type="text/css" rel="stylesheet" />

    <!-- 产品二级页 -->
    <link href="templates/default/style/product.css" type="text/css" rel="stylesheet" />
    <link href="templates/default/style/pageList.css" type="text/css" rel="stylesheet" />


    <script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
    <!-- 大话主席 -->
    <script type="text/javascript" src="templates/default/js/jquery.SuperSlide.2.1.1.js"></script>


</head>
<body>

<?php require_once('header.php'); ?>

<?php require_once('banner.php'); ?>

<div class="info clear">
    <?php require_once('left.php'); ?>

    <div class="detail">
        <div class="title">
            <span><?php echo GetCatName($cid); ?></span>
            <span class="wz">
                    <?php echo GetPosStr($cid); ?>
                </span>
        </div>

        <!-- 产品详情不一样的地方 相比：单页信息  -->
        <div class="product_detail">
            <div class="product_list">
                <?php
                if(!empty($keyword)){
                    $keyword = htmlspecialchars($keyword);
                    $sql = "SELECT * FROM `#@__infoimg` WHER title LIKE '%$keyword%' AND delstate='' AND checkinfo=true ORDER BY orderid DESC";
                }else{
                    $sql = "SELECT * FROM `#@__infoimg` WHERE (classid=$cid OR parentstr LIKE '%,$cid,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC";
                }

                $dopage->GetPage($sql,3);
                while($row = $dosql->GetArray()) {
                    if ($row['picurl'] != '') $picurl = $row['picurl'];
                    else $picurl = 'templates/default/images/nofoundpic.gif';

                    if ($row['linkurl'] == '' and $cfg_isreurl != 'Y') $gourl = 'productshow.php?cid=' . $row['classid'] . '&id=' . $row['id'];
                    else if ($cfg_isreurl == 'Y') $gourl = 'productshow-' . $row['classid'] . '-' . $row['id'] . '-1.html';
                    else $gourl = $row['linkurl'];
                    ?>
                    <li>
                        <a href="<?php echo $gourl; ?>" class="img">
                            <img src="<?php echo $picurl; ?>" alt=""/>
                        </a>
                        <p class="product_info">
                            <a href="<?php echo $gourl; ?>"><?php echo ReStrLen($row['title'],15); ?></a>
                        </p>
                    </li>
                    <?php
                }
                ?>
            </div>
            <?php echo $dopage->GetList(); ?>
        </div>

    </div>
</div>



<?php require_once('footer.php'); ?>
</body>
</html>
