<?php
require_once("pageheader.php");
$cat_id = empty($_REQUEST['cat_id'])? 0: trim($_REQUEST['cat_id']);
if($_REQUEST["action"]=="add")
{
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
	$picture = empty($_REQUEST['picture'])? '': trim($_REQUEST['picture']);
	$link_url = empty($_REQUEST['link_url'])? '': trim($_REQUEST['link_url']);
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
    $dataArray = array("cat_id"=>$cat_id,"title"=>$title,"picture"=>$picture,"link_url"=>$link_url,"sort_order"=>$sort_order);
	$mysql->insert("pic",$dataArray);
	echo '<script>alert("操作成功");location.href="links_pic.php?cat_id='.$cat_id.'";</script>';
	exit;
}

if($_REQUEST["action"]=="edit")
{
	$id = empty($_REQUEST['id'])? 0: trim($_REQUEST['id']);
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$link_url = !empty($_POST['link_url']) ? $_POST['link_url'] : '';
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
	$condition="id=".$id;
    $dataArray = array("title"=>$title,"picture"=>$picture,"link_url"=>$link_url,"sort_order"=>$sort_order);
	$mysql->update("pic",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="links_pic.php?cat_id='.$cat_id.'";</script>';
	exit;
}

if ($_REQUEST['action'] == 'delete')
{
	$id=$_REQUEST['id'];
	$condition="id=".$id;
	$mysql->delete("pic",$condition);
	echo '<script>alert("操作成功");location.href="links_pic.php?cat_id='.$cat_id.'";</script>';
	exit;
}
?>

<!-- 文章列表 -->

  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table width="1103" cellpadding="3" cellspacing="1">
  <tr>
    <th width="217">标题</th>
      <!--
    <th width="369">图片</th>
    -->
    <th width="201">链接</th>
    <th width="189">排序</th>
    <th width="89">操作</th>
  <tr>
<?php 
$sql = "SELECT * FROM pic where cat_id=".$cat_id." order by sort_order asc,id asc";
$row=$mysql->get_all($sql);
foreach($row as $result)
{
?>
  <form method="post" action="links_pic.php?action=edit&id=<?php echo $result['id']; ?>&cat_id=<?php echo $result['cat_id']; ?>" name="listForm_<?php echo $result['id']; ?>">
  <tr>
    <td align="center" class="first-cell" style=""><input type='text' name='title' class="input_text_2" value='<?php echo $result['title']; ?>' /></td>
      <!--
    <td align="center"><input type='text' name='picture' id="picture_<?php echo $result['id']; ?>" class="input_text_2" value='<?php echo $result['picture']; ?>' />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture_<?php echo $result['id']; ?>&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> (167*66)</td>
    -->
    <td align="center"><input type='text' name='link_url' class="input_text_2" value='<?php echo $result['link_url']; ?>' /></td>
    <td align="center"><input type='text' name='sort_order' class="input_text_3" value='<?php echo $result['sort_order']; ?>' /></td>
    <td align="center">
      <input name="submit" type="submit" value="更新" />
      <a href="links_pic.php?action=delete&id=<?php echo $result['id']; ?>&cat_id=<?php echo $result['cat_id']; ?>" title="删除" onClick="return confirm('您确定进行删除操作吗？')"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
    </td>
  </tr>
  </form>
<?php 
}
?>
</table>
<!-- end goods list -->


<table width="1103" cellpadding="3" cellspacing="1" style="margin-top:20px;">
  <tr>
    <th width="217">标题</th>
    <!--
    <th width="372">图片</th>
    -->
    <th width="198">链接</th>
    <th width="189">排序</th>
    <th width="89">操作</th>
  <tr>
  <form method="post" action="links_pic.php?action=add&cat_id=<?php echo $cat_id; ?>" name="listForm" onsubmit="return confirmSubmit(this)">
  <tr>
    <td align="center" class="center" style=""><input type='text' name='title' class="input_text_2" value='' /></td>
      <!--
      <td align="center"><input type='text' name='picture' id="picture_0" class="input_text_2" value='' />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture_0&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> (167*66)</td>
      -->
      <td align="center"><input type='text' name='link_url' class="input_text_2" value='' /></td>
      <td align="center"><input type='text' name='sort_order' class="input_text_3" value='50' /></td>
      <td align="center">
        <input name="submit" type="submit" value="新增" />
      </td>
    </tr>
    </form>
  </table>
  </div>

  <?php
require_once("pagefooter.php");
?>