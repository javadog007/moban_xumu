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
        <div class="content">
            <?php echo Info($cid); ?>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>

</body>
</html>