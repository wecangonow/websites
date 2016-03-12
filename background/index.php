<script src="http://siteapp.baidu.com/static/webappservice/uaredirect.js" type="text/javascript"></script>
<script type="text/javascript">uaredirect("http://m.hxkgjt.com/");</script>

<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=1;
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

<!--扫二维码开始-->
<script type="text/javascript" src="js/weixin.js"></script>
<!--扫二维码结束-->

</head>
<body>
<?php
require('head.php');
?>
<!--banner-->
<div class="qing banner">
	<div class="main_visual">
        <div class="main_image">
            <ul>
<?php
$sql="select * from pic where cat_id=1 order by sort_order asc,id asc";
$index_flash = $mysql->get_all($sql);
foreach($index_flash as $index_flash_list)
{
?>
                <li><a href="<?php echo $index_flash_list['link_url'];?>" style="background:url(<?php echo $index_flash_list['picture'];?>) center top no-repeat;"></a></li>
<?php
}
?>
            </ul>
            <a href="javascript:;" id="btn_prev"></a>
            <a href="javascript:;" id="btn_next"></a>
        </div>
        <table class="flicking_con" border="0" cellspacing="0" cellpadding="0" style=" text-align:center">
        	<tr>
            	<td align="center" valign="top">
<?php
foreach($index_flash as $index_flash_list)
{
?>
                	<a href="#"></a>
<?php
}
?>
            	</td>
          	</tr>
    	</table>
    </div>
</div>
<!--新闻，关于，总裁-->
<div class="qing center nei_bg">
<div class="qing nei">
	<!--新闻动态-->
	<div class="lf xin">
    	<div class="qing" style="padding:23px 0;"><div class="qing title"><span data-hover="新闻动态">新闻动态</span></div></div>
        <div class="qing xin_jie">
<?php
$sql="select * from news where parent_id=2 and is_show=1 order by sort_order asc,id desc limit 0,1";
$index_dt_one = $mysql->get_all($sql);
foreach($index_dt_one as $index_dt_one_list)
{
?>
        	<div class="qing">
            	<a href="news_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="lf xin_img"><img src="<?php echo $index_dt_one_list['picture'];?>" width="222" height="156" /></a>
                <div class="rf xin_shao">
                	<a href="news_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing xin_bt"><?php echo sub_str($index_dt_one_list["title"],28);?></a>
                    <a href="news_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing xin_jian"><?php echo sub_str($index_dt_one_list["note"],86);?></a>
                    <div class="qing xin_more"><a href="news_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="lf">详细</a></div>
                </div>
            </div>
<?php
}
?>
            <ul class="qing wen">
<?php
$sql="select * from news where parent_id=2 and is_show=1 order by sort_order asc,id desc limit 1,2";
$index_dt_two = $mysql->get_all($sql);
foreach($index_dt_two as $index_dt_two_list)
{
?>
            	<li class="qing">
                	<div class="lf wen_date"><span class="qing"><?php echo date("m-d",strtotime($index_dt_two_list["add_time"])); ?></span><?php echo date("Y",strtotime($index_dt_two_list["add_time"])); ?></div>
                    <div class="rf wen_jie">
                    	<a href="news_view.php?id=<?php echo $index_dt_two_list['id'];?>" class="qing xin_bt"><?php echo sub_str($index_dt_two_list["title"],28);?></a>
                    	<a href="news_view.php?id=<?php echo $index_dt_two_list['id'];?>" class="qing xin_jian"><?php echo sub_str($index_dt_two_list["note"],50);?></a>
                    </div>
                </li>
<?php
}
?>
            </ul>
            <div class="qing wen_more"><a href="news.php" class="lf">MORE<br />···</a></div>
        </div>
    </div>
    <div class="lf" style="width:634px;">
    	<!--关于我们-->
    	<div class="qing guan">
<?php
$sql="select * from news where id=21";
$index_about = $mysql->get_one($sql);
?>
        	<div class="lf guan_jie">
            	<a href="about.php" class="qing guan_bt"><span data-hover="关于我们">关于我们</span></a>
                <a href="about.php" class="qing guan_jian"><?php echo sub_str($index_about["note"],70);?></a>
            </div>
            <a href="about.php" class="lf guan_img">
            	<span class="qing"><img src="<?php echo $index_about['picture'];?>" width="266" height="179" /></span>
                <span class="qing guan_jiao"><img src="images/guan_jiao.png" width="8" height="19" /></span>
            </a>
        </div>
        <!--搜索-->
        <div class="qing sao">
        	<div class="lf search">
            	<input type="text" class="lf souc" onBlur="if(this.value==''){this.value='请输入关键词';}" onFocus="if(this.value=='请输入关键词'){this.value='';}" value="请输入关键词" />
                <input type="submit" class="rf sous" value="" />
            </div>
            <div class="rf ma">
            	<!--扫二维码开始-->
            	<a class="lf tooltip ma1" name="<?php echo $sys_config["sys_weixin"]?>"></a>
                <a class="lf ma2" href="<?php echo $sys_config["sys_weibo"]?>" target="_blank"></a>
                <a class="lf tooltip ma3" name="<?php echo $sys_config["sys_mobile"]?>"></a>
                <!--扫二维码结束-->
            </div>
        </div>
        <!--总裁观点-->
<?php
$sql="select * from news where id=7";
$zc_view = $mysql->get_one($sql);
?>
      	<div class="qing zong" style="background: url(<?php echo $zc_view['text_picture'];?>) center top no-repeat;">
        	<div class="qing zong_bt"><span data-hover="总裁观点">总裁观点</span></div>
        	<ul class="qing zong_jie">
<?php
$sql="select * from news where cat_id=5 and is_show=1 order by sort_order asc,id desc limit 0,6";
$index_zcgd = $mysql->get_all($sql);
foreach($index_zcgd as $index_zcgd_list)
{
?>
            	<li class="qing">
                	<a href="opinions_view.php?id=<?php echo $index_zcgd_list['id'];?>" class="lf"><?php echo sub_str($index_zcgd_list["title"],30);?></a>
                    <span class="lf"><?php echo date("Y-m-d",strtotime($index_zcgd_list["add_time"])); ?></span>
                </li>
<?php
}
?>
          	</ul>
          	<div class="qing zong_more"><a href="opinions.php" class="lf"></a></div>
        </div>
    </div>
</div>
</div>
<!--投资项目-->
<div class="qing tou"><div class="qing tou_img"></div></div>
<div class="qing tou_top">
	<div class="qing center tou_jie">
    	<div class="lf tou_title">
        	<span class="qing tou1"><img src="images/tou1.png" width="133" height="175" /></span>
            <span class="qing tou2"><img src="images/tou2.png" width="147" height="78" /></span>
    	</div>
    	<div class="lf" style="width:1068px;">
        <!--切换开始-->
        <div class="main_visual2">
        	<div class="main_image2">
            	<ul>
                	<li>
<?php
$sql="select * from news where cat_id=13 and is_show=1 order by sort_order asc,id desc";
$index_tzxm = $mysql->get_all($sql);
$index_tzxm_counts = count($index_tzxm);
$i=1;
foreach($index_tzxm as $index_tzxm_list)
{
?>
                    	<div class="lf tou_shao">
                            <span class="qing"></span>
                            <a href="rongyu_view.php?id=<?php echo $index_tzxm_list['id'];?>" class="qing tou_bt"><?php echo sub_str($index_tzxm_list["title"],25);?></a>
                            <a href="rongyu_view.php?id=<?php echo $index_tzxm_list['id'];?>" class="qing tou_jian"><?php echo sub_str($index_tzxm_list["note"],27);?></a>
                            <a href="rongyu_view.php?id=<?php echo $index_tzxm_list['id'];?>" class="qing tou_more"></a>
                        </div>
<?php
if($i%4==0 and $i!=$index_tzxm_counts)
{
?>
                    </li>
                    <li>
<?php
}
?>
<?php
$i=$i+1;
}
?>
                    </li>
                </ul>
                <a href="javascript:;" id="btn_prev2"></a>
                <a href="javascript:;" id="btn_next2"></a>
        	</div>
        </div>
        <!--切换结束-->
        </div>
    </div>
</div>
<!--公司优势，投资策略-->
<div class="qing">
	<div class="qing you">
    	<div class="qing you1">
            <div class="rf you_shao">
<?php
$sql="select * from news where id=22";
$index_gsys = $mysql->get_one($sql);
?>
                <div class="qing"><img src="<?php echo $index_gsys['picture'];?>" width="608" height="349" /></div>
                <div class="qing you_jie" style="background:url(images/you1.png) repeat;">
                    <span class="qing"></span>
                    <a href="advantage.php" class="qing you_bt">公司优势</a>
                    <a href="advantage.php" class="qing you_jian"><?php echo sub_str($index_gsys["note"],86);?></a>
                    <div class="qing you_more"><a href="advantage.php" class="lf"></a></div>
                </div>
            </div>
        </div>
        <div class="qing you2">
            <div class="lf you_shao">
<?php
$sql="select * from news where id=23";
$index_tzcl = $mysql->get_one($sql);
?>
                <div class="qing"><img src="<?php echo $index_tzcl['picture'];?>" width="608" height="349" /></div>
                <div class="qing you_jie" style="background:url(images/you2.png) repeat;">
                    <span class="qing"></span>
                    <a href="strategy.php" class="qing you_bt">投资策略</a>
                    <a href="strategy.php" class="qing you_jian"><?php echo sub_str($index_tzcl["note"],86);?></a>
                    <div class="qing you_more"><a href="strategy.php" class="lf"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--合作伙伴 / 链接-->
<div class="qing links">
  	<div class="qing center">
   		<div class="qing links_bt"><span class="qing"></span>合作伙伴 / 链接</div>
      	<ul class="qing">
<?php
$sql="select * from pic where cat_id=2 order by sort_order asc,id asc limit 0,7";
$index_links = $mysql->get_all($sql);
foreach($index_links as $index_links_list)
{
?>
       	  	<li><a href="<?php echo $index_links_list['link_url'];?>" target="_blank"><img src="<?php echo $index_links_list['picture'];?>" width="167" height="66" /></a></li>
<?php
}
?>
      	</ul>
    </div>
</div>
<?php
require('foot.php');
?>
</body>
</html>
