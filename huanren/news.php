<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=4;
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
<!--通用样式-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script src="js/main.js" type="text/javascript"></script><!--相关链接 下拉-->

<!--本页样式-->
<style type="text/css">
.yema a{ color:#18202d; background:url(images/ye3.png) center top no-repeat; }
.yema a:hover{ color:#FFF; background:url(images/ye2.png) center top no-repeat; }
.yema a.yenn{ color:#FFF; background:url(images/ye2.png) center top no-repeat; }
</style>

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
            	<div class="qing hui_zi"><span>华</span>人新闻</div>
                <div class="qing hui_ying">Chinese News</div>
                <div class="qing hui1"><span class="qing"></span></div>
                <div class="qing hui2"></div>
                <div class="qing hui3"></div>
                <div class="qing hui4"></div>
                <div class="qing hui5"></div>
            </div>
            <div class="rf ti_jie">
            	<span>当前位置： </span><a href="index.php">首页</a><span class="song"> > </span><span>华人新闻</span>
            </div>
        </div>
    </div>
</div>
<!-- 内容区 -->
<div class="qing center" style="padding-top:23px; padding-bottom:39px;">
	<table class="tinav" border="0" cellspacing="0" cellpadding="0">
      	<tr>
        	<td align="center" valign="top">
                <?php
                $sql="select * from news_category where parent_id=2 order by sort_order asc,cat_id asc";
                $row = $mysql->get_all($sql);
                $cat_id = !empty($_REQUEST['cat_id']) ? $_REQUEST['cat_id'] : $row[0]['cat_id'];
                foreach($row as $list)
                {
                ?>
            	<a href="news.php?cat_id=<?php echo $list['cat_id'];?>" <?php if($list['cat_id'] == $cat_id){?>class="tnn"<?php }?>>
                    <div class="qing tn1">
                        <?php echo $list['cat_name'];?>
                    </div>
                    <div class="qing tn2">
                        <?php echo $list['cat_name'];?>
                    </div>
                </a>
                <?php
                }
                ?>
            </td>
      	</tr>
    </table>
</div>
<div class="qing center news">
	<ul class="qing">
        <?php
        $this_page_url="news.php";
        $maxnum = 8;  //每页显示记录条数
        $sql = "SELECT * FROM news where 1=1 and parent_id=2";
        if($cat_id !=0 )
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
    	<li class="lf">
       	  	<div class="qing news_jie">
           		<div class="qing n_date">
                	<div class="lf">
                        <?php echo date('Y-m',strtotime($row_list['add_time'])); ?>
                    </div>
                    <span class="rf">
                        <?php echo date('d',strtotime($row_list['add_time'])); ?>
                    </span>
              	</div>
              	<a href="news_view.php" class="qing news_img">
                        <?php if($row_list['picture'] != ""){?>
                    <span class="qing">
                        <img src="
                        <?php
                        echo $row_list['picture'];
                        ?>
                        " width="244" height="175" />
                    </span>
                        <?php }?>
                </a>
                <a href="news_view.php" class="qing ab_bt news_bt">
                    <?php echo $row_list['note'];?>
                </a>
                <a href="news_view.php" class="qing ab_jian news_jian">
                    <?php echo $row_list['content'];?>
                </a>
            </div>
        </li>
            <?php
            $i=$i+1;
        }
        ?>
    </ul>
    <div class="qing yema">
        <table border="0" cellspacing="0" cellpadding="0" style="margin-left:auto; margin-right:auto;">
            <tr>
                <td align="center" valign="top">
                    <?php if($page != 1){?>
                    <a href="<?php echo $this_page_url.'?page='.($page-1).'&cat_id='.$cat_id;?>">
                        <span class="song"><</span>
                    </a>
                    <?php }?>
                    <?php
                    for($p=1;$p<=$totalpages;$p++)
                    {
                        ?>
                        <a href="<?php echo $this_page_url.'?page='.$p.'&cat_id='.$cat_id;?>"<?php if($p==$page) {?> class="yenn"<?php }?>><?php echo $p;?></a>
                        <?php
                    }
                    ?>

                    <?php if($page <= $totalpages-1){?>
                    <a href="<?php echo $this_page_url.'?page='.($page+1).'&cat_id='.$cat_id;?>">
                        <span class="song">></span>
                    </a>
                    <?php }?>
                </td>
            </tr>
        </table>
    </div>
</div>
<!-- 底部 -->
<?php
require('foot.php');
?>
</body>
</html>
