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
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php
require('foot.php');
?>
</body>
</html>
