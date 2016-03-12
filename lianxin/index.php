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
                <li><a href="#" style="background:url(images/banner.jpg) center top no-repeat;"></a></li>
                <li><a href="#" style="background:url(images/banner.jpg) center top no-repeat;"></a></li>
                <li><a href="#" style="background:url(images/banner.jpg) center top no-repeat;"></a></li>
            </ul>
            <a href="javascript:;" id="btn_prev"></a>
            <a href="javascript:;" id="btn_next"></a>
        </div>
    </div>
</div>
<div class="qing xi_jie">
	<div class="qing center">
    	<!--新闻焦点-->
    	<div class="qing xin">
        	<div class="qing xin_title">
            	<div class="lf xin_zi"><span class="qing x1">新闻焦点</span><span class="qing x2">新闻焦点</span></div>
             	<a href="news.html" class="rf xin_more"><span class="qing"><img src="images/xin_more.png" width="28" height="28" /></span></a>
           	</div>
          	<div class="qing wen">
               	<div class="lf wen_img">
                  	<div class="main_visual2">
                       	<div class="main_image2">
                          	<ul>
                              	<li><a href="news_view.html"><img src="images/wen_img.jpg" width="197" height="133" /></a></li>
                             	<li><a href="news_view.html"><img src="images/wen_img.jpg" width="197" height="133" /></a></li>
                             	<li><a href="news_view.html"><img src="images/wen_img.jpg" width="197" height="133" /></a></li>
                          	</ul>
                      	</div>
                  	</div>
               	</div>
               	<div class="lf wen_jian">
                   	<div class="main_visual2">
                     	<div class="main_image2">
                         	<ul>
                              	<li><a href="news_view.html">邀参加“第二十届中国资本市场论坛”</a><span class="qing">2016-01-05</span></li>
                             	<li><a href="news_view.html">22邀参加“第二十届中国资本市场论坛”</a><span class="qing">2016-01-12</span></li>
                              	<li><a href="news_view.html">33邀参加“第二十届中国资本市场论坛”</a><span class="qing">2016-02-16</span></li>
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
               	<a href="news_view.html" class="qing xin_bt">9月固定收益类基金投资：稳健配置抵御短期风险</a>
              	<a href="news_view.html" class="qing xin_jian">稳健配置抵御短期风险，灵活轮动期待长期债牛——开放型债券基金投资建议7月公开数据表明，当月国内经济增速...</a>
              	<div class="qing xin_date">2016-01-05</div>
               	<div class="qing xint"></div>
           	</div>
           	<ul class="qing wen_shao">
               	<li class="qing">
                  	<a href="news_view.html" class="lf">第二批境外央行类机构进入中国银行间外汇市场</a>
                  	<span class="lf">2016-01-05</span>
                </li>
               	<li class="qing">
                   	<a href="news_view.html" class="lf">央行以质押方式发放再贷款49.73亿元</a>
                	<span class="lf">2016-01-05</span>
              	</li>
           	</ul>
        </div>
        <!--联信动态-->
        <div class="qing lian">
        	<div class="qing xin_title">
            	<div class="lf xin_zi"><span class="qing x1">联信动态</span><span class="qing x2">联信动态</span></div>
            	<a href="news.html" class="rf xin_more"><span class="qing"><img src="images/xin_more.png" width="28" height="28" /></span></a>
           	</div>
            <div class="qing lit"><span class="lf"></span></div>
            <ul class="qing lian_jie">
            	<li>
                	<a href="news_view.html" class="qing xin_bt">9月固定收益类基金投资：稳健配置抵御短期风险</a>
                    <div class="qing xin_date">2016-01-05</div>
                    <div class="qing xint"></div>
                </li>
                <li>
                	<a href="news_view.html" class="qing xin_bt">大盘蓄势向上 哪些基金率先反弹？</a>
                    <div class="qing xin_date">2016-01-05</div>
                    <div class="qing xint"></div>
                </li>
                <li>
                	<a href="news_view.html" class="qing xin_bt">中国拟引入熔断机制！深度解密熔断机制！</a>
                    <div class="qing xin_date">2016-01-05</div>
                    <div class="qing xint"></div>
                </li>
                <li>
                	<a href="news_view.html" class="qing xin_bt">市场风险偏好趋稳 资金转向固定收益投资</a>
                    <div class="qing xin_date">2016-01-05</div>
                    <div class="qing xint"></div>
                </li>
            </ul>
        </div>
        <!--项目信息-->
        <div class="qing xm">
        	<div class="qing xin_title">
            	<div class="lf xin_zi"><span class="qing x1">项目信息</span><span class="qing x2">项目信息</span></div>
            	<a href="service.html" class="rf xin_more"><span class="qing"><img src="images/xin_more.png" width="28" height="28" /></span></a>
           	</div>
            <div class="qing lit"><span class="lf"></span></div>
            <ul>
            	<li>
                	<div class="lf xm_date"><span>06</span>2016-01</div>
                    <div class="rf xm_jie">
                    	<a href="#" class="qing xin_bt">9月固定收益类基金投资：稳健配置</a>
              			<a href="#" class="qing xin_jian">稳健配置抵御短期风险，灵活轮动期待长期债牛——开放型债券基金投资建议...</a>
                    </div>
                    <div class="qing xint"></div>
                </li>
                <li>
                	<div class="lf xm_date"><span>03</span>2016-01</div>
                    <div class="rf xm_jie">
                    	<a href="#" class="qing xin_bt">9月固定收益类基金投资：稳健配置</a>
              			<a href="#" class="qing xin_jian">稳健配置抵御短期风险，灵活轮动期待长期债牛——开放型债券基金投资建议...</a>
                    </div>
                    <div class="qing xint"></div>
                </li>
                <li>
                	<div class="lf xm_date"><span>01</span>2016-01</div>
                    <div class="rf xm_jie">
                    	<a href="#" class="qing xin_bt">9月固定收益类基金投资：稳健配置</a>
              			<a href="#" class="qing xin_jian">稳健配置抵御短期风险，灵活轮动期待长期债牛——开放型债券基金投资建议...</a>
                    </div>
                    <div class="qing xint"></div>
                </li>
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
        	<li>
            	<div class="qing you_num">
                	<div class="qing you1"><img src="images/youq.png" width="66" height="66" /></div>
                    <div class="qing you2">
                    	<div class="qing yn1"><img src="images/yn1.png" width="66" height="66" /></div>
                        <div class="qing yn2"><img src="images/yn1.png" width="66" height="66" /></div>
                    </div>
                </div>
                <div class="qing you_bt">是管理基金规模较大的基金管理公司之一</div>
            </li>
            <li>
            	<div class="qing you_num">
                	<div class="qing you1"><img src="images/youq.png" width="66" height="66" /></div>
                    <div class="qing you2">
                    	<div class="qing yn1"><img src="images/yn2.png" width="66" height="66" /></div>
                        <div class="qing yn2"><img src="images/yn2.png" width="66" height="66" /></div>
                    </div>
                </div>
                <div class="qing you_bt">以雄厚的综合实力持续保持了行业的领先地位</div>
            </li>
            <li>
            	<div class="qing you_num">
                	<div class="qing you1"><img src="images/youq.png" width="66" height="66" /></div>
                    <div class="qing you2">
                    	<div class="qing yn1"><img src="images/yn3.png" width="66" height="66" /></div>
                        <div class="qing yn2"><img src="images/yn3.png" width="66" height="66" /></div>
                    </div>
                </div>
                <div class="qing you_bt">为民间资本搭建股权投资平台并获得丰厚回报</div>
            </li>
            <li>
            	<div class="qing you_num">
                	<div class="qing you1"><img src="images/youq.png" width="66" height="66" /></div>
                    <div class="qing you2">
                    	<div class="qing yn1"><img src="images/yn4.png" width="66" height="66" /></div>
                        <div class="qing yn2"><img src="images/yn4.png" width="66" height="66" /></div>
                    </div>
                </div>
                <div class="qing you_bt">有多年成功的企业上市融资运作和管理经验</div>
            </li>
        </ul>
    </div>
</div>
<div class="qing hang">
	<!--行业资讯-->
	<div class="qing zi">
    	<div class="zi_jie">
        	<div class="qing xin_title">
            	<div class="lf xin_zi"><span class="qing x1">行业资讯</span><span class="qing x2">行业资讯</span></div>
            	<a href="news.html" class="rf xin_more"><span class="qing"><img src="images/xin_more.png" width="28" height="28" /></span></a>
           	</div>
            <div class="qing zi_shao">
            	<div class="lf zi_date"><span class="qing">16</span>2016-01</div>
                <div class="rf" style=" width:461px; ">
                	<a href="news_view.html" class="qing zi_bt">好买基金: 习大大6.5%打底，市场恢复性反弹</a>
                    <a href="news_view.html" class="qing zi_jian">11月4日沪深两市双双收涨，截至2:45，上证综指上涨4.03%创业板指上涨6.04%，小盘股强于大盘股盘面上，28个申万一级行业悉数上涨，非银金融...</a>
                </div>
            </div>
            <ul class="qing wen_shao">
               	<li class="qing">
                  	<a href="news_view.html" class="lf">第二批境外央行类机构进入中国银行间外汇市场</a>
                  	<span class="lf">2016-01-05</span>
                </li>
               	<li class="qing">
                   	<a href="news_view.html" class="lf">央行以质押方式发放再贷款49.73亿元方式发放方式发放</a>
                	<span class="lf">2016-01-05</span>
              	</li>
                <li class="qing">
                   	<a href="news_view.html" class="lf">第二批境外央行类机构进入中国银行间外汇市场</a>
                	<span class="lf">2016-01-05</span>
              	</li>
                <li class="qing">
                   	<a href="news_view.html" class="lf">央行以质押方式发放再贷款49.73亿元</a>
                	<span class="lf">2016-01-05</span>
              	</li>
           	</ul>
        </div>
    </div>
    <!--市场分析-->
	<div class="qing shi">
    	<div class="zi_jie">
        	<div class="qing xin_title">
            	<div class="lf xin_zi"><span class="qing x1">市场分析</span><span class="qing x2">市场分析</span></div>
            	<a href="news_market.html" class="rf xin_more"><span class="qing"><img src="images/xin_more.png" width="28" height="28" /></span></a>
           	</div>
            <div class="qing zi_shao">
            	<div class="lf zi_date"><span class="qing">16</span>2016-01</div>
                <div class="rf" style=" width:461px; ">
                	<a href="news_view.html" class="qing zi_bt">好买基金: 习大大6.5%打底，市场恢复性反弹</a>
                    <a href="news_view.html" class="qing zi_jian">11月4日沪深两市双双收涨，截至2:45，上证综指上涨4.03%创业板指上涨6.04%，小盘股强于大盘股盘面上，28个申万一级行业悉数上涨，非银金融...</a>
                </div>
            </div>
            <ul class="qing wen_shao">
               	<li class="qing">
                  	<a href="news_view.html" class="lf">第二批境外央行类机构进入中国银行间外汇市场</a>
                  	<span class="lf">2016-01-05</span>
                </li>
               	<li class="qing">
                   	<a href="news_view.html" class="lf">央行以质押方式发放再贷款49.73亿元方式发放方式发放</a>
                	<span class="lf">2016-01-05</span>
              	</li>
                <li class="qing">
                   	<a href="news_view.html" class="lf">第二批境外央行类机构进入中国银行间外汇市场</a>
                	<span class="lf">2016-01-05</span>
              	</li>
                <li class="qing">
                   	<a href="news_view.html" class="lf">央行以质押方式发放再贷款49.73亿元</a>
                	<span class="lf">2016-01-05</span>
              	</li>
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
    <div class="qing center">
    	<div class="main_visual3">
            <div class="main_image3">
                <ul>
                    <li>
                    	<a href="#" target="_blank"><img src="images/hz1.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz2.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz3.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz4.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz5.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz6.jpg" width="208" height="75" /></a>
                    </li>
                    <li>
                    	<a href="#" target="_blank"><img src="images/hz2.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz3.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz4.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz5.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz6.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz1.jpg" width="208" height="75" /></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><img src="images/hz3.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz4.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz5.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz6.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz1.jpg" width="208" height="75" /></a>
                        <a href="#" target="_blank"><img src="images/hz2.jpg" width="208" height="75" /></a>
                    </li>
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
