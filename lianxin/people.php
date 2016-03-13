<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=1;
$sql="select * from news where id=".$_REQUEST['id'];
$info = $mysql->get_one($sql);

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
            <div class="qing ti_bt">专家介绍<span class="qing">Expert Introduction</span></div>
            <div class="qing t1"></div>
            <div class="qing t2"></div>
        </div>
    </div>
</div>
<!--内容-->
<div class="qing center" style="padding-top:43px; padding-bottom:60px;">
	<div class="qing guan">
    	<div class="qing g_jie">
        	<div class="qing g_bt"><?php echo $info["title"];?><span class="qing">Expert Name</span></div>
            <div class="qing ab_jian g_shao">
                <?php echo $info["note"];?>
            </div>
            <div class="qing g_jian">
                <?php echo $info["content"];?>
            </div>
        </div>
        <div class="qing g1"></div>
        <div class="qing g2"></div>
        <div class="qing g3"></div>
        <div class="qing g4"></div>
    </div>
</div>
<?php
require('foot.php');
?>
</body>
</html>
