<?php 
$mensagem='nada';
  if($_POST){   
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $nome        = $_POST['nome']; //atribuição do campo vindo do formulário para variavel  
    $descricao   = $_POST['descricao'];  //atribuição do campo vindo do formulário para variavel 
    $categoria   = $_POST['categoria']; //atribuição do campo vindo do formulário para variavel 
    $status      = $_POST['status']; //atribuição do campo vindo do formulário para variavel  

    //Gravando no banco de dados ! 
    $incluiTipo = "INSERT INTO `tipos` ( `id` , `nome` , `descricao` , `id_categoria` , `id_status` , `data_cadastro`) 
    VALUES ('', '$nome', '$descricao', '$categoria', '$status', 'now()' )";
     
    mysql_query($incluiTipo,$conexao);
     
    if ($incluiTipo) {
      $mensagem = '1';
    }else{
      $mensagem = '0';
    }
  }
?> 

<h1 class="ls-title-intro ls-ico-list2">Cadastrar tipo</h1>
<?php
  if($mensagem=='1'){
    include_once('mensagem-sucesso.php');
    if($mensagem=='0'){
      include_once('mensagem-erro.php');
    }
  }
?>

<form id="cad-tipo" name="cad-tipo" method="post" action="" class="ls-form-horizontal ls-form row">
  <legend class="ls-title-2">Identificação</legend>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Nome</span>
      <input type="text" name="nome" maxlength="20" placeholder="Digite o tipo"required>
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
    <label class="ls-label col-md-4">
    <b class="ls-label-text">Categoria</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="categoria" required>
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlListagemCategoria    = mysql_query('SELECT * FROM categorias ORDER BY nome');
            while($listagemCategoria = mysql_fetch_array($sqlListagemCategoria)) {
          ?>                
            <option value="<?php echo $listagemCategoria['id'];?>"><?php echo $listagemCategoria['nome'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
  
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
  <a href="index.php?pg=tipos" class="ls-btn">Cancelar</a>
</form>