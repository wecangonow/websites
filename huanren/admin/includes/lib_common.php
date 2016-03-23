<?php 
/**
 * 系统提示信息
 *
 * @access      public
 * @param       string      msg_detail      消息内容
 * @param       int         msg_type        消息类型， 0消息，1错误，2询问
 * @param       array       links           可选的链接
 * @param       boolen      $auto_redirect  是否需要自动跳转
 * @return      void
 */
function sys_msg($msg_detail, $msg_type = 0, $links = array(), $auto_redirect = true)
{
	
    if (count($links) == 0)
    {
        $links[0]['text'] = '返回';
        $links[0]['href'] = 'javascript:history.go(-1)';
    }
    global $smarty;
    $smarty->assign('msg_detail',  $msg_detail);
    $smarty->assign('msg_type',    $msg_type);
    $smarty->assign('links',       $links);
    $smarty->assign('default_url', $links[0]['href']);
    $smarty->assign('auto_redirect', $auto_redirect);
    $smarty->display('message.html');

    exit;
}


/**************************************************************
 *
 *	使用特定function对数组中所有元素做处理
 *	@param	string	&$array	 要处理的字符串
 *	@param	string	$function	要执行的函数
 *	@return boolean	$apply_to_keys_also	 是否也应用到key上
 *	@access public
 *
 *************************************************************/
function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
{
    static $recursive_counter = 0;
    if (++$recursive_counter > 1000) {
        die('possible deep recursion attack');
    }
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            arrayRecursive($array[$key], $function, $apply_to_keys_also);
        } else {
            $array[$key] = $function($value);
        }
 
        if ($apply_to_keys_also && is_string($key)) {
            $new_key = $function($key);
            if ($new_key != $key) {
                $array[$new_key] = $array[$key];
                unset($array[$key]);
            }
        }
    }
    $recursive_counter--;
}
 
function put_array_text($array) {
	if(isset($array))
	{
		$array_arr=explode(",",$array);
		return $array_arr;
	}
}

function get_array_text($array) {
	if(is_array($array))
	{
		$array_arr_num=1;
		foreach($array as $v2)
		{
			if($array_arr_num==1)
			{
				$array_arr=$v2;
			}else{
				$array_arr=$array_arr.",".$v2;
			}
			$array_arr_num=$array_arr_num+1;
		}
		return $array_arr;
	}
}

/**************************************************************
 *
 *	后台是否登录
 *
 *************************************************************/
function is_login()
{
	session_start();
	if (!isset($_SESSION["admin"]["login_id"]) || $_SESSION["admin"]["login_id"]=="")
	{
		header("Content-type: text/html; charset=utf-8");
		echo "<script>location.href='login.php';</script>";
		exit();
	}
}

/**************************************************************
 *
 *	文本区域写入数据库
 *
 *************************************************************/
function Textarea_Out($note_str){
	if(!is_null(trim($note_str)))
	{
		$note_html = str_replace("\n","<br>",trim($note_str));
	}
	return $note_html;
}

/**************************************************************
 *
 *	数据库读取到文本区域
 *
 *************************************************************/
function Textarea_In($note_str){
	if(!is_null(trim($note_str)))
	{
		$note_html = str_replace("<br>","\n",trim($note_str));
	}
	return $note_html;
}

function return_category_name($ff_cat_id)
{
  $ff_sql="select * from news_category where cat_id=".$ff_cat_id;
  $mysql=new cls_mysql();
  $ff_result = $mysql->get_one($ff_sql);
  return $ff_result["cat_name"];
}

function return_user_loginname($ff_user_id)
{
  if(!empty($ff_user_id))
  {
	  $ff_sql="select loginname from users where id=".$ff_user_id;
	  $mysql=new cls_mysql();
	  $ff_result = $mysql->get_one($ff_sql);
	  if($ff_result)
	  {
		  return $ff_result["loginname"];
	  }
	  else
	  {
		  return '游客';
	  }
  }
}
?>
