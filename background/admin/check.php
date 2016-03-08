<?php
ob_start();
header("Content-Type: text/html;charset=utf-8");
require('includes/admin_config.php');
if($_REQUEST["action"]=="loginout")
{
	$_SESSION["admin"]["login_id"]="";
    $_SESSION["admin"]["login_name"]="";
    $_SESSION["admin"]["group_id"]="";
    echo "<script>location.href='login.php';</script>";
}
?>