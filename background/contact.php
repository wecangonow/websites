<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=8;

$sql="select * from pic where id=9";
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
    	<div class="qing biao_bt" style="background:url(images/t_con.png) center center no-repeat;">
        	<img src="images/biao_con.png" width="297" height="24" />
        </div>
        <div class="qing you_jiao"><span class="qing"><img src="images/you_jiao.png" width="25" height="12" /></span></div>
    </div>
</div>
<!--内容-->
<div class="qing" style="height:1px; margin-top:-97px;"></div>

<?php
$sql="select * from news where cat_id=10 order by sort_order asc,id asc";
$row = $mysql->get_all($sql);
$i=1;
foreach($row as $list)
{
?>
<div class="qing conj<?php if($i%2==1) {?>1<?php }else{ ?>2<?php }?>">
    <div class="qing con_jie">
        <div class="qing con<?php if($i%2==1) {?>1<?php }else{ ?>3<?php }?>">
            <div class="rf con_shao">
                <div class="qing con_title"><?php echo $list['title'];?></div>
                <ul class="qing">
                    <li class="qing">
                        <div class="lf con_img"><img src="images/con_add.png" width="23" height="28" /></div>
                        <div class="lf con_bt">地址：<?php echo $list['address'];?></div>
                    </li>
                    <li class="qing">
                        <div class="lf con_img"><img src="images/con_tel.png" width="23" height="28" /></div>
                        <div class="lf con_bt">TEL：<?php echo $list['tel'];?></div>
                    </li>
                    <li class="qing">
                        <div class="lf con_img"><img src="images/con_you.png" width="23" height="28" /></div>
                        <div class="lf con_bt">FAX：<?php echo $list['fax'];?></div>
                    </li>
                    <li class="qing">
                        <div class="lf con_img"><img src="images/con_you.png" width="23" height="28" /></div>
                        <div class="lf con_bt">邮编：<?php echo $list['postal'];?></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="qing con<?php if($i%2==1) {?>2<?php }else{ ?>4<?php }?>">
            <div class="lf con_map"><img src="<?php echo $list['picture'];?>" width="552" height="285" /></div>
        </div>
    </div>
</div>

<?php
$i=$i+1;
}
?>

<?php
require('foot.php');
?>
</body>
</html>
