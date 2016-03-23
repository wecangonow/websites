<?php
/**
 * 分页过程
 *
 * @access      TopicCount  总记录集
 * @param       PCount      总页数
 * @param       Pama        翻页时本页所带的参数。  如：Pama="&KeyWord=表情&Code=0101&Typeid=12"
 * @param       PageNo      当前页码数
 */
function htmlTurnPage($TopicCount,$PCount,$Pama,$PageNo)
{
    //进行取分页数,进行循环
    if ($PCount<=7 || $PageNo<=4)
    {
       $StartPage=1;
       if ($PCount>7)
       {
        $EndPage=7;
       }
       else
       {
       	$EndPage=$PCount;
       }
    }
    else
    {
       if (($PCount-$PageNo)>=5)
       {
           $StartPage=$PageNo-3;
           $EndPage=$PageNo+3;
       }
       else
       {
           $EndPage=$PCount;
           $StartPage=$PCount-6;
       }
    }      
    
    $TurnInfo="<div class=\"pages_num\">";
    $TurnInfo = $TurnInfo."<ul>";

    if ($PageNo<=1)
    {
       $TurnInfo=$TurnInfo."<li><a>前の60件</a></li>";
    }
    else
    {
	   if ($PageNo==2)
	   {
	   	$TurnInfo=$TurnInfo."<li><a href='".$Pama.".html'>前の60件</a></li>";
	   }
	   else
	   {
	   	$TurnInfo=$TurnInfo."<li><a href='".$Pama."-page-".($PageNo-1).".html'>前の60件</a></li>";
	   }
    }  

    if ($PCount>7 && $PageNo>=5)
    {
       $TurnInfo=$TurnInfo."<li><a href='".$Pama.".html'>1</a></li>";
	   $TurnInfo=$TurnInfo."<li>&nbsp;....</li>";
    }
	
	
    for ($i=$StartPage;$i<=$EndPage;$i++ )
    {
        if ($PageNo==$i)
		   if ($i==1)
		   {
		   	$TurnInfo=$TurnInfo."<li><a class='pageon' href='".$Pama.".html'>".$i."</a></li>";
		   }
		   else
		   {
		   	$TurnInfo=$TurnInfo."<li><a class='pageon' href='".$Pama."-page-".$i.".html'>".$i."</a></li>";
		   }
        else
        {
		   if ($i==1)
		   {
             $TurnInfo=$TurnInfo."<li><a href='".$Pama.".html'>".$i."</a></li>";
		   }
		   else
		   {
		     $TurnInfo=$TurnInfo."<li><a href='".$Pama."-page-".$i.".html'>".$i."</a></li>";
		   }
        }
    }

    if ($PCount>=10 && $PCount-$PageNo>4)
    {
	   $TurnInfo=$TurnInfo."<li>&nbsp;....</li>";
	   $TurnInfo=$TurnInfo."<li><a href='".$Pama."-page-".$PCount.".html'>".$PCount."</a></li>";
    }
	
	
    if ($PageNo<$PCount)
    {
       $TurnInfo=$TurnInfo."<li><a href='".$Pama."-page-".($PageNo+1).".html'>次の60件</a></li>";
    }
    else
    {
       $TurnInfo=$TurnInfo."<li><a>次の60件</a></li>";
    }
	
    //$TurnInfo=$TurnInfo."<li><a>商品の数量".$TopicCount."件</a></li>";
    $TurnInfo=$TurnInfo."</ul></div>";
    return $TurnInfo;
}


/**
 * 截取UTF-8编码下字符串的函数
 *
 * @param   string      $str        被截取的字符串
 * @param   int         $length     截取的长度
 * @param   bool        $append     是否附加省略号
 */
function sub_str($str, $length = 0, $append = true)
{
	$EC_CHARSET = 'utf-8';
    $str = strip_tags(trim($str));
    $strlength = strlen($str);

    if ($length == 0 || $length >= $strlength)
    {
        return $str;  //截取长度等于0或大于等于本字符串的长度，返回字符串本身
    }
    elseif ($length < 0)  //如果截取长度为负数
    {
        $length = $strlength + $length;//那么截取长度就等于字符串长度减去截取长度
        if ($length < 0)
        {
            $length = $strlength;//如果截取长度的绝对值大于字符串本身长度，则截取长度取字符串本身的长度
        }
    }

    if (function_exists('mb_substr'))
    {
        $newstr = mb_substr($str, 0, $length, $EC_CHARSET);
    }
    elseif (function_exists('iconv_substr'))
    {
        $newstr = iconv_substr($str, 0, $length, $EC_CHARSET);
    }
    else
    {
        //$newstr = trim_right(substr($str, 0, $length));
        $newstr = substr($str, 0, $length);
    }

    if ($append && $str != $newstr)
    {
        $newstr .= '...';
    }

    return $newstr;
}

function return_category_name($ff_cat_id)
{
  $ff_sql="select * from news_category where cat_id=".$ff_cat_id;
  $mysql=new cls_mysql();
  $ff_result = $mysql->get_one($ff_sql);
  return $ff_result["cat_name"];
}

function put_array_text($array) {
  if(isset($array))
  {
    $array_arr=explode(",",$array);
    return $array_arr;
  }
}

function return_pic_info($ff_pic_id)
{
  $ff_sql="select * from pic where id=".$ff_pic_id;
  $mysql=new cls_mysql();
  $ff_result = $mysql->get_one($ff_sql);
  return $ff_result['picture'];
}

function return_region_name($ff_region_id)
{
  if(!empty($ff_region_id))
  {
	  $ff_sql="select * from region where region_id=".$ff_region_id;
	  $mysql=new cls_mysql();
	  $ff_result = $mysql->get_one($ff_sql);
	  return $ff_result["region_name"];
  }
}

function return_sql_info($ff_table,$ff_ziduan,$ff_id_ziduan,$ff_id)
{
  $ff_sql="select ".$ff_ziduan." from ".$ff_table." where ".$ff_id_ziduan."=".$ff_id;
  $mysql=new cls_mysql();
  $ff_result = $mysql->get_one($ff_sql);
  return $ff_result[$ff_ziduan];
}

function build_order_no()
{
  return date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
}

function check_login()
{
	session_start();
	if($_SESSION["user_id"]=='')
	{
		echo '<script>alert("请登录");location.href="login.php";</script>';
		exit;
	}
}

/**
 * 手机短信发送
 *
 */
function send_mobile_message($sxb_mobile, $sxb_content)
{
	$post_data = array();
	$post_data['userid'] = '5371';
	$post_data['account'] = 'xd000893';
	$post_data['password'] = 'xd00089305';
	$post_data['content'] = $sxb_content; //短信内容需要用urlencode编码下
	$post_data['mobile'] = $sxb_mobile;
	$post_data['sendtime'] = ''; //不定时发送，值为0，定时发送，输入格式YYYYMMDDHHmmss的日期值
	$url='http://dx.ipyy.net/sms.aspx?action=send';
	$o='';
	foreach ($post_data as $k=>$v)
	{
	   $o.="$k=".urlencode($v).'&';
	}
	$post_data=substr($o,0,-1);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果需要将结果直接返回到变量里，那加上这句。
	curl_exec($ch);
	curl_close($ch);
}

    function inject_check($sql_str) { 
        return eregi('select|insert|and|or|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile', $sql_str);
    } 
    //ID防注入
    function verify_id($id=null) { 
        if(!$id) {
            exit('没有提交参数！'); 
        } elseif(inject_check($id)) { 
            exit('提交的参数非法！');
        } elseif(!is_numeric($id)) { 
            exit('提交的参数非法！'); 
        } 
        $id = intval($id); 
         
        return $id; 
    } 
     
    //字符串防注入
    function str_check( $str ) { 
        if(!get_magic_quotes_gpc()) { 
            $str = addslashes($str); // 进行过滤 
        } 
        $str = str_replace("_", "\_", $str); 
        $str = str_replace("%", "\%", $str); 
         
       return $str; 
    } 
     
    //字符串防注入
    function post_check($post) { 
        if(!get_magic_quotes_gpc()) { 
            $post = addslashes($post);
        } 
        $post = str_replace("_", "\_", $post); 
        $post = str_replace("%", "\%", $post); 
        $post = nl2br($post); 
        $post = htmlspecialchars($post); 
         
        return $post; 
    }
	
?>