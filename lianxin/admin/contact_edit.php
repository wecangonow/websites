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
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
	$address = !empty($_POST['address']) ? $_POST['address'] : '';
	$tel = !empty($_POST['tel']) ? $_POST['tel'] : '';
	$mobile = !empty($_POST['mobile']) ? $_POST['mobile'] : '';
	$email = !empty($_POST['email']) ? $_POST['email'] : '';
	$postal = !empty($_POST['postal']) ? $_POST['postal'] : '';
    $add_time = !empty($_POST['add_time']) ? $_POST['add_time'] : date('Y-m-d H:i:s',time());
    $sort_order=!empty($_POST['sort_order']) ? $_POST['sort_order'] : 50;
    $condition="id=".$id;
    $dataArray = array("title"=>$title,"picture"=>$picture,"address"=>$address,"tel"=>$tel,"mobile"=>$mobile,"email"=>$email,"postal"=>$postal,"sort_order"=>$sort_order,"add_time"=>$add_time);
	$mysql->update("news",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="contact_list.php?cat_id='.$L_cat_id.'&keywords='.$L_keywords.'&page='.$L_page.'";</script>';
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
      <form action="contact_edit.php?action=edit&id=<?php echo $id; ?>&L_cat_id=<?php echo $L_cat_id; ?>&L_keywords=<?php echo $L_keywords; ?>&L_page=<?php echo $L_page; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">标题</td>
            <td width="83%"><input type="text" name="title" id="title" class="input_text" value="<?php echo $result['title']; ?>" /></td>
          </tr>
          <tr>
            <td class="label">上传图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="<?php echo $result['picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> (552*285)</td>
          </tr>
          <tr>
            <td width="17%" class="label">地址</td>
            <td width="83%"><input type="text" name="address" id="address" class="input_text" value="<?php echo $result['address']; ?>" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">电话</td>
            <td width="83%"><input type="text" name="tel" id="tel" class="input_text" value="<?php echo $result['tel']; ?>" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">邮编</td>
            <td width="83%"><input type="text" name="postal" id="postal" class="input_text" value="<?php echo $result['postal']; ?>" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">邮箱</td>
            <td width="83%"><input type="text" name="email" id="email" class="input_text" value="<?php echo $result['email']; ?>" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">排序</td>
            <td width="83%"><input type="text" name="sort_order" id="sort_order" class="input_text_3" value="<?php echo $result['sort_order']; ?>" /></td>
          </tr>
          <tr>
            <td width="17%" class="label">更新时间</td>
            <td width="83%"><input type="text" name="add_time" id="add_time" class="input_text_2" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php echo date("Y-m-d H:i:s",strtotime($result["add_time"])); ?>" /></td>
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
