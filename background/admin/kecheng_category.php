<?php
require_once("pageheader.php");
$parent_id = empty($_REQUEST['parent_id'])? 0: trim($_REQUEST['parent_id']);
if($_REQUEST["action"]=="add")
{
    $cat_name = !empty($_POST['cat_name']) ? $_POST['cat_name'] : '';
	$parent_id = empty($_REQUEST['parent_id'])? 0: trim($_REQUEST['parent_id']);
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
    $dataArray = array("cat_name"=>$cat_name,"sort_order"=>$sort_order,"parent_id"=>$parent_id);
	$mysql->insert("news_category",$dataArray);
	echo '<script>alert("操作成功");location.href="kecheng_category.php?parent_id='.$parent_id.'";</script>';
	exit;
}

if($_REQUEST["action"]=="edit")
{
	$cat_id = empty($_REQUEST['cat_id'])? 0: trim($_REQUEST['cat_id']);
    $cat_name = !empty($_POST['cat_name']) ? $_POST['cat_name'] : '';
	$parent_id = empty($_REQUEST['parent_id'])? 0: trim($_REQUEST['parent_id']);
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
	$condition="cat_id=".$cat_id;
    $dataArray = array("cat_name"=>$cat_name,"sort_order"=>$sort_order);
	$mysql->update("news_category",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="kecheng_category.php?parent_id='.$parent_id.'";</script>';
	exit;
}

if ($_REQUEST['action'] == 'delete')
{
	$cat_id=$_REQUEST['cat_id'];
    $parent_id = empty($_REQUEST['parent_id'])? 0: trim($_REQUEST['parent_id']);
	$condition="cat_id=".$cat_id;
	$mysql->delete("news_category",$condition);
	echo '<script>alert("操作成功");location.href="kecheng_category.php?parent_id='.$parent_id.'";</script>';
	exit;
}
?>

<!-- 文章列表 -->

  <!-- start goods list -->
  <div class="list-div" id="listDiv">
    <?php
	if($parent_id!=1)
	{
	?>
	<h3 align="center">上级分类：<?php echo return_category_name($parent_id);?></h3>
    <?php
	}
	?>
<table width="1103" cellpadding="3" cellspacing="1">
  <tr>
    <th width="524">标题</th>
    <th width="389">排序</th>
    <th width="166">操作</th>
  <tr>
<?php 
$sql = "SELECT * FROM news_category where parent_id=".$parent_id." order by sort_order asc,cat_id asc";
$row=$mysql->get_all($sql);
foreach($row as $result)
{
?>
  <form method="post" action="kecheng_category.php?action=edit&cat_id=<?php echo $result['cat_id']; ?>&parent_id=<?php echo $result['parent_id']; ?>" name="listForm_<?php echo $result['cat_id']; ?>">
  <tr>
    <td align="center" class="first-cell" style=""><input type='text' name='cat_name' class="input_text" value='<?php echo $result['cat_name']; ?>' /></td>
    <td align="center"><input type='text' name='sort_order' class="input_text_3" value='<?php echo $result['sort_order']; ?>' /></td>
    <td align="center">
    <?php
	if($result['parent_id']==1)
	{
	?>
    <a href="kecheng_category.php?parent_id=<?php echo $result['cat_id']; ?>">二级分类管理</a>
    <?php
	}
	?>
      <input name="submit" type="submit" value="更新" />
      <a href="kecheng_category.php?action=delete&cat_id=<?php echo $result['cat_id']; ?>&parent_id=<?php echo $result['parent_id']; ?>" title="删除" onClick="return confirm('您确定进行删除操作吗？')"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
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
    <th width="523">标题</th>
    <th width="393">排序</th>
    <th width="163">操作</th>
  <tr>
  <form method="post" action="kecheng_category.php?action=add&parent_id=<?php echo $parent_id; ?>" name="listForm" onsubmit="return confirmSubmit(this)">
  <tr>
    <td align="center" class="center" style=""><input type='text' name='cat_name' class="input_text" value='' /></td>
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