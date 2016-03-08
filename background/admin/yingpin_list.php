<?php
require_once("pageheader.php");
$keywords = !isset($_REQUEST['keywords'])? '': trim($_REQUEST['keywords']);
if ($_REQUEST['action'] == 'delete')
{
	$id=$_REQUEST['id'];
	$keywords = !isset($_REQUEST['keywords'])? '': trim($_REQUEST['keywords']);
	$page = empty($_REQUEST['page'])? '': trim($_REQUEST['page']);
	$condition="id=".$id;
	$mysql->delete("yingpin",$condition);
	echo '<script>alert("操作成功");location.href="yingpin_list.php?keywords='.$keywords.'&page='.$page.'";</script>';
	exit;
}
elseif ($_REQUEST['action'] == 'batch')
{
	$selectdel=implode(',',$_REQUEST['selectdel']);
	$keywords = !isset($_REQUEST['keywords'])? '': trim($_REQUEST['keywords']);
	$page = empty($_REQUEST['page'])? '': trim($_REQUEST['page']);
	if($_REQUEST["types"]=='remove')
	{
		$condition="id in ($selectdel)";
		$mysql->delete("yingpin",$condition);
	}
	elseif($_REQUEST["types"]=='is_show')
	{
		$condition="id in ($selectdel)";
		$dataArray = array("is_show"=>1);
		$mysql->update("yingpin",$dataArray,$condition);
	}
	elseif($_REQUEST["types"]=='not_is_show')
	{
		$condition="id in ($selectdel)";
		$dataArray = array("is_show"=>0);
		$mysql->update("yingpin",$dataArray,$condition);
	}
	echo '<script>alert("操作成功");location.href="yingpin_list.php?keywords='.$keywords.'&page='.$page.'";</script>';
	exit;
}
?>

<!-- 文章列表 -->
<form method="post" action="yingpin_list.php?keywords=<?php echo $keywords; ?>&page=<?php echo $page; ?>" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table width="1103" cellpadding="3" cellspacing="1">
  <tr>
    <th width="54"><input name="checkall" id="checkall" type="checkbox" /></th>
    <th width="75">ID</th>
    <th width="306">应聘职位</th>
    <th width="166">姓名</th>
    <th width="170">性别</th>
    <th width="201">应聘时间</th>
    <th width="79">操作</th>
  <tr>
<?php 
$maxnum = 50;  //每页显示记录条数
$sql = "SELECT * FROM yingpin where 1=1";
if($keywords!='')
{
	$sql = $sql." and (username like '%$keywords%' or job_title like '%$keywords%' )";
}
$sql = $sql." order by id desc";
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
foreach($row as $result)
{
?>
  <tr>
    <td align="center"><input type="checkbox" name="selectdel[]" value="<?php echo $result['id']; ?>" /></td>
    <td align="center"><?php echo $result['id']; ?></td>
    <td class="first-cell" style=""><a href="yingpin_view.php?id=<?php echo $result['id']; ?>"><?php echo $result['job_title']; ?></a></td>
    <td align="center"><?php echo $result['username']; ?></td>
    <td align="center"><?php echo $result['sex']; ?></td>
    <td align="center"><?php echo $result['add_time']; ?></td>
    <td align="center">
     <a href="yingpin_list.php?action=delete&id=<?php echo $result['id']; ?>" title="" onClick="return confirm('您确定进行删除操作吗？')"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
    </td>
  </tr>
<?php
}
$gotoPageFirst = "yingpin_list.php?keywords=".$keywords."&page=1";
$gotoPagePrev = "yingpin_list.php?keywords=".$keywords."&page=".($page-1);
$gotoPageNext = "yingpin_list.php?keywords=".$keywords."&page=".($page-1);
$gotoPageFirst = "yingpin_list.php?keywords=".$keywords."&page=".$totalpages;
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

<div>
  <input type="hidden" name="action" value="batch" />
  <select id="types" name="types" onchange="changeAction()">
    <option value="">请选择...</option>
    <option value="remove">移除</option>
  </select>
  <input type="submit" value="提交" id="btnSubmit" name="btnSubmit" class="button" disabled="disabled" />
</div>
</form>
<script language="javascript">
<!--
function gotopages()
{
	window.location.href='yingpin_list.php?keywords='+$("#keywords").val()+'&page='+$("#gotoPage").val();
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