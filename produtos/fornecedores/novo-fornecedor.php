<?php 
  if($_POST){   
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $codigo        = $_POST['codigo']; //atribuição do campo vindo do formulário para variavel  
    $razao_social  = $_POST['razao_social'];  //atribuição do campo vindo do formulário para variavel 
    $nome_fantasia = $_POST['nome_fantasia']; //atribuição do campo vindo do formulário para variavel 
    $cnpj          = $_POST['cnpj']; //atribuição do campo vindo do formulário para variavel  
    $telefone      = $_POST['telefone'];  //atribuição do campo "telefone" vindo do formulário para variavel
    $celular       = $_POST['celular']; //atribuição do campo "telefone" vindo do formulário para variavel
    $contato       = $_POST['contato'];
    $email         = $_POST['email']; //atribuição do campo "email" vindo do formulário para variavel
    $status        = $_POST['status'];  //atribuição do campo "ddd" vindo do formulário para variavel
    $endereco      = $_POST["endereco"];  //atribuição do campo "endereco" vindo do formulário para variavel
    $numero        = $_POST["numero"];  //atribuição do campo "endereco" vindo do formulário para variavel
    $bairro        = $_POST["bairro"];  //atribuição do campo "bairro" vindo do formulário para variavel
    $cidade        = $_POST['cidade'];  //atribuição do campo "cidade" vindo do formulário para variavel
    $estado        = $_POST['estado'];  //atribuição do campo "estado" vindo do formulário para variavel
    $cep           = $_POST['cep']; //atribuição do campo "pais" vindo do formulário para variavel

    //Gravando no banco de dados ! 
    $incluiFornecedor = "INSERT INTO `fornecedores` ( `id` , `codigo` , `razao_social` , `nome_fantasia` , `cnpj` , `telefone` , `celular` , `contato` , `email` , 
      `status` ,  `endereco` , `numero`, `bairro` , `cidade` , `estado` , `cep` , `data_cadastro` ) 
    VALUES ('', '$codigo', '$razao_social', '$nome_fantasia', '$cnpj', '$telefone', '$celular', '$contato', '$email', '$status', '$endereco', '$numero', '$bairro',
     '$cidade', '$estado' , '$cep' , 'now()' )";
     
    mysql_query($incluiFornecedor,$conexao);
     
    if ($incluiFornecedor) {
      $redirect = 'index.php?pg=fornecedores';
      header("location:$redirect");
    }else{
      echo 'Ops!, houve um erro!';
    }
  }
?> 

<h1 class="ls-title-intro ls-ico-users">Cadastrar fornecedores</h1>
<form id="cad-fornecedor" name="cad-fornecedor" method="post" action="" class="ls-form-horizontal ls-form" data-ls-module="form">
  <legend class="ls-title-2">Identificação</legend>
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Código</span>
      <input type="text" name="codigo" maxlength="4" placeholder="Digite o código" required>
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Razão Social</span>
      <input type="text" name="razao_social" placeholder="Digite o nome completo" required>
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Nome Fantasia</b>
      <input type="text" name="nome_fantasia" placeholder="Digite o nome fantasia">
    </label>  
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
      <b class="ls-label-text">CNPJ</b>
      <input type="text" name="cnpj" maxlength="14" class="ls-mask-cnpj" placeholder="00.000.000/0000-00" required>
    </label>
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Telefone Fixo</b>
      <input type="text" name="telefone" class="ls-mask-phone8_with_ddd" placeholder="(00) 0000-0000">
    </label> 
    <label class="ls-label col-md-2 col-xs-12">
      <b class="ls-label-text">Telefone Celular</b>
      <input type="text" name="celular" class="ls-mask-phone9_with_ddd" placeholder="(00) 90000-0000">
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Contato</b>
      <input type="text" name="contato" placeholder="Digite o(s) contato(s)">
    </label>     
  </div>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">E-mail</span>
      <input type="email" name="email" placeholder="Digite o e-mail">
    </label>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Status</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="status" required>
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlListagemStatus     = mysql_query('SELECT * FROM status ORDER BY status');
            while($listagemStatus  = mysql_fetch_array($sqlListagemStatus)) {
          ?>                
          <option value="<?php echo $listagemStatus['id'];?>"><?php echo $listagemStatus['status'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
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
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlListagemEstado     = mysql_query('SELECT * FROM estados ORDER BY sigla');
            while($listagemEstado  = mysql_fetch_array($sqlListagemEstado)) {
          ?>                
          <option value="<?php echo $listagemEstado['id'];?>"><?php echo $listagemEstado['sigla'];?></option>
          <?php
            }
          ?>
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
  <a href="index.php?pg=fornecedores" class="ls-btn">Cancelar</a>
</form>