<!--
<script src="http://siteapp.baidu.com/static/webappservice/uaredirect.js" type="text/javascript"></script>
<script type="text/javascript">uaredirect("http://m.hxkgjt.com/");</script>
-->
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
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script src="js/jquery.js" type="text/javascript"></script><!--导航-->
<script src="js/main.js" type="text/javascript"></script><!--导航-->
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>

<!--本页样式-->
<script type="text/javascript" src="js/mu.js"></script><!--屏幕滑，图片动-->
<script type="text/javascript" src="js/jquery.touchSlider.js"></script><!--焦点图-->
<script type="text/javascript" src="js/jiaodian.js"></script><!--焦点图-->

</head>
<body>
<?php
require('head.php');
?>
<!--banner-->
<div class="qing mtop">
	<div class="main_visual">
        <div class="main_image">
            <ul>
                <?php
                $sql="select * from pic where cat_id=1 order by sort_order asc,id asc";
                $index_flash = $mysql->get_all($sql);
                foreach($index_flash as $index_flash_list)
                {
                    ?>
                    <li><a href="<?php echo $index_flash_list['link_url'];?>" style="background:url(<?php echo $index_flash_list['picture'];?>) center top no-repeat;"></a></li>
                <?php
                }
                ?>
            </ul>
            <a href="javascript:;" id="btn_prev"></a>
            <a href="javascript:;" id="btn_next"></a>
        </div>
    </div>
</div>
<div class="qing xi_jie">
	<div class="qing center">
    	<!--新闻焦点-->
		<?php
		$sql      = "SELECT * FROM news where 1=1 and is_show=1 and cat_id=3";
		$sql      = $sql." order by sort_order asc,id desc limit 6 ";
		$jiaodian = $mysql->get_all($sql);
		?>
    	<div class="qing xin">
        	<div class="qing xin_title">
            	<div class="lf xin_zi"><span class="qing x1">新闻焦点</span><span class="qing x2">新闻焦点</span></div>
             	<a href="news.php?cat_id=3" class="rf xin_more"><span class="qing"><img src="images/xin_more.png" width="28" height="28" /></span></a>
           	</div>
          	<div class="qing wen">
               	<div class="lf wen_img">
                  	<div class="main_visual2">
                       	<div class="main_image2">
                          	<ul>
                              	<li><a href="news_view.php?id=<?php echo $jiaodian[0]['id'];?>"><img src="<?php echo $jiaodian[0]['picture'];?>" width="197" height="133" /></a></li>
                             	<li><a href="news_view.php?id=<?php echo $jiaodian[1]['id'];?>"><img src="<?php echo $jiaodian[1]['picture'];?>" width="197" height="133" /></a></li>
                             	<li><a href="news_view.php?id=<?php echo $jiaodian[2]['id'];?>"><img src="<?php echo $jiaodian[2]['picture'];?>" width="197" height="133" /></a></li>
                          	</ul>
                      	</div>
                  	</div>
               	</div>
               	<div class="lf wen_jian">
                   	<div class="main_visual2">
                     	<div class="main_image2">
                         	<ul>
                              	<li><a href="news_view.php?id=<?php echo $jiaodian[0]['id'];?>"><?php echo $jiaodian[0]['title'];?></a><span class="qing">
										<?php echo date("Y-m-d",strtotime($jiaodian[0]['add_time']));?></span></li>
                             	<li><a href="news_view.php?id=<?php echo $jiaodian[1]['id'];?>"><?php echo $jiaodian[1]['title'];?></a><span class="qing">
										<?php echo date("Y-m-d",strtotime($jiaodian[1]['add_time']));?></span></li>
                              	<li><a href="news_view.php?id=<?php echo $jiaodian[2]['id'];?>"><?php echo $jiaodian[2]['title'];?></a><span class="qing">
										<?php echo date("Y-m-d",strtotime($jiaodian[2]['add_time']));?>
									</span></li>
                           	</ul>
                          	<a href="javascript:;" id="btn_prev2"></a>
                         	<a href="javascript:;" id="btn_next2"></a>
                       	</div>
                      	<table class="flicking_con2" border="0" cellspacing="0" cellpadding="0" style=" text-align:center">
                         	<tr>
                              	<td align="center" valign="top">
                                  	<a href="#"></a>
                                   	<a href="#"></a>
                                  	<a href="#"></a>
                              	</td>
                          	</tr>
                       	</table>
                  	</div>
              	</div>
           	</div>
          	<div class="qing xin_shao">
               	<a href="news_view.php?id=<?php echo $jiaodian[4]['id'];?>" class="qing xin_bt">
					<?php echo $jiaodian[4]['title'];?>
				</a>
              	<a href="news_view.php?id=<?php echo $jiaodian[4]['id'];?>" class="qing xin_jian">
					<?php echo $jiaodian[4]['note'];?>
				</a>
              	<div class="qing xin_date">
					2016-01-05
				</div>
               	<div class="qing xint"></div>
           	</div>
           	<ul class="qing wen_shao">
				<?php if(isset($jiaodian[5])){?>
               	<li class="qing">
                  	<a href="news_view.php?id=<?php echo $jiaodian[5]['id'];?>" class="lf">
						<?php echo $jiaodian[5]['title'];?>
					</a>
                  	<span class="lf">
						<?php echo date("Y-m-d",strtotime($jiaodian[5]['add_time']));?>
					</span>
                </li>
				<?php }?>
				<?php if(isset($jiaodian[6])){?>
               	<li class="qing">
                   	<a href="news_view.php?id=<?php echo $jiaodian[6]['id'];?>" class="lf">
						<?php echo $jiaodian[6]['title'];?>
					</a>
                	<span class="lf">
						<?php echo date("Y-m-d",strtotime($jiaodian[6]['add_time']));?>
					</span>
              	</li>
				<?php }?>
           	</ul>
        </div>
        <!--联信动态-->
		<?php
		$sql     = "SELECT * FROM news where 1=1 and is_show=1 and cat_id=4";
		$sql     = $sql." order by sort_order asc,id desc limit 4 ";
		$dongtai = $mysql->get_all($sql);
		?>
        <div class="qing lian">
        	<div class="qing xin_title">
            	<div class="lf xin_zi"><span class="qing x1">联信动态</span><span class="qing x2">联信动态</span></div>
            	<a href="news.php?cat_id=4" class="rf xin_more"><span class="qing"><img src="images/xin_more.png" width="28" height="28" /></span></a>
           	</div>
            <div class="qing lit"><span class="lf"></span></div>
            <ul class="qing lian_jie">
				<?php foreach($dongtai as  $val){?>
            	<li>
                	<a href="news_view.php?id=<?php echo $val['id'];?>" class="qing xin_bt">
						<?php echo $val['title'];?>
					</a>
                    <div class="qing xin_date">

						<?php echo date("Y-m-d",strtotime($val['add_time']));?>
					</div>
                    <div class="qing xint"></div>
                </li>
				<?php }?>
            </ul>
        </div>
        <!--项目信息-->
		<?php
		$sql     = "SELECT * FROM news where 1=1 and is_show=1 and cat_id=26";
		$sql     = $sql." order by sort_order asc,id desc limit 3 ";
		$xiangmus = $mysql->get_all($sql);
		?>
        <div class="qing xm">
        	<div class="qing xin_title">
            	<div class="lf xin_zi"><span class="qing x1">项目信息</span><span class="qing x2">项目信息</span></div>
            	<a href="service.php" class="rf xin_more"><span class="qing"><img src="images/xin_more.png" width="28" height="28" /></span></a>
           	</div>
            <div class="qing lit"><span class="lf"></span></div>
            <ul>
				<?php foreach($xiangmus as $xiangmu){?>
            	<li>
                	<div class="lf xm_date"><span>
							<?php echo date("d",strtotime($xiangmu['add_time']));?>
						</span>
						<?php echo date("Y-m",strtotime($xiangmu['add_time']));?>
					</div>
                    <div class="rf xm_jie">
                    	<a href="xiangmu_view.php?id=<?php echo $xiangmu['id']; ?>" class="qing xin_bt">
							<?php echo $xiangmu['title'];?>
						</a>
              			<a href="xiangmu_view.php?id=<?php echo $xiangmu['id']; ?>" class="qing xin_jian">
							<?php echo $xiangmu['note'];?>
						</a>
                    </div>
                    <div class="qing xint"></div>
                </li>
				<?php }?>
            </ul>
        </div>
    </div>
</div>
<!--联信优势-->
<div class="qing you">
	<div class="qing you_bg"></div>
	<div class="qing you_jie">
    	<div class="qing you_title"><span class="qing yt1">联信优势</span><span class="qing yt2">联信优势</span></div>
        <div class="qing yout"><span class="qing"></span></div>
        <ul class="qing center you_shao">
			<?php
				 $sql = "select * from pic where cat_id=14 order by sort_order asc, id asc" ;
				$advantages = $mysql->get_all($sql);
			foreach($advantages as $val){

			?>
        	<li>
            	<div class="qing you_num">
                	<div class="qing you1"><img src="images/youq.png" width="66" height="66" /></div>
                    <div class="qing you2">
                    	<div class="qing yn1"><img src="<?php echo $val['picture'];?>" width="66" height="66" /></div>
                        <div class="qing yn2"><img src="<?php echo $val['picture'];?>" width="66" height="66" /></div>
                    </div>
                </div>
                <div class="qing you_bt"><?php echo $val['title'];?></div>
            </li>
			<?php } ?>
        </ul>
    </div>
</div>
<div class="qing hang">
	<!--行业资讯-->

	<?php
	$sql   = "SELECT * FROM news where 1=1 and is_show=1 and cat_id=23";
	$sql   = $sql." order by sort_order asc,id desc limit 5 ";
	$zixun = $mysql->get_all($sql);
	?>
	<div class="qing zi">
    	<div class="zi_jie">
        	<div class="qing xin_title">
            	<div class="lf xin_zi"><span class="qing x1">行业资讯</span><span class="qing x2">行业资讯</span></div>
            	<a href="news.php?cat_id=23" class="rf xin_more"><span class="qing"><img src="images/xin_more.png" width="28" height="28" /></span></a>
           	</div>
            <div class="qing zi_shao">
            	<div class="lf zi_date"><span class="qing">
						<?php echo date("d",strtotime($zixun[0]['add_time']));?>
					</span>
					<?php echo date("Y-m",strtotime($zixun[0]['add_time']));?>
				</div>
                <div class="rf" style=" width:461px; ">
                	<a href="news_view.php?id=<?php echo $zixun[0]['id']; ?>" class="qing zi_bt">
						<?php echo $zixun[0]['title'];?>
					</a>
                    <a href="news_view.php?id=<?php echo $zixun[0]['id']; ?>" class="qing zi_jian">
						<?php echo $zixun[0]['note'];?>
					</a>
                </div>
            </div>
            <ul class="qing wen_shao">
				<?php for($i=1; $i<count($zixun);$i++){?>
                <li class="qing">
                   	<a href="news_view.php?id=<?php echo $zixun[$i]['id']; ?>" class="lf">
						<?php echo $zixun[$i]['title'];?>
					</a>
                	<span class="lf">
						<?php echo date("Y-m-d",strtotime($zixun[$i]['add_time']));?>
					</span>
              	</li>
				<?php }?>
           	</ul>
        </div>
    </div>
    <!--市场分析-->
	<?php
	$sql   = "SELECT * FROM news where 1=1 and is_show=1 and cat_id=25";
	$sql   = $sql." order by sort_order asc,id desc limit 5 ";
	$zixun = $mysql->get_all($sql);
	?>
	<div class="qing shi">
    	<div class="zi_jie">
        	<div class="qing xin_title">
            	<div class="lf xin_zi"><span class="qing x1">市场分析</span><span class="qing x2">市场分析</span></div>
            	<a href="news_market.php?cat_id=25" class="rf xin_more"><span class="qing"><img src="images/xin_more.png" width="28" height="28" /></span></a>
           	</div>
            <div class="qing zi_shao">
            	<div class="lf zi_date"><span class="qing">
						<?php echo date("d",strtotime($zixun[0]['add_time']));?>
					</span>
					<?php echo date("Y-m",strtotime($zixun[0]['add_time']));?>
				</div>
                <div class="rf" style=" width:461px; ">
                	<a href="news_view.php?id=<?php echo $zixun[$i]['id']; ?>" class="qing zi_bt">
						<?php echo $zixun[0]['title'];?>
					</a>
                    <a href="news_view.php?id=<?php echo $zixun[$i]['id']; ?>" class="qing zi_jian">
						<?php echo $zixun[0]['note'];?>
					</a>
                </div>
            </div>
            <ul class="qing wen_shao">
				<?php for($i=1; $i<count($zixun);$i++){?>
					<li class="qing">
						<a href="news_view.php?id=<?php echo $zixun[$i]['id']; ?>" class="lf">
							<?php echo $zixun[$i]['title'];?>
						</a>
                	<span class="lf">
						<?php echo date("Y-m-d",strtotime($zixun[$i]['add_time']));?>
					</span>
					</li>
				<?php }?>
           	</ul>
        </div>
    </div>
</div>
<!--合作伙伴-->
<div class="qing hz">
    <div class="qing he_title">
        <div class="qing he_bt"><span class="qing h1">合作伙伴</span><span class="qing h2">合作伙伴</span></div>
        <div class="qing he1"><span class="qing"></span></div>
        <div class="qing he2"></div>
    </div>

    <?php
        $sql    ="select * from pic where cat_id=4 order by sort_order asc,id asc";
        $huoban = $mysql->get_all($sql);
		$totalRows1 =$mysql->num_rows($mysql->query($sql));//数据集数据总条数
	    $totalpages = ceil($totalRows1/6);//计算可分页总数，ceil()为上舍函数
    ?>
    <div class="qing center">
    	<div class="main_visual3">
            <div class="main_image3">
                <ul>
					<?php
					$counter = 0;
					for($i = 0; $i < $totalpages; $i++) {?>
                    <li>
                        <?php  for($j=0; $j < 6; $j++) { ?>
                    	<a href="<?php echo $huoban[$counter]['link_url'];?>" target="_blank"><img src="<?php echo $huoban[$counter]['picture'];?>" width="208" height="75" /></a>
                        <?php
							$counter++;
							if($counter >= $totalRows1){
								break;
							}
						}
						?>
                    </li>
					<?php }?>
                </ul>
                <a href="javascript:;" id="btn_prev3"></a>
                <a href="javascript:;" id="btn_next3"></a>
            </div>
        </div>
    </div>
</div>
<?php
require('foot.php');
?>
</body>
</html>
