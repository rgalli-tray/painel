<?php
  if($_POST){
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
      $redirect = 'index.php?pg=clientes';
      header("location:$redirect");
    }else{
      echo 'Ops!, houve um erro!';
  }

  }else{
    $sqlCliente   = mysql_query('SELECT * FROM clientes WHERE id='.$_GET['id']);
    $linhaCliente = mysql_fetch_array($sqlCliente);
?>

<h1 class="ls-title-intro ls-ico-users">Alterar cliente</h1>
<form id="cad-cliente" name="cad-cliente" method="post" action="" class="ls-form-horizontal ls-form row">
  <legend class="ls-title-2">Identificação Pessoal</legend>
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Código</span>
      <input type="text" name="codigo" value="<?php echo $linhaCliente['codigo'];?>" maxlength="4" placeholder="Digite o código"required>
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Nome</span>
      <input type="text" name="nome" value="<?php echo $linhaCliente['nome'];?>" placeholder="Digite o nome completo"required>
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Apelido</b>
      <input type="text" name="apelido" value="<?php echo $linhaCliente['apelido'];?>" placeholder="Digite o apelido">
    </label>  
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
      <b class="ls-label-text">CPF</b>
      <input type="text" name="cpf" maxlength="14" value="<?php echo $linhaCliente['cpf'];?>" class="ls-mask-cpf" placeholder="000.000.000-00" required>
    </label>
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">RG</b>
      <input type="text" name="rg" maxlength="12" value="<?php echo $linhaCliente['rg'];?>" class="ls-mask-rg" placeholder="00.000.000-0" required>
    </label> 
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Nascimento</b>
      <input type="text" name="nascimento" maxlength="10" value="<?php echo converteDataNormal($linhaCliente['nascimento']);?>" class="data" placeholder="00/00/0000" required>
    </label> 
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Telefone Fixo</b>
      <input type="text" name="telefone" value="<?php echo $linhaCliente['telefone'];?>" class="ls-mask-phone8_with_ddd" placeholder="(00) 0000-0000">
    </label> 
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Telefone Celular</b>
      <input type="text" name="celular" value="<?php echo $linhaCliente['celular'];?>" class="ls-mask-phone9_with_ddd" placeholder="(00) 90000-0000">
    </label>   
  </div>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">E-mail</span>
      <input type="email" name="email" value="<?php echo $linhaCliente['email'];?>" placeholder="Digite o e-mail">
    </label>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Situação</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="situacao" required>
          <option value="" selected="selected">Selecione</option>
          <option value="1" <?php if ($linhaCliente['situacao'] == '1') { echo ' selected="selected"';}?>>Ativo</option>
          <option value="0" <?php if ($linhaCliente['situacao'] == '0') { echo ' selected="selected"';}?>>Inativo</option>
        </select>
      </div>
    </label>
  </div>
  <div class="row">
    <fieldset>
      <label class="ls-label col-md-6">
        <b class="ls-label-text">Informações</b>
        <textarea type="text" name="informacoes" data-ls-module="charCounter" maxlength="200"><?php echo $linhaCliente['informacoes'];?></textarea>
      </label>
    </fieldset>
  </div>
  <hr>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Endereço</span>
      <input type="text" name="endereco" value="<?php echo $linhaCliente['endereco'];?>" placeholder="Digite o endereço"required>
    </label>
    <label class="ls-label col-md-1">
      <span class="ls-label-text">Numero</span>
      <input type="text" name="numero" value="<?php echo $linhaCliente['numero'];?>" placeholder="Digite o numero"required>
    </label>
    <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Bairro</b>
      <input type="text" name="bairro" value="<?php echo $linhaCliente['bairro'];?>" placeholder="Digite o bairro" required>
    </label>  
  </div> 
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Cidade</span>
      <input type="text" name="cidade" value="<?php echo $linhaCliente['cidade'];?>" placeholder="Digite a cidade" required>
    </label>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Estado</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="estado" required>
          <option value="" selected="selected">Selecione ....</option>
          <option value="ac" <?php if ($linhaCliente['estado'] == 'ac') { echo ' selected="selected"';}?>>Acre</option>
          <option value="al" <?php if ($linhaCliente['estado'] == 'al') { echo ' selected="selected"';}?>>Amazonas</option>       
          <option value="am" <?php if ($linhaCliente['estado'] == 'am') { echo ' selected="selected"';}?>>Amazonas</option> 
          <option value="ap" <?php if ($linhaCliente['estado'] == 'ap') { echo ' selected="selected"';}?>>Amapá</option> 
          <option value="ba" <?php if ($linhaCliente['estado'] == 'ba') { echo ' selected="selected"';}?>>Bahia</option> 
          <option value="ce" <?php if ($linhaCliente['estado'] == 'ce') { echo ' selected="selected"';}?>>Ceará</option> 
          <option value="df" <?php if ($linhaCliente['estado'] == 'df') { echo ' selected="selected"';}?>>Distrito Federal</option>
          <option value="es" <?php if ($linhaCliente['estado'] == 'es') { echo ' selected="selected"';}?>>Espírito Santo</option> 
          <option value="go" <?php if ($linhaCliente['estado'] == 'go') { echo ' selected="selected"';}?>>Goiás</option> 
          <option value="ma" <?php if ($linhaCliente['estado'] == 'ma') { echo ' selected="selected"';}?>>Maranhão</option> 
          <option value="mt" <?php if ($linhaCliente['estado'] == 'mt') { echo ' selected="selected"';}?>>Mato Grosso</option> 
          <option value="ms" <?php if ($linhaCliente['estado'] == 'ms') { echo ' selected="selected"';}?>>Mato Grosso do Sul</option> 
          <option value="mg" <?php if ($linhaCliente['estado'] == 'mg') { echo ' selected="selected"';}?>>Minas Gerais</option> 
          <option value="pa" <?php if ($linhaCliente['estado'] == 'pa') { echo ' selected="selected"';}?>>Pará</option> 
          <option value="pb" <?php if ($linhaCliente['estado'] == 'pb') { echo ' selected="selected"';}?>>Paraíba</option> 
          <option value="pr" <?php if ($linhaCliente['estado'] == 'pr') { echo ' selected="selected"';}?>>Paraná</option> 
          <option value="pe" <?php if ($linhaCliente['estado'] == 'pe') { echo ' selected="selected"';}?>>Pernambuco</option> 
          <option value="pi" <?php if ($linhaCliente['estado'] == 'pi') { echo ' selected="selected"';}?>>Piauí</option> 
          <option value="rj" <?php if ($linhaCliente['estado'] == 'rj') { echo ' selected="selected"';}?>>Rio de Janeiro</option> 
          <option value="rn" <?php if ($linhaCliente['estado'] == 'rn') { echo ' selected="selected"';}?>>Rio Grande do Norte</option> 
          <option value="ro" <?php if ($linhaCliente['estado'] == 'ro') { echo ' selected="selected"';}?>>Rondônia</option> 
          <option value="rs" <?php if ($linhaCliente['estado'] == 'rs') { echo ' selected="selected"';}?>>Rio Grande do Sul</option> 
          <option value="rr" <?php if ($linhaCliente['estado'] == 'rr') { echo ' selected="selected"';}?>>Roraima</option> 
          <option value="sc" <?php if ($linhaCliente['estado'] == 'sc') { echo ' selected="selected"';}?>>Santa Catarina</option> 
          <option value="se" <?php if ($linhaCliente['estado'] == 'se') { echo ' selected="selected"';}?>>Sergipe</option> 
          <option value="sp" <?php if ($linhaCliente['estado'] == 'sp') { echo ' selected="selected"';}?>>São Paulo</option> 
          <option value="to" <?php if ($linhaCliente['estado'] == 'to') { echo ' selected="selected"';}?>>Tocantins</option> 
        </select>
      </div>
    </label>
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">CEP</b>
      <input type="text" name="cep" value="<?php echo $linhaCliente['cep'];?>" class="ls-mask-cep" placeholder="00000-000" required>
    </label>   
  </div>     
  <hr>
  <button type="submit" class="ls-btn-primary">Salvar</button>
  <a href="clientes.php" class="ls-btn">Cancelar</a>
</form>
s