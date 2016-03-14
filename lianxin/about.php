<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=1;
$sql="select * from news where id=1";
$jianjie = $mysql->get_one($sql);
$sql="select * from news where id=2";
$wenhua = $mysql->get_one($sql);
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
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script src="js/jquery.js" type="text/javascript"></script><!--导航-->
<script src="js/main.js" type="text/javascript"></script><!--导航-->
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>

<!--本页样式-->
<script type="text/javascript" src="js/mu.js"></script><!--屏幕滑，图片动-->
<script type="text/javascript" src="js/jquery.touchSlider.js"></script><!--焦点图-->
<script type="text/javascript" src="js/jiaodian.js"></script><!--焦点图-->

</head>
<?php
require('head.php');
?>
<body>
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
                            <a href="ab_profiles.php?id=1" class="lf <?php if($id==1){?>tinn<?php }?>">
                                <div class="qing tn1">公司简介</div>
                                <div class="qing tn2"><img src="images/t1.png" width="21" height="21" /></div>
                                <div class="qing tn3"><img src="images/t2.png" width="71" height="25" /></div>
                                <div class="qing tn4"></div>
                            </a>
                            <a href="ab_profiles.php?id=2" class="lf <?php if($id==2){?>tinn<?php }?>">
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
<div class="qing about">
	<div class="qing ab_ti">
    	<div class="qing ab_bt"><span class="qing ab1">公司简介</span><span class="qing ab2">公司简介</span></div>
        <div class="qing abt"><div class="qing abt1"></div><div class="qing abt2"></div></div>
    </div>
    <div class="qing center">
    	<div class="lf ab_img">
        	<div class="qing ab_tu"><img src="<?php echo $jianjie["picture"];?>" width="477" height="330" /></div>
            <div class="qing ab_k"><img src="images/abtu2.jpg" width="305" height="307" /></div>
      	</div>
        <div class="rf ab_shao">
            <?php echo $jianjie["content"];?>
        </div>
    </div>
</div>
<div class="qing qiye">
	<div class="qing ab_ti">
    	<div class="qing ab_bt"><span class="qing ab1">企业文化</span><span class="qing ab2">企业文化</span></div>
        <div class="qing abt"><div class="qing abt1"></div><div class="qing abt2"></div></div>
    </div>
    <div class="qing center qiye_bt"><img src="images/qiye_bt.png" width="800" height="37" /></div>
    <div class="qing center qiye_jian">
        <?php echo $wenhua["content"];?>
	</div>
    <div class="qing qiye_bg"><span class="qing"></span></div>
</div>
<div class="qing team">
	<div class="qing team_bg"></div>
    <div class="qing team_jie">
    	<div class="qing ab_ti">
            <div class="qing ab_bt"><span class="qing ab1">精英团队</span><span class="qing ab2">精英团队</span></div>
            <div class="qing abt"><div class="qing abt1"></div><div class="qing abt2"></div></div>
        </div>
       	<div class="qing team_bt">联信基金共有员工376人，其中博士56人、硕士172人、学士78人；从事产品设计和投资研究的人员中，有5名博士后。研究员和基金经理超过97%拥有硕士及以上学位。公司共有43名员工为海外归国人员，其中毕业<br />于麻省理工学院 、耶鲁大学 、芝加哥大学、密歇根大学、牛津大学、剑桥大学等海外名校的员工多人。公司另聘来自美国和香港的投资研究顾问。
        </div>
        <div class="qing center">
        	<div class="main_visual4">
                <div class="main_image4">
                    <ul>
                        <?php
                            $maxnum = 7;  //每页显示记录条数
                            $sql = "SELECT * FROM news where 1=1 and cat_id=6";
                            $sql = $sql." order by sort_order asc,id desc";
                            $totalRows1 =$mysql->num_rows($mysql->query($sql));//数据集数据总条数
                            $totalpages = ceil($totalRows1/$maxnum);//计算可分页总数，ceil()为上舍函数
                            $row = $mysql->get_all($sql);
                            $counter = 0;
                            for($i = 0; $i < $totalpages; $i++) {
                        ?>
                        <li>
                        	<div class="qing team_shao">
                                        <?php  for($j=0; $j < $maxnum; $j++) { ?>
                                            <div class="lf">
                                                <a href="#" class="qing team_img">
                                                    <div class="qing te1"><img src="<?php echo $row[$counter]['picture'];?>" width="151" height="151" /></div>
                                                    <div class="qing te2"><img src="images/teamq.png" width="151" height="151" /></div>
                                                </a>
                                                <a href="#" class="qing team_ti"><?php echo $row[$counter]['title'];?></a>
                                            </div>
                                            <?php
                                            $counter++;
                                            if($counter >= $totalRows1){
                                                break;
                                            }
                                        }
                                        ?>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                    <a href="javascript:;" id="btn_prev4"></a>
                    <a href="javascript:;" id="btn_next4"></a>
                </div>
                <table class="flicking_con4" border="0" cellspacing="0" cellpadding="0" style=" text-align:center">
                    <tr>
                        <td align="center" valign="top">
                            <?php
                            for($i = 0; $i < $totalpages; $i++) {?>
                            <a href="#"></a>
                            <?php }?>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="qing honor">
	<div class="qing ab_ti">
    	<div class="qing ab_bt"><span class="qing ab1">资质荣誉</span><span class="qing ab2">资质荣誉</span></div>
        <div class="qing abt"><div class="qing abt1"></div><div class="qing abt2"></div></div>
    </div>
    <div class="qing center">
    	<div class="main_visual5">
         	<div class="main_image5">
              	<ul>
                    <?php
                    //$this_page_url="ab_team.php";
                    $maxnum = 5;  //每页显示记录条数
                    $sql = "SELECT * FROM pic where 1=1 and cat_id=13";

                    $sql = $sql." order by sort_order asc,id desc";
                    $totalRows1 =$mysql->num_rows($mysql->query($sql));//数据集数据总条数
                    $totalpages = ceil($totalRows1/$maxnum);//计算可分页总数，ceil()为上舍函数
                    $row = $mysql->get_all($sql);
                    ?>
                    <?php
                    $counter = 0;
                    for($i = 0; $i < $totalpages; $i++) {?>
                    ?>
                 	<li>
                        <div class="qing hon_jie">
                            <?php  for($j=0; $j < $maxnum; $j++) { ?>
                            <div class="lf">
                            	<div class="qing hon_img">
                                    <div class="qing hon1"><span class="qing"><img src="<?php echo $row[$counter]['picture'];?>" width="171" height="236" /></span></div>
                                    <div class="qing hon2">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" valign="middle"><?php echo $row[$counter]['title'];?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                                <?php
                                $counter++;
                                if($counter >= $totalRows1){
                                    break;
                                }
                                }
                                ?>
                            </div>
                  	</li>
                    <?php }?>
            	</ul>
              	<a href="javascript:;" id="btn_prev5"></a>
              	<a href="javascript:;" id="btn_next5"></a>
          	</div>
       	</div>
    </div>
</div>
<?php
require('foot.php');
?>
</body>
</html>
