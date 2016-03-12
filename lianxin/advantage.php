<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=5;

$sql="select * from pic where id=6";
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

<!--banner开始-->
<script type="text/javascript" src="js/jquery.event.drag-1.5.min.js"></script>
<script type="text/javascript" src="js/jquery.touchSlider.js"></script>
<script type="text/javascript" src="js/jiaodian.js"></script>
<!--banner结束-->

</head>
<body>
<?php
require('head.php');
?>
<!--标题-->
<div class="qing biao_jie">
	<div class="qing biao1" style="background:url(<?php echo $banner_view['picture'];?>) center top no-repeat;"></div>
    <div class="qing biao2">
    	<div class="qing biao_bt" style="background:url(images/t_you.png) center center no-repeat;">
        	<img src="images/biao_you.png" width="345" height="24" />
        </div>
        <div class="qing you_jiao"><span class="qing"><img src="images/you_jiao.png" width="25" height="12" /></span></div>
    </div>
</div>
<!--内容-->
<div class="qing shi_bg">
	<div class="qing center shi">
<?php
$sql="select * from news where id=9";
$gd_view = $mysql->get_one($sql);
?>
        <div class="qing shi_bt"><img src="images/bt_you.png" width="300" height="47" /></div>
        <div class="qing shi_title"><img src="<?php echo $gd_view['picture'];?>" width="600" height="74" /></div>
        <div class="qing" style="padding-top:229px;"><div class="qing shi_tiao"><a></a></div></div>
        <div class="qing shi_jian">　　<?php echo $gd_view['content'];?></div>
    </div>
</div>
<div class="qing center team">
	<div class="qing team_bt"><img src="images/bt_team.png" width="300" height="47" /></div>
    <!--切换开始-->
	<div class="main_visual3">
  	  	<div class="main_image3">
			<ul>
                <li>
                	<div class="qing te_jie">
<?php
$sql="select * from news where cat_id=6 order by sort_order asc,id desc";
$index_zjtd = $mysql->get_all($sql);
$index_zjtd_counts = count($index_zjtd);
$i=1;
$s=1;
foreach($index_zjtd as $index_zjtd_list)
{
?>
                        <div class="lf te_shao tt<?php echo $s%6;?>">
                            <a href="javascript:;" class="lf te_img">
                                <span class="qing te1"><img src="<?php echo $index_zjtd_list['picture'];?>" width="83" height="83" /></span>
                                <span class="qing te2"><img src="images/team_bai.png" width="83" height="83" /></span>
                            </a>
                            <div class="rf" style="width:482px;">
                                <a href="javascript:;" class="qing te_name"><?php echo $index_zjtd_list['title'];?></a>
                                <a href="javascript:;" class="qing te_jian"><?php echo sub_str($index_zjtd_list["note"],80);?></a>
                            </div>
                            <div class="qing tet"><span class="qing t2"></span></div>
                        </div>
<?php
if($i%6==0 and $i!=$index_zjtd_counts)
{
?>
                    </div>
                </li>
                <li>
                	<div class="qing te_jie">
<?php
}
?>
<?php
$i=$i+1;
$s=$s+1;
}
?>

                    </div>
                </li>
                
       	  </ul>
       	  <a href="javascript:;" id="btn_prev3"></a>
       	  <a href="javascript:;" id="btn_next3"></a>
        </div>
    </div>
    <!--切换结束-->
</div>
<div class="qing fuwu">
	<div class="qing fu_bt"><img src="images/bt_fu.png" width="300" height="47" /></div>
    <div class="qing center">
        <ul class="qing">
<?php
$sql="select * from news where cat_id=7 order by sort_order asc,id asc";
$index_fwjg = $mysql->get_all($sql);
$index_fwjg_counts = count($index_fwjg);
$i=1;
foreach($index_fwjg as $index_fwjg_list)
{
?>
            <li class="lf">
                <div class="fu_jie" style="background:<?php if($i%2==1) {?>#4d8cc6<?php }else{ ?>#c79c29<?php }?>;">
                    <div class="lf fu_img"><img src="<?php echo $index_fwjg_list['picture'];?>" width="153" height="92" /></div>
                    <div class="rf fu_jian" id="sucai<?php $i%2;?>"><?php echo $index_fwjg_list['content'];?></div>
                </div>
            </li>
<?php
$i=$i+1;
}
?>

        </ul>
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
