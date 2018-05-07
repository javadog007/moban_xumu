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

    <!-- 新闻列表 -->
    <link href="templates/default/style/newsshow.css" type="text/css" rel="stylesheet" />
    <link href="templates/default/style/prenext.css" type="text/css" rel="stylesheet"/>
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
        <!-- 新闻详情页(三级页面)  不同的地方 -->
        <div class="content">
            <?php
            $row = $dosql -> GetOne("SELECT * FROM `pmw_infolist` WHERE id = $id AND checkinfo=true");
            if(is_array($row)){
                //增加一次点击量
                $dosql->ExecNoneQuery("UPDATE `#@__infolist` SET hits=hits+1 WHERE id=$id");
            }
            ?>
            <h1 class="third_title"><?php echo $row['title']?></h1>
            <div class="third_info">
                <small>更新时间：<?php echo $row['posttime']?></small>
                <small>点击次数：<?php echo $row['hits']?></small>
            </div>

            <?php
            //判断是否显示描述
            if(!empty($row['description'])) echo '<div class="desc">'.$row['description'].'</div>';
            ?>

            <!-- 内容区域开始 -->
            <div id="textarea">
                <?php
                if($row['content'] != '')
                    echo $row['content'];
                else
                    echo '网站资料更新中...';
                ?>
            </div>
            <div class="author"><?php echo $row['source']; ?> (编辑：<?php echo $row['author']; ?>)</div>
            <!-- 内容区域结束 -->



            <!-- 上一页 下一页 -->
            <div class="preNext">
                <div class="line">
                    <strong></strong>
                </div>

                <ul class="text">
                    <?php
                    //获取上一篇信息
                    $r = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=".$row['classid']." AND orderid<".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
                    if($r < 1)
                    {
                        echo '<li>上一篇：已经没有了</li>';
                    }
                    else
                    {
                        if($cfg_isreurl != 'Y')
                            $gourl = 'newsshow.php?cid='.$r['classid'].'&id='.$r['id'];
                        else
                            $gourl = 'newsshow-'.$r['classid'].'-'.$r['id'].'-1.html';

                        echo '<li>上一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
                    }

                    //获取下一篇信息
                    $r = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=".$row['classid']." AND orderid>".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid ASC");
                    if($r < 1)
                    {
                        echo '<li>下一篇：已经没有了</li>';
                    }
                    else
                    {
                        if($cfg_isreurl != 'Y')
                            $gourl = 'newsshow.php?cid='.$r['classid'].'&id='.$r['id'];
                        else
                            $gourl = 'newsshow-'.$r['classid'].'-'.$r['id'].'-1.html';

                        echo '<li>下一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
                    }
                    ?>

                </ul>
                <ul class="actBox">
                    <li id="act-pus">
                        <a href="#" onclick="AddFavorite();">收藏</a>
                    </li>
                    <li id="act-pnt">
                        <a href="#" onclick="window.print();;">打印</a>
                    </li>
                </ul>

                <input type="hidden" name="aid" id="aid" value="75"/>
                <input type="hidden" name="molds" id="molds" value="1"/>
            </div>



        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>
</body>
</html>
