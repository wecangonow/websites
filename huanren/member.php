<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=8;
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

<script type="text/javascript">
$(function(){	
	$('.tabPanel ul li').click(function(){
		$(this).addClass('hit').siblings().removeClass('hit');
		$('.panes>div:eq('+$(this).index()+')').show().siblings().hide();	
	})
})
</script>

</head>
<body>
<!-- 头部 -->
<?php require("head.php");?>
<!--背景-->
<div class="qing bg"><span class="qing"><img src="images/bg_member.jpg" width="100%" /></span></div>
<!--标题-->
<div class="qing mtop">
	<div class="qing title">
    	<div class="qing center">
        	<div class="lf hui_bt">
            	<div class="qing hui_zi"><span>会</span>员专区</div>
                <div class="qing hui_ying">Member Area</div>
                <div class="qing hui1"><span class="qing"></span></div>
                <div class="qing hui2"></div>
                <div class="qing hui3"></div>
                <div class="qing hui4"></div>
                <div class="qing hui5"></div>
            </div>
            <div class="rf ti_jie">
            	<span>当前位置： </span><a href="index.html">首页</a><span class="song"> > </span><span>会员专区</span>
            </div>
        </div>
    </div>
</div>
<!-- 内容区 -->
<div class="qing center" style="padding-top:23px; padding-bottom:17px;">
 	<div class="tabPanel">
      	<ul>
          	<li class="hit">入会指南</li>
         	<li>入会邀请</li>
      	</ul>
        <div class="panes">
         	<div class="pane" style="display:block;">
            	<div class="ru_jie" id="sucai2">
一、 国内会员申请细则：<br />
　　1. 填写会员申请表；<br />
　　2. 出具有关证明材料（个人学历证明及职称复印件）；<br />
　　3. 申请者交两张一寸免冠照片或电子版一寸免冠照片；<br />
　　4．单位会员须提交公司加盖公章的相关文件的复印件（营业执照、法人身份证、有进出口权的公司请提供海关颁发的《自理报关单位注册登记证明书》等）<br />
二、 海外会员申请细则：<br />
　　1. 填写会员申请表；<br />
　　2. 出具有关证明材料（个人学历证明及职称复印件）；<br />
　　3. 申请者交两张一寸免冠照片或电子版一寸免冠照片；<br />
　　4．单位会员须提交公司加盖公章的相关文件的复印件（营业执照、法人身份证或护照复印件、有进出口权的公司请提供海关颁发的《自理报关单位注册登记证明书》等）<br />
三、 国内会员申请细则：<br />
　　1. 填写会员申请表；<br />
　　2. 出具有关证明材料（个人学历证明及职称复印件）；<br />
四、 海外会员申请细则：<br />
　　1. 填写会员申请表；<br />
　　2. 出具有关证明材料（个人学历证明及职称复印件）；<br />
　　3. 申请者交两张一寸免冠照片或电子版一寸免冠照片；<br />
　　4．单位会员须提交公司加盖公章的相关文件的复印件（营业执照、法人身份证或护照复印件、有进出口权的公司请提供海关颁发的《自理报关单位注册登记证明书》等）<br />
				</div>
    		</div>
            <div class="pane">
            	<div class="ru_jie" id="sucai3">
一、 国内会员申请细则：<br />
　　1. 填写会员申请表；<br />
　　2. 出具有关证明材料（个人学历证明及职称复印件）；<br />
　　3. 申请者交两张一寸免冠照片或电子版一寸免冠照片；<br />
　　4．单位会员须提交公司加盖公章的相关文件的复印件（营业执照、法人身份证、有进出口权的公司请提供海关颁发的《自理报关单位注册登记证明书》等）<br />
二、 海外会员申请细则：<br />
　　1. 填写会员申请表；<br />
　　2. 出具有关证明材料（个人学历证明及职称复印件）；<br />
　　3. 申请者交两张一寸免冠照片或电子版一寸免冠照片；<br />
　　4．单位会员须提交公司加盖公章的相关文件的复印件（营业执照、法人身份证或护照复印件、有进出口权的公司请提供海关颁发的《自理报关单位注册登记证明书》等）<br />
三、 国内会员申请细则：<br />
　　1. 填写会员申请表；<br />
　　2. 出具有关证明材料（个人学历证明及职称复印件）；<br />
四、 海外会员申请细则：<br />
　　1. 填写会员申请表；<br />
　　2. 出具有关证明材料（个人学历证明及职称复印件）；<br />
　　3. 申请者交两张一寸免冠照片或电子版一寸免冠照片；<br />
　　4．单位会员须提交公司加盖公章的相关文件的复印件（营业执照、法人身份证或护照复印件、有进出口权的公司请提供海关颁发的《自理报关单位注册登记证明书》等）<br />
				</div>
            </div>
        </div>
 	</div>
</div>
<div class="qing center" style="padding-bottom:44px;">
	<div class="qing zai_ti">在线申请<span> / on-line applications</span></div>
    <div class="qing zai_jie">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
          	<tr>
            	<td width="33.333333%" align="left" valign="top">
                	<input type="text" class="zai_k" onblur="if(this.value==''){this.value='单位名称：（50个字以内）';}" onfocus="if(this.value=='单位名称：（50个字以内）'){this.value='';}" value="单位名称：（50个字以内）" placeholder="单位名称：（50个字以内）" />
                </td>
                <td width="33.333333%" align="center" valign="top">
                	<input type="text" class="zai_k" onblur="if(this.value==''){this.value='真实姓名：';}" onfocus="if(this.value=='真实姓名：'){this.value='';}" value="真实姓名：" placeholder="真实姓名：" />
                </td>
                <td align="right" valign="top">
                	<input type="text" class="zai_k" onblur="if(this.value==''){this.value='电子邮件：';}" onfocus="if(this.value=='电子邮件：'){this.value='';}" value="电子邮件：" placeholder="电子邮件：" />
                </td>
          	</tr>
            <tr>
            	<td width="33.333333%" align="left" valign="top">
                	<input type="text" class="zai_k" onblur="if(this.value==''){this.value='详细地址：（50个字以内）';}" onfocus="if(this.value=='详细地址：（50个字以内）'){this.value='';}" value="详细地址：（50个字以内）" placeholder="详细地址：（50个字以内）" />
                </td>
                <td width="33.333333%" align="center" valign="top">
                	<input type="text" class="zai_k" onblur="if(this.value==''){this.value='邮　　编：';}" onfocus="if(this.value=='邮　　编：'){this.value='';}" value="邮　　编：" placeholder="邮　　编：" />
                </td>
                <td align="right" valign="top">
                	<input type="text" class="zai_k" onblur="if(this.value==''){this.value='联系电话：';}" onfocus="if(this.value=='联系电话：'){this.value='';}" value="联系电话：" placeholder="联系电话：" />
                </td>
          	</tr>
            <tr>
            	<td colspan="3" align="left" valign="top">
                	<textarea class="zhu" placeholder="备　　注：（200个字以内）"></textarea>
                </td>
            </tr>
            <tr>
            	<td colspan="3" align="center" valign="top" style="padding-top:15px; padding-bottom:38px;">
                	<input type="submit" class="tijiao" value="提交" /><input type="reset" class="reset" value="重置" />
                </td>
            </tr>
        </table>
    </div>
</div>
<!-- 底部 -->

<?php
require('foot.php');
?>
<!--本页样式-->
<script type="text/javascript" src="js/jquery.nicescroll2.js"></script><!--滚动条-->
<script type="text/javascript" src="js/tiao.js"></script><!--滚动条-->

</body>
</html>
