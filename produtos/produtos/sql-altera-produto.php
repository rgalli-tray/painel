<?php
  include('../../sessao.php');
  include('../../conexao.php');
?>

<?php
  $codigo_1   = $_POST['codigo_1']; 
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

  $updateProduto = mysql_query('UPDATE produtos SET
    codigo_1     ="'.$codigo_1.'",  
    codigo_2     ="'.$codigo_2.'", 
    ean          ="'.$ean.'", 
    locacao      ="'.$locacao.'", 
    nome         ="'.$nome.'", 
    aplicacao    ="'.$aplicacao.'", 
    valor_custo  ="'.$valor_custo.'", 
    valor_venda  ="'.$valor_venda.'", 
    estoque_min  ="'.$estoque_min.'", 
    estoque_max  ="'.$estoque_max.'", 
    estoque      ="'.$estoque.'", 
    fornecedor   ="'.$fornecedor.'", 
    marca        ="'.$marca.'", 
    tipo         ="'.$tipo.'", 
    situacao     ="'.$situacao.'" 
  WHERE 
    id='.$_GET['id']);
        
  if ($updateProduto) {
    $redirect = 'produtos.php';
    header("location:$redirect");
  } else {
    echo 'Ops!, houve um erro!';
  }

?>
