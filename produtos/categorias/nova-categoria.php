<?php
  if($_POST){
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $nome            = $_POST['nome']; 
    $descricao       = $_POST['descricao'];   
    $situacao        = $_POST['situacao']; 
  
    //Gravando no banco de dados ! 
    $incluiCategoria = "INSERT INTO `categorias` ( `id` , `nome` , `descricao` , `situacao`, `data_cadastro` ) 
    VALUES ('', '$nome', '$descricao', '$situacao', 'now()' )";
     
    mysql_query($incluiCategoria,$conexao);  
     
    if($incluiCategoria) {
      $redirect = 'index.php?pg=categorias';
      header("location:$redirect");
    }else{
      echo 'Ops!, houve um erro!';
    }
  }

?> 

<h1 class="ls-title-intro ls-ico-list2">Cadastrar categoria</h1>
<form id="cad-categoria" name="cad-categoria" method="post" action="" class="ls-form-horizontal ls-form row">
  <legend class="ls-title-2">Identificação</legend>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Nome</span>
      <input type="text" name="nome" maxlength="20" placeholder="Digite a categoria"required>
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
      <b class="ls-label-text">Situação</b>
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
  <button type="submit" class="ls-btn-primary">Salvar</button>
  <a href="index.php?pg=categorias" class="ls-btn">Cancelar</a>
</form>