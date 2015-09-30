<?php
  include('../../conexao.php');  
?>

<?php
        $nome       = $_POST['nome']; 
        $descricao  = $_POST['descricao'];   
        $situacao   = $_POST['situacao']; 

        $updateMarca = mysql_query('UPDATE marcas SET 
          nome="'.$nome.'",
          descricao="'.$descricao.'",
          situacao="'.$situacao.'"
        WHERE 
          id='.$_GET['id']);
        
        if ($updateMarca) {
          $redirect = 'marcas.php';
          header("location:$redirect");
        } else {
          echo 'Ops!, houve um erro!';
        }

?>