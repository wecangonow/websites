<!-- 底部 -->
<?php
$sql        = "SELECT * FROM news_category where parent_id=5 order by sort_order asc,cat_id asc";
$categories = $mysql->get_all($sql);
?>
<div class="navi">
    <div class="qing center">
        <div class="lf jie_bt">相关链接：</div>
        <ul>
            <?php
            if(count($categories) > 0){
                foreach($categories as $category){

                    ?>
                    <li>
                        <a class="items"><?php echo $category['cat_name'];?></a>
                        <div class="navi_content">
                            <?php
                            $sql        = "SELECT * FROM news where cat_id= ". $category['cat_id'] . " order by sort_order asc,cat_id asc";
                            $sites      = $mysql->get_all($sql);
                            if(count($sites) > 0){
                            foreach($sites as $site){
                            ?>
                            <a href="<?php echo $site['link_url'];?>" target="_blank"><?php echo $site['title'];?></a>
                                <?php
                            }
                            }?>
                        </div>
                    </li>
            <?php
                }
            }?>
        </ul>
    </div>
</div>
<div class="qing footer">
    <div class="qing center">
        <ul class="lf fo_add">
            <li class="qing">
                <div class="lf fo_img"><img src="images/fo1.png" width="27" height="27" /></div>
                <div class="lf fo_di">电话：
                    <?php echo $sys_config['sys_tel'];?>
                </div>
            </li>
            <li class="qing">
                <div class="lf fo_img"><img src="images/fo2.png" width="27" height="27" /></div>
                <div class="lf fo_di">网址：www.wcvma.com</div>
            </li>
            <li class="qing">
                <div class="lf fo_img"><img src="images/fo3.png" width="27" height="27" /></div>
                <div class="lf fo_di">邮箱：
                    <?php echo $sys_config['sys_email'];?>
                </div>
            </li>
            <li class="qing">
                <div class="lf fo_img"><img src="images/fo4.png" width="27" height="27" /></div>
                <div class="lf fo_di">地址：
                    <?php echo $sys_config['sys_address'];?>
                </div>
            </li>
        </ul>
        <div class="lf fo_nav">
            <div class="qing fo_bt">快速导航</div>
            <div class="qing fo_jie">
                <a href="about.php">关于我们</a>
                <a href="meeting.php">会议通知</a>
                <a href="news.php">华人新闻</a>
                <a href="model.php">华人楷模</a>
                <a href="activity.php">活动掠影</a>
                <a href="cooperation.php">合作对接</a>
                <a href="member.php">会员专区</a>
                <a href="contact.php">联系我们</a>
            </div>
        </div>
        <div class="rf fo_ma">
            <div class="qing ma_img">
                <div class="qing ma_tu"><img src="<?php echo $sys_config['sys_weixin'];?>" width="102" height="102" /></div>
                <div class="qing ma_bt">扫描关注官方微信</div>
            </div>
        </div>
    </div>
</div>
<div class="qing copyright">
    <div class="qing center">
        <div class="lf" style="width:980px;">
            <?php echo $sys_config['sys_copyright'];?>
        </div>
        <a href="http://bolehu.net" target="_blank" class="rf">技术支持：博乐虎</a>
    </div>
</div>

