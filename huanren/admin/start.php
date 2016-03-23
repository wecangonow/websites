<?php require_once("pageheader.php"); ?>
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">网站信息</th>
  </tr>
  <tr>
    <td width="20%">PHP版本</td>
    <td width="30%"><strong style="color: red"><?php echo PHP_VERSION; ?></strong></td>
    <td width="20%">主机IP</td>
    <td width="30%"><strong><?php echo $_SERVER['SERVER_ADDR']; ?></strong></td>
  </tr>
  <tr>
    <td>当前主机名</td>
    <td><strong><?php echo $_SERVER['SERVER_NAME']; ?></strong></td>
    <td>运行脚本根目录</td>
    <td><strong><?php echo $_SERVER['DOCUMENT_ROOT']; ?></strong></td>
  </tr>

</table>
</div>
<?php require_once("pagefooter.php"); ?>