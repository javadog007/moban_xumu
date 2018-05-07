<?php require_once(dirname(__FILE__).'/include/config.inc.php');
$cid = empty($cid) ? '' : intval($cid); //默认 显示内资公司注册
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

    <!-- 新闻二级页样式 -->
    <link href="templates/default/style/news.css" type="text/css" rel="stylesheet" />
    <link href="templates/default/style/pageList.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
    <!-- 大话主席 -->
    <script type="text/javascript" src="templates/default/js/jquery.SuperSlide.2.1.1.js"></script>


</head>
<body>

<?php require_once('header.php'); ?>


<?php require_once('banner.php'); ?>

<div class="sec_news clear">
    <div class="info clear">

        <?php require_once('left.php'); ?>
        <div class="detail">
            <div class="title">
                <span><?php echo GetCatName($cid); ?></span>
                <span class="wz">
                    <?php echo GetPosStr($cid); ?>
                </span>
            </div>
            <!-- 新闻列表  和单页不同的地方 -->
            <div class="subCont">
                <ul class="sec_news_list">
                    <?php
                    $sql = "SELECT * FROM `#@__infolist` WHERE (classid=$cid OR parentstr LIKE '%,$cid,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC";

                    $dopage->GetPage($sql,5);
                    while($row = $dosql->GetArray()) {
                        if ($row['linkurl'] == '' and $cfg_isreurl != 'Y') $gourl = 'newsshow.php?cid=' . $row['classid'] . '&id=' . $row['id'];
                        else if ($cfg_isreurl == 'Y') $gourl = 'newsshow-' . $row['classid'] . '-' . $row['id'] . '-1.html';
                        else $gourl = $row['linkurl'];

                        $row2 = $dosql->GetOne("SELECT `classname` FROM `#@__infoclass` WHERE `id`=" . $row['classid']);
                        if ($cfg_isreurl != 'Y') $gourl2 = 'news.php?cid=' . $row['classid'];
                        else $gourl2 = 'news-' . $row['classid'] . '-1.html';
                        ?>
                        <li>
                        <span class="sec_news_title clear">
                            <a href="<?php echo $gourl; ?>" title="<?php echo $row['title']; ?>">
                                <?php echo $row['title']; ?>
                            </a>
                        </span>

                            <span class="hits">点击次数：<?php echo $row['hits']; ?></span>
                            <div class="time"><?php echo GetDateTime($row['posttime']); ?></div>
                            <div class="newsType">
                                <a href="<?php echo $gourl2; ?>">
                                    <?php echo $row2['classname']; ?>
                                </a>
                            </div>
                        </li>

                        <?php
                    }
                    ?>
                </ul>
                <!-- 分页信息 -->
                <?php echo $dopage->GetList(); ?>

            </div>
        </div>
    </div>
</div>



<?php require_once('footer.php'); ?>
</body>
</html>
