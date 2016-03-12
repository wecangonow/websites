<?php
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if($_REQUEST['action']=='reply')
{
	$reply = !empty($_POST['reply']) ? $_POST['reply'] : '';
	$reply_time = date('y-m-d h:i:s',time());
	$condition="id=".$id;
	$dataArray = array("reply"=>$reply,"reply_time"=>$reply_time);
	$mysql->update("liuyan",$dataArray,$condition);
	echo '<script>alert("回复成功");location.href="liuyan_view.php?id='.$id.'";</script>';
	exit;
}

?>
<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab">信息</span>
      </p>
    </div>
<?php 
$sql="select * from liuyan where id=".$id;
$result = $mysql->get_one($sql);
?>
    <!-- tab body -->
    <div id="tabbody-div">
    <form action="liuyan_view.php?action=reply&id=<?php echo $id; ?>" method="post" name="theForm">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">留言标题</td>
            <td width="83%"><?php echo $result['title']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">留言内容</td>
            <td width="83%"><?php echo $result['content']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">姓名</td>
            <td width="83%"><?php echo $result['username']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">电子邮箱</td>
            <td width="83%"><?php echo $result['email']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">联系电话</td>
            <td width="83%"><?php echo $result['mobile']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">管理回复</td>
            <td width="83%"><textarea name="reply" id="reply" class="input_textarea"><?php echo $result['reply']; ?></textarea></td>
          </tr>
          <tr>
            <td width="17%" class="label"></td>
            <td width="83%"><input type="submit" value="提交" class="button" /></td>
          </tr>
        </table>
      </form>
    </div>
</div>
<script language="javascript">
<!--

//-->
</script>
<?php require_once("pagefooter.php"); ?>