<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=5;

$sql="select * from pic where id=6";
$banner_view = $mysql->get_one($sql);

$id=$_REQUEST['id'];
$sql="select * from news where id=".$id;
$news_view = $mysql->get_one($sql);
$seo_title=$news_view['title'];

$sql="select * from news where cat_id=".$news_view["cat_id"]." and id>".$news_view["id"]." order by id asc limit 0,1";
$prev_info = $mysql->get_one($sql);
if(!$prev_info)
{
    $prev_info=array('title'=>'已经没有了...','url'=>'javascript:;');
}
else
{
    $prev_info=array('title'=>$prev_info['title'],'url'=>'advantage_view.php?id='.$prev_info['id']);
}

$sql="select * from news where cat_id=".$news_view["cat_id"]." and id<".$news_view["id"]." order by id desc limit 0,1";
$next_info = $mysql->get_one($sql);
if(!$next_info)
{
    $next_info=array('title'=>'已经没有了...','url'=>'javascript:;');
}
else
{
    $next_info=array('title'=>$next_info['title'],'url'=>'advantage_view.php?id='.$next_info['id']);
}
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
    	<div class="qing biao_bt" style="background:url(images/t_you.png) center center no-repeat;">
        	<img src="images/biao_you.png" width="345" height="24" />
        </div>
        <div class="qing you_jiao"><span class="qing"><img src="images/you_jiao.png" width="25" height="12" /></span></div>
    </div>
</div>
<!--内容-->
<div class="qing" style="background:#ededed; padding:50px 0; margin-top:-97px;">
    <div class="qing center" style="background:#FFF;">
    	<div class="qing" style="padding:0 110px; padding-bottom:60px;">
            <div class="qing news_title"><?php echo $news_view['title']; ?></div>
            <div class="qing" style="border-top:1px solid #e2e2e2; border-bottom:1px solid #e2e2e2;">
                <table class="wen_title" width="900" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                        <td width="300" align="left" valign="middle">来源：<?php echo $news_view['laiyuan']; ?></td>
                        <td width="300" align="center" valign="middle">关键词：<a href="advantage_view.php?id=<?php echo $news_view['id']; ?>"><?php echo $news_view['tags']; ?></a></td>
                        <td width="300" align="right" valign="middle">发布时间：<?php echo date("Y-m-d",strtotime($news_view["add_time"])); ?></td>
                    </tr>
                </table>
            </div>
            <div class="qing news_wen"><?php echo $news_view['content']; ?></div>
            <div class="qing">
            	<table class="pian" width="100%" border="0" cellspacing="0" cellpadding="0">
                  	<tr>
                    	<td align="left" valign="middle">
                        	<a href="<?php echo $prev_info['url']; ?>" class="qing"><span>上一篇：</span><?php echo $prev_info['title']; ?></a>
                            <a href="<?php echo $next_info['url']; ?>" class="qing"><span>下一篇：</span><?php echo $next_info['title']; ?></a>
                        </td>
                  	</tr>
                </table>
            </div>
            <div class="qing" style="padding-top:25px;"><a href="advantage.php" class="lf return">返回列表</a></div>
    	</div>
    </div>
</div>

<?php
require('foot.php');
?>
</body>
</html>
