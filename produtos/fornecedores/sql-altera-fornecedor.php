 <?php
  include('../../sessao.php');
  include('../../config.php');
  include('../../funcao.php');
?>

 <?php
        $codigo        = $_POST['codigo'];
        $razao_social  = $_POST['razao_social']; 
        $nome_fantasia = $_POST['nome_fantasia'];   
        $cnpj          = $_POST['cnpj']; 
        $telefone      = $_POST['telefone']; 
        $celular       = $_POST['celular'];  
        $contato       = $_POST['contato'];
        $email         = $_POST['email'];  
        $situacao      = $_POST['situacao']; 
        $endereco      = $_POST['endereco']; 
        $numero        = $_POST['numero'];
        $bairro        = $_POST['bairro']; 
        $cidade        = $_POST['cidade']; 
        $estado        = $_POST['estado']; 
        $cep           = $_POST['cep'];

        $updateFornecedor = mysql_query('UPDATE fornecedores SET 
          codigo="'.$codigo.'",
          razao_social="'.$razao_social.'",
          nome_fantasia="'.$nome_fantasia.'",
          cnpj="'.$cnpj.'",
          telefone="'.$telefone.'",
          celular="'.$celular.'",
          contato="'.$contato.'",
          email="'.$email.'",
          situacao="'.$situacao.'",
          endereco="'.$endereco.'",
          numero="'.$numero.'",
          bairro="'.$bairro.'",
          cidade="'.$cidade.'",
          estado="'.$estado.'",
          cep="'.$cep.'" 
        WHERE 
          id='.$_GET['id']);
        
        if ($updateFornecedor) {
          $redirect = 'fornecedores.php';
          header("location:$redirect");
        } else {
          echo 'Ops!, houve um erro!';
        }
?>