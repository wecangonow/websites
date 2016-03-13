<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=2;

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
<script src="js/jquery.js" type="text/javascript"></script><!--导航-->
<script src="js/main.js" type="text/javascript"></script><!--导航-->
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
</head>
<body>
<?php
require('head.php');
$id = empty($_GET["id"]) ? $chanpin_categories[0]['cat_id'] : $_GET['id'];

$sql = "SELECT * FROM news where 1=1 and is_show=1 and cat_id=$id";
$sql = $sql." order by sort_order asc,id desc limit 4 ";
$content = $mysql->get_one($sql);
?>
<!--标题-->
<div class="qing mtop">
	<div class="qing title">
    	<div class="qing ti_bg"></div>
        <div class="qing ti_jie">
            <div class="qing ti_bt">联信产品<span class="qing">Product</span></div>
            <div class="qing t1"></div>
            <div class="qing t2"></div>
            <div class="qing ti_nav">
            	<table class="tn_jie" border="0" cellspacing="0" cellpadding="0">
                  	<tr>
                    	<td align="center" valign="top">
                            <?php foreach ($chanpin_categories as $category) {

                            ?>
                        	<a href="product_list.php?cat_id=<?php echo $category['cat_id'];?>" class="lf">
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
<?php
$i = 1;
foreach ($chanpin_categories as $category) {

?>
<div class="qing pro<?php if($i%2 ==1){?>1<?php }else{?>2<?php }?>">
	<div class="qing center">
		<div class="lf pro_ti">
			<div class="qing pro_name"><?php echo $category['cat_name'];?><span class="qing"><?php echo $category['english_name'];?></span></div>
     		<div class="qing pro_more"><a href="product_list.php?cat_id=<?php echo $category['cat_id'];?>" class="qing"><div class="qing pm1">查看更多</div><div class="qing pm2">查看更多</div></a></div>
 		</div>
   		<ul class="lf pro_jie">
        	<li class="lf">
            	<a href="#" class="qing fu_bt">北京《老年康复护理医院投资基》</a>
              	<a href="#" class="qing ab_jian">与北京市政府合作打造《北京市养老产业综合服务平台》项目，旨在为北京市老年人解决和和落实达到真正“老有所养”的目的。 联信基金与“北京社会福利促进会”...</a>
                <div class="qing xint"></div>
            </li>
        </ul>
	</div>
</div>
<?php
    $i++;
} ?>
<div class="qing" style="height:15px;"></div>
<!--底部-->
<?php
require('foot.php');
?>
</body>
</html>
