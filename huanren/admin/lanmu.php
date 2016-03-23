<?php
require_once("pageheader.php");
$cat_id = empty($_REQUEST['cat_id'])? 0: trim($_REQUEST['cat_id']);
if($_REQUEST["action"]=="add")
{
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
	$link_url = empty($_REQUEST['link_url'])? '': trim($_REQUEST['link_url']);
	$link_title_1 = empty($_REQUEST['link_title_1'])? '': trim($_REQUEST['link_title_1']);
	$link_url_1 = empty($_REQUEST['link_url_1'])? '': trim($_REQUEST['link_url_1']);
	$link_title_2 = empty($_REQUEST['link_title_2'])? '': trim($_REQUEST['link_title_2']);
	$link_url_2 = empty($_REQUEST['link_url_2'])? '': trim($_REQUEST['link_url_2']);
	$link_title_3 = empty($_REQUEST['link_title_3'])? '': trim($_REQUEST['link_title_3']);
	$link_url_3 = empty($_REQUEST['link_url_3'])? '': trim($_REQUEST['link_url_3']);
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
    $dataArray = array("cat_id"=>$cat_id,"title"=>$title,"link_url"=>$link_url,"link_title_1"=>$link_title_1,"link_url_1"=>$link_url_1,"link_title_2"=>$link_title_2,"link_url_2"=>$link_url_2,"link_title_3"=>$link_title_3,"link_url_3"=>$link_url_3,"sort_order"=>$sort_order);
	$mysql->insert("lanmu",$dataArray);
	echo '<script>alert("操作成功");location.href="lanmu.php?cat_id='.$cat_id.'";</script>';
	exit;
}

if($_REQUEST["action"]=="edit")
{
	$id = empty($_REQUEST['id'])? 0: trim($_REQUEST['id']);
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
	$link_url = empty($_REQUEST['link_url'])? '': trim($_REQUEST['link_url']);
	$link_title_1 = empty($_REQUEST['link_title_1'])? '': trim($_REQUEST['link_title_1']);
	$link_url_1 = empty($_REQUEST['link_url_1'])? '': trim($_REQUEST['link_url_1']);
	$link_title_2 = empty($_REQUEST['link_title_2'])? '': trim($_REQUEST['link_title_2']);
	$link_url_2 = empty($_REQUEST['link_url_2'])? '': trim($_REQUEST['link_url_2']);
	$link_title_3 = empty($_REQUEST['link_title_3'])? '': trim($_REQUEST['link_title_3']);
	$link_url_3 = empty($_REQUEST['link_url_3'])? '': trim($_REQUEST['link_url_3']);
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
	$condition="id=".$id;
    $dataArray = array("title"=>$title,"link_url"=>$link_url,"link_title_1"=>$link_title_1,"link_url_1"=>$link_url_1,"link_title_2"=>$link_title_2,"link_url_2"=>$link_url_2,"link_title_3"=>$link_title_3,"link_url_3"=>$link_url_3,"sort_order"=>$sort_order);
	$mysql->update("lanmu",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="lanmu.php?cat_id='.$cat_id.'";</script>';
	exit;
}

if ($_REQUEST['action'] == 'delete')
{
	$id=$_REQUEST['id'];
	$condition="id=".$id;
	$mysql->delete("lanmu",$condition);
	echo '<script>alert("操作成功");location.href="lanmu.php?cat_id='.$cat_id.'";</script>';
	exit;
}
?>

<!-- 文章列表 -->

  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table width="1103" cellpadding="3" cellspacing="1">
  <tr>
    <th width="217">标题</th>
    <th width="189">前台链接</th>
    <th width="189">链接文本1</th>
    <th width="189">链接地址1</th>
    <th width="189">链接文本2</th>
    <th width="189">链接地址2</th>
    <th width="189">链接文本3</th>
    <th width="189">链接地址3</th>
    <th width="189">排序</th>
    <th width="89">操作</th>
  <tr>
<?php 
$sql = "SELECT * FROM lanmu where cat_id=".$cat_id." order by sort_order asc,id asc";
$row=$mysql->get_all($sql);
foreach($row as $result)
{
?>
  <form method="post" action="lanmu.php?action=edit&id=<?php echo $result['id']; ?>&cat_id=<?php echo $result['cat_id']; ?>" name="listForm_<?php echo $result['id']; ?>">
  <tr>
    <td align="center" class="first-cell" style=""><input type='text' name='title' class="input_text_3" value='<?php echo $result['title']; ?>' /></td>
    <td align="center"><input type='text' name='link_url' class="input_text_4" value='<?php echo $result['link_url']; ?>' /></td>
    <td align="center"><input type='text' name='link_title_1' class="input_text_4" value='<?php echo $result['link_title_1']; ?>' /></td>
    <td align="center"><input type='text' name='link_url_1' class="input_text_4" value='<?php echo $result['link_url_1']; ?>' /></td>
    <td align="center"><input type='text' name='link_title_2' class="input_text_4" value='<?php echo $result['link_title_2']; ?>' /></td>
    <td align="center"><input type='text' name='link_url_2' class="input_text_4" value='<?php echo $result['link_url_2']; ?>' /></td>
    <td align="center"><input type='text' name='link_title_3' class="input_text_4" value='<?php echo $result['link_title_3']; ?>' /></td>
    <td align="center"><input type='text' name='link_url_3' class="input_text_4" value='<?php echo $result['link_url_3']; ?>' /></td>
    <td align="center"><input type='text' name='sort_order' class="input_text_4" value='<?php echo $result['sort_order']; ?>' /></td>
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


<table width="1103" cellpadding="3" cellspacing="1" style="margin-top:20px;">
  <tr>
    <th width="217">标题</th>
    <th width="189">前台链接</th>
    <th width="189">链接文本1</th>
    <th width="189">链接地址1</th>
    <th width="189">链接文本2</th>
    <th width="189">链接地址2</th>
    <th width="189">链接文本3</th>
    <th width="189">链接地址3</th>
    <th width="189">排序</th>
    <th width="89">操作</th>
  <tr>
  <form method="post" action="lanmu.php?action=add&cat_id=<?php echo $cat_id; ?>" name="listForm" onsubmit="return confirmSubmit(this)">
  <tr>
    <td align="center" class="center" style=""><input type='text' name='title' class="input_text_4" value='' /></td>
    <td align="center"><input type='text' name='link_url' class="input_text_4" value='' /></td>
    <td align="center"><input type='text' name='link_title_1' class="input_text_4" value='' /></td>
    <td align="center"><input type='text' name='link_url_1' class="input_text_4" value='' /></td>
    <td align="center"><input type='text' name='link_title_2' class="input_text_4" value='' /></td>
    <td align="center"><input type='text' name='link_url_2' class="input_text_4" value='' /></td>
    <td align="center"><input type='text' name='link_title_3' class="input_text_4" value='' /></td>
    <td align="center"><input type='text' name='link_url_3' class="input_text_4" value='' /></td>
    <td align="center"><input type='text' name='sort_order' class="input_text_4" value='50' /></td>
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