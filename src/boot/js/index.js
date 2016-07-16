//----------------------------------------------
//------------------------painel1 menus--------------
//------------------------------------------------
$("body").on("click","#btn-open-menu",function(e){
	e.preventDefault();
	e.stopPropagation();
	$("#menu").animate({left : "0%"},400);
});
$("body").on("click","#btn-close-menu",function(e){
	e.preventDefault();
	e.stopPropagation();
	$("#menu").animate({left : "-100%"},400);
});
$("body").on("click","#menu",function(e){
	e.preventDefault();
	e.stopPropagation();
	$("#menu").animate({left : "-100%"},400);
});


var alterardor = true;
$("body").on("click","#btnpainel1",function(){
	if(alterardor){
		$("#painel").addClass("moverpainel");
		$("#conteudo").addClass("moverconteudo");  
	}else{
		$("#painel").addClass("voltarpainel");
		$("#conteudo").addClass("voltarconteudo"); 
	}
	
});
$("body").on("webkitAnimationEnd","#painel",function(){
	if(alterardor){
		$(this).removeClass("moverpainel");
		$("#conteudo").removeClass("moverconteudo");
		$(this).css("left","0px");
		$("#conteudo").css("left","85%");	
		alterardor = false;
	}else{
		$(this).removeClass("voltarpainel");
		$("#conteudo").removeClass("voltarconteudo");
		$(this).css("left","-85%");
		$("#conteudo").css("left","0px");	
		alterardor = true;
	}
	
});

//-----------------------------------------------------
//------------------------------------------------------
$("body").on("click","#pesquisa",function(){
	alert("pesquisa");
});
$("body").on("click","#configuracao",function(){
	alert("configuracao");
});
var contador = 0;
//setInterval(function () {
//	$("#corpo").html("Tempo no site "+contador+" segundos");
//	contador++;
//}, 1000);