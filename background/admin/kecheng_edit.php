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
	$company_title = !empty($_POST['company_title']) ? $_POST['company_title'] : '';
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$laiyuan = !empty($_POST['laiyuan']) ? $_POST['laiyuan'] : '';
	$tags = !empty($_POST['tags']) ? $_POST['tags'] : '';
	$note = !empty($_POST['note']) ? Textarea_Out($_POST['note']) : '';
    $add_time = !empty($_POST['add_time']) ? $_POST['add_time'] : date('Y-m-d H:i:s',time());
    $content = !empty($_POST['content']) ? $_POST['content'] : '';
	$syxy_content = !empty($_POST['syxy_content']) ? $_POST['syxy_content'] : '';
	$kcts_content = !empty($_POST['kcts_content']) ? $_POST['kcts_content'] : '';
	$kbxx_content = !empty($_POST['kbxx_content']) ? $_POST['kbxx_content'] : '';
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
    $condition="id=".$id;
    $dataArray = array("title"=>$title,"company_title"=>$company_title,"picture"=>$picture,"laiyuan"=>$laiyuan,"tags"=>$tags,"sort_order"=>$sort_order,"note"=>$note,"content"=>$content,"syxy_content"=>$syxy_content,"kcts_content"=>$kcts_content,"kbxx_content"=>$kbxx_content,"add_time"=>$add_time);
	$mysql->update("news",$dataArray,$condition);
	$condition="kecheng_id=".$id;
	$mysql->delete("kecheng_model_value",$condition);
	$parent_sql="select * from news_category where parent_id=1 order by sort_order asc,cat_id asc";
	$parent_row = $mysql->get_all($parent_sql);
	foreach($parent_row as $parent_row_result)
	{
		$dataArray = array("kecheng_id"=>$id,"model_id"=>$parent_row_result['cat_id'],"model_value_id"=>implode(",",$_POST['cat_'.$parent_row_result['cat_id']]));
		$mysql->insert("kecheng_model_value",$dataArray);
	}
	echo '<script>alert("操作成功");location.href="kecheng_list.php?cat_id='.$L_cat_id.'&keywords='.$L_keywords.'&page='.$L_page.'";</script>';
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
      <form action="kecheng_edit.php?action=edit&id=<?php echo $id; ?>&L_cat_id=<?php echo $L_cat_id; ?>&L_keywords=<?php echo $L_keywords; ?>&L_page=<?php echo $L_page; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
<?php
$parent_sql="select * from news_category where parent_id=1 order by sort_order asc,cat_id asc";
$parent_row = $mysql->get_all($parent_sql);
foreach($parent_row as $parent_row_result)
{
?>
          <tr>
            <td class="label"><?php echo $parent_row_result['cat_name'];?></td>
            <td>
            <?php
			$cat_sql="select * from news_category where parent_id=".$parent_row_result['cat_id']." order by sort_order asc,cat_id asc";
			$cat_row = $mysql->get_all($cat_sql);
			foreach($cat_row as $cat_row_result)
			{
				$model_value_sql="select * from kecheng_model_value where model_id=".$parent_row_result['cat_id']." and kecheng_id=".$result['id']."";
				$model_value = $mysql->get_one($model_value_sql);
			?>
            <input name="cat_<?php echo $cat_row_result['parent_id'];?>[]" type="checkbox" value="<?php echo $cat_row_result['cat_id']; ?>"<?php if(strpos(','.$model_value['model_value_id'].',',','.$cat_row_result['cat_id'].',')!== false) {?> checked="checked"<?php }?> /> <?php echo $cat_row_result['cat_name']; ?>
            <?php
			}
			?>
            </td>
          </tr>
<?php
}
?>
          <tr>
            <td width="17%" class="label">标题</td>
            <td width="83%"><input type="text" name="title" id="title" class="input_text" value="<?php echo $result['title']; ?>" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">排序</td>
            <td width="83%"><input type="text" name="sort_order" id="sort_order" class="input_text_3" value="<?php echo $result['sort_order']; ?>" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">更新时间</td>
            <td width="83%"><input type="text" name="add_time" id="add_time" class="input_text_2" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php echo date("Y-m-d H:i:s",strtotime($result["add_time"])); ?>" /></td>
          </tr>
          <tr>
            <td class="label">简介</td>
            <td><textarea name="note" id="note" class="input_textarea"><?php echo Textarea_In($result['note']); ?></textarea></td>
          </tr>
          <tr>
            <td class="label">课程简介</td>
            <td>
              <script id="content" name="content" type="text/plain"><?php echo $result['content']; ?></script>
<script type="text/javascript">  
    var editor = new UE.ui.Editor({initialFrameHeight:400,initialFrameWidth:800 });  
        editor.render("content");  
</script> 

            </td>
          </tr>
          <tr>
            <td class="label">适用学员</td>
            <td>
              <script id="syxy_content" name="syxy_content" type="text/plain"><?php echo $result['syxy_content']; ?></script>
<script type="text/javascript">  
    var editor = new UE.ui.Editor({initialFrameHeight:400,initialFrameWidth:800 });  
        editor.render("syxy_content");  
</script> 

            </td>
          </tr>
          <tr>
            <td class="label">课程特色</td>
            <td>
              <script id="kcts_content" name="kcts_content" type="text/plain"><?php echo $result['kcts_content']; ?></script>
<script type="text/javascript">  
    var editor = new UE.ui.Editor({initialFrameHeight:400,initialFrameWidth:800 });  
        editor.render("kcts_content");  
</script> 

            </td>
          </tr>
          <tr>
            <td class="label">开班分校</td>
            <td>
              <script id="kbxx_content" name="kbxx_content" type="text/plain"><?php echo $result['kbxx_content']; ?></script>
<script type="text/javascript">  
    var editor = new UE.ui.Editor({initialFrameHeight:400,initialFrameWidth:800 });  
        editor.render("kbxx_content");  
</script> 

            </td>
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