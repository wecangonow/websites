<?php
ob_start();
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
if($_REQUEST["action"]=="edit")
{
	$old_password = !empty($_POST['old_password']) ? $_POST['old_password'] : '';
	$new_password = !empty($_POST['new_password']) ? $_POST['new_password'] : '';
	$sql="select * from admin where id=".$id."";
	$result = $mysql->get_one($sql);
	if($result["password"]!=md5($old_password))
	{
		echo '<script>alert("旧密码错误");history.go(-1);</script>';
		exit;
	}else{
		$condition="id=".$id;
		$dataArray = array("password"=>md5($new_password));
		$mysql->update("admin",$dataArray,$condition);
		echo '<script>alert("操作成功");location.href="admin_list.php";</script>';
		exit;
	}
  //header("Location:shop_config.php");
}

?>
<div class="tab-div">
  <!-- tab bar -->
  <div id="tabbar-div">
    <p>
      <span class="tab-front" id="shop_info-tab">基本设置</span>
    </p>
  </div>
<?php 
$sql="select * from admin where id=".$id;
$result = $mysql->get_one($sql);
?>
  <!-- tab body -->
  <div id="tabbody-div">
    <form name="theForm" id="theForm" action="admin_edit.php?action=edit&id=<?php echo $id; ?>" method="post" onsubmit="return check_submit();">
    <table width="90%" id="shop_info-table">
      <tr>
        <td width="28%" valign="top" class="label">
         用户名:
        </td>
        <td width="72%">
          <b><?php echo $result["loginname"];?></b>
        </td>
      </tr>
      <tr>
        <td class="label" valign="top">
         旧密码:
        </td>
        <td>
          <input name="old_password" id="old_password" type="password" class="input_text_2" value="" />
        </td>
      </tr>
      <tr>
        <td class="label" valign="top">
         新密码:
        </td>
        <td>
          <input name="new_password" id="new_password" type="password" class="input_text_2" value="" />
        </td>
      </tr>
      <tr>
        <td class="label" valign="top">
         确认密码:
        </td>
        <td>
          <input name="re_new_password" id="re_new_password" type="password" class="input_text_2" value="" />
        </td>
      </tr>
    </table>

    <div class="button-div">
      <input name="submit" type="submit" value="提交" class="button" />
      <input name="reset" type="button" value="重置" class="button" onclick="reset_form();" />
    </div>
    </form>
  </div>
</div>
<script language="javascript">
<!--
function check_submit()
{
	if ($.trim($("#old_password").val())=="")
	{
		alert("请填写旧密码");
		$("#old_password").focus();
		return false;
	}
	if ($.trim($("#new_password").val())=="")
	{
		alert("请填写新密码");
		$("#new_password").focus();
		return false;
	}
	if ($.trim($("#re_new_password").val())=="")
	{
		alert("请填写确认密码");
		$("#re_new_password").focus();
		return false;
	}
	if ($.trim($("#re_new_password").val())!==$.trim($("#new_password").val()))
	{
		alert("请填写确认密码不一致");
		$("#re_new_password").focus();
		return false;
	}
}
function reset_form()
{
	$(":password").val("");
	return false;
}
//-->
</script>
<?php require_once("pagefooter.php"); ?>