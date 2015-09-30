<?php
  include('../../sessao.php');
  include('../../config.php');
?>

<?php
 
	// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
	$nome	       = $_POST['nome'];	//atribuição do campo vindo do formulário para variavel	
	$descricao     = $_POST['descricao'];	//atribuição do campo vindo do formulário para variavel	
	$situacao      = $_POST['situacao'];	//atribuição do campo "pais" vindo do formulário para variavel

	//Gravando no banco de dados ! 
	$incluiCategoria = "INSERT INTO `categorias` ( `id` , `nome` , `descricao` , `situacao`, `data_cadastro` ) 
	VALUES ('', '$nome', '$descricao', '$situacao', 'now()' )";
	 
	mysql_query($incluiCategoria,$conexao);	 
	 
	if ($incluiCategoria) {
        $redirect = 'categorias.php';
    	header("location:$redirect");
    } else {
        echo 'Ops!, houve um erro!';
    }

?> 