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

    <!-- 搜索页面样式 -->
    <link type="text/css" href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/search.css" rel="stylesheet" >
</head>
<body>

<form action="?m=search" method="post" class="ss">
    <a href="javascript:history.go(-1)" class="returnUrl"></a>

    <input type="submit" class="ipt2_1" value="搜索">
    <input class="ipt1" name="keyword" placeholder="<?php echo $_POST['keyword'];?>" style="width: 80%;float: right;position: relative;background-color: #F2F2F2;"/>

    <a href="javascript:;" class="clearSearch"></a>
</form>
<script type="text/javascript">
    $(".clearSearch").click(function () {
        var str='';
        str=str ? str :'';
        $('.ipt1').val('');
        $('.ipt1').attr('placeholder',str);
    })
</script>

<div class="content clear">
    <ul class="clear">
        <?php
        $keyword = htmlspecialchars($keyword);

        $dosql->Execute("SELECT * FROM `#@__infoimg` WHERE checkinfo=true AND title LIKE '%$keyword%'  ORDER BY orderid ASC LIMIT 0,10");
        while($row = $dosql->GetArray()) {

        if ($row['picurl'] != '') $picurl = $row['picurl'];
        else $picurl = 'javascript:;';
        ?>
        <li class="clear">
            <div class="search-text">
                <div class="search-title">
                    <span>
                        <a href="?m=show&cid=<?php echo $row['classid'];?>&id=<?php echo $row['id'];?>">
                            <?php echo $row['title'];?>
                        </a>
                    </span>
                </div>
                <div class="search-info">
                    <span>
                         <a href="?m=show&cid=<?php echo $row['classid'];?>&id=<?php echo $row['id'];?>">
                             <?php echo $row['content'];?>
                         </a>
                    </span>
                </div>
            </div>

            <div class="search-pic">
                <a href="?m=show&cid=<?php echo $row['classid'];?>&id=<?php echo $row['id'];?>">
                    <img src="<?php echo $cfg_webpath;?>/<?php echo $picurl;?>" alt="search">
                </a>
            </div>
        </li>
            <?php
        }
        ?>

    </ul>
</div>



</body>
</html>