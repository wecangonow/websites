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
$sql="select * from yingpin where id=".$id;
$result = $mysql->get_one($sql);
?>
    <!-- tab body -->
    <div id="tabbody-div">
    <form action="" method="post" name="theForm">
        <table width="90%" id="general-table" align="center">
          <tr>
            <td width="17%" class="label">应聘职位</td>
            <td width="83%"><?php echo $result['job_title']; ?></td>
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
            <td width="17%" class="label">年龄</td>
            <td width="83%"><?php echo $result['age']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">工作年限</td>
            <td width="83%"><?php echo $result['nianxian']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">期望薪酬</td>
            <td width="83%"><?php echo $result['xinchou']; ?></td>
          </tr>
          <tr>
            <td width="17%" class="label">出生日期</td>
            <td width="83%"><?php echo $result['birthday']; ?></td>
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