<?php

//parte da lógica que transforma o html do site do planalto em tabela de banco de dados

//pega a url já armazenada no sistema
$resp =  file_get_contents($url);
$resp = utf8_encode($resp);
//retira tag table e seu interior
$pre1 = explode("<table",$resp);
$var1 = "";
foreach($pre1 as $row){
	$row1 = explode("</table>",$row);
	if(!empty($row1[1])){
		$var1 .= $row1[1];
	}else{
		$var1 .= $row1[0];
	}
}
//separa e limpa todas as tags P convertendo em um array
$var2 = explode("<p",$var1);

/*
e feita mais limpeza nesses trechos para depois 
verificar cada um e tipificar como é mostrado em parte do código abaixo
*/

if((preg_match("/^TÍTULO/",$StringP))||(preg_match("/^TíTULO/",$StringP))||(preg_match("/^Título/",$StringP))){
	$tipo = 2;
	$tipoTit = explode(' ',$StringP, 3);
	$t = "t".$tipoTit[1];$c = ''; $s = '';$a = '';$pa = '';$i = '';$al = '';
}elseif((preg_match("/^CAPÍTULO/",$StringP))||(preg_match("/^CAPíTULO/",$StringP))||(preg_match("/^Capítulo/",$StringP))){
	$tipo = 3;
	$tipoCap = explode(' ',$StringP, 3);
	$c = "c".$tipoCap[1];  $s = '';$a = '';$pa = '';$i = '';$al = '';
}elseif(preg_match("/^Seção/",$StringP)){
	$tipo = 4;
	$tipoSec = explode(' ',$StringP, 3);
	$s = "s"+$tipoSec[1];$a = '';$pa = '';$i = '';$al = '';
}elseif(preg_match("/^Art./",$StringP)){
	$tipo = 5;
	$tipoArt = explode(' ',$StringP, 3);
	$tipoArt[1] = str_replace('.','',$tipoArt[1]);
	$tipoArt[1] = str_replace('º','',$tipoArt[1]);
	$a = 'a'.$tipoArt[1];$pa = '';$i = '';$al = '';
	$class = 'artigo';
} 
?>