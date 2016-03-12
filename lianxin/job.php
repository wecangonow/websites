<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=7;
//$sql="select * from pic where id=8";
//$banner_view = $mysql->get_one($sql);
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

<!--本页样式-->
<style type="text/css">
.title,.ti_bg,.ti_jie{ height:132px; }
</style>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
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
            <div class="qing ti_bt">招贤纳士<span class="qing">Job</span></div>
            <div class="qing t1"></div>
            <div class="qing t2"></div>
        </div>
    </div>
</div>
<!--内容-->

<div class="qing job_j"><img src="images/job_j.png" width="33" height="12" /></div>
<div class="qing center job">
	<ul class="qing">
<?php
$sql="select * from news where cat_id=9 order by sort_order asc,id asc";
$row = $mysql->get_all($sql);
$i=1;
foreach($row as $list)
{
?>
    	<li class="lf">
        	<div class="qing job_jie">
            	<div class="qing">
                	<div class="lf job_bt"><?php echo $list['title'];?><span class="qing">发布时间：<?php echo $list['add_time'];?></span></div>
                    <a href="job_view.php?id=<?php echo $list['id'];?>" class="rf job_more">在线申请</a>
                </div>
                <div class="qing job_ti">岗位要求：</div>
                <div class="qing job_jian">
                	<div class="ab_jian" id="sucai1">
					<?php echo $list['note'];?>
					</div>
                </div>
                <div class="qing job_ti">任职条件：</div>
                <div class="qing job_jian">
                	<div class="ab_jian" id="sucai2">
					<?php echo $list['content'];?>
					</div>
                </div>
            </div>
            <div class="qing jobt1"></div>
            <div class="qing jobt2"></div>
            <div class="qing jobt3"></div>
            <div class="qing jobt4"></div>
        </li>
<?php
}
?>
    </ul>
</div>
<?php
require('foot.php');
?>

<!--滚动条开始-->
<script type="text/javascript" src="js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="js/tiao.js"></script>
<!--滚动条结束-->
</body>
</html>
