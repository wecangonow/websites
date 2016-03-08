<?php
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
if($_REQUEST["action"]=="edit")
{
    $id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$text_picture = !empty($_POST['text_picture']) ? $_POST['text_picture'] : '';
	$link_url = !empty($_POST['link_url']) ? $_POST['link_url'] : '';
    $condition="id=".$id;
    $dataArray = array("picture"=>$picture,"text_picture"=>$text_picture,"link_url"=>$link_url);
	$mysql->update("pic",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="index_pic_view.php?id='.$id.'";</script>';
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
$sql="select * from pic where id=".$id;
$result = $mysql->get_one($sql);
if($id==10)
{
	$pic_size="(196*194)";
	$text_pic_size="(88*248)";
}
elseif($id==11)
{
	$pic_size="(1248*386)";
	$text_pic_size="(541*173)";
}
?>
    <!-- tab body -->
    <div id="tabbody-div">
      <form action="index_pic_view.php?action=edit&id=<?php echo $id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">上传图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="<?php echo $result['picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> <?php echo $pic_size; ?></td>
          </tr>
          <tr>
            <td class="label">上传文字图片</td>
            <td><input type="text" name="text_picture" id="text_picture" class="input_text" value="<?php echo $result['text_picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=text_picture&saveTo=../../upload/images/&showPath=upload/images/','text_picture',500,250)" value="上传图片"> <?php echo $text_pic_size; ?></td>
          </tr>
<?php
if($id==10)
{
?>
          <tr>
            <td class="label">链接地址</td>
            <td><input type="text" name="link_url" id="link_url" class="input_text" value="<?php echo $result['link_url']; ?>" /></td>
          </tr>
<?php
}
?>
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