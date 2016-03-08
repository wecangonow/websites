<?php
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
if($_REQUEST["action"]=="edit")
{
    $id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$link_url = !empty($_POST['link_url']) ? $_POST['link_url'] : '';
    $condition="id=".$id;
    $dataArray = array("picture"=>$picture,"link_url"=>$link_url);
	$mysql->update("pic",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="pic_view.php?id='.$id.'";</script>';
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
if($id==3)
{
	$pic_size="(2000*331)";
}
elseif($id==4)
{
	$pic_size="(2000*331)";
}
elseif($id==21)
{
	$pic_size="(1349*160)";
}elseif($id==22)
{
	$pic_size="(1349*160)";
}
elseif($id==23)
{
	$pic_size="(1349*160)";
}
elseif($id==24)
{
	$pic_size="(1349*160)";
}
elseif($id==25)
{
	$pic_size="(1349*160)";
}
elseif($id==26)
{
	$pic_size="(1349*160)";
}
elseif($id==27)
{
	$pic_size="(1349*160)";
}
elseif($id==28)
{
	$pic_size="(1349*160)";
}
elseif($id==29)
{
	$pic_size="(1349*160)";
}
elseif($id==30)
{
	$pic_size="(1349*160)";
}
else
{
	$pic_size="(2000*331)";
}

?>
    <!-- tab body -->
    <div id="tabbody-div">
      <form action="pic_view.php?action=edit&id=<?php echo $id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">上传图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="<?php echo $result['picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','sys_mobileweb_picture',500,250)" value="上传图片"> <?php echo $pic_size; ?></td>
          </tr>
<?php
if($id==0)
{
?>
          <tr>
            <td class="label">链接</td>
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