<!--底部-->
<div class="qing footer">
	<div class="qing center">
    	<ul class="lf ma">
        	<li class="lf"><img src="<?php echo $sys_config['sys_weixin'];?>" width="77" height="77" /><br />关注服务号</li>
            <li class="lf"><img src="<?php echo $sys_config['sys_weibo'];?>" width="77" height="77" /><br />关注订阅号</li>
        </ul>
        <div class="lf links">
        	<div class="qing links_bt">友情链接</div>
            <ul class="qing links_nav">
                <?php
                $sql="select * from pic where cat_id=2 order by sort_order asc,id asc limit 0,7";
                $index_links = $mysql->get_all($sql);
                foreach($index_links as $index_links_list)
                {
                ?>
            	<li><a href="<?php echo $index_links_list['link_url'];?>" target="_blank"><?php echo $index_links_list['title'];?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="rf fo_tel" style="width:255px;">
        	<div class="rf" style="width:113px; ">
            	<div class="lf tel_tu"><span class="qing"><img src="images/tel.png" width="33" height="33" /></span></div>
            	<div class="lf tel_zi">VIP服务热线</div>
          	</div>
			<i class="qing"><?php echo $contact['tel'];?></i>
          	<div class="qing fo_add"><?php echo $contact['title'];?><br /><?php echo $contact['address'];?></div>
        </div>
    </div>
</div>
<div class="qing copyright">
	<div class="qing center">
    	<div class="lf" style="width:860px;">北京联信基金管理有限公司  版权所有  Copyright@2015 京ICP备：15028611号  <a href="http://bolehu.net" target="_blank">博乐虎</a>提供<a href="http://bolehu.net" target="_blank">网站建设</a></div>
        <div class="rf" style="width:370px;">
        	<table class="yx" border="0" cellspacing="0" cellpadding="0">
              	<tr>
                	<td width="28" align="left" valign="middle">
                    	<div class="qing yx_img"><span class="qing yx1"></span><span class="qing yx2"></span></div>
                    </td>
                    <td align="right" valign="middle"><?php echo $contact['email'];?></td>
              	</tr>
            </table>
        </div>
    </div>
</div>
