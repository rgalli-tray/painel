<?php 	 
	include('../../conexao.php'); 
?>

<?php	 
	// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
	$nome_exibicao = $_POST['nome_exibicao'];	//atribuição do campo vindo do formulário para variavel	
	$tema	       = $_POST['tema'];	//atribuição do campo "pais" vindo do formulário para variavel

	//Gravando no banco de dados ! 
	$sqlInsereConfig = "INSERT INTO `configuracoes` (`nome_exibicao`) 
	VALUES ('$nome_exibicao')";

	$sqlInsereApar = "INSERT INTO `aparencia` (`id`) 
	VALUES ('$id')";
	 
	mysql_query($query,$conexao);
	 
	if ($sqlInsereConfig) {
        $redirect = 'home.php';
    	header("location:$redirect");
    } else {
        echo 'Ops!, houve um erro!';
    }
?> 