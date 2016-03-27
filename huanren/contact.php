<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=9;
$id=$_REQUEST['id'];
if($_REQUEST["action"]=="add")
{
    $name = !empty($_POST['name']) ? $_POST['name'] : '';
    $company_name = !empty($_POST['company_name']) ? $_POST['company_name'] : '';
    $phone = !empty($_POST['phone']) ? $_POST['phone'] : '';
    $email = !empty($_POST['email']) ? $_POST['email'] : '';
    $beizhu = !empty($_POST['beizhu']) ? $_POST['beizhu'] : '';
    $add_time =  date('Y-m-d H:i:s',time());
    $dataArray = array(
        "name"=>$name,
        "company_name"=>$company_name,
        "phone"=>$phone,
        "email"=>$email,
        "beizhu"=>$beizhu,
        "add_time"=>$add_time);
    $mysql->insert("contact_list",$dataArray);
    echo '<script>alert("信息发送成功");location.href="contact.php";</script>';
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=1280px" />
    <title><?php echo $sys_config["sys_title"]?></title>
    <meta name="Keywords" content="<?php echo $sys_config['sys_keywords']?>" />
    <meta name="Description" content="<?php echo $sys_config["sys_description"]?>" />
<!--通用样式-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script src="js/main.js" type="text/javascript"></script><!--相关链接 下拉-->

</head>
<body>
<!-- 头部 -->
<?php require("head.php");?>
<!--背景-->
<div class="qing bg"><img src="images/bg_contact.jpg" width="100%" /></div>
<!-- 内容区 -->
<div class="qing center" style="padding:49px 0;">
	<div class="qing contact">
    	<div class="qing con_bt"><span class="qing">CONTACT US</span>联系我们</div>
        <div class="qing con_jie">
            <form id="myForm" action="contact.php?action=add" method="post" >
        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
              	<tr>
                	<td width="90" align="right" valign="top">姓名：</td>
                    <td width="372" align="left" valign="top"><input type="text" name="name" id="name" class="kuang" /></td>
                    <td width="90" align="right" valign="top">公司名称：</td>
                    <td align="left" valign="top"><input type="text" class="kuang" name="company_name" /></td>
              	</tr>
                <tr>
                	<td width="90" align="right" valign="top">电话：</td>
                    <td width="372" align="left" valign="top"><input type="text" class="kuang" name="phone" id="phone" /></td>
                    <td width="90" align="right" valign="top">Email：</td>
                    <td align="left" valign="top"><input type="text" class="kuang" name="email" /></td>
              	</tr>
                <tr>
                	<td width="90" align="right" valign="top">留言：</td>
                    <td colspan="3" align="left" valign="top"><textarea class="liuyan" name="beizhu"></textarea></td>
              	</tr>
                <tr><td colspan="4" align="center" valign="top" style="padding-top:12px;">
                        <input type="submit" id="btnSave" class="submit" value="提交" /></td></tr>
            </table>
            </form>
        </div>
        <div class="qing con_jian">电话：
            <?php echo $sys_config['sys_tel'];?>
            <br />
            邮编：
            100088
            <br />
            邮箱：
            <?php echo $sys_config['sys_email'];?>
            <br />
            地址：
            <?php echo $sys_config['sys_address'];?>
        </div>
    </div>
</div>
<!-- 底部 -->
<?php
require('foot.php');
?>
</body>
</html>
<script>
    $(function () {

        $("#btnSave").click(function(){
            var name = $("#name").val();
            var phone = $("#phone").val();

            if($.trim(name).length <= 0){
                alert("请填写名字");
                return false;
            }

            if($.trim(phone).length <= 0){
                alert("请填写电话");
                return false;
            }

            if($("#myform").Valid() == false || !$("#myform").Valid()) {

                return false ;
            }

        });
    });
</script>
