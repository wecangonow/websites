<?php
require_once("pageheader.php");
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;
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
$sql="select * from shenqing where id=".$id;
$result = $mysql->get_one($sql);
?>
    <!-- tab body -->
    <div id="tabbody-div">
    <form action="" method="post" name="theForm">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">机构名称</td>
            <td width="83%"><?php echo $result['company']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">联系人</td>
            <td width="83%"><?php echo $result['username']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">地址</td>
            <td width="83%"><?php echo $result['address']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">电话</td>
            <td width="83%"><?php echo $result['tel']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">邮箱</td>
            <td width="83%"><?php echo $result['email']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">备注</td>
            <td width="83%"><?php echo $result['content']; ?></td>
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