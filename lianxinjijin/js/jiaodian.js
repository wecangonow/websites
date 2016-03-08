
/*首页 banner 开始*/
$(document).ready(function(){
	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
	},function(){
		$("#btn_prev,#btn_next").fadeOut()
	});
	
	$dragBln = false;
	
	$(".main_image").touchSlider({
		flexible : true,
		speed :300,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e){
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	});
	
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	});
	
	$(".main_image a").click(function(){
		if($dragBln) {
			return false;
		}
	});
	
	timer = setInterval(function(){
		$("#btn_next").click();
	}, 5000);
	
	$(".main_visual").hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		},5000);
	});
	
	$(".main_image").bind("touchstart",function(){
		clearInterval(timer);
	}).bind("touchend", function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		}, 5000);
	});
	
});
/*首页 banner 结束*/



/*首页 新闻焦点 开始*/
$(document).ready(function(){
	/*
	$(".main_visual2").hover(function(){
		$("#btn_prev2,#btn_next2").fadeIn()
	},function(){
		$("#btn_prev2,#btn_next2").fadeOut()
	});*/
	
	$dragBln = false;
	
	$(".main_image2").touchSlider({
		flexible : true,
		speed :800,
		btn_prev : $("#btn_prev2"),
		btn_next : $("#btn_next2"),
		paging : $(".flicking_con2 a"),
		counter : function (e){
			$(".flicking_con2 a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	
	$(".main_image2").bind("mousedown", function() {
		$dragBln = false;
	});
	
	$(".main_image2").bind("dragstart", function() {
		$dragBln = true;
	});
	
	$(".main_image2 a").click(function(){
		if($dragBln) {
			return false;
		}
	});
	
	timer = setInterval(function(){
		$("#btn_next2").click();
	}, 5000);
	
	$(".main_visual2").hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(function(){
			$("#btn_next2").click();
		},5000);
	});
	
	$(".main_image2").bind("touchstart",function(){
		clearInterval(timer);
	}).bind("touchend", function(){
		timer = setInterval(function(){
			$("#btn_next2").click();
		}, 5000);
	});
	
});
/*首页 新闻焦点 结束*/

/*首页 合作伙伴 开始*/
$(document).ready(function(){
	
	$(".main_visual3").hover(function(){
		$("#btn_prev3,#btn_next3").fadeIn()
	},function(){
		$("#btn_prev3,#btn_next3").fadeOut()
	});
	
	$dragBln = false;
	
	$(".main_image3").touchSlider({
		flexible : true,
		speed :800,
		btn_prev : $("#btn_prev3"),
		btn_next : $("#btn_next3"),
		paging : $(".flicking_con3 a"),
		counter : function (e){
			$(".flicking_con3 a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	
	$(".main_image3").bind("mousedown", function() {
		$dragBln = false;
	});
	
	$(".main_image3").bind("dragstart", function() {
		$dragBln = true;
	});
	
	$(".main_image3 a").click(function(){
		if($dragBln) {
			return false;
		}
	});
	
	timer = setInterval(function(){
		$("#btn_next3").click();
	}, 5000);
	
	$(".main_visual3").hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(function(){
			$("#btn_next3").click();
		},5000);
	});
	
	$(".main_image3").bind("touchstart",function(){
		clearInterval(timer);
	}).bind("touchend", function(){
		timer = setInterval(function(){
			$("#btn_next3").click();
		}, 5000);
	});
	
});
/*首页 合作伙伴 结束*/


/*about页 精英团队 开始*/
$(document).ready(function(){
	
	$(".main_visual4").hover(function(){
		$("#btn_prev4,#btn_next4").fadeIn()
	},function(){
		$("#btn_prev4,#btn_next4").fadeOut()
	});
	
	$dragBln = false;
	
	$(".main_image4").touchSlider({
		flexible : true,
		speed :800,
		btn_prev : $("#btn_prev4"),
		btn_next : $("#btn_next4"),
		paging : $(".flicking_con4 a"),
		counter : function (e){
			$(".flicking_con4 a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	
	$(".main_image4").bind("mousedown", function() {
		$dragBln = false;
	});
	
	$(".main_image4").bind("dragstart", function() {
		$dragBln = true;
	});
	
	$(".main_image4 a").click(function(){
		if($dragBln) {
			return false;
		}
	});
	
	timer = setInterval(function(){
		$("#btn_next4").click();
	}, 5000);
	
	$(".main_visual4").hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(function(){
			$("#btn_next4").click();
		},5000);
	});
	
	$(".main_image4").bind("touchstart",function(){
		clearInterval(timer);
	}).bind("touchend", function(){
		timer = setInterval(function(){
			$("#btn_next4").click();
		}, 5000);
	});
	
});
/*about页 精英团队 结束*/


/*about页 资质荣誉 开始*/
$(document).ready(function(){
	/*
	$(".main_visual5").hover(function(){
		$("#btn_prev5,#btn_next5").fadeIn()
	},function(){
		$("#btn_prev5,#btn_next5").fadeOut()
	});
	*/
	$dragBln = false;
	
	$(".main_image5").touchSlider({
		flexible : true,
		speed :800,
		btn_prev : $("#btn_prev5"),
		btn_next : $("#btn_next5"),
		paging : $(".flicking_con5 a"),
		counter : function (e){
			$(".flicking_con5 a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	
	$(".main_image5").bind("mousedown", function() {
		$dragBln = false;
	});
	
	$(".main_image5").bind("dragstart", function() {
		$dragBln = true;
	});
	
	$(".main_image5 a").click(function(){
		if($dragBln) {
			return false;
		}
	});
	
	timer = setInterval(function(){
		$("#btn_next5").click();
	}, 5000);
	
	$(".main_visual5").hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(function(){
			$("#btn_next5").click();
		},5000);
	});
	
	$(".main_image5").bind("touchstart",function(){
		clearInterval(timer);
	}).bind("touchend", function(){
		timer = setInterval(function(){
			$("#btn_next5").click();
		}, 5000);
	});
	
});
/*about页 资质荣誉 结束*/










































































