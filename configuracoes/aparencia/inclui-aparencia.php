<?php 	 
	include('../../conexao.php'); 
?>

<?php	 
	// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
	$nome	       = $_POST['nome'];	//atribuição do campo vindo do formulário para variavel	
	$nome_exibicao = $_POST['nome_exibicao'];	//atribuição do campo vindo do formulário para variavel	
	$tema	       = $_POST['tema'];	//atribuição do campo "pais" vindo do formulário para variavel

	//Gravando no banco de dados ! 
	$query = "INSERT INTO `aparencia` ( `id` , `nome` , `nome_exibicao` , `tema` ) 
	VALUES ('', '$nome', '$nome_exibicao', '$tema' )";
	 
	mysql_query($query,$conexao);
	 
	echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 