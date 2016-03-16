<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=3;
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
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script src="js/jquery.js" type="text/javascript"></script><!--导航-->
<script src="js/main.js" type="text/javascript"></script><!--导航-->
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
</head>
<body>
<?php
require('head.php');
$id = empty($_GET["id"]) ? $hegui_categories[0]['cat_id'] : $_GET['id'];

$sql = "SELECT * FROM news where 1=1 and cat_id=$id";
$sql = $sql." order by sort_order asc,id desc limit 1";
$content = $mysql->get_one($sql);
$sql = "SELECT * FROM news_category where 1=1 and cat_id=$id";
$cat_info = $mysql->get_one($sql);
?>
<div class="qing mtop">
	<div class="qing title">
    	<div class="qing ti_bg"></div>
        <div class="qing ti_jie">
            <div class="qing ti_bt">合规管理<span class="qing">Compliance management</span></div>
            <div class="qing t1"></div>
            <div class="qing t2"></div>
            <div class="qing ti_nav">
            	<table class="tn_jie" border="0" cellspacing="0" cellpadding="0">
                  	<tr>
                    	<td align="center" valign="top">
                            <?php foreach ($hegui_categories as $category) {

                             ?>

                            <a href="management.php?id=<?php echo $category['cat_id'];?>" class="lf <?php if($id == $category['cat_id']){?>tinn<?php } ?>">
                            	<div class="qing tn1"><?php echo $category['cat_name'];?></div>
                                <div class="qing tn2"><img src="images/t1.png" width="21" height="21" /></div>
                                <div class="qing tn3"><img src="images/t2.png" width="71" height="25" /></div>
                                <div class="qing tn4"></div>
                            </a>
                            <?php } ?>
                        </td>
                  	</tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!--内容-->
<div class="qing center" style="padding-top:43px; padding-bottom:60px;">
	<div class="qing guan">
    	<div class="qing g_jie">
        	<div class="qing g_bt">
                <?php echo $cat_info["cat_name"];?>
                <span class="qing">
                <?php echo $cat_info["english_name"];?>
                </span>
            </div>
            <div class="qing ab_jian g_shao">
                <?php echo $content["note"];?>
            </div>
            <div class="qing g_jian"> <?php echo $content["content"];?> </div>
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
