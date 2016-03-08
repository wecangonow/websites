$(function(){
	$(window).scroll(function(){
		//首页—>投资项目 背景
		if($(window).scrollTop() > 400 ){
			$(".tou_img").stop().animate({width: 100 + '%'}, 800)
		}
		//首页—>投资项目 标题
		if($(window).scrollTop() > 500 ){
			$(".tou1").stop().animate({
				right:0,
				opacity:1
			}, 800)
			$(".tou2").stop().animate({
				top:43,
				opacity:1
			}, 800)
		}
		//首页—>公司优势，投资策略
		if($(window).scrollTop() > 850 ){
			$(".you1").stop().animate({
				left:0,
				opacity:1
			}, 1200)
			$(".you2").stop().animate({
				left:50 + '%',
				opacity:1
			}, 1200)
		}
		//首页—>合作伙伴 / 链接
		if($(window).scrollTop() > 1100 ){
			LiLeftIn($(".links ul li").eq(0))
		}
		//公司优势页—>专家团队
		if($(window).scrollTop() > 0 ){
			$(".te_shao").stop().animate({
				opacity:1
			}, 400)
			$(".tt2").stop().animate({
				opacity:1
			}, 1000)
			$(".tt3").stop().animate({
				opacity:1
			}, 1000)
			$(".tt4").stop().animate({
				opacity:1
			}, 1600)
			$(".tt5").stop().animate({
				opacity:1
			}, 1600)
			$(".tt6").stop().animate({
				opacity:1
			}, 2200)
		}
		//公司优势页—>服务机构
		if($(window).scrollTop() > 460 ){
			$(".fu_bt").stop().animate({
				top:51,
				opacity:1
			}, 1000)
			$(".fu_jie").stop().animate({
				opacity:1
			}, 1000)
		}
		//总裁观点页—>右侧文字
		if($(window).scrollTop() > 10 ){
			$(".cai_wen span").stop().animate({
				opacity:1
			}, 1200)
		}
	})
})
//首页—>合作伙伴 / 链接
function signIn(obj){
	obj.css({
		left    : 20,
		opacity : 0
	}).stop().animate({
		left    : 0,
		opacity : 1
	}, 1000)
}

function Hover(obj, calssName) {
	obj.hover(function(){
		$(this).addClass(calssName);
	},function(){
		$(this).removeClass(calssName);
	})
}

function LiLeftIn(obj){
	obj.eq(0).stop().animate({
		left    : 0,
		opacity : 1
	}, 400)
	setTimeout(function(){
		if(obj.next()){
			LiLeftIn(obj.next())
		}
	}, 200)
}
