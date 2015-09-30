<?php

	function converteDataBD($dataNormal) {
		$parte = explode('/', $dataNormal);
		$dataFormatadaBD = $parte[2].'-'.$parte[1].'-'.$parte[0];
		return $dataFormatadaBD;
	}// 2015-06-16

	function converteDataNormal($dataBD) {
		$parte = explode('-', $dataBD);
		$dataFormatadaBD = $parte[2].'/'.$parte[1].'/'.$parte[0];
		return $dataFormatadaBD;
	}// 16/06/2015

	//data para exibição formatada
		//$data_cad = $linha['data_cadastro'];
		//echo converteDataNormal($data_cad);
	// exemplo de saida 16/06/2015

	//data para inserção bd
		//$data_cad2 = $_POST['data_cadastro'];
		//echo converteDataBD($data_cad2);
	// exemplo de saida 2015-06-16

?>