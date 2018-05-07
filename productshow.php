<?php require_once(dirname(__FILE__).'/include/config.inc.php');
//$cid = empty($cid) ? 27 : intval($cid); //默认 显示内资公司注册
//$id = empty($id) ? 1 : intval($id);
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

    <!-- 三级页面的样式 -->
    <link href="templates/default/style/productshow.css" type="text/css" rel="stylesheet" />
    <link href="templates/default/style/prenext.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
    <!-- 大话主席 -->
    <script type="text/javascript" src="templates/default/js/jquery.SuperSlide.2.1.1.js"></script>

    <!-- 图片弹窗 --> <!-- 图片弹窗插件 -->
    <script type="text/javascript" src="templates/default/js/jquery.colorbox-min.js"></script>
    <link rel="stylesheet" href="templates/default/style/colorbox.css" type="text/css" media="screen" />
    <script type="text/javascript">
        $(document).ready(function(){
             $("a[rel='example4']").colorbox({slideshow:true,maxWidth:800,maxHeight:800});
        });
    </script>

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
            <?php

            //检测文档正确性
            $r = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE id=$id");
            if(@$r) {
                //增加一次点击量
                $dosql->ExecNoneQuery("UPDATE `#@__infoimg` SET hits=hits+1 WHERE id=$id");
                $row = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE id=$id");

                ?>
                <h1 class="third_title"><?php echo $row['title']; ?></h1>
                <div class="third_info">
                    <small>更新时间：<?php echo GetDateTime($row['posttime']); ?></small>
                    <small>点击次数：<?php echo $row['hits']; ?></small>
                </div>

                <!-- 图片详情页  三级页面 -->
                <div class="showimg">
                    <a href="<?php echo $row['picurl']; ?>" class="lightbox" rel="example4">
                        <img src="<?php echo $row['picurl']; ?>" alt=""/>
                    </a>
                </div>
                <?php
            }
            ?>

            <div class="contentTile">相关介绍</div>
            <div class="text">
                <?php
                if($row['content'] != '')
                    echo $row['content'];
                else
                    echo '网站资料更新中...';
                ?>
            </div>

            <!-- 相关文章开始 -->
            <div class="preNext">
                <div class="line"><strong></strong></div>
                <ul class="text">
                    <?php

                    //获取上一篇信息
                    $r = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE classid=".$row['classid']." AND orderid<".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
                    if($r < 1)
                    {
                        echo '<li>上一篇：已经没有了</li>';
                    }
                    else
                    {
                        if($cfg_isreurl != 'Y')
                            $gourl = 'productshow.php?cid='.$r['classid'].'&id='.$r['id'];
                        else
                            $gourl = 'productshow-'.$r['classid'].'-'.$r['id'].'-1.html';

                        echo '<li>上一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
                    }

                    //获取下一篇信息
                    $r = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE classid=".$row['classid']." AND orderid>".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid ASC");
                    if($r < 1)
                    {
                        echo '<li>下一篇：已经没有了</li>';
                    }
                    else
                    {
                        if($cfg_isreurl != 'Y')
                            $gourl = 'productshow.php?cid='.$r['classid'].'&id='.$r['id'];
                        else
                            $gourl = 'productshow-'.$r['classid'].'-'.$r['id'].'-1.html';

                        echo '<li>下一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
                    }
                    ?>
                </ul>
                <ul class="actBox">
                    <li id="act-pus"><a href="javascript:;" onclick="<?php $c_uname = isset($_COOKIE['username']) ? AuthCode($_COOKIE['username']) : '';if($c_uname != ''){echo 'AddUserFavorite()';}else{echo 'AddFavorite();';} ?>">收藏</a></li>
                    <li id="act-pnt"><a href="javascript:;" onclick="window.print();">打印</a></li>
                </ul>
                <input type="hidden" name="aid" id="aid" value="<?php echo $id; ?>" />
                <input type="hidden" name="molds" id="molds" value="2" />
            </div>
            <!-- 相关文章结束 -->


        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>
</body>
</html>
