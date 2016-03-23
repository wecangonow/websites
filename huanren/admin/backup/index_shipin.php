<?php
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
if($_REQUEST["action"]=="edit")
{
    $id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
    $picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$shipin_url = !empty($_POST['shipin_url']) ? $_POST['shipin_url'] : '';
    $condition="id=".$id;
    $dataArray = array("title"=>$title,"picture"=>$picture,"shipin_url"=>$shipin_url);
	$mysql->update("news",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="index_shipin.php?id='.$id.'";</script>';
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
      <form action="index_shipin.php?action=edit&id=<?php echo $id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">标题</td>
            <td width="83%"><input type="text" name="title" id="title" class="input_text" value="<?php echo $result['title']; ?>" /></td>
          </tr>
          <tr>
            <td class="label">背景图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="<?php echo $result['picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> (239*191)</td>
          </tr>
          <tr>
            <td width="17%" class="label">视频地址</td>
            <td width="83%"><input type="text" name="shipin_url" id="shipin_url" class="input_text" value="<?php echo $result['shipin_url']; ?>" /></td>
          </tr>
        </table>
        <div class="button-div">
          <input type="submit" value="保存" class="button" />
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