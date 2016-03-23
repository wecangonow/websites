<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=9;
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
        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
              	<tr>
                	<td width="90" align="right" valign="top">姓名：</td>
                    <td width="372" align="left" valign="top"><input type="text" class="kuang" /></td>
                    <td width="90" align="right" valign="top">公司名称：</td>
                    <td align="left" valign="top"><input type="text" class="kuang" /></td>
              	</tr>
                <tr>
                	<td width="90" align="right" valign="top">电话：</td>
                    <td width="372" align="left" valign="top"><input type="text" class="kuang" /></td>
                    <td width="90" align="right" valign="top">Email：</td>
                    <td align="left" valign="top"><input type="text" class="kuang" /></td>
              	</tr>
                <tr>
                	<td width="90" align="right" valign="top">留言：</td>
                    <td colspan="3" align="left" valign="top"><textarea class="liuyan"></textarea></td>
              	</tr>
                <tr><td colspan="4" align="center" valign="top" style="padding-top:12px;"><input type="submit" class="submit" value="提交" /></td></tr>
            </table>
        </div>
        <div class="qing con_jian">电话：010-52907809<br />邮编：100088<br />邮箱：info@wcvma.com<br />地址：北京市海淀区亮甲店130号</div>
    </div>
</div>
<!-- 底部 -->
<?php
require('foot.php');
?>
</body>
</html>
