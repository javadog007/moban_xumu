<script type="text/javascript">
$(function(){
    $("#<?php echo $cid;?>").addClass("on");
});
</script>

<?php
    if(GetParentId($cid) == 1){
?>
<div class="info_left">
    <div class="left_title">
        <span><?php echo GetParentClassName(1);?></span>
    </div>
    <div class="left_list">
        <ul>
            <?php
            $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=1 AND checkinfo=true ORDER BY orderid ASC");
            while($row = $dosql->GetArray())
            {
                ?>
                <?php
                if($row['infotype'] == '0')
                {
                    ?>
                    <li><a href="info.php?cid=<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                    <?php
                }elseif($row['infotype'] == '1'){
                    ?>
                    <li><a href="news.php?cid=<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                    <?php
                }elseif($row['infotype'] == '2'){
                    ?>
                    <li><a href="product.php?cid=<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                    <?php
                }
                ?>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
    <?php
}elseif(GetParentId($cid) == 4) {
    ?>
    <div class="info_left">
        <div class="left_title">
            <span><?php echo GetParentClassName(4);?></span>
        </div>
        <div class="left_list">
            <ul>
                <?php
                $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=4 AND checkinfo=true ORDER BY orderid ASC");
                while ($row = $dosql->GetArray()) {
                    ?>
                    <?php
                    if ($row['infotype'] == '0') {
                        ?>
                        <li><a href="info.php?cid=<?php echo $row['id']; ?>"
                               id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                        <?php
                    } elseif ($row['infotype'] == '1') {
                        ?>
                        <li><a href="news.php?cid=<?php echo $row['id']; ?>"
                               id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                        <?php
                    } elseif ($row['infotype'] == '2') {
                        ?>
                        <li><a href="product.php?cid=<?php echo $row['id']; ?>"
                               id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                        <?php
                    }
                    ?>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>

    <?php
}elseif(GetParentId($cid) == 7) {
        ?>
        <div class="info_left">
            <div class="left_title">
                <span><?php echo GetParentClassName(7);?></span>
            </div>
            <div class="left_list">
                <ul>
                    <?php
                    $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=7 AND checkinfo=true ORDER BY orderid ASC");
                    while ($row = $dosql->GetArray()) {
                        ?>
                        <?php
                        if ($row['infotype'] == '0') {
                            ?>
                            <li><a href="info.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '1') {
                            ?>
                            <li><a href="news.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '2') {
                            ?>
                            <li><a href="product.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <?php
    }elseif(GetParentId($cid) == 10) {
        ?>
        <div class="info_left">
            <div class="left_title">
                <span><?php echo GetParentClassName(10);?></span>
            </div>
            <div class="left_list">
                <ul>
                    <?php
                    $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=23 AND checkinfo=true ORDER BY orderid ASC");
                    while ($row = $dosql->GetArray()) {
                        ?>
                        <?php
                        if ($row['infotype'] == '0') {
                            ?>
                            <li><a href="info.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '1') {
                            ?>
                            <li><a href="news.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '2') {
                            ?>
                            <li><a href="product.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <?php
    }elseif(GetParentId($cid) == 11) {
        ?>
        <div class="info_left">
            <div class="left_title">
                <span><?php echo GetParentClassName(11);?></span>
            </div>
            <div class="left_list">
                <ul>
                    <?php
                    $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=11 AND checkinfo=true ORDER BY orderid ASC");
                    while ($row = $dosql->GetArray()) {
                        ?>
                        <?php
                        if ($row['infotype'] == '0') {
                            ?>
                            <li><a href="info.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '1') {
                            ?>
                            <li><a href="news.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '2') {
                            ?>
                            <li><a href="product.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <?php
    }elseif(GetParentId($cid) == 30) {
        ?>
        <div class="info_left">
            <div class="left_title">
                <span><?php echo GetParentClassName(30);?></span>
            </div>
            <div class="left_list">
                <ul>
                    <?php
                    $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=30 AND checkinfo=true ORDER BY orderid ASC");
                    while ($row = $dosql->GetArray()) {
                        ?>
                        <?php
                        if ($row['infotype'] == '0') {
                            ?>
                            <li><a href="info.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '1') {
                            ?>
                            <li><a href="news.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '2') {
                            ?>
                            <li><a href="product.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <?php
    }elseif(GetParentId($cid) == 26) {
        ?>
        <div class="info_left">
            <div class="left_title">
                <span><?php echo GetParentClassName(26);?></span>
            </div>
            <div class="left_list">
                <ul>
                    <?php
                    $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=26 AND checkinfo=true ORDER BY orderid ASC");
                    while ($row = $dosql->GetArray()) {
                        ?>
                        <?php
                        if ($row['infotype'] == '0') {
                            ?>
                            <li><a href="info.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '1') {
                            ?>
                            <li><a href="news.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '2') {
                            ?>
                            <li><a href="product.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <?php
    }elseif(GetParentId($cid) == 32) {
        ?>
        <div class="info_left">
            <div class="left_title">
                <span><?php echo GetParentClassName(32);?></span>
            </div>
            <div class="left_list">
                <ul>
                    <?php
                    $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=32 AND checkinfo=true ORDER BY orderid ASC");
                    while ($row = $dosql->GetArray()) {
                        ?>
                        <?php
                        if ($row['infotype'] == '0') {
                            ?>
                            <li><a href="info.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '1') {
                            ?>
                            <li><a href="news.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '2') {
                            ?>
                            <li><a href="product.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <?php
    }elseif(GetParentId($cid) == 34) {
        ?>
        <div class="info_left">
            <div class="left_title">
                <span><?php echo GetParentClassName(34);?></span>
            </div>
            <div class="left_list">
                <ul>
                    <?php
                    $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=34 AND checkinfo=true ORDER BY orderid ASC");
                    while ($row = $dosql->GetArray()) {
                        ?>
                        <?php
                        if ($row['infotype'] == '0') {
                            ?>
                            <li><a href="info.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '1') {
                            ?>
                            <li><a href="news.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '2') {
                            ?>
                            <li><a href="product.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <?php
    }elseif(GetParentId($cid) == 35) {
        ?>
        <div class="info_left">
            <div class="left_title">
                <span><?php echo GetParentClassName(35);?></span>
            </div>
            <div class="left_list">
                <ul>
                    <?php
                    $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=35 AND checkinfo=true ORDER BY orderid ASC");
                    while ($row = $dosql->GetArray()) {
                        ?>
                        <?php
                        if ($row['infotype'] == '0') {
                            ?>
                            <li><a href="info.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '1') {
                            ?>
                            <li><a href="news.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '2') {
                            ?>
                            <li><a href="product.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <?php
    }elseif(GetParentId($cid) == 33) {
        ?>
        <div class="info_left">
            <div class="left_title">
                <span><?php echo GetParentClassName(33);?></span>
            </div>
            <div class="left_list">
                <ul>
                    <?php
                    $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=33 AND checkinfo=true ORDER BY orderid ASC");
                    while ($row = $dosql->GetArray()) {
                        ?>
                        <?php
                        if ($row['infotype'] == '0') {
                            ?>
                            <li><a href="info.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '1') {
                            ?>
                            <li><a href="news.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        } elseif ($row['infotype'] == '2') {
                            ?>
                            <li><a href="product.php?cid=<?php echo $row['id']; ?>"
                                   id="<?php echo $row['id']; ?>"><?php echo $row['classname']; ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <?php
    }
?>