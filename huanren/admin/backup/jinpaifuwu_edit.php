<?php
require_once("pageheader.php");
$L_cat_id = !isset($_REQUEST['L_cat_id'])? 0 : trim($_REQUEST['L_cat_id']);
$L_keywords = !isset($_REQUEST['L_keywords'])? '': trim($_REQUEST['L_keywords']);
$L_page = empty($_REQUEST['L_page'])? '': trim($_REQUEST['L_page']);
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
if($_REQUEST["action"]=="edit")
{
    $id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
	$title_2 = !empty($_POST['title_2']) ? $_POST['title_2'] : '';
	$title_3 = !empty($_POST['title_3']) ? $_POST['title_3'] : '';
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$link_url = !empty($_POST['link_url']) ? $_POST['link_url'] : '';
	$note = !empty($_POST['note']) ? Textarea_Out($_POST['note']) : '';
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
    $condition="id=".$id;
    $dataArray = array("title"=>$title,"title_2"=>$title_2,"title_3"=>$title_3,"picture"=>$picture,"link_url"=>$link_url,"sort_order"=>$sort_order,"note"=>$note);
	$mysql->update("pic",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="jinpaifuwu_list.php?cat_id='.$L_cat_id.'&keywords='.$L_keywords.'&page='.$L_page.'";</script>';
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
$sql="select * from pic where id=".$id;
$result = $mysql->get_one($sql);
?>
    <!-- tab body -->
    <div id="tabbody-div">
      <form action="jinpaifuwu_edit.php?action=edit&id=<?php echo $id; ?>&L_cat_id=<?php echo $L_cat_id; ?>&L_keywords=<?php echo $L_keywords; ?>&L_page=<?php echo $L_page; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">标题</td>
            <td width="83%"><input type="text" name="title" id="title" class="input_text" value="<?php echo $result['title']; ?>" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">副标题</td>
            <td width="83%"><input type="text" name="title_2" id="title_2" class="input_text" value="<?php echo $result['title_2']; ?>" /></td>
          </tr>
          <tr>
            <td class="label">图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="<?php echo $result['picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> (300*360)</td>
          </tr>
          <tr>
            <td width="17%" class="label">图片标题</td>
            <td width="83%"><input type="text" name="title_3" id="title_3" class="input_text" value="<?php echo $result['title_3']; ?>" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">链接地址</td>
            <td width="83%"><input type="text" name="link_url" id="link_url" class="input_text" value="<?php echo $result['link_url']; ?>" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">排序</td>
            <td width="83%"><input type="text" name="sort_order" id="sort_order" class="input_text_3" value="<?php echo $result['sort_order']; ?>" /></td>
          </tr>
          <tr>
            <td class="label">简介</td>
            <td><textarea name="note" id="note" class="input_textarea"><?php echo Textarea_In($result['note']); ?></textarea></td>
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
//-->
</script>
<?php require_once("pagefooter.php"); ?>