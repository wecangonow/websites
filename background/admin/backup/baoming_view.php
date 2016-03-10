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
$sql="select * from baoming where id=".$id;
$result = $mysql->get_one($sql);
?>
    <!-- tab body -->
    <div id="tabbody-div">
    <form action="" method="post" name="theForm">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">报名课程</td>
            <td width="83%"><?php echo $result['kecheng_title']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">培训人名</td>
            <td width="83%"><?php echo $result['username']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">所在地区</td>
            <td width="83%"><?php echo $result['address']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">所在学校</td>
            <td width="83%"><?php echo $result['school']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">联系QQ</td>
            <td width="83%"><?php echo $result['qq']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">电子邮箱</td>
            <td width="83%"><?php echo $result['email']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">联系方式</td>
            <td width="83%"><?php echo $result['tel']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">具体内容</td>
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