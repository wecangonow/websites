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
	echo '<script>alert("操作成功");location.href="huangpaikecheng_list.php?cat_id='.$cat_id.'";</script>';
	exit;
}

if($_REQUEST["action"]=="edit")
{
	$id = empty($_REQUEST['id'])? 0: trim($_REQUEST['id']);
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
	$note = !empty($_POST['note']) ? $_POST['note'] : '';
	$link_url = !empty($_POST['link_url']) ? $_POST['link_url'] : '';
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
	$condition="id=".$id;
    $dataArray = array("title"=>$title,"note"=>$note,"link_url"=>$link_url,"sort_order"=>$sort_order);
	$mysql->update("pic",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="huangpaikecheng_list.php?cat_id='.$cat_id.'";</script>';
	exit;
}

if ($_REQUEST['action'] == 'delete')
{
	$id=$_REQUEST['id'];
	$condition="id=".$id;
	$mysql->delete("pic",$condition);
	echo '<script>alert("操作成功");location.href="huangpaikecheng_list.php?cat_id='.$cat_id.'";</script>';
	exit;
}
?>

<!-- 文章列表 -->

  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table width="1103" cellpadding="3" cellspacing="1">
  <tr>
    <th width="249">标题</th>
    <th width="278">简述</th>
    <th width="231">链接</th>
    <th width="211">排序</th>
    <th width="96">操作</th>
  <tr>
<?php 
$sql = "SELECT * FROM pic where cat_id=".$cat_id." order by sort_order asc,id asc";
$row=$mysql->get_all($sql);
foreach($row as $result)
{
?>
  <form method="post" action="huangpaikecheng_list.php?action=edit&id=<?php echo $result['id']; ?>&cat_id=<?php echo $result['cat_id']; ?>" name="listForm_<?php echo $result['id']; ?>">
  <tr>
    <td align="center" class="first-cell" style=""><input type='text' name='title' class="input_text_2" value='<?php echo $result['title']; ?>' /></td>
    <td align="center"><input type='text' name='note' class="input_text_2" value='<?php echo $result['note']; ?>' /></td>
    <td align="center"><input type='text' name='link_url' class="input_text_2" value='<?php echo $result['link_url']; ?>' /></td>
    <td align="center"><input type='text' name='sort_order' class="input_text_3" value='<?php echo $result['sort_order']; ?>' /></td>
    <td align="center">
      <input name="submit" type="submit" value="更新" />
    </td>
  </tr>
  </form>
<?php 
}
?>
</table>
<!-- end goods list -->



</div>

<?php
require_once("pagefooter.php");
?>