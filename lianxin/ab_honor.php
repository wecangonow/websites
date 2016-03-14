<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=1;

if(empty($_REQUEST['id']))
{
    $sql="select * from news where id=1 order by sort_order asc,id asc";
}
else
{
    $sql="select * from news where id=".$_REQUEST['id'];
}
$news_view = $mysql->get_one($sql);

$id = $news_view['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=1280px" />
    <title><?php echo $sys_config["sys_title"]?></title>
    <meta name="Keywords" content="<?php echo $sys_config['sys_keywords']?>" />
    <meta name="Description" content="<?php echo $sys_config["sys_description"]?>" />

    <script type="text/javascript" src="js/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/js/zoom.min.js"></script>
<!--本页样式-->
    <!--
<script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
<script type="text/javascript" src="js/mu.js"></script>
<script type="text/javascript" src="js/jquery.touchSlider.js"></script>
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
<script type="text/javascript" src="js/jiaodian.js"></script>
    -->

    <style type="text/css">
        *{margin:0;padding:0;list-style-type:none;}
        body{overflow-y:scroll;font-family:"HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, sans-serif;background:#f4f4f4;padding:0;margin:0;}
        a,a:hover{border:none;text-decoration:none;}
        img,a img{border:none;}
        .clear{clear:both;}

        /* gallery */
        .zoomed > .gallery{-webkit-filter:blur(3px);filter:blur(3px);}
        .gallery{width:800px;margin:20px auto;}
        .gallery li{float:left;margin:10px; width:80px; height:80px;}
        .gallery li:nth-child(6n){padding-right:0;}
        .gallery li a,.gallery li img{float:left;}
    </style>

    <!--图片弹出层样式 必要样式-->
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet"  href="js/css/zoom.css" media="all" />
</head>
<body>
<!--头部-->
<?php
require('head.php');
?>
<!--标题-->
<div class="qing mtop">
	<div class="qing title">
    	<div class="qing ti_bg"></div>
        <div class="qing ti_jie">
            <div class="qing ti_bt">关于联信<span class="qing">About us</span></div>
            <div class="qing t1"></div>
            <div class="qing t2"></div>
            <div class="qing ti_nav">
            	<table class="tn_jie" border="0" cellspacing="0" cellpadding="0">
                  	<tr>
                    	<td align="center" valign="top">
                        	<a href="ab_profiles.php" class="lf">
                            	<div class="qing tn1">公司简介</div>
                                <div class="qing tn2"><img src="images/t1.png" width="21" height="21" /></div>
                                <div class="qing tn3"><img src="images/t2.png" width="71" height="25" /></div>
                                <div class="qing tn4"></div>
                            </a>
                            <a href="ab_profiles.php" class="lf">
                            	<div class="qing tn1">企业文化</div>
                                <div class="qing tn2"><img src="images/t1.png" width="21" height="21" /></div>
                                <div class="qing tn3"><img src="images/t2.png" width="71" height="25" /></div>
                                <div class="qing tn4"></div>
                            </a>
                            <a href="ab_organization.php" class="lf">
                            	<div class="qing tn1">组织架构</div>
                                <div class="qing tn2"><img src="images/t1.png" width="21" height="21" /></div>
                                <div class="qing tn3"><img src="images/t2.png" width="71" height="25" /></div>
                                <div class="qing tn4"></div>
                            </a>
                            <a href="ab_team.php" class="lf">
                            	<div class="qing tn1">精英团队</div>
                                <div class="qing tn2"><img src="images/t1.png" width="21" height="21" /></div>
                                <div class="qing tn3"><img src="images/t2.png" width="71" height="25" /></div>
                                <div class="qing tn4"></div>
                            </a>
                            <a href="ab_honor.php" class="lf tinn">
                            	<div class="qing tn1">资质荣誉</div>
                                <div class="qing tn2"><img src="images/t1.png" width="21" height="21" /></div>
                                <div class="qing tn3"><img src="images/t2.png" width="71" height="25" /></div>
                                <div class="qing tn4"></div>
                            </a>
                        </td>
                  	</tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="qing center yu ">
	<div class="qing hon_jie gallery">
        <?php
        $this_page_url="ab_honor.php";
        $maxnum = 10;  //每页显示记录条数
        $sql = "SELECT * FROM pic where 1=1 and cat_id=13";

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


        <div class="lf">
        	<div class="qing hon_img">
                <div class="qing hon1"><span class="qing">
                        <a href="<?php echo $row_list['picture'];?>">
                        <img src="<?php echo $row_list['picture'];?>" width="171" height="236" />
                        </a>
                    </span>
                </div>
                <div class="qing hon2">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td align="center" valign="middle">
                                <a href="<?php echo $row_list['picture'];?>" target="_blank">
                                <?php echo $row_list['title'];?>
                                    </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
     	</div>
            <?php
            $i=$i+1;
        }
        ?>
</div>
</div>
<div class="qing" style="padding-bottom:60px;">
	<table class="yema" border="0" cellspacing="0" cellpadding="0">
		<tr>
      		<td align="center" valign="top">
                <?php
                for($p=1;$p<=$totalpages;$p++)
                {
                    ?>
                    <a href="<?php echo $this_page_url.'?page='.$p;?>" class="lf <?php if($p==$page) {?> yenn<?php }?>"><span class="ye1"><?php echo $p;?></span><span class="ye2"><?php echo $page;?></span></a>
                    <?php
                }
                ?>
         	</td>
     	</tr>
	</table>
</div>
<!--底部--
<?php
require('foot.php');
?>
>
</body>
</html>
