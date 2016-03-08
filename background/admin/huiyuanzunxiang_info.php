<?php
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
if($_REQUEST["action"]=="edit")
{
    $id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
	$text_picture = !empty($_POST['text_picture']) ? $_POST['text_picture'] : '';
	$text2_picture = !empty($_POST['text2_picture']) ? $_POST['text2_picture'] : '';
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
    $add_time = !empty($_POST['add_time']) ? $_POST['add_time'] : date('Y-m-d H:i:s',time());
    $content = !empty($_POST['content']) ? $_POST['content'] : '';
    $condition="id=".$id;
    $dataArray = array("text_picture"=>$text_picture,"text2_picture"=>$text2_picture,"picture"=>$picture,"content"=>$content,"add_time"=>$add_time);
	$mysql->update("news",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="huiyuanzunxiang_info.php?id='.$id.'";</script>';
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
      <form action="huiyuanzunxiang_info.php?action=edit&id=<?php echo $id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">标题图片一</td>
            <td><input type="text" name="text_picture" id="text_picture" class="input_text" value="<?php echo $result['text_picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=text_picture&saveTo=../../upload/images/&showPath=upload/images/','text_picture',500,250)" value="上传图片"> (1200*76)</td>
          </tr>
          <tr>
            <td class="label">标题图片二</td>
            <td><input type="text" name="text2_picture" id="text2_picture" class="input_text" value="<?php echo $result['text2_picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=text2_picture&saveTo=../../upload/images/&showPath=upload/images/','text2_picture',500,250)" value="上传图片"> (800*32)</td>
          </tr>
          <tr>
            <td class="label">右侧图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="<?php echo $result['picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> (361*432)</td>
          </tr>
          <tr>
            <td class="label">详情</td>
            <td>
              <script id="content" name="content" type="text/plain"><?php echo $result['content']; ?></script>
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
}
//-->
</script>
<?php require_once("pagefooter.php"); ?>