<?php
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
if($_REQUEST["action"]=="edit")
{
    $id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
	$company_title = !empty($_POST['company_title']) ? $_POST['company_title'] : '';
	$picture = !empty($_POST['picture']) ? $_POST['picture'] : '';
    $add_time = !empty($_POST['add_time']) ? $_POST['add_time'] : date('Y-m-d H:i:s',time());
    $content = !empty($_POST['content']) ? $_POST['content'] : '';
    $condition="id=".$id;
    $dataArray = array("company_title"=>$company_title,"picture"=>$picture,"content"=>$content,"add_time"=>$add_time);
	$mysql->update("news",$dataArray,$condition);
	echo '<script>alert("操作成功");location.href="jidi_info.php?id='.$id.'";</script>';
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
      <form action="jidi_info.php?action=edit&id=<?php echo $id; ?>" method="post" name="theForm" onsubmit="return check_submit();">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">副标题</td>
            <td width="83%"><input type="text" name="company_title" id="company_title" class="input_text" value="<?php echo $result['company_title']; ?>" /></td>
          </tr>
          <tr>
            <td class="label">右侧图片</td>
            <td><input type="text" name="picture" id="picture" class="input_text" value="<?php echo $result['picture']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=picture&saveTo=../../upload/images/&showPath=upload/images/','picture',500,250)" value="上传图片"> (330*506)</td>
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