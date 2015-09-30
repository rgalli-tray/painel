<?php
  include('../../conexao.php'); 
  include('../../funcao.php');
?>

<?php

  $sqlListagemFornecedor    = mysql_query('SELECT * FROM fornecedores WHERE id='.$_GET['id']);
  $listagemFornecedor       = mysql_fetch_array($sqlListagemFornecedor);

  if($listagemFornecedor['situacao'] == 1) {
    $situacao = 0;
  }else{
    $situacao = 1;
  }

  $updateFornecedor = mysql_query('UPDATE fornecedores SET situacao="'.$situacao.'" WHERE id='.$_GET['id']);

  if ($updateFornecedor) {
    $redirect = 'fornecedores.php';
    header("location:$redirect");
  }else{
    echo 'Ops!, houve um erro!';
  }

?>