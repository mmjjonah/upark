function form_log(type){
	$(".form_log").css("display","none");
	$(".mybtn").fadeIn();
	if(type=="user"){
		myfade(".form_log",window.location.href+"/user_form_log");
		$(".prop").fadeOut();
	}else if(type=="prop"){
		myfade(".form_log",window.location.href+"/prop_form_log");
		$(".user").fadeOut();
	}
}

function myfade(_class,_link){
	$(_class).css("display","none");
	$(_class).load(_link);
	$(_class).fadeIn();
}