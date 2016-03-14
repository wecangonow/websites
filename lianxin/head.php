<?php
$sql     = "select * from news where cat_id=10 order by sort_order asc,id asc";
$contact = $mysql->get_one($sql);

$sql = "select * from `news_category` where parent_id = 5 order by sort_order asc,cat_id asc";
$hegui_categories = $mysql->get_all($sql);
$sql = "select * from `news_category` where parent_id = 11 order by sort_order asc,cat_id asc";
$chanpin_categories = $mysql->get_all($sql);
$sql     = "select * from `news_category` where parent_id = 12 order by sort_order asc,cat_id asc";
$service = $mysql->get_all($sql);
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
                <a href="about.php" class="items <?php if($top==1){?>items_on<?php }?>">
                	<div class="qing it_jie">
                        <div class="qing it1">关于联信</div>
                        <div class="qing it2">关于联信</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
                <div class="navi_content">
                    <a href="ab_profiles.php?id=1">公司简介</a>
                    <a href="ab_profiles.php?id=2">企业文化</a>
                    <a href="ab_organization.php">组织架构</a>
                    <a href="ab_team.php">精英团队</a>
                    <a href="ab_honor.php">资质荣誉</a>
              	</div>
          	</li>
            <li>
                <a href="product.php" class="items <?php if($top==2){?>items_on<?php }?>">
                	<div class="qing it_jie">
                        <div class="qing it1">联信产品</div>
                        <div class="qing it2">联信产品</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
                <div class="navi_content">
                    <?php foreach($chanpin_categories as $category) {
                    ?>
                        <a href="product_list.php?id=<?php echo $category['cat_id'];?>"><?php echo $category['cat_name'];?></a>
                    <?php }?>
              	</div>
          	</li>
            <li>
                <a href="#" class="items <?php if($top==3){?>items_on<?php }?>">
                	<div class="qing it_jie">
                        <div class="qing it1">合规管理</div>
                        <div class="qing it2">合规管理</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
                <div class="navi_content">
                    <?php foreach($hegui_categories as $category) {

                    ?>
                    <a href="management.php?id=<?php echo $category['cat_id'];?>"><?php echo $category['cat_name'];?></a>
                    <?php }?>
              	</div>
          	</li>
            <li>
                <a href="service.php" class="items <?php if($top==4){?>items_on<?php }?>">
                	<div class="qing it_jie">
                        <div class="qing it1">合作服务</div>
                        <div class="qing it2">合作服务</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
                <div class="navi_content">
                    <?php foreach($service as $val) {

                        ?>
                        <a href="service.php?cat_id=<?php echo $val['cat_id'];?>"><?php echo $val['cat_name'];?></a>
                    <?php }?>
              	</div>
          	</li>
            <li>
            	<a href="job.php" class="items <?php if($top==5){?>items_on<?php }?>">
                	<div class="qing it_jie">
                        <div class="qing it1">招贤纳士</div>
                        <div class="qing it2">招贤纳士</div>
                    </div>
                    <div class="qing itt"><span class="qing"></span></div>
                </a>
            </li>
            <li>
            	<a href="contact.php" class="items <?php if($top==6){?>items_on<?php }?>">
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
