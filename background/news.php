<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=3;

$sql="select * from pic where id=4";
$banner_view = $mysql->get_one($sql);

$parent_id=2;
$cat_id = !empty($_REQUEST['cat_id']) ? $_REQUEST['cat_id'] : 0;
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
    	<div class="qing biao_bt" style="background:url(images/t_news.png) center center no-repeat;">
        	<img src="images/biao_news.png" width="256" height="24" />
        </div>
 		<div class="qing center b_news" style="padding-top:45px;">
        	<table class="bnav" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" valign="top">
<?php
$sql="select * from news_category where parent_id=2 order by sort_order asc,cat_id asc";
$row = $mysql->get_all($sql);
foreach($row as $list)
{
?>
                    	<a href="news.php?cat_id=<?php echo $list['cat_id'];?>"<?php if($list['cat_id']==$cat_id) {?> class="bnn"<?php }?>>
                        	<span class="qing b1"><?php echo $list['cat_name'];?></span>
                            <span class="qing b2"><?php echo $list['cat_name'];?></span>
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
<ul class="qing center news_jie">
<?php
$this_page_url="news.php";
$maxnum = 5;  //每页显示记录条数
$sql = "SELECT * FROM news where 1=1 and parent_id=2";
if($cat_id!=0)
{
	$sql = $sql . ' and cat_id='.$cat_id;
}
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
	<li class="qing">
    	<div class="lf news_date">
        	<div class="qing news01" style="border-bottom:1px solid #dcdcdc;"><a class="qing news1" data-hover="<?php echo date("d",strtotime($row_list["add_time"])); ?>"><?php echo date("d",strtotime($row_list["add_time"])); ?></a></div>
            <a class="qing news2" data-hover="<?php echo date("Y / m",strtotime($row_list["add_time"])); ?>"><?php echo date("Y / m",strtotime($row_list["add_time"])); ?></a>
        </div>
        <a href="news_view.php?id=<?php echo $row_list["id"];?>" class="lf news_img"><span class="qing"><img src="<?php echo $row_list["picture"];?>" width="283" height="173" /></span></a>
        <div class="rf news_shao">
        	<a href="news_view.php?id=<?php echo $row_list["id"];?>" class="qing news_bt"><?php echo $row_list["title"];?></a>
            <a href="news_view.php?id=<?php echo $row_list["id"];?>" class="qing news_jian"><?php echo sub_str($row_list["note"],100);?></a>
            <div class="qing news_tiao"></div>
            <a href="news_view.php?id=<?php echo $row_list["id"];?>" class="qing news_more"><span class="qing n1">详细</span><span class="qing n2">详细</span></a>
        </div>
        <div class="qing tiao"><span class="t1"></span></div>
    </li>
<?php
$i=$i+1;
}
?>
</ul>
<div class="qing center">
	<div class="qing" style="padding-top:26px; padding-bottom:33px;">
    	<table class="yema" border="0" cellspacing="0" cellpadding="0">
          	<tr>
            	<td align="center" valign="top">
                	<a href="<?php echo $this_page_url.'?page='.($page-1).'&cat_id='.$cat_id;?>"><span><</span></a>
<?php
for($p=1;$p<=$totalpages;$p++)
{
?>
                    <a href="<?php echo $this_page_url.'?page='.$p.'&cat_id='.$cat_id;?>"<?php if($p==$page) {?> class="yenn"<?php }?>><?php echo $p;?></a>
<?php
}
?>
                    <a href="<?php echo $this_page_url.'?page='.($page+1).'&cat_id='.$cat_id;?>"><span>></span></a>
                </td>
          	</tr>
        </table>
    </div>
</div>

<?php
require('foot.php');
?>
</body>
</html>
