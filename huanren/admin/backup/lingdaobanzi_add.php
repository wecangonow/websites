<?php
require_once("pageheader.php");
$cat_id=$_REQUEST['cat_id'];
if($_REQUEST["action"]=="add")
{
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
	$company_title = !empty($_POST['company_title']) ? $_POST['company_title'] : '';
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$laiyuan = !empty($_POST['laiyuan']) ? $_POST['laiyuan'] : '';
	$tags = !empty($_POST['tags']) ? $_POST['tags'] : '';
	$note = !empty($_POST['note']) ? Textarea_Out($_POST['note']) : '';
    $add_time = !empty($_POST['add_time']) ? $_POST['add_time'] : date('Y-m-d H:i:s',time());
    $content = !empty($_POST['content']) ? $_POST['content'] : '';
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
    $dataArray = array("title"=>$title,"company_title"=>$company_title,"cat_id"=>$cat_id,"picture"=>$picture,"laiyuan"=>$laiyuan,"tags"=>$tags,"sort_order"=>$sort_order,"note"=>$note,"content"=>$content,"add_time"=>$add_time);
	$mysql->insert("news",$dataArray);
	echo '<script>alert("操作成功");location.href="lingdaobanzi_add.php?cat_id='.$cat_id.'";</script>';
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
      <form action="lingdaobanzi_add.php?action=add&cat_id=<?php echo $cat_id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">标题</td>
            <td width="83%"><input type="text" name="title" id="title" class="input_text" value="" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">公司标题</td>
            <td width="83%"><input type="text" name="company_title" id="company_title" class="input_text" value="" /></td>
          </tr>
          <tr>
            <td class="label">上传图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> (143*178)</td>
          </tr>
          <tr>
            <td width="17%" class="label">来源</td>
            <td width="83%"><input type="text" name="laiyuan" id="laiyuan" class="input_text_3" value="北京绍兴企业商会" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">关键词</td>
            <td width="83%"><input type="text" name="tags" id="tags" class="input_text_3" value="北京绍兴企业商会" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">排序</td>
            <td width="83%"><input type="text" name="sort_order" id="sort_order" class="input_text_3" value="50" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">更新时间</td>
            <td width="83%"><input type="text" name="add_time" id="add_time" class="input_text_2" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php echo date('Y-m-d H:i:s',time());?>" /></td>
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