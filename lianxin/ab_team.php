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
<script src="js/jquery.js" type="text/javascript"></script><!--导航-->
<script src="js/main.js" type="text/javascript"></script><!--导航-->
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>

<!--本页样式-->
<script type="text/javascript" src="js/mu.js"></script><!--屏幕滑，图片动-->
<script type="text/javascript" src="js/jquery.touchSlider.js"></script><!--焦点图-->
<script type="text/javascript" src="js/jiaodian.js"></script><!--焦点图-->

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
            <div class="qing ti_bt">关于联信<span class="qing">About us</span></div>
            <div class="qing t1"></div>
            <div class="qing t2"></div>
            <div class="qing ti_nav">
                <table class="tn_jie" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center" valign="top">
                            <a href="ab_profiles.php?id=1" class="lf">
                                <div class="qing tn1">公司简介</div>
                                <div class="qing tn2"><img src="images/t1.png" width="21" height="21" /></div>
                                <div class="qing tn3"><img src="images/t2.png" width="71" height="25" /></div>
                                <div class="qing tn4"></div>
                            </a>
                            <a href="ab_profiles.php?id=2" class="lf">
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
                            <a href="ab_team.php" class="lf tinn">
                                <div class="qing tn1">精英团队</div>
                                <div class="qing tn2"><img src="images/t1.png" width="21" height="21" /></div>
                                <div class="qing tn3"><img src="images/t2.png" width="71" height="25" /></div>
                                <div class="qing tn4"></div>
                            </a>
                            <a href="ab_honor.php" class="lf">
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
<!--内容-->
<div class="qing center dui">
    <ul class="qing">
        <?php
        $this_page_url="ab_team.php";
        $maxnum = 8;  //每页显示记录条数
        $sql = "SELECT * FROM news where 1=1 and cat_id=6";

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
            <div class="lf dui_img">
            	<div class="qing du1"><img src="images/team1.jpg" width="110" height="110" /></div>
                <div class="qing du2"><img src="<?php echo $row_list["picture"];?>" width="110" height="110" /></div>
            </div>
            <div class="rf dui_jie">
                <a href="people.php?id=<?php echo $row_list["id"];?>&cat_id=6" class="qing fu_bt">
                    <?php echo $row_list["title"];?>
                </a>
                <a href="#" class="qing ab_jian">
                    <?php echo $row_list["note"];?>
                </a>
            </div>
            <div class="qing xint"></div>
      	</li>
        <?php
          $i=$i+1;
        }
        ?>
    </ul>
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
</div>
<?php
require('foot.php');
?>
</body>
</html>
