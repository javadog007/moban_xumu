<?php require_once(dirname(__FILE__).'/include/config.inc.php');

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <?php echo GetHeader(); ?>

    <link href="templates/default/style/reset.css" type="text/css" rel="stylesheet" />
    <link href="templates/default/style/common.css" type="text/css" rel="stylesheet" />
    <link href="templates/default/style/index.css" type="text/css" rel="stylesheet" />

    <!-- 组件样式 -->
    <link href="templates/default/style/banner.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
    <!-- 大话主席 -->
    <script type="text/javascript" src="templates/default/js/jquery.SuperSlide.2.1.1.js"></script>

    <!-- 特效插件 -->
    <script type="text/javascript" src="templates/default/js/wow.js"></script>
    <script>
        if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
            new WOW().init();
        };
    </script>
    <link href="templates/default/style/vendor/animate.css" type="text/css" rel="stylesheet" />

</head>
<body>

<?php require_once('header.php'); ?>
<?php require_once('banner.php'); ?>

<div class="pinzhong mt40">
    <div class="big-title">
        <span><?php echo GetCatName(1);?></span>
    </div>
    <div class="redLine"></div>
    <div class="sub-title">
        <span><?php echo GetCatDesc(1);?></span>
    </div>

    <div class="pingzhong-list normal-list clear">
        <ul>
            <?php
            $dosql->Execute("SELECT * FROM `#@__infoimg` WHERE parentid=1 AND checkinfo=true and flag like '%h%' ORDER BY orderid ASC LIMIT 0,4");
            while($row = $dosql->GetArray()) {
            if ($row['linkurl'] != '') $gourl = $row['linkurl'];
            else $gourl = 'javascript:;';

            if ($row['picurl'] != '') $picurl = $row['picurl'];
            else $picurl = 'javascript:;';
            ?>
            <li>
                <div class="pingzhong-pics normal-pics">
                    <a href="productshow.php?cid=<?php echo $row['classid'];?>&id=<?php echo $row['id'];?>   ">
                        <img src="<?php echo $picurl;?>" alt="" class="nativePic">
                        <div class="bg">
                            <img src="templates/default/images/hand.png" alt="">
                        </div>
                    </a>
                </div>

                <div class="pingzhong-title normal-title">
                    <a href="productshow.php?cid=<?php echo $row['classid'];?>&id=<?php echo $row['id'];?>">
                        <span><?php echo $row['title'];?></span>
                    </a>
                </div>
            </li>
                <?php
            }
            ?>



        </ul>
    </div>

</div><!-- pinzhong end -->

<div class="base-show mt30">
    <div class="big-title">
        <span><?php echo GetCatName(4);?></span>
    </div>
    <div class="redLine"></div>
    <div class="sub-title">
        <span><?php echo GetCatDesc(4);?></span>
    </div>

    <div class="base-list normal-list clear">
        <ul>
            <?php
            $dosql->Execute("SELECT * FROM `#@__infoimg` WHERE parentid=4 AND checkinfo=true and flag like '%h%' ORDER BY orderid ASC LIMIT 0,8");
            while($row = $dosql->GetArray()) {
            if ($row['linkurl'] != '') $gourl = $row['linkurl'];
            else $gourl = 'javascript:;';

            if ($row['picurl'] != '') $picurl = $row['picurl'];
            else $picurl = 'javascript:;';
            ?>
            <li style="">
                <div class="base-pics">
                    <a href="productshow.php?cid=<?php echo $row['classid'];?>&id=<?php echo $row['id'];?>">
                        <img src="<?php echo $picurl;?>" alt="" class="nativePic">
                    </a>
                </div>

                <div class="base-title">
                    <a href="productshow.php?cid=<?php echo $row['classid'];?>&id=<?php echo $row['id'];?>">
                        <span><?php echo $row['title'];?></span>
                    </a>
                </div>
            </li>
                <?php
            }
            ?>

        </ul>
    </div>


</div><!-- 基地展示 结束  -->

<div class="shili">
    <div class="big-title">
        <span>实力保障</span>
    </div>
    <div class="redLine"></div>
    <div class="sub-title">
        <span>解答客户各种疑难问题，满足客户的不同要求，并定期回访。</span>
    </div>

    <div class="shili-list clear">
        <ul>
            <li>
                <div class="shili-icon">
                    <img src="templates/default/images/zheng.png" alt="zheng">
                </div>

                <div class="shli-bigTitle">
                    <span>品种纯正(买着放心)</span>
                </div>
                <div class="shili-subTitle">
                    <span>
                        我牧业保证所提供牛羊良种的品种质量，若引种过程中出现品质问题，
                        客户损失由我牧业承担。
                    </span>
                </div>
            </li>

            <li>
                <div class="shili-icon">
                    <img src="templates/default/images/zheng.png" alt="zheng">
                </div>

                <div class="shli-bigTitle">
                    <span>品种纯正(买着放心)</span>
                </div>
                <div class="shili-subTitle">
                    <span>
                        我牧业保证所提供牛羊良种的品种质量，若引种过程中出现品质问题，
                        客户损失由我牧业承担。
                    </span>
                </div>
            </li>
            <li>
                <div class="shili-icon">
                    <img src="templates/default/images/zheng.png" alt="zheng">
                </div>

                <div class="shli-bigTitle">
                    <span>品种纯正(买着放心)</span>
                </div>
                <div class="shili-subTitle">
                    <span>
                        我牧业保证所提供牛羊良种的品种质量，若引种过程中出现品质问题，
                        客户损失由我牧业承担。
                    </span>
                </div>
            </li>
        </ul>
    </div>



</div><!-- 实力保障 结束 -->

<div class="yangzhi mt40">
    <div class="big-title">
        <span>养殖技术</span>
    </div>
    <div class="redLine"></div>
    <div class="sub-title">
        <span>解答客户各种疑难问题，满足客户的不同要求，并定期回访。</span>
    </div>


    <div class="yangzhi-list clear">
        <ul>
            <li>
                <div class="yangzhi-bigTitle">
                    <span>畜牧养殖技术</span>
                </div>

                <div class="yangzhi-subTitle">
                    <span>
                        牛舍建筑,要根据当地的气温变化和牛场生产,用途等因素来确定.
                        建牛舍因陋就简,就地取材,经济实用。
                    </span>
                </div>
            </li>

            <li>
                <div class="yangzhi-bigTitle">
                    <span>畜牧养殖技术</span>
                </div>

                <div class="yangzhi-subTitle">
                    <span>
                        牛舍建筑,要根据当地的气温变化和牛场生产,用途等因素来确定.
                        建牛舍因陋就简,就地取材,经济实用。
                    </span>
                </div>
            </li>
            <li>
                <div class="yangzhi-bigTitle">
                    <span>畜牧养殖技术</span>
                </div>

                <div class="yangzhi-subTitle">
                    <span>
                        牛舍建筑,要根据当地的气温变化和牛场生产,用途等因素来确定.
                        建牛舍因陋就简,就地取材,经济实用。
                    </span>
                </div>
            </li>
            <li>
                <div class="yangzhi-bigTitle">
                    <span>畜牧养殖技术</span>
                </div>

                <div class="yangzhi-subTitle">
                    <span>
                        牛舍建筑,要根据当地的气温变化和牛场生产,用途等因素来确定.
                        建牛舍因陋就简,就地取材,经济实用。
                    </span>
                </div>
            </li>
            <li>
                <div class="yangzhi-bigTitle">
                    <span>畜牧养殖技术</span>
                </div>

                <div class="yangzhi-subTitle">
                    <span>
                        牛舍建筑,要根据当地的气温变化和牛场生产,用途等因素来确定.
                        建牛舍因陋就简,就地取材,经济实用。
                    </span>
                </div>
            </li>
            <li>
                <div class="yangzhi-bigTitle">
                    <span>畜牧养殖技术</span>
                </div>

                <div class="yangzhi-subTitle">
                    <span>
                        牛舍建筑,要根据当地的气温变化和牛场生产,用途等因素来确定.
                        建牛舍因陋就简,就地取材,经济实用。
                    </span>
                </div>
            </li>
        </ul>
    </div>
</div><!-- 养殖技术 结束-->

<div class="buy">
    <div class="big-title">
        <span>购买流程</span>
    </div>
    <div class="redLine"></div>
    <div class="sub-title">
        <span>解答客户各种疑难问题，满足客户的不同要求，并定期回访。</span>
    </div>

    <div class="buy-list">
        <div class="buy-container clear">
            <ul>
                <li>
                    <div class="buy-img">

                    </div>

                    <div class="buy-jiantou">
                        <img src="templates/default/images/jiantou.png">
                    </div>

                    <div class="buy-subTitle">
                        <span>电话咨询</span>
                    </div>
                </li>

                <li>
                    <div class="buy-img">

                    </div>

                    <div class="buy-jiantou">
                        <img src="templates/default/images/jiantou.png">
                    </div>

                    <div class="buy-subTitle">
                        <span>电话咨询</span>
                    </div>
                </li>
                <li>
                    <div class="buy-img">

                    </div>

                    <div class="buy-jiantou">
                        <img src="templates/default/images/jiantou.png">
                    </div>

                    <div class="buy-subTitle">
                        <span>电话咨询</span>
                    </div>
                </li>
                <li>
                    <div class="buy-img">

                    </div>
                    <div class="buy-subTitle">
                        <span>电话咨询</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div> <!-- 购买流程 结束 -->

<div class="aboutUs mt40">
    <div class="big-title">
        <span><?php echo GetCatName(10);?></span>
    </div>
    <div class="redLine"></div>
    <div class="sub-title">
        <span><?php echo GetCatDesc(10);?></span>
    </div>

    <div class="about-list clear">
        <div class="about-left">
            <span>
              <?php echo Info(10,255);?>
            </span>

            <a href="info.php?cid=10">了解更多</a>
        </div>

        <div class="about-right">
            <embed src='http://player.youku.com/player.php/sid/XMzU4MzU1NDM4MA==/v.swf' allowFullScreen='true' quality='high' width='579' height='354' align='middle' allowScriptAccess='always' type='application/x-shockwave-flash'></embed>
        </div>
    </div>
</div><!-- 关于我们 结束-->

<?php require_once('footer.php'); ?>

</body>
</html>


