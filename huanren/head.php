<!--头部-->
<div class="qing header">
	<div class="qing center" style="overflow:visible;">
    	<a href="index.php" class="lf logo"><img src="images/logo.png" width="200" height="87" /></a>
        <div class="rf" style="width:965px; padding-top:30px; overflow:visible;">
            <div class="rf nav">
                <ul>
                    <li<?php if($top==1){?> class="cur"<?php }?>><a href="index.php"><span data-hover="首页">首页</span></a></li>
                    <li<?php if($top==2){?> class="cur"<?php }?>><a href="about.php"><span data-hover="关于我们">关于我们</span></a></li>
                    <li<?php if($top==3){?> class="cur"<?php }?>><a href="news.php"><span data-hover="新闻动态">新闻动态</span></a></li>
                    <li<?php if($top==4){?> class="cur"<?php }?>><a href="opinions.php"><span data-hover="总裁观点">总裁观点</span></a></li>
                    <li<?php if($top==5){?> class="cur"<?php }?>><a href="advantage.php"><span data-hover="公司优势">公司优势</span></a></li>
                    <li<?php if($top==6){?> class="cur"<?php }?>><a href="strategy.php"><span data-hover="投资策略">投资策略</span></a></li>
                    <li<?php if($top==7){?> class="cur"<?php }?>><a href="job.php"><span data-hover="诚聘精英">诚聘精英</span></a></li>
                    <li<?php if($top==8){?> class="cur"<?php }?>><a href="contact.php"><span data-hover="联系我们">联系我们</span></a></li>
                    <li<?php if($top==9){?> class="cur"<?php }?>><a href="monthly.php"><span data-hover="公司月刊">公司月刊</span></a></li>
                    <li>
                    	<a href="#"><span data-hover="成员企业">成员企业</span></a>
                        <div class="navi_content">
<?php
$sql="select * from pic where cat_id=4 order by sort_order asc,id asc";
$qiye = $mysql->get_all($sql);
foreach($qiye as $qiyelist)
{
?>
<?php
	if(empty($qiyelist['link_url']) || $qiyelist['link_url']=="#")
	{
?>
                            <a><?php echo $qiyelist['title'];?></a>
<?php
	}
	else
	{
?>
                            <a href="<?php echo $qiyelist['link_url'];?>" target="_blank"><?php echo $qiyelist['title'];?></a>
<?php
	}
?>

<?php
}
?>
                      	</div>
                	</li>
                </ul>
                <div class="nav-line"></div>
            </div>
        </div>
    </div>
</div>