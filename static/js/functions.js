//back to top
$(".back2top").hide();$(window).scroll(function(){if($(this).scrollTop()>200){$(".back2top").fadeIn(100)}else{$(".back2top").fadeOut(200)}});$(".back2top").click(function(){$("body,html").animate({scrollTop:0},400);return false});

