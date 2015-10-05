<?php
  if($_POST){
    $nome            = $_POST['nome'];
    $login           = $_POST['login']; 
    $id_perfil       = $_POST['id_perfil'];   
    $id_status       = $_POST['id_status']; 

    $updateUsuario   = mysql_query('UPDATE usuarios SET 
    nome             ="'.$nome.'",
    login            ="'.$login.'",
    id_perfil        ="'.$id_perfil.'",
    id_status        ="'.$id_status.'"
    WHERE 
    id='.$_GET['id']);
    
    if ($updateUsuario) {
      $redirect = 'index.php?pg=usuarios';
      header("location:$redirect");
    }else{
      echo 'Ops!, houve um erro!';
    }
  }else{
    $sqlUsuarios     = mysql_query('SELECT * FROM usuarios WHERE id='.$_GET['id']);
    $linhaUsuario    = mysql_fetch_array($sqlUsuarios);
  }
?>

<h1 class="ls-title-intro ls-ico-list2">Alterar usuário</h1>
<form id="cad-usuario" name="cad-usuario" method="post" action="" class="ls-form-horizontal ls-form row">
  <legend class="ls-title-2">Identificação</legend>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Nome</span>
      <input type="text" name="nome" value="<?php echo $linhaUsuario['nome'];?>" maxlength="100" placeholder="Nome Usuario"required>
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Usuário</span>
      <input type="text" name="login" value="<?php echo $linhaUsuario['login'];?>" maxlength="20" placeholder="Nome Login"required>
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Perfil</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="id_perfil" required>
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlPerfil         = mysql_query('SELECT * FROM perfil_usuario ORDER BY nome');
            while($linhaPerfil = mysql_fetch_array($sqlPerfil)) {
          ?>                
          <option <?php if ($linhaPerfil['id'] == $linhaUsuario['id_perfil']) {echo 'selected="selected"';}?> value="<?php echo $linhaPerfil['id'];?>"><?php echo $linhaPerfil['nome'];?></option>
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
            $sqlStatus         = mysql_query('SELECT * FROM status ORDER BY status');
            while($linhaStatus = mysql_fetch_array($sqlStatus)) {
          ?>                
          <option <?php if ($linhaStatus['id'] == $linhaUsuario['id_status']) {echo 'selected="selected"';}?> value="<?php echo $linhaStatus['id'];?>"><?php echo $linhaStatus['status'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
  </div>
  <hr>
  <button type="submit" class="ls-btn-primary">Salvar</button>
  <a href="categorias.php" class="ls-btn">Cancelar</a>
</form>