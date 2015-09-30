<?php
  include('../conexao.php'); 
  include('../funcao.php');
?>

<?php

  $sqlCliente    = mysql_query('SELECT * FROM clientes WHERE id='.$_GET['id']);
  $listagemCliente = mysql_fetch_array($sqlCliente);

  if($listagemCliente['situacao'] == 1) {
    $situacao = 0;
  }else{
    $situacao = 1;
  }

  $updateCliente = mysql_query('UPDATE clientes SET situacao="'.$situacao.'" WHERE id='.$_GET['id']);

        if ($updateCliente) {
          $redirect = 'clientes.php';
          header("location:$redirect");
        } else {
          echo 'Ops!, houve um erro!';
        }

?>