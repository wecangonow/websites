<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body {
  background: #80BDCB;
}
#tabbar-div {
  background: #278296;
  padding-left: 10px;
  height: 21px;
  padding-top: 0px;
}
#tabbar-div p {
  margin: 1px 0 0 0;
}
.tab-front {
  background: #80BDCB;
  line-height: 20px;
  font-weight: bold;
  padding: 4px 15px 4px 18px;
  border-right: 2px solid #335b64;
  cursor: hand;
  cursor: pointer;
}
.tab-back {
  color: #F4FAFB;
  line-height: 20px;
  padding: 4px 15px 4px 18px;
  cursor: hand;
  cursor: pointer;
}
.tab-hover {
  color: #F4FAFB;
  line-height: 20px;
  padding: 4px 15px 4px 18px;
  cursor: hand;
  cursor: pointer;
  background: #2F9DB5;
}
#top-div
{
  padding: 3px 0 2px;
  background: #BBDDE5;
  margin: 5px;
  text-align: center;
}
#main-div {
  border: 1px solid #345C65;
  padding: 5px;
  margin: 5px;
  background: #FFF;
}
#menu-list {
  padding: 0;
  margin: 0;
}
#menu-list ul {
  padding: 0;
  margin: 0;
  list-style-type: none;
  color: #335B64;
}
#menu-list li {
  padding-left: 16px;
  line-height: 16px;
  cursor: hand;
  cursor: pointer;
}
#main-div a:visited, #menu-list a:link, #menu-list a:hover {
  color: #335B64
  text-decoration: none;
}
#menu-list a:active {
  color: #EB8A3D;
}
.explode {
  background: url(images/menu_minus.gif) no-repeat 0px 3px;
  font-weight: bold;
}
.collapse {
  background: url(images/menu_plus.gif) no-repeat 0px 3px;
  font-weight: bold;
}
.menu-item {
  background: url(images/menu_arrow.gif) no-repeat 0px 3px;
  font-weight: normal;
}
#help-title {
  font-size: 14px;
  color: #000080;
  margin: 5px 0;
  padding: 0px;
}
#help-content {
  margin: 0;
  padding: 0;
}
.tips {
  color: #CC0000;
}
.link {
  color: #000099;
}
</style>

</head>
<body>
<div id="tabbar-div">
<p><span style="float:right; padding: 3px 5px;" ><a href="javascript:toggleCollapse();"><img id="toggleImg" src="images/menu_minus.gif" width="9" height="9" border="0" /></a></span>
  <span class="tab-front" id="menu-tab">系统菜单</span>
</p>
</div>
<div id="main-div">
<div id="menu-list">
<ul id="menu-ul">

  <li class="explode"><a href="javascript:;" target="main-frame">系统配置</a>
    <ul>
      <li class="menu-item"><a href="sys_config.php" target="main-frame">网站配置</a></li>
      <li class="menu-item"><a href="flash.php?cat_id=1" target="main-frame">PC首页焦点</a></li>
	  <!--
      <li class="menu-item"><a href="flash.php?cat_id=3" target="main-frame">手机首页焦点</a></li>
	  -->
      <li class="menu-item"><a href="links_pic.php?cat_id=2" target="main-frame">友情链接</a></li>
    </ul>
  </li>
  <li class="explode"><a href="javascript:;" target="main-frame">首页栏目</a>
    <ul>
      <li class="menu-item"><a href="index_info.php?id=21" target="main-frame">关于我们</a></li>
      <li class="menu-item"><a href="index_info.php?id=22" target="main-frame">公司优势</a></li>
      <li class="menu-item"><a href="index_info.php?id=23" target="main-frame">投资策略</a></li>
    </ul>
  </li>
  <!--
  <li class="explode"><a href="javascript:;" target="main-frame">投资项目</a>
    <ul>
      <li class="menu-item"><a href="pic_view.php?id=12" target="main-frame">PCBanner图</a></li>
      <li class="menu-item"><a href="pic_view.php?id=28" target="main-frame">手机Banner图</a></li>
      <li class="menu-item"><a href="guandian_list.php?cat_id=11" target="main-frame">信息列表</a></li>
      <li class="menu-item"><a href="guandian_add.php?cat_id=11" target="main-frame">添加信息</a></li>
    </ul>
  </li>
  -->
  <li class="explode"><a href="javascript:;" target="main-frame">关于联信</a>
    <ul>
      <li class="menu-item"><a href="pic_view.php?id=3" target="main-frame">PCBanner图</a></li>
  <!--
      <li class="menu-item"><a href="pic_view.php?id=21" target="main-frame">手机Banner图</a></li>
	  -->
      <li class="menu-item"><a href="about_list.php?cat_id=1" target="main-frame">信息列表</a></li>
      <li class="menu-item"><a href="about_add.php?cat_id=1" target="main-frame">添加信息</a></li>
    </ul>
  </li>
  
  <li class="explode"><a href="javascript:;" target="main-frame">新闻动态</a>
    <ul>
      <li class="menu-item"><a href="pic_view.php?id=4" target="main-frame">PCBanner图</a></li>
	  <!--
      <li class="menu-item"><a href="pic_view.php?id=22" target="main-frame">手机Banner图</a></li>
	  -->
      <li class="menu-item"><a href="news_category.php?parent_id=2" target="main-frame">分类管理</a></li>
      <li class="menu-item"><a href="dongtai_list.php?parent_id=2" target="main-frame">信息列表</a></li>
      <li class="menu-item"><a href="dongtai_add.php?parent_id=2" target="main-frame">添加信息</a></li>
    </ul>
  </li>

  <!--
  <li class="explode"><a href="javascript:;" target="main-frame">总裁观点</a>
    <ul>
      <li class="menu-item"><a href="pic_view.php?id=5" target="main-frame">PCBanner图</a></li>
      <li class="menu-item"><a href="pic_view.php?id=23" target="main-frame">手机Banner图</a></li>
      <li class="menu-item"><a href="zongcai_info.php?id=7" target="main-frame">总裁介绍</a></li>
      <li class="menu-item"><a href="guandian_list.php?cat_id=5" target="main-frame">信息列表</a></li>
      <li class="menu-item"><a href="guandian_add.php?cat_id=5" target="main-frame">添加信息</a></li>
    </ul>
  </li>
  -->
  <li class="explode"><a href="javascript:;" target="main-frame">公司优势</a>
    <ul>
      <li class="menu-item"><a href="pic_view.php?id=6" target="main-frame">PCBanner图</a></li>
      <li class="menu-item"><a href="pic_view.php?id=24" target="main-frame">手机Banner图</a></li>
      <li class="menu-item"><a href="youshi_info.php?id=9" target="main-frame">公司优势</a></li>
      <li class="menu-item"><a href="tuandui_list.php?cat_id=6" target="main-frame">专家团队列表</a></li>
      <li class="menu-item"><a href="tuandui_add.php?cat_id=6" target="main-frame">添加专家团队</a></li>
      <li class="menu-item"><a href="jigou_list.php?cat_id=7" target="main-frame">服务机构列表</a></li>
      <li class="menu-item"><a href="jigou_add.php?cat_id=7" target="main-frame">添加服务机构</a></li>
    </ul>
  </li>
  <!--
  <li class="explode"><a href="javascript:;" target="main-frame">投资策略</a>
    <ul>
      <li class="menu-item"><a href="pic_view.php?id=7" target="main-frame">PCBanner图</a></li>
      <li class="menu-item"><a href="pic_view.php?id=25" target="main-frame">手机Banner图</a></li>
      <li class="menu-item"><a href="celue_list.php?cat_id=8" target="main-frame">信息列表</a></li>
      <li class="menu-item"><a href="celue_add.php?cat_id=8" target="main-frame">添加信息</a></li>
    </ul>
  </li>
  -->
  <li class="explode"><a href="javascript:;" target="main-frame">招贤纳士</a>
    <ul>
      <li class="menu-item"><a href="pic_view.php?id=8" target="main-frame">PCBanner图</a></li>
  <!--
      <li class="menu-item"><a href="pic_view.php?id=26" target="main-frame">手机Banner图</a></li>
  -->
      <li class="menu-item"><a href="job_list.php?cat_id=9" target="main-frame">信息列表</a></li>
      <li class="menu-item"><a href="job_add.php?cat_id=9" target="main-frame">添加信息</a></li>
    </ul>
  </li>
  <li class="explode"><a href="javascript:;" target="main-frame">联系我们</a>
    <ul>
      <li class="menu-item"><a href="pic_view.php?id=9" target="main-frame">PCBanner图</a></li>
      <li class="menu-item"><a href="contact_list.php?cat_id=10" target="main-frame">信息列表</a></li>
  <!--
      <li class="menu-item"><a href="pic_view.php?id=27" target="main-frame">手机Banner图</a></li>
      <li class="menu-item"><a href="contact_add.php?cat_id=10" target="main-frame">添加信息</a></li>
  -->
    </ul>
  </li>
  <!--
  <li class="explode"><a href="javascript:;" target="main-frame">华兴公益</a>
    <ul>
      <li class="menu-item"><a href="pic_view.php?id=15" target="main-frame">PCBanner图</a></li>
      <li class="menu-item"><a href="pic_view.php?id=29" target="main-frame">手机Banner图</a></li>
      <li class="menu-item"><a href="hxgy_list.php?cat_id=12" target="main-frame">信息列表</a></li>
      <li class="menu-item"><a href="hxgy_add.php?cat_id=12" target="main-frame">添加信息</a></li>
    </ul>
  </li>
  <li class="explode"><a href="javascript:;" target="main-frame">华兴荣誉</a>
    <ul>
      <li class="menu-item"><a href="pic_view.php?id=16" target="main-frame">PCBanner图</a></li>
      <li class="menu-item"><a href="pic_view.php?id=30" target="main-frame">手机Banner图</a></li>
      <li class="menu-item"><a href="hxry_list.php?cat_id=13" target="main-frame">信息列表</a></li>
      <li class="menu-item"><a href="hxry_add.php?cat_id=13" target="main-frame">添加信息</a></li>
    </ul>
  </li>
  <li class="explode"><a href="javascript:;" target="main-frame">公司月刊</a>
    <ul>
      <li class="menu-item"><a href="pic_view.php?id=31" target="main-frame">PCBanner图</a></li>
      <li class="menu-item"><a href="yuekan_list.php?cat_id=14" target="main-frame">信息列表</a></li>
      <li class="menu-item"><a href="yuekan_add.php?cat_id=14" target="main-frame">添加信息</a></li>
    </ul>
  </li>
  -->
  <li class="explode"><a href="javascript:;" target="main-frame">成员企业</a>
    <ul>
      <li class="menu-item"><a href="chengyuanqiye_list.php?cat_id=4" target="main-frame">信息列表</a></li>
    </ul>
  </li>


  
</ul>
</div>
<div id="help-div" style="display:none">
<h1 id="help-title"></h1>
<div id="help-content"></div>
</div>
</div>

</body>
</html>
