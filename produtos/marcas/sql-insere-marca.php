<?php
  include('../../conexao.php');  
?>

<?php 
	// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
	$nome	       = $_POST['nome'];	//atribuição do campo vindo do formulário para variavel	
	$descricao     = $_POST['descricao'];	//atribuição do campo vindo do formulário para variavel	
	$situacao      = $_POST['situacao'];	//atribuição do campo "pais" vindo do formulário para variavel

	//Gravando no banco de dados ! 
	$incluiMarca = "INSERT INTO `marcas` ( `id` , `nome` , `descricao` , `situacao`, `data_cadastro` ) 
	VALUES ('', '$nome', '$descricao', '$situacao', 'now()' )";
	 
	mysql_query($incluiMarca,$conexao);	 
	 
	if ($incluiMarca) {
        $redirect = 'marcas.php';
    	header("location:$redirect");
    	$sucesso = 1;
    } else {
        echo 'Ops!, houve um erro!';
    }

?> 