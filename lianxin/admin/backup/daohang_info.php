<?php
require_once("pageheader.php");
$cat_id = !empty($_REQUEST['cat_id']) ? $_REQUEST['cat_id'] : 0;
if($_REQUEST["action"]=="edit")
{
    $cat_id = !empty($_REQUEST['cat_id']) ? $_REQUEST['cat_id'] : 0;
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$note = !empty($_POST['note']) ? $_POST['note'] : '';
    $condition="cat_id=".$cat_id;
    $dataArray = array("picture"=>$picture,"note"=>$note,);
	$mysql->update("news_category",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="daohang_info.php?cat_id='.$cat_id.'";</script>';
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
$sql="select * from news_category where cat_id=".$cat_id;
$result = $mysql->get_one($sql);
$pic_size="(175*130)";
?>
    <!-- tab body -->
    <div id="tabbody-div">
      <form action="daohang_info.php?action=edit&cat_id=<?php echo $cat_id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">上传图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="<?php echo $result['picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> <?php echo $pic_size; ?></td>
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

//-->
</script>
<?php require_once("pagefooter.php"); ?>