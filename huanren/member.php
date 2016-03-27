<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=8;
if($_REQUEST["action"]=="add")
{
    $name = !empty($_POST['name']) ? $_POST['name'] : '';
    $company_name = !empty($_POST['company_name']) ? $_POST['company_name'] : '';
    $phone = !empty($_POST['phone']) ? $_POST['phone'] : '';
    $email = !empty($_POST['email']) ? $_POST['email'] : '';
    $address = !empty($_POST['address']) ? $_POST['address'] : '';
    $youbian = !empty($_POST['youbian']) ? $_POST['youbian'] : '';
    $beizhu = !empty($_POST['beizhu']) ? $_POST['beizhu'] : '';
    $add_time =  date('Y-m-d H:i:s',time());
    $dataArray = array(
        "name"=>$name,
        "company_name"=>$company_name,
        "phone"=>$phone,
        "email"=>$email,
        "youbian"=>$youbian,
        "address"=>$address,
        "beizhu"=>$beizhu,
        "add_time"=>$add_time);
    $mysql->insert("member_list",$dataArray);
    echo '<script>alert("信息发送成功");location.href="member.php";</script>';
    exit;
}
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
            	<span>当前位置: </span><a href="index.php">首页</a><span class="song"> > </span><span>会员专区</span>
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
                    <?php
                    $sql = "SELECT * FROM news where id=132";
                    $content = $mysql->get_one($sql);
                    echo $content['content'];
                    ?>
				</div>
    		</div>
            <div class="pane">
            	<div class="ru_jie" id="sucai3">
                    <?php
                    $sql = "SELECT * FROM news where id=160";
                    $content = $mysql->get_one($sql);
                    echo $content['content'];
                    ?>
				</div>
            </div>
        </div>
 	</div>
</div>
<div class="qing center" style="padding-bottom:44px;">
	<div class="qing zai_ti">在线申请<span> / on-line applications</span></div>
    <div class="qing zai_jie">
        <form id="myForm" action="member.php?action=add" method="post" >
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
          	<tr>
            	<td width="33.333333%" align="left" valign="top">
                	<input type="text" name="company_name" id="company_name" class="zai_k" onblur="if(this.value==''){this.value='单位名称:（50个字以内）';}" onfocus="if(this.value=='单位名称:（50个字以内）'){this.value='';}" value="单位名称:（50个字以内）" placeholder="单位名称:（50个字以内）" />
                </td>
                <td width="33.333333%" align="center" valign="top">
                	<input type="text" name="name" id="name" class="zai_k" onblur="if(this.value==''){this.value='真实姓名:';}" onfocus="if(this.value=='真实姓名:'){this.value='';}" value="真实姓名:" placeholder="真实姓名:" />
                </td>
                <td align="right" valign="top">
                	<input type="text" name="email" id="email" class="zai_k" onblur="if(this.value==''){this.value='电子邮件:';}" onfocus="if(this.value=='电子邮件:'){this.value='';}" value="电子邮件:" placeholder="电子邮件:" />
                </td>
          	</tr>
            <tr>
            	<td width="33.333333%" align="left" valign="top">
                	<input type="text" name="address" id="address" class="zai_k" onblur="if(this.value==''){this.value='详细地址:（50个字以内）';}" onfocus="if(this.value=='详细地址:（50个字以内）'){this.value='';}" value="详细地址:（50个字以内）" placeholder="详细地址:（50个字以内）" />
                </td>
                <td width="33.333333%" align="center" valign="top">
                	<input type="text" name="youbian" id="youbian" class="zai_k" onblur="if(this.value==''){this.value='邮　　编:';}" onfocus="if(this.value=='邮　　编:'){this.value='';}" value="邮　　编:" placeholder="邮　　编:" />
                </td>
                <td align="right" valign="top">
                	<input type="text" name="phone" id="phone" class="zai_k" onblur="if(this.value==''){this.value='联系电话:';}" onfocus="if(this.value=='联系电话:'){this.value='';}" value="联系电话:" placeholder="联系电话:" />
                </td>
          	</tr>
            <tr>
            	<td colspan="3" align="left" valign="top">
                	<textarea class="zhu" name="beizhu" placeholder="备　　注:（200个字以内）"></textarea>
                </td>
            </tr>
            <tr>
            	<td colspan="3" align="center" valign="top" style="padding-top:15px; padding-bottom:38px;">
                	<input type="submit" id="btnSave" class="tijiao" value="提交" /><input type="reset" class="reset" value="重置" />
                </td>
            </tr>
        </table>
            </form>
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
<script>
    $(function () {

        $("#btnSave").click(function(){
            var name = $("#name").val();
            if(name.indexOf(":") != -1)
            {
                name = name.split(":");
                name = name[1];
            }
            var phone = $("#phone").val();
            if(phone.indexOf(":") != -1)
            {
                phone = phone.split(":");
                phone = phone[1];
            }

            var email = $("#email").val();
            if(email.indexOf(":") != -1)
            {
                email = email.split(":");
                email = email[1];
            }
            var address = $("#address").val();
            if(address.indexOf(":") != -1)
            {
                alert("请填写地址");
                return false;
            }
            var youbian = $("#youbian").val();
            if(youbian.indexOf(":") != -1)
            {
                youbian = youbian.split(":");
                youbian = youbian[1];
            }

            var company_name = $("#company_name").val();
            if(company_name.indexOf(":") != -1)
            {
                alert("请填写公司名称");
                return false;
            }
            if($.trim(email).length <= 0){
                alert("请填写邮箱");
                return false;
            }
            if($.trim(youbian).length <= 0){
                alert("请填写邮编");
                return false;
            }
            if($.trim(name).length <= 0){
                alert("请填写名字");
                return false;
            }

            if($.trim(phone).length <= 0){
                alert("请填写电话");
                return false;
            }

            if($("#myform").Valid() == false || !$("#myform").Valid()) {

                return false ;
            }

        });
    });
</script>
