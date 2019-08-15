$(document).ready(function(){

	//=========================== Fonction ==========================//
	$("#ico_entree").click(function(){
		myfade(".heading",window.location.href+"/entree/entree_header");
		myfade("._body",window.location.href+"/entree");
	});

	$("#ico_home").click(function(){
		myfade(".heading",window.location.href+"/home/home_header");
		myfade("._body",window.location.href+"/home/home_body");
	});

	$("#ico_sorti").click(function(){
		myfade(".heading",window.location.href+"/sorti/sorti_header");
		myfade("._body",window.location.href+"/sorti");
	});

	$("#ico_connexion").click(function(){
		// myfade("heading",window.location.href+"/connexion/connexion_header");
		myfade("._body",window.location.href+"/connexion");
	});
});

function form_log(type){
	$(".form_log").css("display","none");
	$(".mybtn").fadeIn();
	if(type=="user"){
		myfade(".form_log",window.location.href+"/connexion/user_form_log");
	}else if(type=="prop"){
		myfade(".form_log",window.location.href+"/connexion/prop_form_log");
	}
}

function myfade(_class,_link){
	$(_class).css("display","none");
	$(_class).load(_link);
	$(_class).fadeIn();
}