<?php
//busca as leis a partir dos padrões criados
for($i = 1037; $i > 14; $i--){
	$mark = $certo;
	if($i < 1000){
		$is = "0".$i;
	}
	if($i < 100){
		$is = "00".$i;
	}
	$url1 = 'http://www.planalto.gov.br/ccivil_03/LEIS/1930-1949/L'.$is.'.htm';
	$url2 = 'http://www.planalto.gov.br/ccivil_03/LEIS/L'.$is.'.htm';
	$url3 = 'http://www.planalto.gov.br/ccivil_03/Leis/1930-1949/L'.$is.'htm.htm';
	$url4 = 'http://www.planalto.gov.br/ccivil_03/Leis/L'.$is.'htm.htm';
	if($this->curl($url1)){
		$certo++;
		if($this->CI->BancoInicio->LO($i,'',$url1)){
			$banco++;
		}
	}
	if($this->curl($url2)){
		$certo++;
		if($this->CI->BancoInicio->LO($i,'',$url2)){
			$banco++;
		}
	}
	if($this->curl($url3)){
		$certo++;
		if($this->CI->BancoInicio->LO($i,'',$url3)){
			$banco++;
		}
	}
	if($this->curl($url4)){
		$certo++;
		if($this->CI->BancoInicio->LO($i,'',$url4)){
			$banco++;
		}
	}
	if($mark == $certo){
		$erro++;
		$linkerro .= $i."</br>";
	}
}
//função para pesqusa de url
private function curl($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_NOBODY, TRUE);
	curl_exec($ch);

	// Check if any error occured
	if(!curl_errno($ch)){
		$info = curl_getinfo($ch);
		if($info["http_code"] != 404){
			$result = TRUE;
		}else{
			$result = FALSE;
		}
	}
	curl_close($ch);
	return $result;
}
?>