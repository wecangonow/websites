<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=6;

$sql="select * from pic where id=7";
$banner_view = $mysql->get_one($sql);

if(empty($_REQUEST['id']))
{
	$sql="select * from news where cat_id=8 order by sort_order asc,id asc";
}
else
{
	$sql="select * from news where id=".$_REQUEST['id'];
}
$news_view = $mysql->get_one($sql);
$id=$news_view['id'];
$seo_title=$news_view['title'];

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

<!--cenav开始-->
<script type="text/javascript">
$(function(){
	function sideSlider(){
		if(!$(".help-side ul").length){
			return false;
		}
		
		var $aCur = $(".help-side ul").find(".cur a"),
			$targetA = $(".help-side ul li a"),
			$sideSilder = $(".side-slider"),
			curT = $aCur.position().top + 24;
		
		$sideSilder.stop(true, true).animate({
			"top":curT
		});
	
		$targetA.mouseenter(function(){
			var posT = $(this).position().top + 24;
			$sideSilder.stop(true, true).animate({
				"top":posT
			}, 240);
		}).parents(".help-side").mouseleave(function(_curT){
			_curT = curT
			$sideSilder.stop(true, true).animate({
				"top":_curT
			});
		});
	};
	
	sideSlider();
});
</script>
<!--cenav开始-->

</head>
<body>
<?php
require('head.php');
?>
<!--标题-->
<div class="qing biao_jie">
	<div class="qing biao1" style="background:url(<?php echo $banner_view['picture'];?>) center top no-repeat;"></div>
    <div class="qing biao2">
    	<div class="qing biao_bt" style="background:url(images/t_ce.png) center center no-repeat;">
        	<img src="images/biao_ce.png" width="317" height="24" />
        </div>
        <div class="qing you_jiao"><span class="qing"><img src="images/you_jiao.png" width="25" height="12" /></span></div>
    </div>
</div>
<!--内容-->
<div class="qing center ce_jie">
	<div class="lf cenav">
    	<!--cenav开始-->
        <div class="help-side">
            <ul>
<?php
$sql="select * from news where cat_id=8 order by sort_order asc,id asc";
$row = $mysql->get_all($sql);
foreach($row as $list)
{
?>
                <li<?php if($list['id']==$id) {?> class="cur"<?php }?>><a href="strategy.php?id=<?php echo $list['id'];?>" data-hover="<?php echo $list['title'];?>"><?php echo $list['title'];?></a></li> 
<?php
}
?>
            </ul>
            <div class="side-slider"></div>
        </div>
        <!--cenav结束-->
    </div>
    <div class="rf ce_shao">
    	<div class="qing ce_bt">
        	<span class="qing ce1"></span>
        	<span class="qing ce2"><?php echo $news_view['title'];?></span>
        </div>
        <div class="qing ce_jian" id="sucai3"><?php echo $news_view['content'];?></div>
    </div>
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
