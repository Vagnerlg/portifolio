var left = 0;
var borda = 10;
var altura = 250;
var largura = 320;
var lis = 0;
$("#carrossel li").each( function( index) {
	lis++;
});
var bordas = lis * borda;
var tmli = largura - bordas + borda;
var tmUl = lis * tmli;
var tmimg = tmli - 40;
$("#carrossel").css({"width" : largura+"px" , "height" : altura+"px"});
$("#carrossel li").each( function( index) {
	color = $(this).attr('data-color');
	$(this).css({"width" : tmli+"px" ,"left" : left+"px","border-left" : borda+"px solid "+color , "background-color" : color});
	left = left + borda - tmli;
});
$("#carrossel ul").css("width" , tmUl+"px");
$("#carrossel ul li img").addClass("flexbox");
$("#carrossel ul li img").addClass("transformar10");
$("#carrossel ul li img").css("width" , tmimg+"px");
//recuar
recuarBanner();

function recuarBanner(){
$("#carrossel li").each( function( index) {
	left = $(this).css("left");
	left = left.replace("px","");
	left = parseInt(left);
	left = left + tmli - borda;
	$(this).css("left" , left+"px");
});	
$("#carrossel li:eq(0)").css("left" , "0px");
}
var cont = 1;
var lis2 = lis - 1;
	setInterval(function(){
	if(cont<lis){
	left = $("#carrossel li:eq("+cont+")").css("left");
	left = left.replace("px","");
	left = parseInt(left);
	left = left - tmli + borda;
	$("#carrossel li:eq("+cont+")").animate({left : left});
	cont++;
	}else{
		recuarBanner();
		cont = 1;
	}
}, 3500);




