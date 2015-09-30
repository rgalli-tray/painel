<?php
	include('../../conexao.php'); 
	include('../../funcao.php');
?>

<?php
 
	// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
	$nome	       = $_POST['nome'];	     //atribuição do campo vindo do formulário para variavel	
	$descricao     = $_POST['descricao'];	 //atribuição do campo vindo do formulário para variavel
	$id_categoria  = $_POST['id_categoria']; //atribuição do campo vindo do formulário para variavel		
	$situacao      = $_POST['situacao'];	 
	//Gravando no banco de dados ! 
	$incluiTipo = "INSERT INTO `tipos` ( `id` , `nome` , `descricao` , `id_categoria` , `situacao`, `data_cadastro` ) 
	VALUES ('', '$nome', '$descricao', '$id_categoria' , '$situacao', 'now()' )";
	 
	mysql_query($incluiTipo,$conexao);
	 
	if ($incluiTipo) {
        $redirect = 'tipos.php';
    	header("location:$redirect");
    } else {
        echo 'Ops!, houve um erro!';
    }

?> 