<?php	if(!defined('IN_MOBILE')) exit('Request Error!');
//留言内容处理
if(isset($action) and $action=='add')
{
    if(empty($nickname) or
        empty($content) or
        empty($validate))
    {
        header('location:?m=message');
        exit();
    }


    //检测数据正确性
    if(strtolower($validate) != strtolower(GetCkVdValue()))
    {
        ResetVdValue();
        ShowMsg('验证码不正确！','?m=message');
        exit();
    }
    else
    {
        $r = $dosql->GetOne("SELECT Max(orderid) AS orderid FROM `#@__message`");
        $orderid  = (empty($r['orderid']) ? 1 : ($r['orderid'] + 1));
        $nickname = htmlspecialchars($nickname);
        $contact  = htmlspecialchars($contact);
        $content  = htmlspecialchars($content);
        $posttime = GetMkTime(time());
        $ip       = gethostbyname($_SERVER['REMOTE_ADDR']);


        $sql = "INSERT INTO `#@__message` (siteid, nickname, contact, content, orderid, posttime, htop, rtop, checkinfo, ip) VALUES (1, '$nickname', '$contact', '$content', '$orderid', '$posttime', '', '', 'false', '$ip')";
        if($dosql->ExecNoneQuery($sql))
        {
            ShowMsg('留言成功，感谢您的支持！','?m=message');
            exit();
        }
    }
}

//验证码获取函数
function GetCkVdValue()
{
    if(!isset($_SESSION)) session_start();
    return isset($_SESSION['ckstr']) ? $_SESSION['ckstr'] : '';
}


//验证码重置函数
function ResetVdValue()
{
    if(!isset($_SESSION)) session_start();
    $_SESSION['ckstr'] = '';
}
?>

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

        <!-- 二级页样式 -->


        <!-- 三级页样式 -->
        <link href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/show.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo $cfg_webpath;?>/templates/default/style/mobile/page.css" type="text/css" rel="stylesheet" />
    </head>
<body>
<?php require_once(dirname(__FILE__).'/nav.php'); ?>

<div class="header">
    <span>LOGO</span>
</div>

<?php require_once(dirname(__FILE__).'/banner.php'); ?>

<div class="mobile_main" style="float: none">
    <div class="main_title">
        <span>联系我们</span>
    </div>
    <div class="main" style="padding: 1em;">

        <form name="form" id="form" method="post" action="">
            <span class="msgtitle">姓　　名：</span><input name="nickname" type="text" id="nickname" class="msg_input" /><div class="hr_10"></div><div class="hr_10"></div>
            <span class="msgtitle">电　　话：</span><input name="contact" type="text" id="contact" class="msg_input" /><div class="hr_10"></div><div class="hr_10"></div>
            <span class="msgtitle">内　　容：</span><textarea name="content" class="msg_input" style="width:100%;height:100px;overflow:auto;" id="content" ></textarea><div class="hr_10"></div><div class="hr_10"></div>
            <span class="msgtitle">验证码：</span><input name="validate" type="text" id="validate" class="msg_input" style="width:120px;margin-right:5px;" /> <span><img id="ckstr" src="data/captcha/ckstr.php" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /> <a href="javascript:;" onClick="var v=document.getElementById('ckstr');v.src=v.src+'?';return false;">看不清?</a></span><br /><div class="hr_10"></div><div class="hr_10"></div>
            <div class="msg_btn_area"> <a href="javascript:void(0);" onclick="cfm_msg();return false;">提　交</a></div>
            <input type="hidden" name="action" id="action" value="add" />

        </form>
    </div>
</div>
<!-- /mainbody-->

<?php require_once(dirname(__FILE__).'/footer_menu.php'); ?>

</body>
    <script type="text/javascript">
        function cfm_msg()
        {
            if($("#nickname").val() == "")
            {
                alert("请填写姓名！");
                $("#contact").focus();
                return false;
            }
            if($("#contact").val() == "")
            {
                alert("请填写电话！");
                $("#contact").focus();
                return false;
            }
            if($("#content").val() == "")
            {
                alert("请填写留言内容！");
                $("#content").focus();
                return false;
            }
            if($("#validate").val() == "")
            {
                alert("请填写验证码！");
                $("#validate").focus();
                return false;
            }
            $("#form").submit();
        }

        $(function(){
            $("#contact").focus(function(){
                $("#contact").attr("class", "msg_input_on");
            }).blur(function(){
                $("#contact").attr("class", "msg_input");
            });

            $("#content").focus(function(){
                $("#content").attr("class", "msg_input_on");
            }).blur(function(){
                $("#content").attr("class", "msg_input");
            });

            $("#validate").focus(function(){
                $("#validate").attr("class", "msg_input_on");
            }).blur(function(){
                $("#validate").attr("class", "msg_input");
            });

            $("#contact").focus();
        });
    </script>
</html>

