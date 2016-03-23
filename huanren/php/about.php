<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=2;

$sql="select * from pic where id=3";
$banner_view = $mysql->get_one($sql);

if(empty($_REQUEST['id']))
{
	$sql="select * from news where cat_id=1 order by sort_order asc,id asc";
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

</head>
<body>
<?php
require('head.php');
?>
<!--标题-->
<div class="qing biao">
	<div class="qing biao1" style="background:url(<?php echo $banner_view['picture'];?>) center top no-repeat;"></div>
    <div class="qing biao2">
    	<div class="qing biao_bt" style="background:url(images/t_ab.png) center center no-repeat;">
        	<img src="images/biao_ab.png" width="304" height="24" />
        </div>
        <div class="qing center" style="padding-top:45px;">
        	<table class="bnav" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" valign="top">
<?php
$sql="select * from news where cat_id=1 order by sort_order asc,id asc";
$row = $mysql->get_all($sql);
foreach($row as $list)
{
?>
                    	<a href="about.php?id=<?php echo $list['id'];?>"<?php if($list['id']==$id) {?> class="bnn"<?php }?>>
                        	<span class="qing b1"><?php echo $list['title'];?></span>
                            <span class="qing b2"><?php echo $list['title'];?></span>
                        </a>
<?php
}
?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!--内容-->
<div class="qing center" style="padding-top:73px; padding-bottom:68px; margin-top:-97px;">
	<div class="lf about" id="sucai"><?php echo $news_view['content'];?></div>
    <div class="rf ab_img"><img src="<?php echo $news_view['picture'];?>" width="611" height="497" /></div>
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
