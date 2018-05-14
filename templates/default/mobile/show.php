<?php	if(!defined('IN_MOBILE')) exit('Request Error!'); ?>

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


    <!-- 三级页样式 -->
    <link href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/show.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/page.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php require_once(dirname(__FILE__).'/nav.php'); ?>

<div class="header">
    <span>LOGO</span>
</div>

<?php require_once(dirname(__FILE__).'/banner.php'); ?>

<div class="content">
    <!-- 栏目内容 -->
    <?php
    $row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
    if(!empty($row['id']))
    {
        ?>
        <div class="pubBox">
            <div class="main_title">
                <span><?php echo $row['classname']; ?></span>
            </div>
            <div class="ft">
                <div class="subCont">
                    <?php
                    switch($row['infotype'])
                    {
                        case 1:
                            $tbname = '#@__infolist';
                            break;
                        case 2:
                            $tbname = '#@__infoimg';
                            break;
                    }
                    //增加一次点击量
                    $dosql->ExecNoneQuery("UPDATE `$tbname` SET hits=hits+1 WHERE `id`=$id");
                    $row = $dosql->GetOne("SELECT * from `$tbname` WHERE `id`=$id");
                    ?>

                    <h1 class="title"><?php echo $row['title']; ?></h1>

                    <div class="continfo"><span>更新时间：</span><?php echo GetDateTime($row['posttime']); ?></div>
                    <?php
                    if($tbname == '#@__infoimg' &&
                        $row['picurl'] != '')
                    {
                        ?>
                        <div class="contimg"><img src="<?php echo $row['picurl']; ?>" /></a></div>
                        <?php
                    }
                    ?>
                    <div class="conttxt">
                        <?php
                        if($row['content'] != '')
                            echo GetContPage($row['content']);
                        else
                            echo '网站资料更新中...';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>




<?php require_once(dirname(__FILE__).'/footer_menu.php'); ?>
</body>
</html>
