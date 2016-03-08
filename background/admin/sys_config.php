<?php
require_once("pageheader.php");

if(!isset($_REQUEST["action"]))
{
  $sql="select * from sys_config where id=1";
  $row = $mysql->get_one($sql);
}

elseif($_REQUEST["action"]=="edit")
{
  $condition="id=1";
  $dataArray = array("sys_name"=>$_REQUEST['sys_name'],"sys_title"=>$_REQUEST['sys_title'],"sys_keywords"=>$_REQUEST['sys_keywords'],"sys_description"=>$_REQUEST['sys_description'],"sys_address"=>$_REQUEST['sys_address'],"sys_tel"=>$_REQUEST['sys_tel'],"sys_fax"=>$_REQUEST['sys_fax'],"sys_email"=>$_REQUEST['sys_email'],"sys_weixin"=>$_REQUEST['sys_weixin'],"sys_weibo"=>$_REQUEST['sys_weibo'],"sys_mobile"=>$_REQUEST['sys_mobile']);
  $mysql->update("sys_config",$dataArray,$condition);
  echo '<script>alert("操作成功");location.href="sys_config.php";</script>';
  exit;
  //header("Location:shop_config.php");
}

?>
<div class="tab-div">
  <!-- tab bar -->
  <div id="tabbar-div">
    <p>
      <span class="tab-front" id="shop_info-tab">基本设置</span>
    </p>
  </div>
  <!-- tab body -->
  <div id="tabbody-div">
    <form name="theForm" id="theForm" action="sys_config.php?action=edit" method="post">
    <table width="90%" id="shop_info-table">
      <tr>
        <td width="28%" valign="top" class="label">
         网站名称:
        </td>
        <td width="72%">
          <input name="sys_name" id="sys_name" type="text" class="input_text" value="<?php echo $row['sys_name']; ?>" />
        </td>
      </tr>
      <tr>
        <td class="label" valign="top">
         网站标题:
        </td>
        <td>
          <input name="sys_title" id="sys_title" type="text" class="input_text" value="<?php echo $row['sys_title']; ?>" />
        </td>
      </tr>
      <tr>
        <td class="label" valign="top">
         网站关键词:
        </td>
        <td>
          <input name="sys_keywords" id="sys_keywords" type="text" class="input_text" value="<?php echo $row['sys_keywords']; ?>" />
        </td>
      </tr>
      <tr>
        <td class="label" valign="top">
         网站描述:
        </td>
        <td>
          <textarea name="sys_description" id="sys_description" class="input_textarea"><?php echo $row['sys_description']; ?></textarea>
        </td>
      </tr>
      <tr>
        <td class="label" valign="top">
         官方微信:
        </td>
        <td>
          <input type="text" name="sys_weixin" id="sys_weixin" class="input_text" value="<?php echo $row['sys_weixin']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=sys_weixin&saveTo=../../upload/images/&showPath=upload/images/','sys_weixin',500,250)" value="上传图片"> (70*70)
        </td>
      </tr>
      <tr>
        <td class="label" valign="top">
         官方微博:
        </td>
        <td>
          <input type="text" name="sys_weibo" id="sys_weibo" class="input_text" value="<?php echo $row['sys_weibo']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=sys_weibo&saveTo=../../upload/images/&showPath=upload/images/','sys_weibo',500,250)" value="上传图片"> (70*70)
        </td>
      </tr>
      <tr>
        <td class="label" valign="top">
         手机网站:
        </td>
        <td>
          <input type="text" name="sys_mobile" id="sys_mobile" class="input_text" value="<?php echo $row['sys_mobile']; ?>" />&nbsp;<input name="upfile" type="button" class="button" onClick="javascript:opw('includes/pic_upload_form.php?text_id=sys_mobile&saveTo=../../upload/images/&showPath=upload/images/','sys_mobile',500,250)" value="上传图片"> (70*70)
        </td>
      </tr>
    </table>

    <div class="button-div">
      <input name="submit" type="submit" value="保存" class="button" />
    </div>
    </form>
  </div>
</div>
<script language="javascript">
<!--
function reset_form()
{
	$(":text").val("");
	$("#sys_description").val("");
	editor.setContent("");
	return false;
}
//-->
</script>
<?php require_once("pagefooter.php"); ?>