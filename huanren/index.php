<?php
require(dirname(__FILE__) . '/includes/home_config.php');
require(dirname(__FILE__) . '/includes/lib_common.php');
$top=1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=1280px" />
    <title><?php echo $sys_config["sys_title"]?></title>
    <meta name="Keywords" content="<?php echo $sys_config['sys_keywords']?>" />
    <meta name="Description" content="<?php echo $sys_config["sys_description"]?>" />
<!--通用样式-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script src="js/main.js" type="text/javascript"></script><!--相关链接 下拉-->

<!--本页样式-->
<script type="text/javascript" src="js/jquery.event.drag-1.5.min.js"></script><!--焦点图切换-->
<script type="text/javascript" src="js/jquery.touchSlider.js"></script><!--焦点图切换-->
<script type="text/javascript" src="js/jiaodian.js"></script><!--焦点图切换-->

</head>
<body>
<?php require("head.php");?>
<!-- banner -->
<?php
$sql = "SELECT * FROM pic where cat_id=1 order by sort_order asc,id asc";
$row=$mysql->get_all($sql);
?>
<div class="qing mtop">
	<div class="main_visual">
        <div class="main_image">
            <ul>
                <?php
                if(count($row) > 0){

                    foreach($row as $result)
                    {
                    ?>
                <li><a href="<?php echo $result['link_url'];?>" style="background:url(<?php echo $result['picture'];?>) center top no-repeat;"></a></li>
                <?php }
                }
                ?>
            </ul>
            <a href="javascript:;" id="btn_prev"></a>
            <a href="javascript:;" id="btn_next"></a>
        </div>
        <table class="flicking_con" border="0" cellspacing="0" cellpadding="0" style=" text-align:center">
        	<tr>
            	<td align="center" valign="top">
                    <?php
                    if(count($row) > 0){

                        foreach($row as $result)
                        {
                            ?>
                            <a href="#"></a>
                        <?php }
                    }
                    ?>
            	</td>
        	</tr>
    	</table>
    </div>
</div>
<!-- 高层动态 / 商会动态 -->
<div class="qing center tai">
	<!--高层动态-->
	<div class="qing gao">
    	<a href="news.php?cat_id=4" class="qing gao_tt">
        	<div class="lf gao_bt">
              	<div class="qing gao1">高层动态</div>
               	<div class="qing gao2"><img src="images/gao2.png" width="15" height="12" /></div>
               	<div class="qing gao3"><img src="images/gao3.png" width="14" height="13" /></div>
           	</div>
       		<div class="lf gao_ying">HIGH-LEVEL DYNAMIC</div>
        </a>
        <div class="qing" style="padding-top:22px;">
        	<!--左右切换开始-->
        	<div class="main_visual2">
                <div class="main_image2">
                    <ul>
                        <?php
                        $sql="select * from news where cat_id=4 and is_show=1 order by sort_order asc,id desc limit 0,5";
                        $index_dt_one = $mysql->get_all($sql);
                        foreach($index_dt_one as $index_dt_one_list)
                        {
                        ?>
                        <li>
                        	<div class="qing gao_shao">
                                <a href="news_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing gao_img"><img src="<?php echo $index_dt_one_list['picture'];?>" width="549" height="393" /></a>
                                <div class="qing gao_jie">
                                    <div class="lf" style="width:383px;">
                                        <a href="news_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing gao_tit">
                                            <?php echo $index_dt_one_list['title'];?>
                                        </a>
                                        <a href="news_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing gao_jian">
                                            <?php echo $index_dt_one_list['note'];?>
                                            . . .
                                            <?php echo date('Y-m-d',strtotime($index_dt_one_list['add_time'])); ?>
                                        </a>
                                    </div>
                                    <div class="rf gao_more">
                                    	<a href="news_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing">
                                            <div class="qing gao_m1">详细</div>
                                            <div class="qing gao_m2">详细</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                    <a href="javascript:;" id="btn_prev2"></a>
                    <a href="javascript:;" id="btn_next2"></a>
                </div>
                <table class="flicking_con2" border="0" cellspacing="0" cellpadding="0" style=" text-align:center">
                    <tr>
                        <td align="center" valign="top">
                            <?php
                            foreach($index_dt_one as $index_dt_one_list)
                            {
                            ?>
                            <a href="#"></a>
                            <?php }?>
                        </td>
                    </tr>
                </table>
            </div>
            <!--左右切换结束-->
        </div>
    </div>
    <!--商会动态-->
    <div class="qing hui">
    	<div class="qing hui_ti">
        	<a href="news.php?cat_id=23" class="lf hui_bt">
            	<div class="qing hui_zi"><span>商</span>会动态</div>
                <div class="qing hui_ying">Dynamic Chamber</div>
                <div class="qing hui1"><span class="qing"></span></div>
                <div class="qing hui2"></div>
                <div class="qing hui3"></div>
                <div class="qing hui4"></div>
                <div class="qing hui5"></div>
            </a>
            <a href="news.php?cat_id=23" class="rf hui_more">更多<span>>></span></a>
        </div>
        <ul class="qing shang">
            <?php
            $sql="select * from news where cat_id=23 and is_show=1 order by sort_order asc,id desc limit 0,5";
            $index_dt_one = $mysql->get_all($sql);
            foreach($index_dt_one as $index_dt_one_list)
            {
            ?>
        	<li class="qing">
            	<div class="lf shang_jie">
                    <a href="news_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing">
                        <?php echo $index_dt_one_list['title'];?>
                    </a>
                    <span class="qing">
                        <?php echo date('Y-m-d',strtotime($index_dt_one_list['add_time'])); ?>
                    </span>
                    <div class="qing sht"></div>
                </div>
                <div class="rf sh_more"><a href="news_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing"></a></div>
            </li>
            <?php }?>
        </ul>
    </div>
</div>
<!-- 会议通知 / 活动视频 / 会员专区 -->
<div class="qing" style="background:#efefef; padding:32px 0;">
	<div class="qing center">
    	<!--会议通知-->
    	<div class="lf zhi">
        	<div class="qing hui_ti">
                <a href="meeting.php" class="lf hui_bt">
                    <div class="qing hui_zi"><span>会</span>议通知</div>
                    <div class="qing hui_ying">Meeting Notice</div>
                    <div class="qing hui1"><span class="qing"></span></div>
                    <div class="qing hui2"></div>
                    <div class="qing hui3"></div>
                    <div class="qing hui4"></div>
                    <div class="qing hui5"></div>
                </a>
                <a href="meeting.php" class="rf hui_more">更多<span>>></span></a>
            </div>
            <div class="qing zhi_jie">
                <?php
                $sql="select * from news where cat_id=6 and is_show=1 order by sort_order asc,id desc limit 0,7";
                $index_dt_one = $mysql->get_all($sql);
                foreach($index_dt_one as $index_dt_one_list)
                {
                ?>
             	<a href="meeting.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing">
                    <?php echo $index_dt_one_list['title'];?>
                </a>
                <?php }?>
            </div>
        </div>
        <!--活动视频-->
        <div class="lf huo">
        	<a href="video.php" class="qing huo_bt">
            	<div class="lf huo1">活动</div>
                <div class="lf huo2"><span class="qing">视频</span>Active Video</div>
            </a>
            <div class="qing huo_shi">
            	<div class="main_visual3">
                    <div class="main_image3">
                        <ul>
                            <?php
                            $sql    ="select * from news where cat_id=12 and is_show=1 order by sort_order asc,id desc";
                            $indexs = $mysql->get_all($sql);
                            foreach($indexs as $index)
                            {
                            ?>
                            <li>
                            	<a href="video_view.php?id=<?php echo $index['id'];?>" class="qing huo_jie">
                                	<div class="qing huo_img"><img src="<?php echo $index['picture'];?>" width="342" height="251" /></div>
                                    <div class="qing huo_jian">
                                    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          	<tr>
                                            	<td width="53" align="left" valign="middle"><img src="images/huo_biao.png" width="38" height="38" /></td>
                                                <td align="left" valign="middle">
                                                    <?php echo $index['title'];?>
                                                </td>
                                          	</tr>
                                        </table>
                                    </div>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                        <a href="javascript:;" id="btn_prev3"></a>
                        <a href="javascript:;" id="btn_next3"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="rf" style="width:409px;">
        	<!--申请会员-->
        	<div class="qing shen">
            	<div class="lf shen_img"><img src="images/shen_img.png" width="93" height="93" /></div>
                <div class="rf shen_jie">
                	<div class="qing shen_bt">协会目前拥有大批会员，理事会成员包括海内外知名华人侨领、企业家</div>
                    <a href="member.php" class="qing shm"><div class="qing sh1">立即申请会员</div><div class="qing sh2">立即申请会员</div></a>
                </div>
            </div>
            <!--会员专区-->
            <div class="qing qu">
           	  	<a href="member.php" class="lf hui_bt">
                  	<div class="qing hui_zi"><span>会</span>员专区</div>
                    <div class="qing hui_ying"><img src="images/hui_ying.jpg" width="13" height="82" /></div>
                    <div class="qing hui01"><span class="qing"></span></div>
                    <div class="qing hui02"></div>
                    <div class="qing hui03"></div>
                    <div class="qing hui04"></div>
                    <div class="qing hui05"></div>
              	</a>
                <div class="rf qu_jie">
                	<div class="qing qu_jian">
                        <?php
                        $sql="select * from news where cat_id=14 and is_show=1 order by sort_order asc,id desc limit 0,5";
                        $rows = $mysql->get_all($sql);
                        foreach($rows as $row)
                        {
                        ?>
                    	<a href="member_list.php?id=<?php echo $row['id'];?>"><span>></span>
                            <?php echo $row['title'];?>
                        </a>
                        <?php }?>
					</div>
                    <a href="member_list.php" class="qing qu_more">更多</a>
             	</div>
            </div>
        </div>
    </div>
</div>
<!-- 华人楷模 / 合作对接 / 华人新闻 -->
<div class="qing center" style="padding:35px 0;">
	<!--华人楷模-->
	<div class="lf kai">
    	<div class="qing hui_ti">
         	<a href="model.php" class="lf hui_bt">
             	<div class="qing hui_zi"><span>华</span>人楷模</div>
              	<div class="qing hui_ying">Chinese Model</div>
              	<div class="qing hui1"><span class="qing"></span></div>
              	<div class="qing hui2"></div>
              	<div class="qing hui3"></div>
               	<div class="qing hui4"></div>
              	<div class="qing hui5"></div>
          	</a>
        	<a href="model.php" class="rf hui_more">更多<span>>></span></a>
       	</div>
		<ul class="qing kai_jie">
            <?php
            $sql="select * from news where cat_id=7 and is_show=1 order by sort_order asc,id desc limit 0,2";
            $index_dt_one = $mysql->get_all($sql);
            foreach($index_dt_one as $index_dt_one_list)
            {
            ?>
        	<li class="qing">
            	<a href="model_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing kai_bt">
                    <?php echo $index_dt_one_list['title'];?>
                </a>
                <a href="model_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing kai_jian">
                    <?php echo $index_dt_one_list['content'];?>
                </a>
            </li>
            <?php }?>
        </ul>
    </div>
    <!--合作对接-->
    <div class="lf he">
    	<div class="qing hui_ti">
         	<a href="cooperation.php" class="lf hui_bt">
             	<div class="qing hui_zi"><span>合</span>作对接</div>
              	<div class="qing hui_ying">Cooperation Docking</div>
              	<div class="qing hui1"><span class="qing"></span></div>
              	<div class="qing hui2"></div>
              	<div class="qing hui3"></div>
               	<div class="qing hui4"></div>
              	<div class="qing hui5"></div>
          	</a>
        	<a href="cooperation.php" class="rf hui_more">更多<span>>></span></a>
       	</div>
        <ul class="qing he_jie">
            <?php
            $sql="select * from news where cat_id=8 and is_show=1 order by sort_order asc,id desc limit 0,6";
            $index_dt_one = $mysql->get_all($sql);
            foreach($index_dt_one as $index_dt_one_list)
            {
            ?>
        	<li><a href="cooperation_view.php?id=<?php echo $index_dt_one_list['id'];?>">
                    <?php echo $index_dt_one_list['title']?>
                </a>
                <div class="qing het"></div>
            </li>
            <?php }?>
        </ul>
    </div>
    <!--华人新闻-->
  	<div class="rf xin">
   		<div class="qing hui_ti">
         	<a href="news.php?cat_id=3" class="lf hui_bt">
             	<div class="qing hui_zi"><span>华</span>人新闻</div>
              	<div class="qing hui_ying">Chinese News</div>
              	<div class="qing hui1"><span class="qing"></span></div>
              	<div class="qing hui2"></div>
              	<div class="qing hui3"></div>
               	<div class="qing hui4"></div>
              	<div class="qing hui5"></div>
          	</a>
        	<a href="news.php?cat_id=3" class="rf hui_more">更多<span>>></span></a>
   	  	</div>
		<div class="qing xin_img">
            <?php
            $sql="select * from news where cat_id=3 and is_show=1 order by sort_order asc,id desc limit 0,4";
            $index_dt_one = $mysql->get_all($sql);
            ?>
            <a href="news_view.php?id=<?php echo $index_dt_one[0]['id'];?>" class="qing">
                <img src="<?php echo $index_dt_one[0]['picture'];?>" width="344" height="128" />
            </a>
        </div>
       	<div class="qing qu_jian">
            <?php
            foreach($index_dt_one as $index_dt_one_list)
            {
            ?>
          	<a href="news_view.php?id=<?php echo $index_dt_one_list['id'];?>"><span>></span>
                <?php echo $index_dt_one_list['title'];?>

            </a>
            <?php }?>
		</div>
    </div>
</div>
<!-- 企业风采 -->
<div class="qing qiye">
	<div class="qing center">
    	<div class="qing hui_ti">
         	<a href="style.php" class="lf hui_bt">
             	<div class="qing hui_zi"><span>企</span>业风采</div>
              	<div class="qing hui_ying">Corporate Style</div>
              	<div class="qing hui1"><span class="qing"></span></div>
              	<div class="qing hui2"></div>
              	<div class="qing hui3"></div>
               	<div class="qing hui4"></div>
              	<div class="qing hui5"></div>
          	</a>
        	<a href="style.php" class="rf hui_more">更多<span>>></span></a>
   	  	</div>
        <ul class="qing">
            <?php
            $sql="select * from news where cat_id=13 and is_show=1 order by sort_order asc,id desc limit 0,3";
            $index_dt_one = $mysql->get_all($sql);
            foreach($index_dt_one as $index_dt_one_list)
            {
            ?>
        	<li class="lf">
            	<div class="qing qi_jie">
                	<a href="style_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="lf qi_img"><img src="<?php echo $index_dt_one_list['picture'];?>" width="138" height="158" /></a>
                    <div class="rf qi_shao">
                    	<a href="style_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing qi_bt">
                            <?php echo $index_dt_one_list['title'];?>
                        </a>
                        <a href="style_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing qi_jian">
                            <?php echo $index_dt_one_list['content'];?>
                        </a>
                        <a href="style_view.php?id=<?php echo $index_dt_one_list['id'];?>" class="qing qi_more">[详情]</a>
                    </div>
              	</div>
                <div class="qing qy1"></div>
                <div class="qing qy2"></div>
                <div class="qing qy3"></div>
                <div class="qing qy4"></div>
            </li>
            <?php }?>
        </ul>
    </div>
</div>
<!-- 友情链接 -->
<div class="qing center links">
	<div class="qing hui_ti">
     	<a href="#" class="lf hui_bt">
         	<div class="qing hui_zi"><span>友</span>情链接</div>
          	<div class="qing hui_ying">Friendship Link</div>
          	<div class="qing hui1"><span class="qing"></span></div>
           	<div class="qing hui2"></div>
           	<div class="qing hui3"></div>
           	<div class="qing hui4"></div>
         	<div class="qing hui5"></div>
      	</a>
   		<a href="#" class="rf hui_more">更多<span>>></span></a>
 	</div>
    <ul class="qing links_jie">
        <?php
        $sql="select * from pic where cat_id=4 order by sort_order asc,id asc limit 0,5";
        $index_links = $mysql->get_all($sql);
        foreach($index_links as $index_links_list)
        {
        ?>
    	<li><a href="<?php echo $index_links_list['link_url'];?>" target="_blank"><img src="<?php echo $index_links_list['picture'];?>" width="238" height="79" /></a></li>
        <?php }?>
    </ul>
</div>
<?php
require('foot.php');
?>
</body>
</html>
