<?php
  include('../../conexao.php'); 
  include('../../funcao.php');
?>

<?php

  $sqlListagemCategoria    = mysql_query('SELECT * FROM categorias WHERE id='.$_GET['id']);
  $listagemCategoria = mysql_fetch_array($sqlListagemCategoria);

  if($listagemCategoria['situacao'] == 1) {
    $situacao = 0;
  }else{
    $situacao = 1;
  }

  $updateCategoria = mysql_query('UPDATE categorias SET situacao="'.$situacao.'" WHERE id='.$_GET['id']);

  if ($updateCategoria) {
    $redirect = 'index.php?pg=categorias';
    header("location:$redirect");
  }else{
    echo 'Ops!, houve um erro!';
  }

?>