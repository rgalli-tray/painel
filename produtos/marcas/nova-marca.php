<?php 
  if($_POST){
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $nome        = $_POST['nome'];  //atribuição do campo vindo do formulário para variavel 
    $descricao   = $_POST['descricao']; //atribuição do campo vindo do formulário para variavel 
    $id_status   = $_POST['id_status'];  //atribuição do campo "pais" vindo do formulário para variavel
  
    //Gravando no banco de dados ! 
    $incluiMarca = "INSERT INTO `marcas` ( `id` , `nome` , `descricao` , `id_status`, `data_cadastro` ) 
    VALUES ('', '$nome', '$descricao', '$id_status', 'now()' )";
     
    mysql_query($incluiMarca,$conexao);  
     
    if($incluiMarca){
      $redirect = 'index.php?pg=marcas';
      header("location:$redirect");
      }else{
        echo 'Ops!, houve um erro!';
    }
  }
?> 

<h1 class="ls-title-intro ls-ico-list2">Cadastrar marca</h1>
<form id="cad-marca" name="cad-marca" method="post" action="" class="ls-form-horizontal ls-form row">
  <legend class="ls-title-2">Identificação</legend>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Nome</span>
      <input type="text" name="nome" maxlength="20" placeholder="Digite a marca"required>
    </label>
  </div>
  <div class="row">
    <fieldset>
      <label class="ls-label col-md-6">
        <b class="ls-label-text">Descrição</b>
        <textarea type="text" name="descricao" data-ls-module="charCounter" maxlength="200"></textarea>
      </label>
    </fieldset>
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Status</b>
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
  <a href="index.php?pg=marcas" class="ls-btn">Cancelar</a>
</form>