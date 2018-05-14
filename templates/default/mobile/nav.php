<!-- 导航菜单 -->
<div id="dl-menu" class="dl-menuwrapper">
    <button id="dl-menu-button">Open Menu</button>
    <ul class="dl-menu">
        <li><a href="4g.php">网站首页</a></li>
        <?php
        $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=0 AND checkinfo=true ORDER BY orderid ASC");
        while($row = $dosql->GetArray())
        {

            $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=$row[id] AND checkinfo=true ORDER BY orderid ASC",$row['id']);
            $classname = $dosql->GetArray($row['id']);
            ?>
            <li>
                <?php
                if(!$classname){
                    ?>
                    <?php
                    if($row['infotype'] == '0'){
                        ?>
                        <a href="?m=info&cid=<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a>
                        <?php
                    }
                    ?>
                    <?php
                    if($row['infotype'] == '1'){
                        ?>
                        <a href="?m=list&cid=<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a>
                        <?php
                    }
                    ?>
                    <?php
                    if($row['infotype'] == '2'){
                        ?>
                        <a href="?m=img&cid=<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a>
                        <?php
                    }
                    ?>
                    <?php
                    if($row['infotype'] == '4'){
                        ?>
                        <a href="?m=mess"><?php echo $row['classname']; ?></a>
                        <?php
                    }
                    ?>
                    <?php
                }else{
                    ?>
                    <a href="Line"><?php echo $row['classname']; ?></a>
                    <?php
                }
                ?>
                <?php
                if(!$classname) continue;
                ?>
                <ul class="dl-submenu">
                    <li class="dl-back"><a href="#">返回上一级</a></li>
                    <?php $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=$row[id] AND checkinfo=true ORDER BY orderid ASC",$row['id']);

                    while($classname = $dosql->GetArray($row['id']))
                    {

                        ?>
                        <?php
                        if($classname['infotype'] == '0'){
                            ?>
                            <li><a href="?m=info&cid=<?php echo $classname['id']; ?>"><?php echo $classname['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if($classname['infotype'] == '1'){
                            ?>
                            <li><a href="?m=list&cid=<?php echo $classname['id']; ?>"><?php echo $classname['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if($classname['infotype'] == '2'){
                            ?>
                            <li><a href="?m=img&cid=<?php echo $classname['id']; ?>"><?php echo $classname['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </ul>
                <?php

                ?>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
</div>
<script type="text/javascript">
    $(function(){
        $( '#dl-menu' ).dlmenu();
    });
</script>