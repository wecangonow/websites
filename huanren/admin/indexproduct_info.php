<?php
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
if($_REQUEST["action"]=="edit")
{
    $id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$ad_text = !empty($_POST['ad_text']) ? $_POST['ad_text'] : '';
	$ad_text_2 = !empty($_POST['ad_text_2']) ? $_POST['ad_text_2'] : '';
	$ad_text_3 = !empty($_POST['ad_text_3']) ? $_POST['ad_text_3'] : '';
	$note = !empty($_POST['note']) ? $_POST['note'] : '';
    $condition="id=".$id;
    $dataArray = array("picture"=>$picture,"note"=>$note,"ad_text"=>$ad_text,"ad_text_2"=>$ad_text_2,"ad_text_3"=>$ad_text_3);
	$mysql->update("news",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="indexproduct_info.php?id='.$id.'";</script>';
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
$pic_size="(630*25)";
?>
    <!-- tab body -->
    <div id="tabbody-div">
      <form action="indexproduct_info.php?action=edit&id=<?php echo $id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">广告图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="<?php echo $result['picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> <?php echo $pic_size; ?></td>
          </tr>
          <tr>
            <td class="label">右侧标语一</td>
            <td><input type="text" name="ad_text" id="ad_text" class="input_text" value="<?php echo $result['ad_text']; ?>" /></td>
          </tr>
          <tr>
            <td class="label">右侧标语二</td>
            <td><input type="text" name="ad_text_2" id="ad_text_2" class="input_text" value="<?php echo $result['ad_text_2']; ?>" /></td>
          </tr>
          <tr>
            <td class="label">右侧标语三</td>
            <td><input type="text" name="ad_text_3" id="ad_text_3" class="input_text" value="<?php echo $result['ad_text_3']; ?>" /></td>
          </tr>
          <tr>
            <td class="label">简介</td>
            <td>
              <script id="note" name="note" type="text/plain"><?php echo $result['note']; ?></script>
<script type="text/javascript">  
    var editor = new UE.ui.Editor({initialFrameHeight:400,initialFrameWidth:800 });  
        editor.render("note");  
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

//-->
</script>
<?php require_once("pagefooter.php"); ?>