<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=2;


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
    $prev_info=array('title'=>$prev_info['title'],'url'=>'product_view.php?id='.$prev_info['id']);

}

$sql="select * from news where cat_id=".$news_view["cat_id"]." and id<".$news_view["id"]." order by id desc limit 0,1";
$next_info = $mysql->get_one($sql);
if(!$next_info)
{
    $next_info=array('title'=>'已经没有了...','url'=>'javascript:;');
}
else
{
    $next_info=array('title'=>$next_info['title'],'url'=>'product_view.php?id='.$next_info['id']);
}

$sql = "SELECT * FROM news_category where 1=1 and cat_id=11";
$cat_info = $mysql->get_one($sql);
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
<div class="qing mtop">
    <div class="qing title">
        <div class="qing ti_bg"></div>
        <div class="qing ti_jie">
            <div class="qing ti_bt"><?php echo $cat_info["cat_name"];?><span class="qing"><?php echo $cat_info["english_name"];?></span></div>
            <div class="qing t1"></div>
            <div class="qing t2"></div>
            <div class="qing ti_nav">
                <table class="tn_jie" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center" valign="top">
                            <?php foreach ($chanpin_categories as $category) {
                                ?>
                                <a href="product_list.php?cat_id=<?php echo $category['cat_id'];?>" class="lf <?php if($category['cat_id']==$news_view['cat_id']){?>tinn<?php }?>">
                                    <div class="qing tn1"><?php echo $category['cat_name'];?></div>
                                    <div class="qing tn2"><img src="images/t1.png" width="21" height="21" /></div>
                                    <div class="qing tn3"><img src="images/t2.png" width="71" height="25" /></div>
                                    <div class="qing tn4"></div>
                                </a>
                            <?php } ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!--内容-->
<div class="qing xw">
    <div class="qing center">
        <div class="qing" style="padding:0 110px; padding-bottom:60px; background:#FFF;">
            <div class="qing news_title"><?php echo $news_view['title']; ?></div>
            <div class="qing" style="border-top:1px solid #bfbbb8; border-bottom:1px solid #bfbbb8;">
                <table class="wen_title" width="900" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="300" align="left" valign="middle">来源： <?php echo $news_view['laiyuan']; ?></td>
                        <td width="300" align="center" valign="middle">关键词： <a href="product_view.php?id=<?php echo $news_view['id']; ?>"><?php echo $news_view['tags']; ?></td>
                        <td width="300" align="right" valign="middle">发布时间： <?php echo date("Y-m-d",strtotime($news_view["add_time"])); ?></td>
                    </tr>
                </table>
            </div>
            <div class="qing" style="padding-top:40px;">

            </div>
            <div class="qing news_wen">
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
                <a href="product_list.php?cat_id=<?php echo $news_view['cat_id']; ?>" class="lf"><span class="qing re1">返回列表</span><span class="qing re2">返回列表</span></a>
            </div>
        </div>
    </div>
</div>

<?php
require('foot.php');
?>
</body>
</html>
