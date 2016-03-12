<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文件上传</title>
<style>
body { font-size:12px; margin:20px auto;}
fieldset { width:420px; height:180px;}
</style>
<SCRIPT language=javascript>
function check() 
{
	var strFileName=document.form1.upfile.value;
	if (strFileName=="")
	{
    	alert("请选择要上传的文件");
		document.form1.upfile.focus();
    	return false;
  	}
	
	var FileType=strFileName.substr(strFileName.length-3)
	FileType=FileType.toLowerCase();
	if (FileType!="jpg" && FileType!="gif" && FileType!="bmp" && FileType!="png" && FileType!="swf" && FileType!="rar" && FileType!="zip" && FileType!="ocx" && FileType!="doc" && FileType!="xls" && FileType!="lsx" && FileType!="pdf" && FileType!="exe" && FileType!="flv" && FileType!="ocx")
	{
	alert("选择的文件类型不正确");
	document.form1.file1.focus();
	return false;
	}
	
}
</script>
</head>
<body bgColor="#FFFFFF" topmargin="10" leftmargin="10">
<center>
<fieldset align="center">
<LEGEND align=left>文件上传</LEGEND>
<FORM METHOD="post" NAME="form1" ACTION="upload.php" onSubmit="return check()" ENCTYPE="multipart/form-data">
请选择要上传的文件:
<input type="file" name="upfile">
<br><br>
<input name="text_id" type="hidden" id="text_id" value="<?php echo $_REQUEST["text_id"];?>">
<input name="saveTo" type="hidden" id="saveTo" value="<?php echo $_REQUEST["saveTo"];?>">
<input name="showPath" type="hidden" id="showPath" value="<?php echo $_REQUEST["showPath"];?>">
<br><br>
<INPUT TYPE="submit" NAME="Button01" VALUE="上 传">&nbsp;
<INPUT TYPE="reset" NAME="Button02"  VALUE="重 置">&nbsp;
<INPUT TYPE="button" NAME="Button03"  VALUE="关 闭" onClick="javascript:window.close();">
</FORM>
</fieldset>
</center>
</body>
</html>