<?php
/* 代码 */
require(dirname(__FILE__) . '/includes/admin_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
is_login();
?>
<!doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="js/jquery.js"></script>
<!-- WdatePicker -->
<script type="text/javascript" charset="utf-8" src="../includes/select_date/WdatePicker.js"></script>
<!-- ueditor -->
<script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="../ueditor/lang/zh-cn/zh-cn.js"></script>
<!-- colpick -->
<script type="text/javascript" src="js/jquery.colorpicker.js"></script> 
<link href="colpick/css/colpick.css" rel="stylesheet" type="text/css" />

<script language="javascript">
<!--
function opw(url,name,width,height)
{
	window.open(url,name,''+'width='+width+',height='+height+',scrollbars=yes'+'');
}
function confirmSubmit(frm)
{
	if (frm.elements['types'].value == 'remove')
	{
		return confirm("您确定进行删除操作?");
	}
    else
    {
        return true;
    }
}
//-->
</script>

<script type="text/javascript">
    $(function(){
        $("#cp1").colorpicker({
            fillcolor:true
        });
        $("#cp2").colorpicker({
            fillcolor:true,
            success:function(o,color){
                $(o).css("color",color);
            }
        });
        $("#cp3").colorpicker({
            fillcolor:true,
            success:function(o,color){
                $("#cp3text").css("color",color);
            }
        });
        $("#cp4").colorpicker({
            fillcolor:true,
            event:'mouseover',
            success:function(o,color){
                $("#cp4text").css("color",color);
            }
        });
        $("#cp5").colorpicker({
            fillcolor:true,
            event:'mouseover',
            target:$("#cp5text")
        });
    });
</script>
</head>
<body>

<h1>
<span class="action-span"></span>
<span class="action-span1">网站管理中心，我们一直在努力！ </span>
<div style="clear:both"></div>
</h1>
