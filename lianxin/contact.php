<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=6;

$sql     = "select * from news where cat_id=10 order by sort_order asc,id asc";
$contact = $mysql->get_one($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1280px" />
<title><?php echo $sys_config["sys_title"]?></title>
<meta name="Keywords" content="<?php echo $sys_config['sys_keywords']?>" />
<meta name="Description" content="<?php echo $sys_config["sys_description"]?>" />
<link href="css/style.css" type="text/css" rel="stylesheet" />

<!--导航开始-->
<script src="js/jquery.js" type="text/javascript"></script>
<!--下拉-->
<script src="js/main.js" type="text/javascript"></script>
<!--导航结束-->
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

<!--本页样式-->
<style type="text/css">
.title,.ti_bg,.ti_jie{ height:132px; }
.contact{ height:802px; position:relative; z-index:10; margin-top:-12px; background:url(<?php echo $contact["picture"];?>) center top no-repeat; }
</style>

</head>
<body>
<?php
require('head.php');
?>
<!--标题-->
<div class="qing mtop">
	<div class="qing title">
    	<div class="qing ti_bg"></div>
        <div class="qing ti_jie">
            <div class="qing ti_bt">联系我们<span class="qing">Contact us</span></div>
            <div class="qing t1"></div>
            <div class="qing t2"></div>
        </div>
    </div>
</div>
<!--内容-->
<div class="qing job_j"><img src="images/job_j.png" width="33" height="12" /></div>
<div class="qing contact">
	<div class="qing con_jie">
    	<div class="rf con_shao">
        	<div class="qing conb">
                <div class="qing con_bt"><?php echo $contact['title'];?></div>
                <div class="qing conk"></div>
                <div class="qing con_jian">
                	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                      	<tr>
                        	<td width="45" align="left" valign="top">地址：</td>
                            <td align="left" valign="top"><?php echo $contact['address'];?></td>
                      	</tr>
                        <tr>
                        	<td align="left" valign="top">邮编：</td>
                            <td align="left" valign="top"><?php echo $contact['postal'];?></td>
                      	</tr>
                        <tr>
                        	<td align="left" valign="top">电话：</td>
                            <td align="left" valign="top"><?php echo $contact['tel'];?></td>
                      	</tr>
                        <tr>
                        	<td align="left" valign="top">邮件：</td>
                            <td align="left" valign="top"><?php echo $contact['email'];?></td>
                      	</tr>
                    </table>
                </div>
            </div>
            <div class="qing con1"></div>
            <div class="qing con2"></div>
            <div class="qing con3"></div>
            <div class="qing con4"></div>
        </div>
    </div>
    <div class="qing con_add">
    	<div class="lf con_di">
        	<div class="qing con_dz">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  	<tr>
                    	<td align="left" valign="middle"><?php echo $contact['address'];?></td>
                  	</tr>
                </table>
			</div>
        </div>
    </div>
</div>
<?php
require('foot.php');
?>
</body>
</html>
