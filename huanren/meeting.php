<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=3;
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
<script type="text/javascript"><!--展开-->
$(function(){
	$(".subNav").click(function(){
		$(this).toggleClass("currentDd").siblings(".subNav").removeClass("currentDd");
		$(this).toggleClass("currentDt").siblings(".subNav").removeClass("currentDt");
		$(this).next(".navContent").slideToggle(300).siblings(".navContent").slideUp(500);
	})	
});
</script>

</head>
<body>
<!-- 头部 -->
<?php require("head.php");?>
<!--背景-->
<div class="qing bg"><span class="qing"><img src="images/bg_meeting.jpg" width="100%" /></span></div>
<!--标题-->
<div class="qing mtop">
	<div class="qing title">
    	<div class="qing center">
        	<div class="lf hui_bt">
            	<div class="qing hui_zi"><span>会</span>议通知</div>
                <div class="qing hui_ying">Meeting Notice</div>
                <div class="qing hui1"><span class="qing"></span></div>
                <div class="qing hui2"></div>
                <div class="qing hui3"></div>
                <div class="qing hui4"></div>
                <div class="qing hui5"></div>
            </div>
            <div class="rf ti_jie">
            	<span>当前位置： </span><a href="index.html">首页</a><span class="song"> > </span><span>会议通知</span>
            </div>
        </div>
    </div>
</div>
<!-- 内容区 -->
<div class="qing center">
	<!--展开开始-->
    <div class="subNavBox">
        <div class="subNav currentDd currentDt"><div class="qing ab_bt me_bt">李克强：充实中伊战略伙伴关系内涵 打造互利合作升级版</div></div>
        <div class="navContent" style="display:block">
        	<div class="ab_jian me_jian">
　　国务院总理李克强22日下午在人民大会堂同来华进行正式访问的伊拉克总理阿巴迪举行会谈。阿巴迪首先对深圳工业园山体滑坡事故造成的人员伤亡和财产损失表示慰问。李克强感谢阿巴迪的慰问，表示中国政府正在全力以赴组织抢救人员工作，将尽最大努力减少伤亡。李克强表示，伊拉克是中国在西亚北非地区的重要合作伙伴。中方高度重视发展中伊关系，坚定支持伊拉克维护国家主权...
            </div>
        </div>
        <div class="qing" style="height:8px;"></div>
       	<div class="subNav"><div class="qing ab_bt me_bt">开局之年，中国经济如何实现二次换挡</div></div>
        <div class="navContent">
        	<div class="ab_jian me_jian">
　　国务院总理李克强22日下午在人民大会堂同来华进行正式访问的伊拉克总理阿巴迪举行会谈。阿巴迪首先对深圳工业园山体滑坡事故造成的人员伤亡和财产损失表示慰问。李克强感谢阿巴迪的慰问，表示中国政府正在全力以赴组织抢救人员工作，将尽最大努力减少伤亡。李克强表示，伊拉克是中国在西亚北非地区的重要合作伙伴。中方高度重视发展中伊关系，坚定支持伊拉克维护国家主权...
            </div>
        </div>
        <div class="qing" style="height:8px;"></div>
        <div class="subNav"><div class="qing ab_bt me_bt">中共中央、国务院在南京举行2015年南京大屠杀死难者国家公祭仪式</div></div>
        <div class="navContent">
        	<div class="ab_jian me_jian">
　　国务院总理李克强22日下午在人民大会堂同来华进行正式访问的伊拉克总理阿巴迪举行会谈。阿巴迪首先对深圳工业园山体滑坡事故造成的人员伤亡和财产损失表示慰问。李克强感谢阿巴迪的慰问，表示中国政府正在全力以赴组织抢救人员工作，将尽最大努力减少伤亡。李克强表示，伊拉克是中国在西亚北非地区的重要合作伙伴。中方高度重视发展中伊关系，坚定支持伊拉克维护国家主权...
            </div>
        </div>
        <div class="qing" style="height:8px;"></div>
        <div class="subNav"><div class="qing ab_bt me_bt">开出高质量的民主生活会</div></div>
        <div class="navContent">
        	<div class="ab_jian me_jian">
　　国务院总理李克强22日下午在人民大会堂同来华进行正式访问的伊拉克总理阿巴迪举行会谈。阿巴迪首先对深圳工业园山体滑坡事故造成的人员伤亡和财产损失表示慰问。李克强感谢阿巴迪的慰问，表示中国政府正在全力以赴组织抢救人员工作，将尽最大努力减少伤亡。李克强表示，伊拉克是中国在西亚北非地区的重要合作伙伴。中方高度重视发展中伊关系，坚定支持伊拉克维护国家主权...
            </div>
        </div>
        <div class="qing" style="height:8px;"></div> 
        <div class="subNav"><div class="qing ab_bt me_bt">李克强将主持的“上合总理会”，有多重要？有啥讲究？</div></div>
        <div class="navContent">
        	<div class="ab_jian me_jian">
　　国务院总理李克强22日下午在人民大会堂同来华进行正式访问的伊拉克总理阿巴迪举行会谈。阿巴迪首先对深圳工业园山体滑坡事故造成的人员伤亡和财产损失表示慰问。李克强感谢阿巴迪的慰问，表示中国政府正在全力以赴组织抢救人员工作，将尽最大努力减少伤亡。李克强表示，伊拉克是中国在西亚北非地区的重要合作伙伴。中方高度重视发展中伊关系，坚定支持伊拉克维护国家主权...
            </div>
        </div>
        <div class="qing" style="height:8px;"></div>
        <div class="subNav"><div class="qing ab_bt me_bt">习近平心中的“城市中国”</div></div>
        <div class="navContent">
        	<div class="ab_jian me_jian">
　　国务院总理李克强22日下午在人民大会堂同来华进行正式访问的伊拉克总理阿巴迪举行会谈。阿巴迪首先对深圳工业园山体滑坡事故造成的人员伤亡和财产损失表示慰问。李克强感谢阿巴迪的慰问，表示中国政府正在全力以赴组织抢救人员工作，将尽最大努力减少伤亡。李克强表示，伊拉克是中国在西亚北非地区的重要合作伙伴。中方高度重视发展中伊关系，坚定支持伊拉克维护国家主权...
            </div>
        </div>
        <div class="qing" style="height:8px;"></div>
        <div class="subNav"><div class="qing ab_bt me_bt">习近平主持召开中央全面深化改革领导小组第十九次会议</div></div>
        <div class="navContent">
        	<div class="ab_jian me_jian">
　　国务院总理李克强22日下午在人民大会堂同来华进行正式访问的伊拉克总理阿巴迪举行会谈。阿巴迪首先对深圳工业园山体滑坡事故造成的人员伤亡和财产损失表示慰问。李克强感谢阿巴迪的慰问，表示中国政府正在全力以赴组织抢救人员工作，将尽最大努力减少伤亡。李克强表示，伊拉克是中国在西亚北非地区的重要合作伙伴。中方高度重视发展中伊关系，坚定支持伊拉克维护国家主权...
            </div>
        </div>
        <div class="qing" style="height:8px;"></div>
        <div class="subNav"><div class="qing ab_bt me_bt">“黄金之城”迎来“黄金时刻”——非洲领导人高度评价习近平在中...</div></div>
        <div class="navContent">
        	<div class="ab_jian me_jian">
　　国务院总理李克强22日下午在人民大会堂同来华进行正式访问的伊拉克总理阿巴迪举行会谈。阿巴迪首先对深圳工业园山体滑坡事故造成的人员伤亡和财产损失表示慰问。李克强感谢阿巴迪的慰问，表示中国政府正在全力以赴组织抢救人员工作，将尽最大努力减少伤亡。李克强表示，伊拉克是中国在西亚北非地区的重要合作伙伴。中方高度重视发展中伊关系，坚定支持伊拉克维护国家主权...
            </div>
        </div>
        <div class="qing" style="height:8px;"></div>
        <div class="subNav"><div class="qing ab_bt me_bt">习近平就2016年二十国集团峰会发表致辞</div></div>
        <div class="navContent">
        	<div class="ab_jian me_jian">
　　国务院总理李克强22日下午在人民大会堂同来华进行正式访问的伊拉克总理阿巴迪举行会谈。阿巴迪首先对深圳工业园山体滑坡事故造成的人员伤亡和财产损失表示慰问。李克强感谢阿巴迪的慰问，表示中国政府正在全力以赴组织抢救人员工作，将尽最大努力减少伤亡。李克强表示，伊拉克是中国在西亚北非地区的重要合作伙伴。中方高度重视发展中伊关系，坚定支持伊拉克维护国家主权...
            </div>
        </div>
        <div class="qing" style="height:8px;"></div>
	</div>
    <!--展开结束-->
    <div class="qing yema">
        <table border="0" cellspacing="0" cellpadding="0" style="margin-left:auto; margin-right:auto;">
            <tr>
                <td align="center" valign="top">
                    <a href="#"><span class="song"><</span></a><a href="#" class="yenn">1</a><a href="#">2</a><a href="#">3</a><a href="#"><span class="song">></span></a>
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
