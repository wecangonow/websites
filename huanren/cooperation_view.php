<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=5;
$id=$_REQUEST['id'];
$sql="select * from news where id=".$id;
$news_view = $mysql->get_one($sql);
$seo_title=$news_view['title'];

$sql="select * from news where cat_id=8 and id>".$news_view["id"]." order by id asc limit 0,1";
$prev_info = $mysql->get_one($sql);
if(!$prev_info)
{
    $prev_info=array('title'=>'已经没有了...','url'=>'javascript:;');
}
else
{
    $prev_info=array('title'=>$prev_info['title'],'url'=>'cooperation_view.php?id='.$prev_info['id']);
}

$sql="select * from news where cat_id=8 and id<".$news_view["id"]." order by id desc limit 0,1";
$next_info = $mysql->get_one($sql);
if(!$next_info)
{
    $next_info=array('title'=>'已经没有了...','url'=>'javascript:;');
}
else
{
    $next_info=array('title'=>$next_info['title'],'url'=>'cooperation_view.php?id='.$next_info['id']);
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
<!--通用样式-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script src="js/main.js" type="text/javascript"></script><!--相关链接 下拉-->

</head>
<body>
<!-- 头部 -->
<?php require("head.php");?>
<!--背景-->
<div class="qing bg"><span class="qing"><img src="images/bg_news.jpg" width="100%" /></span></div>
<!--标题-->
<div class="qing mtop">
	<div class="qing title">
    	<div class="qing center">
        	<div class="lf hui_bt">
            	<div class="qing hui_zi"><span>合</span>作对接</div>
                <div class="qing hui_ying">Cooperation Docking</div>
                <div class="qing hui1"><span class="qing"></span></div>
                <div class="qing hui2"></div>
                <div class="qing hui3"></div>
                <div class="qing hui4"></div>
                <div class="qing hui5"></div>
            </div>
            <div class="rf ti_jie">
            	<span>当前位置： </span><a href="index.php">首页</a><span class="song"> > </span><span>合作对接</span>
            </div>
        </div>
    </div>
</div>
<!-- 内容区 -->
<div class="qing center" style="padding-bottom:44px; padding-top:23px;">
	<div class="qing xw">
		<div class="qing news_title">
        <?php echo $news_view['title']; ?>
        </div>
		<div class="qing wen_title">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-left:auto; margin-right:auto;">
                <!--
            	<tr>
                	<td width="33.33333%" align="center" valign="middle">来源：
                        <?php echo $news_view['laiyuan']; ?>
                    </td>
               		<td width="33.33333%" align="center" valign="middle">关键词：
                        <?php echo $news_view['tags']; ?>
                    </td>
                	<td align="center" valign="middle">发布时间：
                        <?php echo date("Y-m-d",strtotime($news_view["add_time"])); ?>
                    </td>
            	</tr>
            	-->
        	</table>
		</div>
		<div class="qing news_wen">
            <?php if($news_view['picture'] != ""){?>
        <img src="
            <?php echo $news_view['picture']; ?>
        " width="1037" height="532" /><br /><br />
            <?php }?>
            <?php echo $news_view['content']; ?>
		</div>
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
		<div class="qing return">
        	<a href="cooperation.php" class="lf"><span class="qing re1">返回列表</span><span class="qing re2">返回列表</span></a>
        </div>
	</div>
</div>
<!-- 底部 -->
<?php
require('foot.php');
?>
</body>
</html>
