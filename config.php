<?php
	$urlBase = "http://localhost/soscar/";
?>

<?php
	include_once('conexao.php')
?>

<?php
	$aparencia = mysql_query('SELECT * FROM aparencia WHERE id=1');
	$aparencia = mysql_fetch_array($aparencia);	
?>

<?php
	$classCorSite = $aparencia['tema'];
?>

<?php
	$dadosEmpresa = mysql_query('SELECT * FROM empresa WHERE id=1');
	$dadosEmpresa = mysql_fetch_array($dadosEmpresa);

	$nomeEmpresa = $dadosEmpresa['razao_social'];
?>