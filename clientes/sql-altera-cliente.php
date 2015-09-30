 <?php
  include('../sessao.php');
  include('../config.php');
  include('../funcao.php');
?>


<?php
        $codigo     = $_POST['codigo']; 
        $nome       = $_POST['nome']; 
        $apelido    = $_POST['apelido'];   
        $cpf        = $_POST['cpf']; 
        $rg         = $_POST['rg']; 
        $nascimento = converteDataBD($_POST['nascimento']);
        $telefone   = $_POST['telefone']; 
        $celular    = $_POST['celular'];  
        $email      = $_POST['email'];  
        $situacao   = $_POST['situacao']; 
        $informacoes= $_POST['informacoes'];
        $endereco   = $_POST['endereco']; 
        $numero     = $_POST['numero'];
        $bairro     = $_POST['bairro']; 
        $cidade     = $_POST['cidade']; 
        $estado     = $_POST['estado']; 
        $cep        = $_POST['cep'];

        $updateCliente = mysql_query('UPDATE clientes SET 
          codigo="'.$codigo.'",
          nome="'.$nome.'",
          apelido="'.$apelido.'",
          cpf="'.$cpf.'",
          rg="'.$rg.'",
          nascimento="'.$nascimento.'",
          telefone="'.$telefone.'",
          celular="'.$celular.'",
          email="'.$email.'",
          situacao="'.$situacao.'",
          informacoes="'.$informacoes.'",
          endereco="'.$endereco.'",
          numero="'.$numero.'",
          bairro="'.$bairro.'",
          cidade="'.$cidade.'",
          estado="'.$estado.'",
          cep="'.$cep.'" 
        WHERE 
          id='.$_GET['id']);
        
        if ($updateCliente) {
          $redirect = 'clientes.php';
          header("location:$redirect");
        } else {
          echo 'Ops!, houve um erro!';
        }

?>