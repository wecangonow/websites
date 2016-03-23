<?php
require_once("pageheader.php");
$parent_id = empty($_REQUEST['parent_id'])? 0: trim($_REQUEST['parent_id']);
if($_REQUEST["action"]=="add")
{
	$parent_id = empty($_REQUEST['parent_id'])? 0: trim($_REQUEST['parent_id']);
	$cat_id = empty($_REQUEST['cat_id'])? 0: trim($_REQUEST['cat_id']);
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$file_url = !empty($_POST['file_url']) ? $_POST['file_url'] : '';
	$laiyuan = !empty($_POST['laiyuan']) ? $_POST['laiyuan'] : '';
	$tags = !empty($_POST['tags']) ? $_POST['tags'] : '';
	$note = !empty($_POST['note']) ? Textarea_Out($_POST['note']) : '';
    $add_time = !empty($_POST['add_time']) ? $_POST['add_time'] : date('Y-m-d H:i:s',time());
    $content = !empty($_POST['content']) ? $_POST['content'] : '';
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
    $dataArray = array("parent_id"=>$parent_id,"cat_id"=>$cat_id,"title"=>$title,"cat_id"=>$cat_id,"picture"=>$picture,"file_url"=>$file_url,"laiyuan"=>$laiyuan,"tags"=>$tags,"sort_order"=>$sort_order,"note"=>$note,"content"=>$content,"add_time"=>$add_time);
	$mysql->insert("news",$dataArray);
	echo '<script>alert("操作成功");location.href="dongtai_add.php?parent_id='.$parent_id.'";</script>';
	exit;
}

?>
<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab">添加信息</span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
      <form action="dongtai_add.php?action=add&parent_id=<?php echo $parent_id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">分类</td>
            <td>
            <select name="cat_id" id="cat_id">
            <?php
			$category_sql="select * from news_category where parent_id=".$parent_id." order by sort_order asc,cat_id asc";
			$category_row = $mysql->get_all($category_sql);
			foreach($category_row as $category_result)
			{
			?>
            <option value="<?php echo $category_result['cat_id']; ?>"><?php echo $category_result['cat_name']; ?></option>
            <?php
			}
			?>
            </select>
            </td>
          </tr>
          <tr>
            <td width="17%" class="label">标题</td>
            <td width="83%"><input type="text" name="title" id="title" class="input_text" value="" /></td>
          </tr>
            <!--
            <tr>
                <td width="17%" class="label">英文标题</td>
                <td width="83%"><input type="text" name="tags" id="tags" class="input_text_2" value="" /></td>
            </tr>
          <tr>
            <td class="label">上传图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> (283*173)</td>
          </tr>

          <tr>
            <td width="17%" class="label">来源</td>
            <td width="83%"><input type="text" name="laiyuan" id="laiyuan" class="input_text_3" value="华兴控股" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">更新时间</td>
            <td width="83%"><input type="text" name="add_time" id="add_time" class="input_text_2" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php echo date('Y-m-d H:i:s',time());?>" /></td>
          </tr>
          -->
            <tr>
                <td width="17%" class="label">排序</td>
                <td width="83%"><input type="text" name="sort_order" id="sort_order" class="input_text_3" value="50" /></td>
            </tr>
          <tr>
            <td class="label">简介</td>
            <td><textarea name="note" id="note" class="input_textarea"></textarea></td>
          </tr>
          <tr>
            <td class="label">详情</td>
            <td>
              <script id="content" name="content" type="text/plain"></script>
<script type="text/javascript">  
    var editor = new UE.ui.Editor({initialFrameHeight:400,initialFrameWidth:800 });  
        editor.render("content");  
</script> 

            </td>
          </tr>
        </table>

        <div class="button-div">
          <input type="submit" value="提交" class="button" />
        </div>
      </form>
    </div>
</div>
<script language="javascript">
<!--

function check_submit()
{
	if ($("#cat_id").val()==0||$("#cat_id").val()=="")
	{
		alert("请选择正确的分类");
		$("#cat_id").focus();
		return false;
	}
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