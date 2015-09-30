<?php
  include('../../sessao.php');
  include('../../config.php');
  include('../../funcao.php');
?>

<?php 
	 
	// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
	$codigo        = $_POST['codigo']; //atribuição do campo vindo do formulário para variavel	
	$razao_social  = $_POST['razao_social'];	//atribuição do campo vindo do formulário para variavel	
	$nome_fantasia = $_POST['nome_fantasia']; //atribuição do campo vindo do formulário para variavel	
	$cnpj          = $_POST['cnpj']; //atribuição do campo vindo do formulário para variavel	
	$telefone	   = $_POST['telefone'];	//atribuição do campo "telefone" vindo do formulário para variavel
	$celular	   = $_POST['celular'];	//atribuição do campo "telefone" vindo do formulário para variavel
	$contato       = $_POST['contato'];
	$email	       = $_POST['email'];	//atribuição do campo "email" vindo do formulário para variavel
	$situacao	   = $_POST['situacao'];	//atribuição do campo "ddd" vindo do formulário para variavel
	$endereco	   = $_POST["endereco"];	//atribuição do campo "endereco" vindo do formulário para variavel
	$numero  	   = $_POST["numero"];	//atribuição do campo "endereco" vindo do formulário para variavel
	$bairro        = $_POST["bairro"];	//atribuição do campo "bairro" vindo do formulário para variavel
	$cidade	       = $_POST['cidade'];	//atribuição do campo "cidade" vindo do formulário para variavel
	$estado	       = $_POST['estado'];	//atribuição do campo "estado" vindo do formulário para variavel
	$cep	       = $_POST['cep'];	//atribuição do campo "pais" vindo do formulário para variavel

	//Gravando no banco de dados ! 
	$incluiFornecedor = "INSERT INTO `fornecedores` ( `id` , `codigo` , `razao_social` , `nome_fantasia` , `cnpj` , `telefone` , `celular` , `contato` , `email` , 
		`situacao` ,  `endereco` , `numero`, `bairro` , `cidade` , `estado` , `cep` , `data_cadastro` ) 
	VALUES ('', '$codigo', '$razao_social', '$nome_fantasia', '$cnpj', '$telefone', '$celular', '$contato', '$email', '$situacao', '$endereco', '$numero', '$bairro',
	 '$cidade', '$estado' , '$cep' , 'now()' )";
	 
	mysql_query($incluiFornecedor,$conexao);
	 
	if ($incluiFornecedor) {
        $redirect = 'fornecedores.php';
    	header("location:$redirect");
    } else {
        echo 'Ops!, houve um erro!';
    }

?> 