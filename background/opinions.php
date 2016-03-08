<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=4;

$sql="select * from pic where id=5";
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
    	<div class="qing biao_bt" style="background:url(images/t_op.png) center center no-repeat;">
        	<img src="images/biao_op.png" width="307" height="24" />
        </div>
        <div class="qing you_jiao"><span class="qing"><img src="images/you_jiao.png" width="25" height="12" /></span></div>
    </div>
</div>
<!--内容-->
<div class="qing center" style="position:relative; height:auto; min-height:930px; _height:930px; margin-top:-97px;">
	<div class="lf" style="width:908px;">
    
<?php
$this_page_url="opinions.php";
$maxnum = 10;  //每页显示记录条数
$sql = "SELECT * FROM news where 1=1 and cat_id=5";

$sql = $sql." order by sort_order asc,id desc";
$totalRows1 =$mysql->num_rows($mysql->query($sql));//数据集数据总条数 
$totalpages = ceil($totalRows1/$maxnum);//计算可分页总数，ceil()为上舍函数
if($totalpages<1) 
{
    $totalpages=1;
}
if(!isset($_GET['page']) || !intval($_GET['page']) || $_GET['page'] < 1)
{
    $page = 1;
}
elseif($_GET['page'] > $totalpages)
{
    $page = $totalpages;
}
else
{
    $page = intval($_GET['page']);
}
if($page<=0)
{
    $page=1;
}
$startnum = ($page - 1)*$maxnum; //从数据集第$startnum条开始取，注意数据集是从0开始的 
$sql=$sql." limit $startnum,$maxnum";
$row=$mysql->get_all($sql);
$i=1;
foreach($row as $row_list)
{
?>
		<div class="qing cai">
            <div class="qing">
                <div class="lf cai_bt">
                    <a href="opinions_view.php?id=<?php echo $row_list["id"];?>" class="qing"><?php echo sub_str($row_list["title"],40);?></a>
                    <span class="qing"><?php echo date("Y/m/d",strtotime($row_list["add_time"])); ?></span>
                </div>
                <a href="opinions_view.php?id=<?php echo $row_list["id"];?>" class="cm1"<?php if($i==1) {?> style="top:142px; left:0; border:2px solid #4090cd; color:#005ca2;"<?php }?>>查看详细</a>
            </div>
            <div class="qing cai_shao"<?php if($i==1) {?> style=" height:110px;"<?php }?>>
                <div class="qing cai_tiao"></div>
                <a href="opinions_view.php?id=<?php echo $row_list["id"];?>" class="qing cai_jian"><?php echo sub_str($row_list["note"],100);?></a>
            </div>
        </div>
<?php
$i=$i+1;
}
?>       
        
        <div class="qing" style="padding-top:26px; padding-bottom:33px;">
            <table class="yema" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" valign="top">
                	<a href="<?php echo $this_page_url.'?page='.($page-1);?>"><span><</span></a>
<?php
for($p=1;$p<=$totalpages;$p++)
{
?>
                    <a href="<?php echo $this_page_url.'?page='.$p;?>"<?php if($p==$page) {?> class="yenn"<?php }?>><?php echo $p;?></a>
<?php
}
?>
                    <a href="<?php echo $this_page_url.'?page='.($page+1);?>"><span>></span></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="rf cai_img">
<?php
$sql="select * from news where id=7";
$zc_view = $mysql->get_one($sql);
?>
    	<div class="qing cai_tu">
        	<span class="qing cai1"><img src="images/cai_yun.png" width="290" height="387" /></span>
            <span class="qing cai2"><img src="<?php echo $zc_view['picture'];?>" width="290" height="387" /></span>
        </div>
        <div class="qing cai_name">
        	<span class="qing cn1"><img src="images/cai_lan.png" width="215" height="75" /></span>
            <span class="qing cn2"><?php echo $zc_view['title'];?></span>
        </div>
        <div class="qing cai_wen"><span class="qing"><?php echo $zc_view['content'];?></span></div>
    </div>
</div>
<?php
require('foot.php');
?>
</body>
</html>
