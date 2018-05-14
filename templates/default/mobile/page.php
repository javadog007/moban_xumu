<?php	if(!defined('IN_MOBILE')) exit('Request Error!');

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <?php echo GetHeader(); ?>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="HandheldFriendly"content="true"/>
    <meta name="format-detection"content="telephone=no">

    <link type="text/css" href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/mobile.css" rel="stylesheet" >
    <link type="text/css" href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/banner.css" rel="stylesheet" >

    <!-- 组件样式 -->
    <link type="text/css" href="<?php echo $cfg_webpath;?>/templates/default/style/reset.css" rel="stylesheet" >
    <link type="text/css" href="<?php echo $cfg_webpath;?>/templates/default/style/common.css" rel="stylesheet" >


    <script type="text/javascript" src="<?php echo $cfg_webpath;?>/templates/default/js/jquery.min.js"></script>

    <!-- 导航特效 -->
    <script type="text/javascript" src="<?php echo $cfg_webpath;?>/templates/default/js/mobile/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo $cfg_webpath;?>/templates/default/js/mobile/jquery.dlmenu.js"></script>

    <!-- 导航样式 -->
    <link type="text/css" href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/component.css" rel="stylesheet" >

    <!-- 导航栏等特效 -->
    <script type="text/javascript" src="<?php echo $cfg_webpath;?>/templates/default/js/mobile/TouchSlide.1.1.js"></script>

    <!-- 底部样式 -->
    <link type="text/css" href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/footer.css" rel="stylesheet" >

    <!-- 二级页样式 -->
    <link href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/page.css" type="text/css" rel="stylesheet" />

</head>
<body>

<?php require_once(dirname(__FILE__).'/nav.php'); ?>

<div class="header">
    <span>LOGO</span>
</div>

<?php require_once(dirname(__FILE__).'/banner.php'); ?>

<div class="mobile_main">
    <?php
    $row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
    if(!empty($row['id']))
    {
        ?>
        <div class="main_title">
            <span><?php echo $row['classname']; ?></span>
        </div>
        <div class="main">
            <?php
            if($row['infotype'] == '0')
            {
                echo '<div class="info">'.Info($row['id']).'</div>';
            }

            else if($row['infotype'] == '1')
            {
                echo '<ul class="list">';

                $dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid=".$row['id']." or parentid=".$row['id']." or parentstr like '%".$row['id']."%') AND 
                delstate='' AND checkinfo=true ORDER BY orderid DESC",4);
                while($row1 = $dosql->GetArray())
                {
                    ?>
                    <li><a href="?m=show&cid=<?php echo $row['id'];?>&id=<?php echo $row1['id']?>" style="color:<?php echo $row1['colorval']; ?>;font-weight:<?php echo $row1['boldval']; ?>;"><?php echo $row1['title']; ?></a></li>
                    <?php
                }

                echo '<div class="cl"></div></ul>';
                echo $dopage->GetList();
            }

            else if($row['infotype'] == '2')
            {
                echo '<ul class="img2">';

                $dopage->GetPage("SELECT * FROM `#@__infoimg` WHERE (classid=".$row['id']." or parentid=".$row['id']." or parentstr like '%".$row['id']."%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",4);
                while($row2 = $dosql->GetArray())
                {

                    //获取缩略图地址
                    if($row2['picurl']!='')
                        $picurl = $row2['picurl'];
                    else
                        $picurl = 'templates/default/images/nofoundpic.gif';
                    ?>
                    <li>
                        <a href="?m=show&cid=<?php echo $row2['classid'];?>&id=<?php echo $row2['id']?>" class="imgarea">
                            <img src="<?php echo $picurl; ?>" title="<?php echo $row2['title']; ?>" />
                        </a>
                        <p>
                            <a href="?m=show&cid=<?php echo $row['id'];?>&id=<?php echo $row2['id']?>" style="color: #333333;font-size: 14px;">
                                <?php echo $row2['title']; ?>
                            </a>
                        </p>
                    </li>
                    <?php
                }

                echo '<div class="cl"></div></ul>';
                echo $dopage->GetList();
            }
            ?>
        </div>
        <?php
    }
    else
    {
        echo '<li>网站资料更新中...</li>';
    }
    ?>
</div>



<?php require_once(dirname(__FILE__).'/footer_menu.php'); ?>
</body>
</html>
