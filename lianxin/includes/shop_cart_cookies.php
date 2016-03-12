   <?php
   //加入购物车
    
function addcart($goods_id,$goods_type,$goods_num){
    
    $cur_cart_array = unserialize(stripslashes($_COOKIE['shop_cart_info']));
    
    if(count($cur_cart_array)==0){
    
    $cart_info[0][] = $goods_id;
    
    $cart_info[0][] = $goods_type;

    $cart_info[0][] = $goods_num;
    
    setcookie("shop_cart_info",serialize($cart_info));
    
    }elseif(count($cur_cart_array)<>0){
    
    //返回数组键名倒序取最大
    
    $ar_keys = array_keys($cur_cart_array);
    
    rsort($ar_keys);
    
    $max_array_keyid = $ar_keys[0]+1;
    
    //遍历当前的购物车数组
    
    //遍历每个商品信息数组的0值，如果键值为0且货号相同则购物车存在相同货品
$nide_add_new=1;
foreach($cur_cart_array as $k=>$goods_current_cart)
{
    if($goods_current_cart[0]==$goods_id && $goods_current_cart[1]==$goods_type)
    {
        $cur_cart_array[$k][2]=$goods_current_cart[2]+$goods_num;
        $nide_add_new=0;
        break;
    }    
}
if($nide_add_new==1)
{
    $cur_cart_array[$max_array_keyid][] = $goods_id;
    $cur_cart_array[$max_array_keyid][] = $goods_type;
    $cur_cart_array[$max_array_keyid][] = $goods_num;
}
    setcookie("shop_cart_info",serialize($cur_cart_array));
    
    }
    
    }
    
    //从购物车删除
    
function delcart($goods_array_id)
{
    $cur_goods_array = unserialize(stripslashes($_COOKIE['shop_cart_info']));
    //删除该商品在数组中的位置
    unset($cur_goods_array[$goods_array_id]);
    setcookie("shop_cart_info",serialize($cur_goods_array));
}
    
    //修改购物车货品数量
    
function update_cart($goods_array_id,$goods_num)
{
    $cur_cart_array=unserialize(stripslashes($_COOKIE['shop_cart_info']));
    $cur_cart_array[$goods_array_id][2]=$goods_num;
    setcookie("shop_cart_info",serialize($cur_goods_array));
    
}

?>