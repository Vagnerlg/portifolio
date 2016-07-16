<?php
//parte do script que retira as tags HTML, tipifica e cria o objeto JSON
//Busca url no site no planalto
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
		//separa e limpa todas as tags P
		$var2 = explode("<p",$var1);
		
		...
//titifica os trechos
foreach($ArrayTextoLei as &$Stri){
			$StringP = trim($Stri["p"]);
			$StringP = stripslashes($StringP);
			
			if(preg_match("/^LIVRO/",$StringP)){
				$tipo = 0;
				$l = "l".$contLivro++;$p = '';$t = '';$c = ''; $s = '';$a = '';$pa = '';$i = '';$al = '';
			}elseif((preg_match("/^PARTE/",$StringP))||(preg_match("/^P A R T E/",$StringP))){
				$tipo = 1;
				$p = "p".$contParte++;$t = '';$c = ''; $s = '';$a = '';$pa = '';$i = '';$al = '';
			}elseif((preg_match("/^TÍTULO/",$StringP))||(preg_match("/^TíTULO/",$StringP))||(preg_match("/^Título/",$StringP))){
		
	...
	
	}		
		
?>