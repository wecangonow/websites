<?php
ob_start();
header("Content-Type: text/html;charset=utf-8");
require('includes/admin_config.php');
if(isset($_REQUEST["action"]))
{
    if($_REQUEST["action"]=="login")
    {
        $loginname=$_REQUEST["loginname"];
        $password=$_REQUEST["password"];
        $yzm=$_REQUEST["yzm"];
        if ($_SESSION['VCODE'] != $yzm)
        {
            echo "<script>alert('验证码错误');history.go(-1);</script>";
            exit;
        }
        $sql="select * from admin where loginname='".$loginname."' and password='".md5($password)."'";
        $row = $mysql->get_one($sql);
        if($row)
        {
            $_SESSION["admin"]["login_id"]=$row['id'];
            $_SESSION["admin"]["login_name"]=$row['loginname'];
            $_SESSION["admin"]["group_id"]=$row['group_id'];
            //header("Location:index.php");
            echo "<script>location.href='index.php';</script>";
        }
        else
        {
            echo "<script>alert('用户名或密码错误');history.go(-1);</script>";
            exit;
        }
    }

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台管理登录界面</title>
<link href="styles/alogin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery.js" type="text/javascript"></script>
<script>
function check_login()
{
	if ($("#loginname").val()==""||$("#loginname").val()=="请输入用户名")
	{
		alert("请输入用户名");
		$("#loginname").focus();
		return false;
	}
	if ($("#password").val()==""||$("#password").val()=="请输入密码")
	{
		alert("请输入密码");
		$("#password").focus();
		return false;
	}
	if ($("#yzm").val()==""||$("#yzm").val()=="请输入验证码")
	{
		alert("请输入验证码");
		$("#yzm").focus();
		return false;
	}
	return true;
}
</script>
</head>
<body>
    <form id="theForm" name="theForm" action="login.php?action=login" method="post" onsubmit="return check_login()">
    <div class="Main">
        <ul>
            <li class="top"></li>
            <li class="top2"></li>
            <li class="topA"></li>
            <li class="topB"><span>
                <img src="images/login/logo.gif" alt="" style="" />
            </span></li>
            <li class="topC"></li>
            <li class="topD">
                <ul class="login">
                    <li><span class="left">用户名：</span> <span style="left">
                        <input id="loginname" name="loginname" type="text" class="txt" placeholder="请输入用户名" />  
                     
                    </span></li>
                    <li><span class="left">密 码：</span> <span style="left">
                       <input id="password" name="password" type="password" class="txt" placeholder="请输入密码" />  
                    </span>
                  </li>
                  <li><span class="left">验证码：</span> <span style="left">
                    <input id="yzm" name="yzm" type="text" class="txtCode" placeholder="请输入验证码" />  
                    </span>
                  </li>
                  <li><span class="left"></span> <span style="left">
                    <img src="../includes/yanzhengma.class.php" width="80" height="25" onClick="this.src=this.src+'?'+Math.random();" style="cursor:pointer;" />
                    </span>
                  </li>
                </ul>
            </li>
            <li class="topE"></li>
            <li class="middle_A"></li>
            <li class="middle_B"></li>
            <li class="middle_C">
            <span class="btn">
                <input type="submit" name="submit" value="" style="background:url(images/login/btnlogin.gif) no-repeat; cursor:pointer; border:0; width:104px; height:35px;" />
            </span>
            </li>
            <li class="middle_D"></li>
            <li class="bottom_A"></li>
            <li class="bottom_B">
            博乐虎
            </li>
        </ul>
    </div>
    </form>
</body>
</html>
