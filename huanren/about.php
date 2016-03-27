<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=2;
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 1;

$sql     = "select * from news where id=$id ";
$content = $mysql->get_one($sql);

$sql = "SELECT * FROM news where 1=1 and cat_id=1";
$sql = $sql." order by sort_order asc,id asc";
$single_page = $mysql->get_all($sql);

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

<div class="qing bg"><span class="qing"><img src="images/bg_about.jpg" width="100%" /></span></div>
<!--标题-->
<div class="qing mtop">
	<div class="qing title">
    	<div class="qing center">
        	<div class="lf hui_bt">
            	<div class="qing hui_zi"><span>关</span>于我们</div>
                <div class="qing hui_ying">About Us</div>
                <div class="qing hui1"><span class="qing"></span></div>
                <div class="qing hui2"></div>
                <div class="qing hui3"></div>
                <div class="qing hui4"></div>
                <div class="qing hui5"></div>
            </div>
            <div class="rf ti_jie">
            	<span>当前位置： </span><a href="index.php">首页</a><span class="song"> > </span><span>关于我们</span>
            </div>
        </div>
    </div>
</div>
<!-- 内容区 -->
<div class="qing center" style="padding-top:23px; padding-bottom:39px;">
	<table class="tinav" border="0" cellspacing="0" cellpadding="0">
      	<tr>
        	<td align="center" valign="top">
                <?php foreach($single_page as $page){?>
            	<a href="about.php?id=<?php echo $page['id'];?>" <?php if($id==$page['id']){?>class="tnn"<?php }?>>
                    <div class="qing tn1">
                        <?php echo $page['title'];?>
                    </div>
                    <div class="qing tn2">
                        <?php echo $page['title'];?>
                    </div>
                </a>
                <?php }?>
            </td>
      	</tr>
    </table>
</div>
<div class="qing center" style="padding-bottom:44px;">
	<div class="qing about">
    	<div class="lf ab_img"><span class="qing"><img src="<?php echo $content['picture'];?>" width="487" height="550" /></span></div>
        <div class="rf ab_jie">
        	<div class="qing ab_ti">
                <?php echo $content['title'];?>
                <span>
                 <?php
                 if($content['note'] != ""){

                     echo " / " . $content['note'];
                 }
                 ?>
                </span>
            </div>
            <div class="qing ab_jian">
            	<div class="qing ab_shao" id="sucai1">
                    <?php echo $content['content'];?>
				</div>
            </div>
        </div>
    </div>
</div>
<!-- 底部 -->

<?php
require('foot.php');
?>
<!--本页样式-->
<script type="text/javascript" src="js/jquery.nicescroll.js"></script><!--滚动条-->
<script type="text/javascript" src="js/tiao.js"></script><!--滚动条-->

</body>
</html>
