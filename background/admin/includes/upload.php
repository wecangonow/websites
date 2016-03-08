<?php
 header("Content-Type: text/html;charset=utf-8");
 $text_id=$_REQUEST["text_id"];
 $saveTo=$_REQUEST["saveTo"];
 $showPath=$_REQUEST["showPath"];
 $file=$_FILES['upfile'];
 $string = $_FILES['upfile']['name'];
 $extend = explode('.',$string);
 $key=count($extend)-1;
 $ext=".".$extend[$key];
 $name=rand(0,500000).dechex(rand(0,10000)).$ext;
 move_uploaded_file($file['tmp_name'],$saveTo.$name);
//调用iframe父窗口的js 函数
 echo "<script>window.opener.document.getElementById('".$text_id."').value='".$showPath.$name."';</script>";
 echo "<script>window.alert('文件上传成功!');window.close();</script>";
?>