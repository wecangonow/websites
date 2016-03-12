// JavaScript Document
$(document).ready(function(){
	var duilian_left = $("#LeftAd");
	var duilian_right = $("#RightAd");
	var screen_w = screen.width;
	if(screen_w>1024){duilian_left.show();}
	if(screen_w>1024){duilian_right.show();}
	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		duilian_left.stop().animate({top:scrollTop+320});
		duilian_right.stop().animate({top:scrollTop+320});
	});
	
});
function ClosedivRight()
{
RightAd.style.visibility="hidden";
}

    $(function() {
        $('.side-bar-qq .ico2').hover(
			function() {
			    $(this).addClass("hover");
			    $(this).stop(true, true).animate({ width: "110px" }, 300);
			    return false;
			}, function() {
			    $(this).removeClass("hover");
			    $(this).stop(true, true).animate({ width: "45px" }, 300);
			    return false;
			}
		)
        $('.side-bar-contact .ico2').hover(
			function() {
			    $(this).addClass("hover");
			    $(this).stop(true, true).animate({ width: "110px" }, 300);
			    return false;
			},
			function() {
			    $(this).removeClass("hover");
			    $(this).stop(true, true).animate({ width: "45px" }, 300);
			    return false;
			}
		)
        $('.to-top').click(function() {
            $("html, body").animate({ scrollTop: 0 }, 620);
        })
    })