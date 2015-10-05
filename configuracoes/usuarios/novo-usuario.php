<?php
  if($_POST){
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $nome            = $_POST['nome'];
    $login           = $_POST['login']; 
    $senha           = $_POST['senha'];
    $id_perfil       = $_POST['id_perfil'];   
    $id_status       = $_POST['id_status']; 
  
    //Gravando no banco de dados ! 
    $incluiUsuario = "INSERT INTO `usuarios` ( `id` , `nome` , `login` , `senha`, `data_cadastro`, `id_perfil`, `id_status` ) 
    VALUES ('', '$nome', '$login', '$senha', 'now()' , '$id_perfil', '$id_status' )";
     
    mysql_query($incluiUsuario,$conexao);  
     
    if($incluiUsuario) {
      $redirect = 'index.php?pg=usuarios';
      header("location:$redirect");
    }else{
      echo 'Ops!, houve um erro!';
    }
  }

?> 

<h1 class="ls-title-intro ls-ico-list2">Cadastrar usuários</h1>
<form id="cad-usuario" name="cad-usuario" method="post" action="" class="ls-form-horizontal ls-form row">
  <legend class="ls-title-2">Identificação</legend>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Nome</span>
      <input type="text" name="nome" maxlength="100" placeholder="Digite o nome"required>
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Usuário</span>
      <input type="text" name="login" maxlength="20" placeholder="Nome usuário"required>
    </label>
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Senha</span>
      <input type="password" name="senha" maxlength="20" placeholder="Digite a senha"required>
    </label>
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Confime a senha</span>
      <input type="password" name="conf_senha" maxlength="20" placeholder="Digite a senha"required>
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Perfil</b>
      <div class="ls-custom-select">
         <select class="ls-custom" name="id_perfil" required>
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlPerfil          = mysql_query('SELECT * FROM perfil_usuario ORDER BY nome');
            while($linhaPerfil  = mysql_fetch_array($sqlPerfil)) {
          ?>                
          <option value="<?php echo $linhaPerfil['id'];?>"><?php echo $linhaPerfil['nome'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Situação</b>
      <div class="ls-custom-select">
         <select class="ls-custom" name="id_status" required>
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
  <button type="submit" class="ls-btn-primary">Salvar</button>
  <a href="index.php?pg=usuarios" class="ls-btn">Cancelar</a>
</form>