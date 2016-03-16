<?php
session_start();
set_time_limit(0);
date_default_timezone_set('Asia/Hong_Kong');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('ADMIN_PATH',dirname(dirname(__FILE__)));
define('ROOT_PATH',dirname(ADMIN_PATH));
include(ROOT_PATH."/includes/cls_mysql.php");
$mysql=new cls_mysql();
$sql="select * from sys_config where id=1";
$sys_config = $mysql->get_one($sql);
?>
