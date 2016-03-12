
$(function(){
	$(window).scroll(function(){
		//首页—>联信优势
		if($(window).scrollTop() > 5 ){
			$(".you_bg").stop().animate({
				left:0,
				opacity:1
			}, 1000,
			function(){
				LiLeftIn($(".you_shao li").eq(0))
			})
		}
		//首页—>行业资讯，市场分析
		if($(window).scrollTop() > 500 ){
			$(".zi").stop().animate({
				left:0,
				opacity:1
			}, 1000)
			$(".shi").stop().animate({
				left:50 + '%',
				opacity:1
			}, 1000)
		}
		//首页—>合作伙伴
		if($(window).scrollTop() > 820 ){
			$(".he_bt").stop().animate({
				opacity:1
			}, 1000,
			function(){
				$(".he1 span").stop().animate({
					width:0,
					opacity:1
				}, 2200)
				$(".he2").stop().animate({
					width:50 + '%',
					opacity:1
				}, 2200)
				$(".hz .center").stop().animate({
					left:0,
					opacity:1
				}, 800)
			})
		}
		
		
	})
})


//首页—>教官风采
function signIn(obj){
	obj.css({
		left    : 120,
		opacity : 0
	}).stop().animate({
		left    : 0,
		opacity : 1
	}, 800)
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





































