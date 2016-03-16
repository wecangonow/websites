<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');

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
<div class="qing mtop">
    <div class="qing title">
        <div class="qing ti_bg"></div>
        <div class="qing ti_jie">
            <div class="qing ti_bt"><span class="qing">News</span></div>
            <div class="qing t1"></div>
            <div class="qing t2"></div>
            <div class="qing ti_nav">
                <table class="tn_jie" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center" valign="top">
                            <?php
                            $sql="select * from news_category where parent_id=2 order by sort_order asc,cat_id asc";
                            $row = $mysql->get_all($sql);
                            foreach($row as $list)
                            {
                                if($list['cat_id'] == 24 || $list['cat_id'] == 25) {

                                    ?>

                                    <a href="news_market.php?cat_id=<?php echo $list['cat_id']; ?>" class="lf <?php if ($list['cat_id'] == $cat_id ) { ?> tinn<?php } ?>">
                                    <?php
                                }else{
                                    ?>
                                        <a href="news.php?cat_id=<?php echo $list['cat_id']; ?>" class="lf <?php if ($list['cat_id'] == $cat_id ) { ?> tinn<?php } ?>">
                                    <?php

                                }
                                    ?>
                                <div class="qing tn1"><?php echo $list['cat_name'];?></div>
                                <div class="qing tn2"><img src="images/t1.png" width="21" height="21" /></div>
                                <div class="qing tn3"><img src="images/t2.png" width="71" height="25" /></div>
                                <div class="qing tn4"></div>
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
</div>
<!--内容-->
<ul class="qing center news">
    <?php
    if($cat_id == 24 || $cat_id == 25){
        $this_page_url = "news_market.php";
    }else {
        $this_page_url = "news.php";
    }
        $maxnum = 3;  //每页显示记录条数
        $sql    = "SELECT * FROM news where 1=1 and parent_id=2";
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
        <div class="qing news_jie">
            <div class="qing news_shao">
                <div class="lf" style="width:785px;">
                    <a href="news_view.php?id=<?php echo $row_list['id'];?>" class="qing news_bt">
                        <div class="qing nbt1"><?php echo $row_list['title'];?></div>
                        <div class="qing nbt2"><?php echo $row_list['title'];?></div>
                    </a>
                    <div class="qing news_date"><?php echo date("Y-m-d",strtotime($row_list["add_time"])); ?></div>
                    <a href="news_view.php?id=<?php echo $row_list['id'];?>" class="qing ab_jian news_jian">
                        <?php echo $row_list['note'];?>
                    </a>
                    <div class="qing pin_more"><a href="news_view.php?id=<?php echo $row_list['id'];?>" class="qing">查看详细</a></div>
                </div>
                <a href="news_view.php?id=<?php echo $row_list['id'];?>" class="rf news_img">
                    <span class="qing">
                        <?php if($row_list['picture'] != "") {?>
                        <img src="<?php echo $row_list['picture'];?>" width="314" height="192" />
                        <?php }else {?>
                            <img src="images/none_pic.jpg" width="314" height="192" />
                        <?php } ?>
                    </span>
                </a>
            </div>
            <div class="qing newsk"><span class="qing"></span></div>
        </div>
    </li>
            <?php
            $i=$i+1;
        }
    ?>
</ul>
<div class="qing" style=" padding-top:7px; padding-bottom:60px;">
    <table class="yema" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" valign="top">
                <?php
                for($p=1;$p<=$totalpages;$p++)
                {
                ?>
                <a href="<?php echo $this_page_url.'?page='.$p.'&cat_id='.$cat_id;?>" class="lf <?php if($p==$page) {?> yenn<?php }?>"><span class="ye1"><?php echo $p;?></span><span class="ye2"><?php echo $p;?></span></a>
                    <?php
                }
                ?>
            </td>
        </tr>
    </table>
</div>
<?php
require('foot.php');
?>
</body>
</html>
