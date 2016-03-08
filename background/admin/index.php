<?php
require(dirname(__FILE__) . '/includes/admin_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');

is_login();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $sys_config['sys_name'];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="Text/Javascript" language="JavaScript">
<!--

//-->
</script>

<frameset rows="76,*" framespacing="0" border="0">
  <frame src="top.php" id="header-frame" name="header-frame" frameborder="no" scrolling="no">
  <frameset cols="180, 10, *" framespacing="0" border="0" id="frame-body">
    <frame src="menu.php" id="menu-frame" name="menu-frame" frameborder="no" scrolling="yes">
    <frame src="start.php" id="drag-frame" name="drag-frame" frameborder="no" scrolling="no">
    <frame src="start.php" id="main-frame" name="main-frame" frameborder="no" scrolling="yes">
  </frameset>
</frameset><noframes></noframes>
  <frameset rows="0, 0" framespacing="0" border="0">
  </frameset>
</head>
<body>
</body>
</html>