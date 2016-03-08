<?php
ob_start();
require_once("pageheader.php");
if($_SESSION["admin"]["login_id"]!=1)
{
	header("Location:admin_edit.php?id=".$_SESSION["admin"]["login_id"]);
	exit;
}

if($_REQUEST["action"]=="add")
{
    $loginname = !empty($_POST['loginname']) ? $_POST['loginname'] : '';
	$password = empty($_POST['password'])? '': trim($_POST['password']);
	$sql="select * from admin where loginname='".$loginname."'";
	$result = $mysql->get_one($sql);
	if($result)
	{
		echo '<script>alert("该用户名已存在");history.go(-1);</script>';
		exit;
	}else{
		$dataArray = array("loginname"=>$loginname,"password"=>md5($password));
		$mysql->insert("admin",$dataArray);
		echo '<script>alert("操作成功");location.href="admin_list.php";</script>';
		exit;
	}
}

if ($_REQUEST['action'] == 'delete')
{
	$id=$_REQUEST['id'];
	$condition="id=".$id;
	$mysql->delete("admin",$condition);
	echo '<script>alert("操作成功");location.href="admin_list.php";</script>';
	exit;
}
?>

<!-- 文章列表 -->

  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table width="1103" cellpadding="3" cellspacing="1">
  <tr>
    <th width="778">用户名</th>
    <th width="308">操作</th>
  <tr>
<?php
$sql = "SELECT * FROM admin where id<>2 order by id asc";
$row=$mysql->get_all($sql);
foreach($row as $result)
{
?>
  <tr>
    <td align="center" class="first-cell" style=""><?php echo $result['loginname']; ?></td>
    <td align="center">
      <a href="admin_edit.php?id=<?php echo $result['id']; ?>" title="修改" onClick="return confirm('您确定进行操作吗？')"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <?php if($result['id']!=1) { ?><a href="admin_list.php?action=delete&id=<?php echo $result['id']; ?>" title="删除" onClick="return confirm('您确定进行操作吗？')"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a><?php }?>
    </td>
  </tr>
<?php 
}
?>
</table>
<!-- end goods list -->


<table width="1103" cellpadding="3" cellspacing="1" style="margin-top:20px;">
  <tr>
    <th width="403">用户名</th>
    <th width="531">密码</th>
    <th width="145">操作</th>
  <tr>
  <form method="post" action="admin_list.php?action=add" name="listForm" onsubmit="return check_add()">
  <tr>
    <td align="center" class="center" style=""><input type="text" name="loginname" id="loginname" class="input_text_2" value="" /></td>
    <td align="center"><input type="password" name="password" id="password" class="input_text_2" value="" /></td>
    <td align="center">
      <input name="submit" type="submit" value="新增" />
    </td>
  </tr>
  </form>
</table>
</div>
<script language="javascript">
<!--
function check_add()
{
	if ($.trim($("#loginname").val())=="")
	{
		alert("请填写用户名");
		$("#loginname").focus();
		return false;
	}
	if ($.trim($("#password").val())=="")
	{
		alert("请填写密码");
		$("#password").focus();
		return false;
	}
	return true;
}
//-->
</script>
<?php
require_once("pagefooter.php");
?>