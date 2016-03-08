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
$sql="select * from users where id=".$id;
$result = $mysql->get_one($sql);
?>
    <!-- tab body -->
    <div id="tabbody-div">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">用户名</td>
            <td width="83%"><?php echo $result['loginname']; ?></td>
          </tr>

          <tr>
            <td width="17%" class="label">姓名</td>
            <td width="83%"><?php echo $result['username']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">性别</td>
            <td width="83%"><?php echo $result['sex']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">身份证号</td>
            <td width="83%"><?php echo $result['shenfenzheng']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">地址</td>
            <td width="83%"><?php echo $result['shenfenzheng_address']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">现居住地</td>
            <td width="83%"><?php echo $result['address']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">邮箱地址</td>
            <td width="83%"><?php echo $result['email']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">手机号</td>
            <td width="83%"><?php echo $result['mobile']; ?></td>
          </tr>
          
        </table>
    </div>
</div>
<script language="javascript">
<!--

//-->
</script>
<?php require_once("pagefooter.php"); ?>