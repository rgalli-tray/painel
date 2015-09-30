<?php
  include('../../conexao.php'); 
  include('../../funcao.php');
?>

<?php

  $sqlListagemProduto    = mysql_query('SELECT * FROM produtos WHERE id='.$_GET['id']);
  $listagemProduto = mysql_fetch_array($sqlListagemProduto);

  if($listagemProduto['situacao'] == 1) {
    $situacao = 0;
  }else{
    $situacao = 1;
  }

  $updateProduto = mysql_query('UPDATE produtos SET situacao="'.$situacao.'" WHERE id='.$_GET['id']);

  if ($updateProduto) {
    $redirect = 'produtos.php';
    header("location:$redirect");
  }else{
    echo 'Ops!, houve um erro!';
  }

?>