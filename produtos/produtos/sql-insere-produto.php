<?php
  include('../../sessao.php');
  include('../../config.php');
?>

<?php
 
		// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
	$codigo_1	  = $_POST['codigo_1'];	//atribuição do campo vindo do formulário para variavel	
	$codigo_2     = $_POST['codigo_2'];	
	$ean          = $_POST['ean'];	
	$locacao      = $_POST['locacao'];	
	$nome         = $_POST['nome'];	
	$aplicacao    = $_POST['aplicacao'];	
	$valor_custo  = $_POST['valor_custo'];	
	$valor_venda  = $_POST['valor_venda'];	
	$estoque_min  = $_POST['estoque_min'];	
	$estoque_max  = $_POST['estoque_max'];
	$estoque      = $_POST['estoque'];	
	$fornecedor   = $_POST['fornecedor'];	
	$marca        = $_POST['marca'];	
	$tipo         = $_POST['tipo'];	
	$situacao     = $_POST['situacao'];	

	//Gravando no banco de dados ! 
	$incluiProduto = "INSERT INTO `produtos` ( `id` , `codigo_1` , `codigo_2` , `ean` , `locacao` , `nome` ,
	`aplicacao` , `valor_custo` , `valor_venda` , `estoque_min` , `estoque_max` , `estoque` , `fornecedor` , 
	`marca` , `tipo`, `situacao`, `data_cadastro` )
	VALUES ('', '$codigo_1', '$codigo_2', '$ean', '$locacao', '$nome', '$aplicacao', '$valor_custo', '$valor_venda', 
	'$estoque_min', '$estoque_max', '$estoque', '$fornecedor', '$marca', '$tipo', '$situacao', 'now()' )";
	 
	mysql_query($incluiProduto,$conexao);	 
	 
	if ($incluiProduto) {
        $redirect = 'produtos.php';
    	header("location:$redirect");
    } else {
        echo 'Ops!, houve um erro!';
    }

?> 