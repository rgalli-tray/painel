<?php
  include('../../conexao.php'); 
  include('../../funcao.php');
?>

<?php

  $sqlListaMarca    = mysql_query('SELECT * FROM marcas WHERE id='.$_GET['id']);
  $listaMarca = mysql_fetch_array($sqlListaMarca);

  if($listaMarca['situacao'] == 1) {
    $situacao = 0;
  }else{
    $situacao = 1;
  }

  $updateMarca = mysql_query('UPDATE marcas SET situacao="'.$situacao.'" WHERE id='.$_GET['id']);

  if ($updateMarca) {
    $redirect = 'marcas.php';
    header("location:$redirect");
  }else{
    echo 'Ops!, houve um erro!';
  }

?>