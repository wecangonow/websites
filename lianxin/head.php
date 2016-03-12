<?php
$sql     = "select * from news where cat_id=10 order by sort_order asc,id asc";
$contact = $mysql->get_one($sql);
 ?>
<!--头部-->
<div class="navi">
	<div class="qing hea_bg"><span class="qing"></span></div>
	<div class="center">
    	<a href="index.php" class="lf logo">
        	<div class="qing logo1"><img src="images/logo1.png" width="90" height="104" /></div>
            <div class="qing logo2"><img src="images/logo2.png" width="17" height="17" /></div>
            <div class="qing logo3"><img src="images/logo3.png" width="17" height="17" /></div>
            <div class="qing logo4"><img src="images/logo4.png" width="17" height="17" /></div>
   			<div class="qing logo5"><img src="images/logo5.png" width="17" height="17" /></div>
            <div class="qing logo6"><img src="images/logo6.png" width="17" height="37" /></div>
            <div class="qing logo7"><img src="images/logo7.png" width="17" height="37" /></div>
            <div class="qing logo8"><img src="images/logo8.png" width="18" height="37" /></div>
            <div class="qing logo9"><img src="images/logo9.png" width="18" height="37" /></div>
  	  	</a>
        <ul>
      		<li>
            	<a href="index.php" class="items soye">
                	<div class="qing it_jie">
                        <div class="qing it1">首页</div>
                        <div class="qing it2">首页</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
            </li>
            <li>
                <a href="about.html" class="items">
                	<div class="qing it_jie">
                        <div class="qing it1">关于联信</div>
                        <div class="qing it2">关于联信</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
                <div class="navi_content">
                    <a href="ab_profiles.html">公司简介</a>
                    <a href="ab_profiles.html">企业文化</a>
                    <a href="ab_organization.html">组织架构</a>
                    <a href="ab_team.html">精英团队</a>
                    <a href="ab_honor.html">资质荣誉</a>
              	</div>
          	</li>
            <li>
                <a href="product.html" class="items">
                	<div class="qing it_jie">
                        <div class="qing it1">联信产品</div>
                        <div class="qing it2">联信产品</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
                <div class="navi_content">
                    <a href="#">认购期产品</a>
                    <a href="#">封闭期产品</a>
                    <a href="#">历史产品</a>
              	</div>
          	</li>
            <li>
                <a href="management.html" class="items">
                	<div class="qing it_jie">
                        <div class="qing it1">合规管理</div>
                        <div class="qing it2">合规管理</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
                <div class="navi_content">
                    <a href="#">法律声明</a>
                    <a href="#">风险管控</a>
              	</div>
          	</li>
            <li>
                <a href="service.html" class="items">
                	<div class="qing it_jie">
                        <div class="qing it1">合作服务</div>
                        <div class="qing it2">合作服务</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
                <div class="navi_content">
                    <a href="#">项目合作</a>
                    <a href="#">合作流程</a>
                    <a href="#">退出机制</a>
              	</div>
          	</li>
            <li>
            	<a href="job.php" class="items">
                	<div class="qing it_jie">
                        <div class="qing it1">招贤纳士</div>
                        <div class="qing it2">招贤纳士</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
            </li>
            <li>
            	<a href="contact.php" class="items">
                	<div class="qing it_jie">
                        <div class="qing it1">联系我们</div>
                        <div class="qing it2">联系我们</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
            </li>
		</ul>
        <div class="rf tel">
        	<div class="lf tel_img"><span class="qing"><img src="images/tel.png" width="33" height="33" /></span></div>
            <div class="lf tel_jian">VIP热线<span class="qing"><?php echo $contact['tel'];?></span></div>
        </div>
	</div>
</div>
