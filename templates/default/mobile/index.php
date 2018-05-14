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


    <script type="text/javascript" src="<?php echo $cfg_webpath;?>/templates/default/js/jquery.min.js"></script>

    <!-- 导航特效 -->
    <script type="text/javascript" src="<?php echo $cfg_webpath;?>/templates/default/js/mobile/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo $cfg_webpath;?>/templates/default/js/mobile/jquery.dlmenu.js"></script>

    <!-- 导航样式 -->
    <link type="text/css" href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/component.css" rel="stylesheet" >

    <!-- 导航栏等特效 -->
    <script type="text/javascript" src="<?php echo $cfg_webpath;?>/templates/default/js/mobile/TouchSlide.1.1.js"></script>

    <!-- 搜索样式 -->
    <link type="text/css" href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/search.css" rel="stylesheet" >


    <!-- 底部样式 -->
    <link type="text/css" href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/footer.css" rel="stylesheet" >
</head>
<body>
<?php require_once(dirname(__FILE__).'/nav.php'); ?>

<div class="header">
    <span>LOGO</span>
</div>

<?php require_once(dirname(__FILE__).'/banner.php'); ?>

<form class="ss" method="post" action="?m=search">
    <input class="ipt1" name="keyword" placeholder="请输入搜索内容">
    <input type="submit" class="ipt2" value="">
</form><!-- 搜索 -->


<div class="icon-list clearfix">
    <ul>
        <li>
            <div class="icon-pic">
                <a href="">
                    <img src="<?php echo $cfg_webpath;?>/templates/default/images/testdata/myangzhijishu.png">
                </a>
            </div>

            <div class="icon-text">
                <a href="">
                    养殖技术
                </a>
            </div>
        </li>

        <li>
            <div class="icon-pic">
                <a href="">
                    <img src="<?php echo $cfg_webpath;?>/templates/default/images/testdata/mjidizhanshi.png">
                </a>
            </div>

            <div class="icon-text">
                <a href="">
                    基地展示
                </a>
            </div>
        </li>

        <li>
            <div class="icon-pic">
                <a href="">
                    <img src="<?php echo $cfg_webpath;?>/templates/default/images/testdata/mguanyuwomen.png">
                </a>
            </div>

            <div class="icon-text">
                <a href="">
                    关于我们
                </a>
            </div>
        </li>

        <li>
            <div class="icon-pic">
                <a href="">
                    <img src="<?php echo $cfg_webpath;?>/templates/default/images/testdata/mlianxiwomen.png">
                </a>
            </div>

            <div class="icon-text">
                <a href="">
                    联系我们
                </a>
            </div>
        </li>


    </ul>
</div><!-- icon end -->


<div class="mpinzhong">
    <div class="m-big-title">
        <span>养殖品种</span>
    </div>

    <div class="mredLine"></div>
    <div class="m-sub-title">
        <span>
            向社会供应西门塔尔、夏洛莱、利木赞、改良牛、奶牛等优良畜牧良种
        </span>
    </div>

    <div class="mpinzhong-list clearfix">
        <ul>
            <li>
                <div class="mpingzhong-img">
                    <a class="" href="">
                        <img src="<?php echo $cfg_webpath;?>/templates/default/images/mpinzhong.jpg" alt="品种牛">
                    </a>
                </div>
                <div class="mpinzhong-txt">
                    <span>鲁西黄牛</span>
                </div>
            </li>

            <li>
                <div class="mpingzhong-img">
                    <a class="" href="">
                        <img src="<?php echo $cfg_webpath;?>/templates/default/images/mpinzhong.jpg" alt="品种牛">
                    </a>
                </div>
                <div class="mpinzhong-txt">
                    <span>鲁西黄牛</span>
                </div>
            </li>
            <li>
                <div class="mpingzhong-img">
                    <a class="" href="">
                        <img src="<?php echo $cfg_webpath;?>/templates/default/images/mpinzhong.jpg" alt="品种牛">
                    </a>
                </div>
                <div class="mpinzhong-txt">
                    <span>鲁西黄牛</span>
                </div>
            </li>
            <li>
                <div class="mpingzhong-img">
                    <a class="" href="">
                        <img src="<?php echo $cfg_webpath;?>/templates/default/images/mpinzhong.jpg" alt="品种牛">
                    </a>
                </div>
                <div class="mpinzhong-txt">
                    <span>鲁西黄牛</span>
                </div>
            </li>
        </ul>
    </div>
</div> <!-- 养殖品种结束 -->

<div class="shili">
    <div class="m-big-title">
        <span>实力保证</span>
    </div>

    <div class="mredLine"></div>
    <div class="m-sub-title">
        <span>
           解答客户各种疑难问题，满足客户的不同要求，并定期回访。
        </span>
    </div>

    <div class="shili-info clearfix">
        <ul>
            <li>
                <div class="mshili-img">
                    <img src="<?php echo $cfg_webpath;?>/templates/default/images/mzheng.png">
                </div>
                <div class="mshili-bigTitle">
                    <span>品种纯正(买着放心)</span>
                </div>
                <div class="mshili-subTitle">
                    <span>
                        我牧业保证所提供牛羊良种的品种质量，若引种过程中出现品质问题，
                        客户损失由我牧业承担。
                    </span>
                </div>
            </li>

        <!--    <li>
                <div class="mshili-img">
                    <img src="<?php /*echo $cfg_webpath;*/?>/templates/default/images/mgou.png">
                </div>
                <div class="mshili-bigTitle">
                    <span>自由选购(交易放心)</span>
                </div>
                <div class="mshili-subTitle">
                    <span>
                        以客户满意为宗旨，自由选购。来牧业人员，可凭车票报销来牧业车费，对退休干部尊享更多优惠。
                    </span>
                </div>
            </li>
            <li>
                <div class="mshili-img">
                    <img src="<?php /*echo $cfg_webpath;*/?>/templates/default/images/mtool.png">
                </div>
                <div class="mshili-bigTitle">
                    <span>技术支持(后顾无忧)</span>
                </div>
                <div class="mshili-subTitle">
                    <span>
                        全城养殖指导，一对一技术专家上门指导，养殖过程全周期跟踪一对一技术专家上门指导。
                    </span>
                </div>
            </li>-->

        </ul>
    </div>

    <div class="shili-info clearfix">
        <ul>

              <li>
                <div class="mshili-img">
                    <img src="<?php echo $cfg_webpath;?>/templates/default/images/mgou.png">
                </div>
                <div class="mshili-bigTitle">
                    <span>自由选购(交易放心)</span>
                </div>
                <div class="mshili-subTitle">
                    <span>
                        以客户满意为宗旨，自由选购。来牧业人员，可凭车票报销来牧业车费，对退休干部尊享更多优惠。
                    </span>
                </div>
            </li>
        </ul>
    </div>

    <div class="shili-info clearfix">
        <ul>

            <li>
                <div class="mshili-img">
                    <img src="<?php echo $cfg_webpath;?>/templates/default/images/mtool.png">
                </div>
                <div class="mshili-bigTitle">
                    <span>技术支持(后顾无忧)</span>
                </div>
                <div class="mshili-subTitle">
                    <span>
                        全城养殖指导，一对一技术专家上门指导，养殖过程全周期跟踪一对一技术专家上门指导。
                    </span>
                </div>
            </li>

        </ul>
    </div>
</div> <!-- 实力保证结束 -->


<div class="buy">
    <div class="m-big-title">
        <span>购买流程</span>
    </div>

    <div class="mredLine"></div>
    <div class="m-sub-title">
        <span>
            解答客户各种疑难问题，满足客户的不同要求，并定期回访。
        </span>
    </div>

    <div class="buy-liucheng">
        <div class="buy-container">
            <ul>
                <li>
                    <div class="buy-imgs">
                        <img src="<?php echo $cfg_webpath;?>/templates/default/images/testdata/mphone.png" />
                    </div>

                    <div class="buy-txt">
                        <span>电话咨询</span>
                    </div>
                </li>

                <li>
                    <div class="buy-imgs">
                        <img src="<?php echo $cfg_webpath;?>/templates/default/images/testdata/mshidi.png" />
                    </div>

                    <div class="buy-txt">
                        <span>实地考察</span>
                    </div>
                </li>
                <li>
                    <div class="buy-imgs">
                        <img src="<?php echo $cfg_webpath;?>/templates/default/images/testdata/mhetong.png" />
                    </div>

                    <div class="buy-txt">
                        <span>签订合同</span>
                    </div>
                </li>
                <li>
                    <div class="buy-imgs">
                        <img src="<?php echo $cfg_webpath;?>/templates/default/images/testdata/mzhuangche.png" />
                    </div>

                    <div class="buy-txt">
                        <span>装车付款</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div><!-- 购买流程 -->



<?php require_once(dirname(__FILE__).'/footer_menu.php'); ?>


</body>
</html>