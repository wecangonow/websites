<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=4;

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
</head>
<body
    <?php
    require('head.php');
    $cat_id = empty($_GET["cat_id"]) ? 26 : $_GET['cat_id'];
    $sql = "SELECT * FROM news_category where 1=1 and cat_id=12";
    $cat_info = $mysql->get_one($sql);
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
                            <?php foreach ($service as $category) {
                                ?>
                                <a href="service.php?cat_id=<?php echo $category['cat_id'];?>" class="lf <?php if($cat_id == $category['cat_id']){?>tinn<?php } ?>">
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
<?php if($cat_id == 26){
    $sql = "select * from news where cat_id=26";
    $infos = $mysql->get_all($sql);

    ?>
<div class="qing center service">
	<div class="qing ser_bt">全面风险管理、风险管理前移、风险管理量化  联信更专业</div>
    <div class="qing sert"></div>
    <div class="qing ab_jian ser_jian">联信基金深谙资本市场的运营规则、法律法规，专注投资高成长、高回报的企业，为民间资本搭建股权投资平台，实现新三板上市等多层次的资本市场退出渠道，并获得丰厚回报有多年成功的企业上市、融资运作和管理经验，形成了先进完善的项目遴选、基金管理和风控管理体系，确保基金的资金安全、正常运作以及稳健增值</div>
</div>
<div class="qing center fuwu">
	<ul class="qing">
        <?php foreach($infos as $info){ ?>
    	<li class="lf">
        	<div class="qing fu_jie">
            	<div class="lf fu_date">
                	<div class="qing fd1"><span class="qing">
                            <?php echo date("d",strtotime($info['add_time']));?>
                        </span>
                        <?php echo date("Y-d",strtotime($info['add_time']));?>
                    </div>
                    <div class="qing fd2"><span class="qing">
                            <?php echo date("d",strtotime($info['add_time']));?>
                        </span>
                        <?php echo date("Y-d",strtotime($info['add_time']));?>
                    </div>
                </div>
                <div class="rf fu_shao">
                	<a href="xiangmu_view.php?id=<?php echo $info['id'];?>" class="qing fu_bt">
                        <?php echo $info['title'];?>
                    </a>
                    <a href="xiangmu_view.php?id=<?php echo $info['id'];?>" class="qing ab_jian">
                        <?php echo $info['note'];?>
                    </a>
                </div>
                <div class="qing fu1"></div>
                <div class="qing fu2"></div>
                <div class="qing fu3"></div>
                <div class="qing fu4"></div>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } else {
    $sql = "select * from news where cat_id=$cat_id";
    $info = $mysql->get_one($sql);
    echo $info['content'];
    ?>
<?php }?>
<!--底部-->
<?php
require('foot.php');
?>
</body>
</html>
