<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=7;

$sql="select * from pic where id=8";
$banner_view = $mysql->get_one($sql);

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
<!--横向滚动条-->
<script type="text/javascript" src="js/nav.js"></script>
<!--导航结束-->

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

<!--屏幕滑，图片动-->
<script src="js/mu.js" type="text/javascript"></script>
<!--屏幕滑，图片动-->

</head>
<body>
<?php
require('head.php');
?>
<!--标题-->
<div class="qing biao_jie">
	<div class="qing biao1" style="background:url(<?php echo $banner_view['picture'];?>) center top no-repeat;"></div>
    <div class="qing biao2">
    	<div class="qing biao_bt" style="background:url(images/t_job.png) center center no-repeat;">
        	<img src="images/biao_job.png" width="218" height="24" />
        </div>
        <div class="qing you_jiao"><span class="qing"><img src="images/you_jiao.png" width="25" height="12" /></span></div>
    </div>
</div>
<!--内容-->
<div class="subNavBox">

<?php
$sql="select * from news where cat_id=9 order by sort_order asc,id asc";
$row = $mysql->get_all($sql);
$i=1;
foreach($row as $list)
{
?>
	<div class="subNav<?php if($i==1) {?> currentDd currentDt<?php }?>">
    	<div class="qing job<?php if($i%2==1) {?>1<?php }else{ ?>2<?php }?>"><div class="qing center job_bt"><?php echo $list['title'];?></div></div>
    </div>
	<div class="navContent"<?php if($i==1) {?> style="display:block"<?php }?>>
		<div class="qing center job_jian">
        	<ul class="qing job_zhi">
                <li class="lf">
                    <div class="lf zhi_bt">岗位要求</div>
                    <div class="lf zhi_jian"><?php echo $list['note'];?></div>
                </li>
                <li class="lf">
                    <div class="lf zhi_bt">任职条件</div>
                    <div class="lf zhi_jian"><?php echo $list['content'];?></div>
                </li>
            </ul>
        </div>
	</div>
<?php
$i=$i+1;
}
?>
	
</div>
<?php
require('foot.php');
?>

<!--展开开始-->
<script type="text/javascript">
$(function(){
	$(".subNav").click(function(){
		$(this).toggleClass("currentDd").siblings(".subNav").removeClass("currentDd");
		$(this).toggleClass("currentDt").siblings(".subNav").removeClass("currentDt");
		$(this).next(".navContent").slideToggle(300).siblings(".navContent").slideUp(500);
	})	
});
</script>
<!--展开结束-->

</body>
</html>
