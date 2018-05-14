<!-- banner -->
<div id="slideBox" class="slideBox">
    <div class="bd">
        <ul>
            <?php
            $dosql->Execute("SELECT * FROM `#@__admanage` WHERE classid=2 AND checkinfo=true ORDER BY orderid DESC LIMIT 0,5");
            while($row = $dosql->GetArray())
            {
                if($row['linkurl'] != '')$gourl = $row['linkurl'];
                else $gourl = 'javascript:;';
                ?>
                <li>
                    <a href="<?php echo $gourl; ?>">
                        <img src="<?php echo $cfg_webpath;?>/<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" style="width: 100%">
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
    <div class="hd">
        <ul></ul>
    </div>
</div>
<script type="text/javascript">
    TouchSlide({
        slideCell:"#slideBox",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd ul",
//        effect:"leftLoop",
        autoPage:true,//自动分页
        autoPlay:true //自动播放
    });
</script>