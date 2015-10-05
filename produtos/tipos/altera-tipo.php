<?php
  if($_POST){
    $nome          = $_POST['nome']; 
    $descricao     = $_POST['descricao'];   
    $id_categoria  = $_POST['id_categoria']; 
    $id_status     = $_POST['id_status'];

    $updateTipo = mysql_query('UPDATE tipos SET 
    nome="'.$nome.'",
    descricao="'.$descricao.'",
    id_categoria="'.$id_categoria.'",
    id_status="'.$id_status.'"
    WHERE 
    id='.$_GET['id']);
    
    if($updateTipo){
      $redirect = 'index.php?pg=tipos';
      header("location:$redirect");
    }else{
      echo 'Ops!, houve um erro!';
    }
  }else{
    $sqlTipo   = mysql_query('SELECT * FROM tipos WHERE id='.$_GET['id']);
    $linhaTipo = mysql_fetch_array($sqlTipo);

?>
<h1 class="ls-title-intro ls-ico-list2">Alterar categoria</h1>
<form id="cad-categoria" name="cad-categoria" method="post" action="" class="ls-form-horizontal ls-form row">
  <legend class="ls-title-2">Identificação</legend>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Nome</span>
      <input type="text" name="nome" value="<?php echo $linhaTipo['nome'];?>" maxlength="20" placeholder="Digite a categoria"required>
    </label>
  </div>
  <div class="row">
    <fieldset>
      <label class="ls-label col-md-6">
        <b class="ls-label-text">Descrição</b>
        <textarea type="text" name="descricao" data-ls-module="charCounter" maxlength="200"><?php echo $linhaTipo['descricao'];?></textarea>
      </label>
    </fieldset>
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
    <b class="ls-label-text">Categoria</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="id_categoria" required>
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlCategoria         = mysql_query('SELECT * FROM categorias ORDER BY nome');
            while($linhaCategoria = mysql_fetch_array($sqlCategoria)) {
          ?>                
          <option <?php if ($linhaCategoria['id'] == $linhaTipo['id_categoria']) {echo 'selected="selected"';}?> value="<?php echo $linhaCategoria['id'];?>"><?php echo $linhaCategoria['nome'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Status</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="id_status" required>
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlStatus         = mysql_query('SELECT * FROM status ORDER BY status');
            while($linhaStatus = mysql_fetch_array($sqlStatus)) {
          ?>                
          <option <?php if ($linhaStatus['id'] == $linhaTipo['id_status']) {echo 'selected="selected"';}?> value="<?php echo $linhaStatus['id'];?>"><?php echo $linhaStatus['status'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
  </div>
  <hr>
  <button type="submit" class="ls-btn-primary">Salvar</button>
  <a href="tipos.php" class="ls-btn">Cancelar</a>
</form>
<?php
}
?>