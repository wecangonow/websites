<?php
require_once("pageheader.php");
$cat_id = !isset($_REQUEST['cat_id'])? 0: trim($_REQUEST['cat_id']);
$keywords = !isset($_REQUEST['keywords'])? '': trim($_REQUEST['keywords']);
if ($_REQUEST['action'] == 'delete')
{
	$id=$_REQUEST['id'];
	$L_keywords = !isset($_REQUEST['L_keywords'])? '': trim($_REQUEST['L_keywords']);
	$L_cat_id = !isset($_REQUEST['L_cat_id'])? 0: trim($_REQUEST['L_cat_id']);
	$L_page = empty($_REQUEST['L_page'])? '': trim($_REQUEST['L_page']);
	$condition="id=".$id;
	$mysql->delete("pic",$condition);
	echo '<script>alert("操作成功");location.href="jinpaifuwu_list.php?cat_id='.$L_cat_id.'&keywords='.$L_keywords.'&page='.$L_page.'";</script>';
	exit;
}
elseif ($_REQUEST['action'] == 'batch')
{
	$selectdel=implode(',',$_REQUEST['selectdel']);
	$L_keywords = !isset($_REQUEST['L_keywords'])? '': trim($_REQUEST['L_keywords']);
	$L_cat_id = !isset($_REQUEST['L_cat_id'])? 0: trim($_REQUEST['L_cat_id']);
	$L_page = empty($_REQUEST['L_page'])? '': trim($_REQUEST['L_page']);
	if($_REQUEST["types"]=='remove')
	{
		$condition="id in ($selectdel)";
		$mysql->delete("pic",$condition);
	}
	elseif($_REQUEST["types"]=='is_show')
	{
		$condition="id in ($selectdel)";
		$dataArray = array("is_show"=>1);
		$mysql->update("pic",$dataArray,$condition);
	}
	elseif($_REQUEST["types"]=='not_is_show')
	{
		$condition="id in ($selectdel)";
		$dataArray = array("is_show"=>0);
		$mysql->update("pic",$dataArray,$condition);
	}
	echo '<script>alert("操作成功");location.href="jinpaifuwu_list.php?cat_id='.$L_cat_id.'&keywords='.$L_keywords.'&page='.$L_page.'";</script>';
	exit;
}
?>

<!-- 文章列表 -->
<form method="post" action="jinpaifuwu_list.php?L_cat_id=<?php echo $cat_id; ?>&L_keywords=<?php echo $keywords; ?>&L_page=<?php echo $page; ?>" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table width="1103" cellpadding="3" cellspacing="1">
  <tr>
    <th width="43"><input name="checkall" id="checkall" type="checkbox" /></th>
    <th width="61">ID</th>
    <th width="245">标题</th>
    <th width="553">简述</th>
    <th width="84">排序</th>
    <th width="72">操作</th>
  <tr>
<?php 
$maxnum = 50;  //每页显示记录条数
$sql = "SELECT * FROM pic where 1=1";
if($cat_id!=0)
{
	$sql = $sql." and cat_id=$cat_id";
}
if($keywords!='')
{
	$sql = $sql." and (title like '%$keywords%' )";
}
$sql = $sql." order by sort_order asc,id desc";
$totalRows =$mysql->num_rows($mysql->query($sql));//数据集数据总条数
$totalpages = ceil($totalRows/$maxnum);//计算可分页总数，ceil()为上舍函数
if($totalpages<1)
{
	$totalpages=1;
}
if(!isset($_GET['page']) || !intval($_GET['page']) || $_GET['page'] < 1)
{
	$page = 1;
}
elseif($_GET['page'] > $totalpages)
{
	$page = $totalpages;
}
else
{
	$page = intval($_GET['page']);
}
if($page<=0)
{
	$page=1;
}
$startnum = ($page - 1)*$maxnum; //从数据集第$startnum条开始取，注意数据集是从0开始的
$sql=$sql." limit $startnum,$maxnum";
$row=$mysql->get_all($sql);
foreach ($row AS $k => $v)
{
	$cat_name = $mysql->get_one("SELECT cat_name FROM news_category WHERE cat_id = ".$v['cat_id']);
	$row[$k]['cat_name'] = $cat_name['cat_name'];
}
foreach($row as $result)
{
?>
  <tr>
    <td align="center"><input type="checkbox" name="selectdel[]" value="<?php echo $result['id']; ?>" /></td>
    <td align="center"><?php echo $result['id']; ?></td>
    <td class="first-cell" style=""><a href="jinpaifuwu_edit.php?id=<?php echo $result['id']; ?>&L_cat_id=<?php echo $cat_id; ?>&L_keywords=<?php echo $keywords; ?>&L_page=<?php echo $page; ?>"><?php echo $result['title']; ?></a></td>
    <td align="center"><?php echo $result['note']; ?></td>
    <td align="center"><?php echo $result['sort_order']; ?></td>
    <td align="center">
      <a href="jinpaifuwu_edit.php?id=<?php echo $result['id']; ?>&L_cat_id=<?php echo $cat_id; ?>&L_keywords=<?php echo $keywords; ?>&L_page=<?php echo $page; ?>" title=""><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
    </td>
  </tr>
<?php
}
$gotoPageFirst = "jinpaifuwu_list.php?cat_id=".$cat_id."&keywords=".$keywords."&page=1";
$gotoPagePrev = "jinpaifuwu_list.php?cat_id=".$cat_id."&keywords=".$keywords."&page=".($page-1);
$gotoPageNext = "jinpaifuwu_list.php?cat_id=".$cat_id."&keywords=".$keywords."&page=".($page-1);
$gotoPageFirst = "jinpaifuwu_list.php?cat_id=".$cat_id."&keywords=".$keywords."&page=".$totalpages;
?>
</table>
<!-- end goods list -->

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
    <?php require 'page.php'; ?>
    </td>
  </tr>
</table>
</div>

</form>
<script language="javascript">
<!--
function gotopages()
{
	window.location.href='jinpaifuwu_list.php?cat_id=<?php echo $cat_id; ?>&keywords='+$("#keywords").val()+'&page='+$("#gotoPage").val();
}
function changeAction()
{
	if ($("#types").val()!=="")
	{
		$("#btnSubmit").attr("disabled","");
	}
	else
	{
		$("#btnSubmit").attr("disabled","disabled");
	}
}
//-->
</script>
<SCRIPT type="text/javascript">
$(document).ready(function() {
 $("#checkall").click(function(){
  if($(this).attr("checked") == true){ //check all
   $("input[name='selectdel[]']").each(function(){
    $(this).attr("checked",true);
   });
  }else{
   $("input[name='selectdel[]']").each(function(){
    $(this).attr("checked",false);
   });
  }
 });
});
</SCRIPT>

<?php
require_once("pagefooter.php");
?>