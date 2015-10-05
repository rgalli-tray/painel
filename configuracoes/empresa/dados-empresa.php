<?php
  if($_POST){
    $razao_social  = $_POST['razao_social']; 
    $nome_fantasia = $_POST['nome_fantasia'];   
    $cnpj          = $_POST['cnpj']; 
    $telefone      = $_POST['telefone']; 
    $celular       = $_POST['celular'];  
    $email         = $_POST['email'];  
    $endereco      = $_POST["endereco"]; 
    $numero        = $_POST["numero"];
    $bairro        = $_POST["bairro"]; 
    $cidade        = $_POST['cidade']; 
    $estado        = $_POST['estado']; 
    $cep           = $_POST['cep'];

    $updateEmpresa = mysql_query('UPDATE empresa SET 
    razao_social="'.$razao_social.'",
    nome_fantasia="'.$nome_fantasia.'",
    cnpj="'.$cnpj.'",
    telefone="'.$telefone.'",
    celular="'.$celular.'",
    email="'.$email.'",
    endereco="'.$endereco.'",
    numero="'.$numero.'",
    bairro="'.$bairro.'",
    cidade="'.$cidade.'",
    estado="'.$estado.'",
    cep="'.$cep.'" 
    WHERE 
    id=1');
    
    if($updateEmpresa) {
      $redirect = 'index.php?pg=dados-empresa';
      header("location:$redirect");
    }else{
      echo 'Ops!, houve um erro!';
    }    
  }else{
  $sqlEmpresa = mysql_query('SELECT * FROM empresa WHERE id=1');
  $linhaEmpresa = mysql_fetch_array($sqlEmpresa);
  //echo '<main class="ls-main ">'.$nome.'</main>'; exemplo de concatena html com php
?>
<h1 class="ls-title-intro ls-ico-earth">Dados Empresa</h1>
<form id="cad-empresa" name="cad-empresa" method="post" action="" class="ls-form-horizontal ls-form" data-ls-module="form">
  <legend class="ls-title-2">Identificação</legend>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Razão Social</span>
      <input type="text" name="razao_social" value="<?php echo $linhaEmpresa['razao_social'];?>" placeholder="Digite o nome completo" required>
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Nome Fantasia</b>
      <input type="text" name="nome_fantasia" value="<?php echo $linhaEmpresa['nome_fantasia'];?>" placeholder="Digite o nome fantasia">
    </label>  
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
      <b class="ls-label-text">CNPJ</b>
      <input type="text" name="cnpj" value="<?php echo $linhaEmpresa['cnpj'];?>" maxlength="14" class="ls-mask-cnpj" placeholder="00.000.000/0000-00" required>
    </label>
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Telefone Fixo</b>
      <input type="text" name="telefone" value="<?php echo $linhaEmpresa['telefone'];?>" class="ls-mask-phone8_with_ddd" placeholder="(00) 0000-0000">
    </label> 
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Telefone Celular</b>
      <input type="text" name="celular" value="<?php echo $linhaEmpresa['celular'];?>" class="ls-mask-phone9_with_ddd" placeholder="(00) 90000-0000">
    </label>   
    <label class="ls-label col-md-4">
      <span class="ls-label-text">E-mail</span>
      <input type="email" name="email" value="<?php echo $linhaEmpresa['email'];?>" placeholder="Digite o e-mail">
    </label> 
  </div>
  <hr>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Endereço</span>
      <input type="text" name="endereco" value="<?php echo $linhaEmpresa['endereco'];?>" placeholder="Digite o endereço"required>
    </label>
    <label class="ls-label col-md-1 col-xs-12">
      <b class="ls-label-text">Numero</b>
      <input type="text" name="numero" value="<?php echo $linhaEmpresa['numero'];?>" placeholder="Digite o numero" required>
    </label>  
    <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Bairro</b>
      <input type="text" name="bairro" value="<?php echo $linhaEmpresa['bairro'];?>" placeholder="Digite o bairro" required>
    </label>  
  </div> 
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Cidade</span>
      <input type="text" name="cidade" value="<?php echo $linhaEmpresa['cidade'];?>" placeholder="Digite a cidade" required>
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
        <option <?php if ($linhaEstado['id'] == $linhaEmpresa['estado']) {echo 'selected="selected"';}?> value="<?php echo $linhaEstado['id'];?>"><?php echo $linhaEstado['sigla'];?></option>
        <?php
          }
        ?>
    </select>
      </div>
    </label>
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">CEP</b>
      <input type="text" name="cep" value="<?php echo $linhaEmpresa['cep'];?>" class="ls-mask-cep" placeholder="00000-000" required>
    </label>   
  </div>     
  <hr>
  <button type="submit" class="ls-btn-primary">Salvar</button>
  <a href="index.php" class="ls-btn">Cancelar</a>
</form>
<?php
  }
?>