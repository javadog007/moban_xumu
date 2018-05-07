<div class="banner">
    <div class="hd">
        <ul class="clear">
            <?php
            $dosql->Execute("SELECT * FROM `#@__admanage` WHERE classid=1 AND checkinfo=true ORDER BY orderid DESC LIMIT 0,5");
            while($row = $dosql->GetArray())
            {
                ?>
                <li></li>
                <?php
            }
            ?>
        </ul>
    </div>
    <div class="bd">
        <ul>
            <?php
            $dosql->Execute("SELECT * FROM `#@__admanage` WHERE classid=1 AND checkinfo=true ORDER BY orderid DESC LIMIT 0,5");
            while($row = $dosql->GetArray())
            {
                if($row['linkurl'] != '')$gourl = $row['linkurl'];
                else $gourl = 'javascript:;';
                ?>
                <li>
                    <a href="<?php echo $gourl; ?>">
                        <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>"/>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div><!-- banner end -->
<script type="text/javascript">
    jQuery(".banner").slide({mainCell:".bd ul",effect:"left",autoPlay:true});
</script>