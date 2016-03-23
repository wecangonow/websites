<?php
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
if($id==21)
{
	$pic_size="266*179";
}
elseif($id==22)
{
	$pic_size="608*349";
}
elseif($id==23)
{
	$pic_size="608*349";
}
if($_REQUEST["action"]=="edit")
{
    $id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
    $title = !empty($_POST['title']) ? $_POST['title'] : '';
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$link_url = !empty($_POST['link_url']) ? $_POST['link_url'] : '';
	$note = !empty($_POST['note']) ? Textarea_Out($_POST['note']) : '';
    $add_time = date('y-m-d h:i:s',time());
    $content = !empty($_POST['content']) ? $_POST['content'] : '';
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
    $condition="id=".$id;
    $dataArray = array("picture"=>$picture,"link_url"=>$link_url,"note"=>$note,"content"=>$content,"add_time"=>$add_time);
	$mysql->update("news",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="index_info.php?id='.$id.'";</script>';
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
      <form action="index_info.php?action=edit&id=<?php echo $id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">右侧图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="<?php echo $result['picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> (<?php echo $pic_size; ?>)</td>
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
function check_submit()
{

}
//-->
</script>
<?php require_once("pagefooter.php"); ?>