<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=5;
$id=$_REQUEST['id'];
if($_REQUEST["action"]=="add")
{
    $name = !empty($_POST['name']) ? $_POST['name'] : '';
    $age = !empty($_POST['age']) ? $_POST['age'] : '';
    $sex = !empty($_POST['sex']) ? $_POST['sex'] : '';
    $job_title = !empty($_POST['job_title']) ? $_POST['job_title'] : '';
    $years_work = !empty($_POST['years_work']) ? $_POST['years_work'] : '';
    $salary = !empty($_POST['salary']) ? $_POST['salary'] : '';
    $beizhu = !empty($_POST['beizhu']) ? $_POST['beizhu'] : '';
    $add_time =  date('Y-m-d H:i:s',time());
    $birthday = !empty($_POST['birthday']) ? $_POST['birthday'] : '';
    $saveTo="upload/files/";
    $file=$_FILES['jianli'];
    $string = $_FILES['jianli']['name'];
    $extend = explode('.',$string);
    $key=count($extend)-1;
    $ext=".".$extend[$key];
    $file_name = $name . "-" . $sex . "-" .  $job_title . "-". $birthday . $ext;
    move_uploaded_file($file['tmp_name'],$saveTo.$file_name);
    $jianli = $saveTo . $file_name;
    $dataArray = array("name"=>$name,"age"=>$age,"job_title"=>$job_title,"sex"=>$sex,"beizhu"=>$beizhu,"years_work"=>$years_work,
        "salary"=>$salary,"birthday"=>$birthday,"jianli"=>$jianli,"add_time"=>$add_time);
    $mysql->insert("job_request",$dataArray);
    echo '<script>alert("职位申请成功");location.href="job.php";</script>';
    exit;
}
else {
    $sql="select * from news where id=$id";
    $job_content = $mysql->get_one($sql);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=1280px" />
    <title><?php echo $sys_config["sys_title"]?></title>
    <meta name="Keywords" content="<?php echo $sys_config['sys_keywords']?>" />
    <meta name="Description" content="<?php echo $sys_config["sys_description"]?>" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />

    <!--本页样式-->
    <style type="text/css">
        .title,.ti_bg,.ti_jie{ height:132px; }
    </style>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
</head>
<body>
<?php
require('head.php');
?>
<!--标题-->
<div class="qing mtop">
	<div class="qing title">
    	<div class="qing ti_bg"></div>
        <div class="qing ti_jie">
            <div class="qing ti_bt">招贤纳士<span class="qing">Job</span></div>
            <div class="qing t1"></div>
            <div class="qing t2"></div>
        </div>
    </div>
</div>
<!--内容-->
<div class="qing job_j"><img src="images/job_j.png" width="33" height="12" /></div>
<div class="qing center job">
  <div class="qing jove">
        	<div class="qing yd">联信基金欢迎您的加入</div>
            <div class=" rg">如果你有强烈的进取心，坚韧不拔独立自主地以极大的热情做好自己的工作，我们将会给你广阔的舞台。<br />应聘咨询热线：
                <?php echo $contact["tel"];?>
            </div>
          	<div class="qing">
            	<div class="ym"><?php echo $job_content["title"];?></div>
                <div class="qing yq">
                	<strong>岗位职责：</strong><br />
                    <?php echo $job_content["note"];?>
                </div>
            </div>
            <div class="qing">
                <form id="myForm" action="job_view.php?action=add" method="post" enctype="multipart/form-data">

            	<table width="100%" border="0" bgcolor="#dfdfdf" cellspacing="1" cellpadding="0">
                  <tr>
                    <td align="center" valign="middle" height="80" bgcolor="#fafafa" colspan="6" class="ym">在线填写申请表</td>
                  </tr>
                  <tr>
                    <td width="100" align="center" valign="middle" height="45" bgcolor="#fafafa" class=" xmxm">姓　　名：</td>
                    <td width="257" align="left" valign="middle" height="45" bgcolor="#fafafa" class="xie002"><input name="name" id="name" type="text" class="xie1" /></td>
                    <td width="100" align="center" valign="middle" height="45" bgcolor="#fafafa" class=" xmxm">性　　别：</td>
                    <td width="257" align="left" valign="middle" height="45" bgcolor="#fafafa" class="xie002"><input name="sex" type="radio" value="男" id="nan"/>
                    <label for="nan">男</label>　　<input name="sex" type="radio" value="女" id="nv"/> <label for="nv">女</label></td>
                    <td width="100" align="center" valign="middle" height="45" bgcolor="#fafafa" class=" xmxm">年　　龄：</td>
                    <td width="257" align="left" valign="middle" height="45" bgcolor="#fafafa" class="xie002"><input name="age" type="text" class="xie1" /></td>
                  </tr>
                  <tr>
                    <td width="100" align="center" valign="middle" height="45" bgcolor="#fafafa" class=" xmxm">工作年限：</td>
                    <td width="257" align="left" valign="middle" height="45" bgcolor="#fafafa" class="xie002"><input name="years_work" type="text" class="xie1" /></td>
                    <td width="100" align="center" valign="middle" height="45" bgcolor="#fafafa" class=" xmxm">期望薪酬：</td>
                    <td width="257" align="left" valign="middle" height="45" bgcolor="#fafafa" class="xie002"><input name="salary" type="text" class="xie1" /></td>
                    <td width="100" align="center" valign="middle" height="45" bgcolor="#fafafa" class=" xmxm">出生日期：</td>
                    <td width="257" align="left" valign="middle" height="45" bgcolor="#fafafa" class="xie002"><input name="birthday" type="text" class="xie1" /></td>
                  </tr>
                  <tr>
                    <td width="100" align="center" valign="middle" height="45" bgcolor="#fafafa" class=" xmxm">上传附件：</td>
                    <td align="left" valign="middle" height="45" colspan="5" bgcolor="#fafafa" class="xie002"><input name="jianli" id="file" type="file" class="xie1" value="上传简历" /></td>
                  </tr>
                  <tr>
                    <td width="100" align="center" valign="middle" height="45" bgcolor="#fafafa" class=" xmxm">备　　注：</td>
                    <td align="left" valign="middle" height="45" colspan="5" bgcolor="#fafafa" class="xie002">
                    	<textarea name="beizhu" class="xie2"></textarea>
                        <input type="hidden" name="job_title" value="<?php echo $job_content["title"];?>"/>
                    </td>
                  </tr>
                  <tr>
                    <td width="100" align="center" valign="middle" height="45" bgcolor="#fafafa" class=" xmxm"></td>
                    <td align="left" valign="middle" height="45" colspan="5" bgcolor="#fafafa" class="xie002">
                    	<input id="btnSave" type="submit" value="提交" class="ti" /><input type="reset" value="重置" class="ti"  />
                    </td>
                  </tr>
                </table>
                </form>

            </div>
        </div>
</div>
<div class="qing foh"></div>
<?php
require('foot.php');
?>

<!--滚动条开始-->
<script type="text/javascript" src="js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="js/tiao.js"></script>
<!--滚动条结束-->
</body>
</html>
<script>
    $(function () {

        $("#btnSave").click(function(){
            var name = $("#name").val();

            if($.trim(name).length <= 0){
                alert("请填写名字");
                return false;
            }
            var server = $(":radio[name='sex']:checked").length;
            if(server < 1 ){
                alert("请选择性别");
                return false;
            }
            var file = $("#file").val();
            if($.trim(file).length < 1){
                alert("请上传简历");
                return false;
            }else if(!/.(pdf|doc|docx|pptx|xlsx)$/.test(file.toLowerCase())){
                alert("文件格式不正确");
                return false;
            }


            if($("#myform").Valid() == false || !$("#myform").Valid()) {

                return false ;
            }

        });
    });
</script>
