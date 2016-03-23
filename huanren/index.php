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
<div class="qing mtop">
	<div class="main_visual">
        <div class="main_image">
            <ul>
                <li><a href="#" style="background:url(images/banner.jpg) center top no-repeat;"></a></li>
                <li><a href="#" style="background:url(images/banner.jpg) center top no-repeat;"></a></li>
                <li><a href="#" style="background:url(images/banner.jpg) center top no-repeat;"></a></li>
            </ul>
            <a href="javascript:;" id="btn_prev"></a>
            <a href="javascript:;" id="btn_next"></a>
        </div>
        <table class="flicking_con" border="0" cellspacing="0" cellpadding="0" style=" text-align:center">
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
<!-- 高层动态 / 商会动态 -->
<div class="qing center tai">
	<!--高层动态-->
	<div class="qing gao">
    	<a href="news.html" class="qing gao_tt">
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
                        <li>
                        	<div class="qing gao_shao">
                                <a href="news_view.html" class="qing gao_img"><img src="images/gao_img.jpg" width="549" height="393" /></a>
                                <div class="qing gao_jie">
                                    <div class="lf" style="width:383px;">
                                        <a href="news_view.html" class="qing gao_tit">李克强将主持的“上合总理会”，有多重要？有啥讲究？</a>
                                        <a href="news_view.html" class="qing gao_jian">初夏的南非约翰内斯堡微风和熙，阳光普照。杉藤国际会议中心涌动着中非合作的一股股暖流 . . . 2015-10-10</a>
                                    </div>
                                    <div class="rf gao_more">
                                    	<a href="news_view.html" class="qing">
                                            <div class="qing gao_m1">详细</div>
                                            <div class="qing gao_m2">详细</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="qing gao_shao">
                                <a href="news_view.html" class="qing gao_img"><img src="images/gao_img.jpg" width="549" height="393" /></a>
                                <div class="qing gao_jie">
                                    <div class="lf" style="width:383px;">
                                        <a href="news_view.html" class="qing gao_tit">李克强将主持的“上合总理会”，有多重要？有啥讲究？</a>
                                        <a href="news_view.html" class="qing gao_jian">初夏的南非约翰内斯堡微风和熙，阳光普照。杉藤国际会议中心涌动着中非合作的一股股暖流 . . . 2015-10-10</a>
                                    </div>
                                    <div class="rf gao_more">
                                    	<a href="news_view.html" class="qing">
                                            <div class="qing gao_m1">详细</div>
                                            <div class="qing gao_m2">详细</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="qing gao_shao">
                                <a href="news_view.html" class="qing gao_img"><img src="images/gao_img.jpg" width="549" height="393" /></a>
                                <div class="qing gao_jie">
                                    <div class="lf" style="width:383px;">
                                        <a href="news_view.html" class="qing gao_tit">李克强将主持的“上合总理会”，有多重要？有啥讲究？</a>
                                        <a href="news_view.html#" class="qing gao_jian">初夏的南非约翰内斯堡微风和熙，阳光普照。杉藤国际会议中心涌动着中非合作的一股股暖流 . . . 2015-10-10</a>
                                    </div>
                                    <div class="rf gao_more">
                                    	<a href="news_view.html" class="qing">
                                            <div class="qing gao_m1">详细</div>
                                            <div class="qing gao_m2">详细</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
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
            <!--左右切换结束-->
        </div>
    </div>
    <!--商会动态-->
    <div class="qing hui">
    	<div class="qing hui_ti">
        	<a href="news.html" class="lf hui_bt">
            	<div class="qing hui_zi"><span>商</span>会动态</div>
                <div class="qing hui_ying">Dynamic Chamber</div>
                <div class="qing hui1"><span class="qing"></span></div>
                <div class="qing hui2"></div>
                <div class="qing hui3"></div>
                <div class="qing hui4"></div>
                <div class="qing hui5"></div>
            </a>
            <a href="news.html" class="rf hui_more">更多<span>>></span></a>
        </div>
        <ul class="qing shang">
        	<li class="qing">
            	<div class="lf shang_jie">
                    <a href="news_view.html" class="qing">习近平就2016年二十国集团峰会发表致辞</a>
                    <span class="qing">2016-01-20</span>
                    <div class="qing sht"></div>
                </div>
                <div class="rf sh_more"><a href="news_view.html" class="qing"></a></div>
            </li>
            <li class="qing">
            	<div class="lf shang_jie">
                    <a href="news_view.html" class="qing">李克强将主持的“上合总理会”，有多重要？有啥讲究？</a>
                    <span class="qing">2016-01-20</span>
                    <div class="qing sht"></div>
                </div>
                <div class="rf sh_more"><a href="news_view.html" class="qing"></a></div>
            </li>
            <li class="qing">
            	<div class="lf shang_jie">
                    <a href="news_view.html" class="qing">感受中国理念的共识魅力</a>
                    <span class="qing">2016-01-20</span>
                    <div class="qing sht"></div>
                </div>
                <div class="rf sh_more"><a href="news_view.html" class="qing"></a></div>
            </li>
            <li class="qing">
            	<div class="lf shang_jie">
                    <a href="news_view.html" class="qing">李克强：充实中伊战略伙伴关系内涵　打造互利合作升级版</a>
                    <span class="qing">2016-01-20</span>
                    <div class="qing sht"></div>
                </div>
                <div class="rf sh_more"><a href="news_view.html" class="qing"></a></div>
            </li>
            <li class="qing">
            	<div class="lf shang_jie">
                    <a href="news_view.html" class="qing">习近平主持召开中央全面深化改革领导小组第十九次会议</a>
                    <span class="qing">2016-01-20</span>
                    <div class="qing sht"></div>
                </div>
                <div class="rf sh_more"><a href="news_view.html" class="qing"></a></div>
            </li>
        </ul>
    </div>
</div>
<!-- 会议通知 / 活动视频 / 会员专区 -->
<div class="qing" style="background:#efefef; padding:32px 0;">
	<div class="qing center">
    	<!--会议通知-->
    	<div class="lf zhi">
        	<div class="qing hui_ti">
                <a href="meeting.html" class="lf hui_bt">
                    <div class="qing hui_zi"><span>会</span>议通知</div>
                    <div class="qing hui_ying">Meeting Notice</div>
                    <div class="qing hui1"><span class="qing"></span></div>
                    <div class="qing hui2"></div>
                    <div class="qing hui3"></div>
                    <div class="qing hui4"></div>
                    <div class="qing hui5"></div>
                </a>
                <a href="meeting.html" class="rf hui_more">更多<span>>></span></a>
            </div>
            <div class="qing zhi_jie">
             	<a href="#" class="qing">澳大利亚 East West 国际开发集团</a>
              	<a href="#" class="qing">百比赫广告公司（Bartle Bogle Hegarty）</a>
              	<a href="#" class="qing">泰国正大(卜蜂)集团</a>
               	<a href="#" class="qing">新西兰皇家商学院</a>
               	<a href="#" class="qing">美国路易威尔大学</a>
               	<a href="#" class="qing">林氏兄弟进出口有限公司</a>
             	<a href="#" class="qing">鸿基（新西兰）贸易发展有限公司</a>
            </div>
        </div>
        <!--活动视频-->
        <div class="lf huo">
        	<a href="video.html" class="qing huo_bt">
            	<div class="lf huo1">活动</div>
                <div class="lf huo2"><span class="qing">视频</span>Active Video</div>
            </a>
            <div class="qing huo_shi">
            	<div class="main_visual3">
                    <div class="main_image3">
                        <ul>
                            <li>
                            	<a href="#" class="qing huo_jie">
                                	<div class="qing huo_img"><img src="images/huo1.jpg" width="342" height="251" /></div>
                                    <div class="qing huo_jian">
                                    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          	<tr>
                                            	<td width="53" align="left" valign="middle"><img src="images/huo_biao.png" width="38" height="38" /></td>
                                                <td align="left" valign="middle">充实中伊战略伙伴关系内涵打造互利合作升级版打造互利合作升级版</td>
                                          	</tr>
                                        </table>
                                    </div>
                                </a>
                            </li>
                            <li>
                            	<a href="#" class="qing huo_jie">
                                	<div class="qing huo_img"><img src="images/huo2.jpg" width="342" height="251" /></div>
                                    <div class="qing huo_jian">
                                    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          	<tr>
                                            	<td width="53" align="left" valign="middle"><img src="images/huo_biao.png" width="38" height="38" /></td>
                                                <td align="left" valign="middle">222充实中伊战略伙伴关系内涵打造互利合作升级版打造互利合作升级版</td>
                                          	</tr>
                                        </table>
                                    </div>
                                </a>
                            </li>
                            <li>
                            	<a href="#" class="qing huo_jie">
                                	<div class="qing huo_img"><img src="images/huo1.jpg" width="342" height="251" /></div>
                                    <div class="qing huo_jian">
                                    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          	<tr>
                                            	<td width="53" align="left" valign="middle"><img src="images/huo_biao.png" width="38" height="38" /></td>
                                                <td align="left" valign="middle">333充实中伊战略伙伴关系内涵打造互利合作升级版打造互利合作升级版</td>
                                          	</tr>
                                        </table>
                                    </div>
                                </a>
                            </li>
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
                    <a href="#" class="qing shm"><div class="qing sh1">立即申请会员</div><div class="qing sh2">立即申请会员</div></a>
                </div>
            </div>
            <!--会员专区-->
            <div class="qing qu">
           	  	<a href="member.html" class="lf hui_bt">
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
                    	<a href="#"><span>></span>澳大利亚 East West 国际开发集团</a>
                        <a href="#"><span>></span>百比赫广告公司（Bartle Bogle Hegarty）</a>
                        <a href="#"><span>></span>泰国正大(卜蜂)集团</a>
                        <a href="#"><span>></span>新西兰皇家商学院</a>
                        <a href="#"><span>></span>林氏兄弟进出口有限公司</a>
					</div>
                    <a href="member.html" class="qing qu_more">更多</a>
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
         	<a href="model.html" class="lf hui_bt">
             	<div class="qing hui_zi"><span>华</span>人楷模</div>
              	<div class="qing hui_ying">Chinese Model</div>
              	<div class="qing hui1"><span class="qing"></span></div>
              	<div class="qing hui2"></div>
              	<div class="qing hui3"></div>
               	<div class="qing hui4"></div>
              	<div class="qing hui5"></div>
          	</a>
        	<a href="model.html" class="rf hui_more">更多<span>>></span></a>
       	</div>
		<ul class="qing kai_jie">
        	<li class="qing">
            	<a href="#" class="qing kai_bt">为华侨华人排忧解难 苏里南“华助中心”揭牌</a>
                <a href="#" class="qing kai_jian">East West 国际开发集团致力于开发住宅和商业房地产，目前主的开发项目是位于昆士兰伊普斯威治市的瑞班花园</a>
            </li>
            <li class="qing">
            	<a href="#" class="qing kai_bt">加拿大首个华助中心在多伦多揭牌 为侨胞排忧解难</a>
                <a href="#" class="qing kai_jian">East West 国际开发集团致力于开发住宅和商业房地产，目前主的开发项目是位于昆士兰伊普斯威治市的瑞班花园</a>
            </li>
        </ul>
    </div>
    <!--合作对接-->
    <div class="lf he">
    	<div class="qing hui_ti">
         	<a href="cooperation.html" class="lf hui_bt">
             	<div class="qing hui_zi"><span>合</span>作对接</div>
              	<div class="qing hui_ying">Cooperation Docking</div>
              	<div class="qing hui1"><span class="qing"></span></div>
              	<div class="qing hui2"></div>
              	<div class="qing hui3"></div>
               	<div class="qing hui4"></div>
              	<div class="qing hui5"></div>
          	</a>
        	<a href="cooperation.html" class="rf hui_more">更多<span>>></span></a>
       	</div>
        <ul class="qing he_jie">
        	<li><a href="#">北京-神护润滑油招商项目</a><div class="qing het"></div></li>
            <li><a href="#">河南许昌--千年古镇5A级景区合作项目</a><div class="qing het"></div></li>
            <li><a href="#">安徽蚌埠--汽车零部件及工装设备合作转让项目</a><div class="qing het"></div></li>
            <li><a href="#">绿色农业有机肥互联网合作</a><div class="qing het"></div></li>
            <li><a href="#">云南-红河家园旅游地产开发项目</a><div class="qing het"></div></li>
            <li><a href="#">新华社：中国海外并购 机遇与挑战并存</a><div class="qing het"></div></li>
        </ul>
    </div>
    <!--华人新闻-->
  	<div class="rf xin">
   		<div class="qing hui_ti">
         	<a href="news.html" class="lf hui_bt">
             	<div class="qing hui_zi"><span>华</span>人新闻</div>
              	<div class="qing hui_ying">Chinese News</div>
              	<div class="qing hui1"><span class="qing"></span></div>
              	<div class="qing hui2"></div>
              	<div class="qing hui3"></div>
               	<div class="qing hui4"></div>
              	<div class="qing hui5"></div>
          	</a>
        	<a href="news.html" class="rf hui_more">更多<span>>></span></a>
   	  	</div>
		<div class="qing xin_img"><a href="#" class="qing"><img src="images/xin_img.jpg" width="344" height="128" /></a></div>
       	<div class="qing qu_jian">
          	<a href="news_view.html"><span>></span>山东省出台首部涉侨地方性条例 涵盖侨胞关心问题</a>
            <a href="news_view.html"><span>></span>归侨侨眷职工出境探亲假期待遇</a>
      		<a href="news_view.html"><span>></span>山东省出台首部涉侨地方性条例 涵盖侨胞关心问题</a>
          	<a href="news_view.html"><span>></span>爱尔兰拟出台留学新政降低签证障碍</a>
		</div>
    </div>
</div>
<!-- 企业风采 -->
<div class="qing qiye">
	<div class="qing center">
    	<div class="qing hui_ti">
         	<a href="style.html" class="lf hui_bt">
             	<div class="qing hui_zi"><span>企</span>业风采</div>
              	<div class="qing hui_ying">Corporate Style</div>
              	<div class="qing hui1"><span class="qing"></span></div>
              	<div class="qing hui2"></div>
              	<div class="qing hui3"></div>
               	<div class="qing hui4"></div>
              	<div class="qing hui5"></div>
          	</a>
        	<a href="style.html" class="rf hui_more">更多<span>>></span></a>
   	  	</div>
        <ul class="qing">
        	<li class="lf">
            	<div class="qing qi_jie">
                	<a href="#" class="lf qi_img"><img src="images/qiye1.jpg" width="138" height="158" /></a>
                    <div class="rf qi_shao">
                    	<a href="#" class="qing qi_bt">李嘉诚</a>
                        <a href="#" class="qing qi_jian">香港首富、长江和记实业有限公司主席汉族，出生于广东潮州潮安，祖籍福建莆田</a>
                        <a href="#" class="qing qi_more">[详情]</a>
                    </div>
              	</div>
                <div class="qing qy1"></div>
                <div class="qing qy2"></div>
                <div class="qing qy3"></div>
                <div class="qing qy4"></div>
            </li>
            <li class="lf">
            	<div class="qing qi_jie">
                	<a href="#" class="lf qi_img"><img src="images/qiye2.jpg" width="138" height="158" /></a>
                    <div class="rf qi_shao">
                    	<a href="#" class="qing qi_bt">胡介国</a>
                        <a href="#" class="qing qi_jian">迄今为止非洲唯一的华人酋长,尼日利亚金门集团董事长，尼日利亚中国友好协会第一副会长</a>
                        <a href="#" class="qing qi_more">[详情]</a>
                    </div>
              	</div>
                <div class="qing qy1"></div>
                <div class="qing qy2"></div>
                <div class="qing qy3"></div>
                <div class="qing qy4"></div>
            </li>
            <li class="lf">
            	<div class="qing qi_jie">
                	<a href="#" class="lf qi_img"><img src="images/qiye3.jpg" width="138" height="158" /></a>
                    <div class="rf qi_shao">
                    	<a href="#" class="qing qi_bt">谢国民</a>
                        <a href="#" class="qing qi_jian">泰国正大国际集团董事长、泰中友好协会副主席、香港回归祖国筹备委员会委员。</a>
                        <a href="#" class="qing qi_more">[详情]</a>
                    </div>
              	</div>
                <div class="qing qy1"></div>
                <div class="qing qy2"></div>
                <div class="qing qy3"></div>
                <div class="qing qy4"></div>
            </li>
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
    	<li><a href="#"><img src="images/you1.jpg" width="238" height="79" /></a></li>
        <li><a href="#"><img src="images/you2.jpg" width="238" height="79" /></a></li>
        <li><a href="#"><img src="images/you3.jpg" width="238" height="79" /></a></li>
        <li><a href="#"><img src="images/you4.jpg" width="238" height="79" /></a></li>
        <li><a href="#"><img src="images/you5.jpg" width="238" height="79" /></a></li>
    </ul>
</div>
<?php
require('foot.php');
?>
</body>
</html>
