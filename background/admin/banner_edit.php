<?php
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
if($_REQUEST["action"]=="edit")
{
    $id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
    $english_title = !empty($_POST['english_title']) ? $_POST['english_title'] : '';
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
    $condition="id=".$id;
    $dataArray = array("title"=>$title,"english_title"=>$english_title,"picture"=>$picture);
	$mysql->update("lanmu",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="banner_edit.php?id='.$id.'";</script>';
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
$sql="select * from lanmu where id=".$id;
$result = $mysql->get_one($sql);
?>
    <!-- tab body -->
    <div id="tabbody-div">
      <form action="banner_edit.php?action=edit&id=<?php echo $id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">标题</td>
            <td width="83%"><input type="text" name="title" id="title" class="input_text" value="<?php echo $result['title']; ?>" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">副标题</td>
            <td width="83%"><input type="text" name="english_title" id="english_title" class="input_text" value="<?php echo $result['english_title']; ?>" /></td>
          </tr>
          <tr>
            <td class="label">上传图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="<?php echo $result['picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','sys_mobileweb_picture',500,250)" value="上传图片"> (2000*511)</td>
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
	editor.setContent("");
	return false;
}
//-->
</script>
<?php require_once("pagefooter.php"); ?>