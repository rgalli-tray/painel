<?php
  include('../../sessao.php');
  include('../../conexao.php');
?>

<?php
  $nome       = $_POST['nome']; 
  $descricao  = $_POST['descricao'];   
  $situacao   = $_POST['situacao']; 

  $updateCategoria = mysql_query('UPDATE categorias SET 
    nome           ="'.$nome.'",
    descricao      ="'.$descricao.'",
    situacao       ="'.$situacao.'"
  WHERE 
    id='.$_GET['id']);
  
  if ($updateCategoria) {
    $redirect = 'categorias.php';
    header("location:$redirect");
  } else {
    echo 'Ops!, houve um erro!';
  }
?>