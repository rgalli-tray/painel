<?php
	include('../../conexao.php');
?>

<?php
        $nome       = $_POST['nome']; 
        $descricao  = $_POST['descricao'];   
        $categoria  = $_POST['categoria']; 
        $situacao   = $_POST['situacao'];

        $updateTipo = mysql_query('UPDATE tipos SET 
          nome="'.$nome.'",
          descricao="'.$descricao.'",
          categoria="'.$categoria.'",
          situacao="'.$situacao.'"
        WHERE 
          id='.$_GET['id']);
        
        if ($updateTipo) {
          $redirect = 'tipos.php';
          header("location:$redirect");
        } else {
          echo 'Ops!, houve um erro!';
        }

?>