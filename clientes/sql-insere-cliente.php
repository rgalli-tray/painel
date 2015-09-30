<?php
  include('../conexao.php');
  include('../funcao.php');
?>

<?php 
	// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
	$codigo      = $_POST['codigo']; //atribuição do campo vindo do formulário para variavel	
	$nome	     = $_POST['nome'];	//atribuição do campo vindo do formulário para variavel	
	$apelido     = $_POST['apelido']; //atribuição do campo vindo do formulário para variavel	
	$cpf         = $_POST['cpf']; //atribuição do campo vindo do formulário para variavel	
	$rg          = $_POST['rg']; //atribuição do campo vindo do formulário para variavel	
	$nascimento  = converteDataBD($_POST['nascimento']); //atribuição do campo vindo do formulário para variavel	
	$telefone	 = $_POST['telefone'];	//atribuição do campo "telefone" vindo do formulário para variavel
	$celular	 = $_POST['celular'];	//atribuição do campo "telefone" vindo do formulário para variavel
	$email	     = $_POST['email'];	//atribuição do campo "email" vindo do formulário para variavel
	$situacao	 = $_POST['situacao'];	//atribuição do campo "ddd" vindo do formulário para variavel
	$informacoes = $_POST['informacoes'];
	$endereco	 = $_POST["endereco"];	//atribuição do campo "endereco" vindo do formulário para variavel
	$numero  	 = $_POST["numero"];	//atribuição do campo "endereco" vindo do formulário para variavel
	$bairro      = $_POST["bairro"];	//atribuição do campo "bairro" vindo do formulário para variavel
	$cidade	     = $_POST['cidade'];	//atribuição do campo "cidade" vindo do formulário para variavel
	$estado	     = $_POST['estado'];	//atribuição do campo "estado" vindo do formulário para variavel
	$cep	     = $_POST['cep'];	//atribuição do campo "pais" vindo do formulário para variavel

	//Gravando no banco de dados ! 
	$incluiCliente = "INSERT INTO `clientes` ( `id` , `codigo` , `nome` , `apelido` , `cpf` , `rg` , `nascimento` , `telefone` , `celular` , `email` , `situacao` ,
	`informacoes` , `endereco` , `numero` , `bairro` , `cidade` , `estado` , `cep` , `data_cadastro` ) 
	VALUES ('', '$codigo', '$nome', '$apelido', '$cpf', '$rg', '$nascimento', '$telefone', '$celular', '$email', '$situacao', '$informacoes', '$endereco', '$numero', '$bairro',
	 '$cidade', '$estado' , '$cep' , 'now()' )";
	 
	mysql_query($incluiCliente,$conexao);
	 
	if ($incluiCliente) {
        $redirect = 'clientes.php';
    	header("location:$redirect");
    } else {
        echo 'Ops!, houve um erro!';
    }

?> 