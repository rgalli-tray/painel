<?php
  include('../../conexao.php'); 
  include('../../funcao.php');
?>

<?php

  $sqlListagemTipo    = mysql_query('SELECT * FROM tipos WHERE id='.$_GET['id']);
  $listagemTipo = mysql_fetch_array($sqlListagemTipo);

  if($listagemTipo['situacao'] == 1) {
    $situacao = 0;
  }else{
    $situacao = 1;
  }

  $updateTipo = mysql_query('UPDATE tipos SET situacao="'.$situacao.'" WHERE id='.$_GET['id']);

  if ($updateTipo) {
    $redirect = 'tipos.php';
    header("location:$redirect");
  }else{
    echo 'Ops!, houve um erro!';
  }

?>