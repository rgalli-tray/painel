<?php
  if($_POST){
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $codigo      = $_POST['codigo']; //atribuição do campo vindo do formulário para variavel  
    $nome        = $_POST['nome'];  //atribuição do campo vindo do formulário para variavel 
    $apelido     = $_POST['apelido']; //atribuição do campo vindo do formulário para variavel 
    $cpf         = $_POST['cpf']; //atribuição do campo vindo do formulário para variavel 
    $rg          = $_POST['rg']; //atribuição do campo vindo do formulário para variavel  
    $nascimento  = converteDataBD($_POST['nascimento']); //atribuição do campo vindo do formulário para variavel  
    $telefone    = $_POST['telefone'];  //atribuição do campo "telefone" vindo do formulário para variavel
    $celular     = $_POST['celular']; //atribuição do campo "telefone" vindo do formulário para variavel
    $email       = $_POST['email']; //atribuição do campo "email" vindo do formulário para variavel
    $situacao    = $_POST['situacao'];  //atribuição do campo "ddd" vindo do formulário para variavel
    $informacoes = $_POST['informacoes'];
    $endereco    = $_POST["endereco"];  //atribuição do campo "endereco" vindo do formulário para variavel
    $numero      = $_POST["numero"];  //atribuição do campo "endereco" vindo do formulário para variavel
    $bairro      = $_POST["bairro"];  //atribuição do campo "bairro" vindo do formulário para variavel
    $cidade      = $_POST['cidade'];  //atribuição do campo "cidade" vindo do formulário para variavel
    $estado      = $_POST['estado'];  //atribuição do campo "estado" vindo do formulário para variavel
    $cep         = $_POST['cep']; //atribuição do campo "pais" vindo do formulário para variavel

    //Gravando no banco de dados ! 
    $incluiCliente = "INSERT INTO `clientes` ( `id` , `codigo` , `nome` , `apelido` , `cpf` , `rg` , `nascimento` , `telefone` , `celular` , `email` , `situacao` ,
    `informacoes` , `endereco` , `numero` , `bairro` , `cidade` , `estado` , `cep` , `data_cadastro` ) 
    VALUES ('', '$codigo', '$nome', '$apelido', '$cpf', '$rg', '$nascimento', '$telefone', '$celular', '$email', '$situacao', '$informacoes', '$endereco', '$numero', '$bairro',
     '$cidade', '$estado' , '$cep' , 'now()' )";
     
    mysql_query($incluiCliente,$conexao);
     
    if ($incluiCliente) {
        $redirect = 'clientes.php';
        header("location:$redirect");
        $resultado = 'sucesso';
    }else{
      $resultado = 'erro';
    }
  }

?> 

<h1 class="ls-title-intro ls-ico-users">Cadastrar cliente</h1>
<form id="cad-cliente" name="cad-cliente" method="post" action="" class="ls-form-horizontal ls-form" data-ls-module="form">
  <legend class="ls-title-2">Identificação Pessoal</legend>
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Código</span>
      <input type="text" name="codigo" maxlength="4" placeholder="Digite o código" required>
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Nome</span>
      <input type="text" name="nome" placeholder="Digite o nome completo" required>
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Apelido</b>
      <input type="text" name="apelido" placeholder="Digite o apelido">
    </label>  
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
      <b class="ls-label-text">CPF</b>
      <input type="text" name="cpf" maxlength="14" class="ls-mask-cpf" placeholder="000.000.000-00" required>
    </label>
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">RG</b>
      <input type="text" name="rg" maxlength="12" class="ls-mask-rg" placeholder="00.000.000-0" required>
    </label> 
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Nascimento</b>
      <input type="text" name="nascimento" maxlength="10" class="ls-mask-date" placeholder="00/00/0000" required>
    </label> 
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Telefone Fixo</b>
      <input type="text" name="telefone" class="ls-mask-phone8_with_ddd" placeholder="(00) 0000-0000">
    </label> 
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Telefone Celular</b>
      <input type="text" name="celular" class="ls-mask-phone9_with_ddd" placeholder="(00) 90000-0000">
    </label>   
  </div>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">E-mail</span>
      <input type="email" name="email" placeholder="Digite o e-mail">
    </label>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Situação</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="situacao" required>
          <option value="" selected="selected">Selecione</option> 
          <option value="1">Ativo</option> 
          <option value="0">Bloqueado</option> 
        </select>
      </div>
    </label>
  </div>
  <div class="row">
    <fieldset>
      <label class="ls-label col-md-6">
        <b class="ls-label-text">Informações</b>
        <textarea type="text" name="informacoes" data-ls-module="charCounter" maxlength="200"></textarea>
      </label>
    </fieldset>
  </div>
  <hr>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Endereço</span>
      <input type="text" name="endereco" placeholder="Digite o endereço"required>
    </label>
    <label class="ls-label col-md-1 col-xs-12">
      <b class="ls-label-text">Numero</b>
      <input type="text" name="numero" placeholder="Digite o numero" required>
    </label>  
    <label class="ls-label col-md-3 col-xs-12">
      <b class="ls-label-text">Bairro</b>
      <input type="text" name="bairro" placeholder="Digite o bairro" required>
    </label>  
  </div> 
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Cidade</span>
      <input type="text" name="cidade" placeholder="Digite a cidade" required>
    </label>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Estado</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="estado" required>
          <option value="estado">Selecione</option> 
          <option value="ac">Acre</option> 
          <option value="al">Alagoas</option> 
          <option value="am">Amazonas</option> 
          <option value="ap">Amapá</option> 
          <option value="ba">Bahia</option> 
          <option value="ce">Ceará</option> 
          <option value="df">Distrito Federal</option> 
          <option value="es">Espírito Santo</option> 
          <option value="go">Goiás</option> 
          <option value="ma">Maranhão</option> 
          <option value="mt">Mato Grosso</option> 
          <option value="ms">Mato Grosso do Sul</option> 
          <option value="mg">Minas Gerais</option> 
          <option value="pa">Pará</option> 
          <option value="pb">Paraíba</option> 
          <option value="pr">Paraná</option> 
          <option value="pe">Pernambuco</option> 
          <option value="pi">Piauí</option> 
          <option value="rj">Rio de Janeiro</option> 
          <option value="rn">Rio Grande do Norte</option> 
          <option value="ro">Rondônia</option> 
          <option value="rs">Rio Grande do Sul</option> 
          <option value="rr">Roraima</option> 
          <option value="sc">Santa Catarina</option> 
          <option value="se">Sergipe</option> 
          <option value="sp">São Paulo</option> 
          <option value="to">Tocantins</option> 
        </select>
      </div>
    </label>
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">CEP</b>
      <input type="text" name="cep" class="ls-mask-cep" placeholder="00000-000" required>
    </label>   
  </div>     
  <hr>
  <button type="submit" class="ls-btn-primary">Salvar</button>
  <a href="index.php?pg=clientes" class="ls-btn">Cancelar</a>
</form>