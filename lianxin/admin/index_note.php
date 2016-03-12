<?php
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
if($_REQUEST["action"]=="edit")
{
    $id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
    $note = !empty($_POST['note']) ? Textarea_Out($_POST['note']) : '';
    $condition="id=".$id;
    $dataArray = array("title"=>$title,"note"=>$note);
	$mysql->update("news",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="index_note.php?id='.$id.'";</script>';
	exit;
}

?>
<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab">修改信息</span>
      </p>
    </div>
<?php 
$sql="select * from news where id=".$id;
$result = $mysql->get_one($sql);
?>
    <!-- tab body -->
    <div id="tabbody-div">
      <form action="index_note.php?action=edit&id=<?php echo $id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">标题</td>
            <td width="83%"><input type="text" name="title" id="title" class="input_text" value="<?php echo $result['title']; ?>" /></td>
          </tr>
          <tr>
            <td class="label">简介</td>
            <td><textarea name="note" id="note" class="input_textarea"><?php echo Textarea_In($result['note']); ?></textarea></td>
          </tr>
        </table>
        <div class="button-div">
          <input type="submit" value="提交" class="button" />
          <input type="button" value="重置" class="button" onclick="reset_form();" />
        </div>
      </form>
    </div>
</div>
<script language="javascript">
<!--
function check_submit()
{
	if ($.trim($("#title").val())=="")
	{
		alert("请填写标题");
		$("#title").focus();
		return false;
	}
}
function reset_form()
{
	$(":text").val("");
	$("#note").val("");
	editor.setContent("");
	return false;
}
//-->
</script>
<?php require_once("pagefooter.php"); ?>