<?php
    if($_POST){
    $codigo        = $_POST['codigo'];
    $razao_social  = $_POST['razao_social']; 
    $nome_fantasia = $_POST['nome_fantasia'];   
    $cnpj          = $_POST['cnpj']; 
    $telefone      = $_POST['telefone']; 
    $celular       = $_POST['celular'];  
    $contato       = $_POST['contato'];
    $email         = $_POST['email'];  
    $status        = $_POST['status']; 
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
    status="'.$status.'",
    endereco="'.$endereco.'",
    numero="'.$numero.'",
    bairro="'.$bairro.'",
    cidade="'.$cidade.'",
    estado="'.$estado.'",
    cep="'.$cep.'" 
    WHERE 
    id='.$_GET['id']);
    
    if($updateFornecedor){
      $redirect = 'index.php?pg=fornecedores';
      header("location:$redirect");
    }else{
      echo 'Ops!, houve um erro!';
    }
  }else{
    $sqlFornecedor    = mysql_query('SELECT * FROM fornecedores WHERE id='.$_GET['id']);
    $linhaFornecedor  = mysql_fetch_array($sqlFornecedor);
?>

<h1 class="ls-title-intro ls-ico-users">Alterar fornecedor</h1>
<form id="cad-cliente" name="cad-cliente" method="post" action="" class="ls-form-horizontal ls-form row">
  <legend class="ls-title-2">Identificação</legend>
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Código</span>
      <input type="text" name="codigo" value="<?php echo $linhaFornecedor['codigo'];?>" maxlength="4" placeholder="Digite o código" required>
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Razão Social</span>
      <input type="text" name="razao_social" value="<?php echo $linhaFornecedor['razao_social'];?>" placeholder="Digite o nome completo" required>
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Nome Fantasia</b>
      <input type="text" name="nome_fantasia" value="<?php echo $linhaFornecedor['nome_fantasia'];?>" placeholder="Digite o nome fantasia">
    </label>  
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
      <b class="ls-label-text">CNPJ</b>
      <input type="text" name="cnpj" value="<?php echo $linhaFornecedor['cnpj'];?>" maxlength="14" class="ls-mask-cnpj" placeholder="00.000.000/0000-00" required>
    </label>
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Telefone Fixo</b>
      <input type="text" name="telefone" value="<?php echo $linhaFornecedor['telefone'];?>" class="ls-mask-phone8_with_ddd" placeholder="(00) 0000-0000">
    </label> 
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Telefone Celular</b>
      <input type="text" name="celular" value="<?php echo $linhaFornecedor['celular'];?>" class="ls-mask-phone9_with_ddd" placeholder="(00) 90000-0000">
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Contato</b>
      <input type="text" name="contato" value="<?php echo $linhaFornecedor['contato'];?>" placeholder="Digite o(s) contato(s)">
    </label>     
  </div>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">E-mail</span>
      <input type="email" name="email" value="<?php echo $linhaFornecedor['email'];?>" placeholder="Digite o e-mail">
    </label>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Situação</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="status" required>
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlStatus         = mysql_query('SELECT * FROM status ORDER BY status');
            while($linhaStatus = mysql_fetch_array($sqlStatus)) {
          ?>                
          <option <?php if ($linhaStatus['id'] == $linhaFornecedor['status']) {echo 'selected="selected"';}?> value="<?php echo $linhaStatus['id'];?>"><?php echo $linhaStatus['status'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Endereço</span>
      <input type="text" name="endereco" value="<?php echo $linhaFornecedor['endereco'];?>" placeholder="Digite o endereço"required>
    </label>
    <label class="ls-label col-md-1 col-xs-12">
      <b class="ls-label-text">Numero</b>
      <input type="text" name="numero" value="<?php echo $linhaFornecedor['numero'];?>" placeholder="Digite o numero" required>
    </label>  
    <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Bairro</b>
      <input type="text" name="bairro" value="<?php echo $linhaFornecedor['bairro'];?>" placeholder="Digite o bairro" required>
    </label>  
  </div> 
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Cidade</span>
      <input type="text" name="cidade" value="<?php echo $linhaFornecedor['cidade'];?>" placeholder="Digite a cidade" required>
    </label>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Estado</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="estado" required>
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlEstado         = mysql_query('SELECT * FROM estados ORDER BY sigla');
            while($linhaEstado = mysql_fetch_array($sqlEstado)) {
          ?>                
          <option <?php if ($linhaEstado['id'] == $linhaFornecedor['estado']) {echo 'selected="selected"';}?> value="<?php echo $linhaEstado['id'];?>"><?php echo $linhaEstado['sigla'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">CEP</b>
      <input type="text" name="cep" value="<?php echo $linhaFornecedor['cep'];?>" class="ls-mask-cep" placeholder="00000-000" required>
    </label>   
  </div>     
  <hr>
  <button type="submit" class="ls-btn-primary">Salvar</button>
  <a href="index.php?pg=fornecedores" class="ls-btn">Cancelar</a>
</form>
<?php
}
?>