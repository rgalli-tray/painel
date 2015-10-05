<?php
  if($_POST){
    $codigo_1      = $_POST['codigo_1']; 
    $codigo_2      = $_POST['codigo_2']; 
    $ean           = $_POST['ean'];  
    $locacao       = $_POST['locacao'];  
    $nome          = $_POST['nome']; 
    $aplicacao     = $_POST['aplicacao'];  
    $valor_custo   = $_POST['valor_custo'];  
    $valor_venda   = $_POST['valor_venda'];  
    $estoque_min   = $_POST['estoque_min'];  
    $estoque_max   = $_POST['estoque_max'];
    $estoque       = $_POST['estoque'];  
    $fornecedor    = $_POST['fornecedor']; 
    $marca         = $_POST['marca'];  
    $tipo          = $_POST['tipo']; 
    $situacao      = $_POST['situacao']; 

    $updateProduto = mysql_query('UPDATE produtos SET
    codigo_1       ="'.$codigo_1.'",  
    codigo_2       ="'.$codigo_2.'", 
    ean            ="'.$ean.'", 
    locacao        ="'.$locacao.'", 
    nome           ="'.$nome.'", 
    aplicacao      ="'.$aplicacao.'", 
    valor_custo    ="'.$valor_custo.'", 
    valor_venda    ="'.$valor_venda.'", 
    estoque_min    ="'.$estoque_min.'", 
    estoque_max    ="'.$estoque_max.'", 
    estoque        ="'.$estoque.'", 
    fornecedor     ="'.$fornecedor.'", 
    marca          ="'.$marca.'", 
    tipo           ="'.$tipo.'", 
    situacao       ="'.$situacao.'" 
    WHERE 
    id='.$_GET['id']);
        
    if ($updateProduto) {
      $redirect = 'index.php?pg=produtos';
      header("location:$redirect");
    } else {
      echo 'Ops!, houve um erro!';
    }
  }else{
    $sqlProduto   = mysql_query('SELECT * FROM produtos WHERE id='.$_GET['id']);
    $linhaProduto = mysql_fetch_array($sqlProduto);
    //echo '<main class="ls-main ">'.$nome.'</main>'; exemplo de concatena html com php
?>
      
<h1 class="ls-title-intro ls-ico-list2">Alterar produto</h1>
<form id="cad-produto" name="cad-produto" method="post" action="" class="ls-form-horizontal ls-form" data-ls-module="form">
  <legend class="ls-title-2">Identificação do Produto</legend>
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Código 1</span>
      <input type="text" name="codigo_1" value="<?php echo $linhaProduto['codigo_1'];?>" class="ls-mask-codigo" placeholder="Digite o código"required>
    </label>
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Código 2</span>
      <input type="text" name="codigo_2" value="<?php echo $linhaProduto['codigo_2'];?>" class="ls-mask-codigo" placeholder="Digite o código">
    </label>
    <label class="ls-label col-md-2">
      <span class="ls-label-text">EAN</span>
      <input type="text" name="ean" value="<?php echo $linhaProduto['ean'];?>" class="ls-mask-ean" maxlength="13" placeholder="Digite o EAN">
    </label>
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Locação</span>
      <input type="text" name="locacao" value="<?php echo $linhaProduto['locacao'];?>" class="ls-mask-locacao upcase"  placeholder="AA-1234" required>
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-8">
      <span class="ls-label-text">Nome</span>
      <input type="text" name="nome" value="<?php echo $linhaProduto['nome'];?>" placeholder="Digite o nome completo" required>
    </label>
  </div>
  <div class="row">
    <fieldset>
      <label class="ls-label col-md-8">
        <b class="ls-label-text">Aplicações</b>
        <textarea type="text" name="aplicacao" data-ls-module="charCounter" maxlength="200"><?php echo $linhaProduto['aplicacao'];?></textarea>
      </label>
    </fieldset>
  </div>
  <div class="row ls-prefix-group">
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Preço Custo</b>
      <div class="ls-prefix-group">
        <span class="ls-label-text-prefix">R$</span>
        <input type="text" name="valor_custo" value="<?php echo $linhaProduto['valor_custo'];?>" class="ls-mask-money" placeholder="R$100,00" required>
      </div>
    </label>
    <!--<label class="ls-label col-md-2">
      <b class="ls-label-text">Tipo Acréssimo</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="tipo" required>
          <option value="R" selected="selected">Real</option> 
          <option value="P">Porcentagem</option> 
        </select>
      </div>
    </label>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Acréssimo</b>
      <div class="ls-prefix-group">
        <span class="ls-label-text-prefix">R$</span>
        <input type="text" name="nome" required >
      </div>
    </label>-->
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Preço Venda</b>
      <div class="ls-prefix-group">
        <span class="ls-label-text-prefix">R$</span>
        <input type="text" name="valor_venda" value="<?php echo $linhaProduto['valor_venda'];?>" class="ls-mask-money" required>
      </div>
    </label>
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Estoque minimo</span>
      <input type="text" name="estoque_min" value="<?php echo $linhaProduto['estoque_min'];?>" class="ls-mask-number" maxlength="4" placeholder="Digite o estoque">
    </label>   
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Estoque maximo</span>
      <input type="text" name="estoque_max" value="<?php echo $linhaProduto['estoque_max'];?>" class="ls-mask-number" maxlength="4" placeholder="Digite o estoque">
    </label>         
  </div>
  <div class="row">
    <label class="ls-label col-md-2">
      <span class="ls-label-text">Estoque atual</span>
      <input type="text" name="estoque" value="<?php echo $linhaProduto['estoque'];?>" class="ls-mask-number" maxlength="4" placeholder="Digite o estoque">
    </label>
    <label class="ls-label col-md-6">
      <b class="ls-label-text">Fornecedor</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="fornecedor" required>
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlListagemFornecedor    = mysql_query('SELECT * FROM fornecedores ORDER BY razao_social');
            while($listagemFornecedor = mysql_fetch_array($sqlListagemFornecedor)) {
          ?>                
          <option <?php if ($listagemFornecedor['id'] == $linhaProduto['fornecedor']) {echo 'selected="selected"';}?> value="<?php echo $listagemFornecedor['id'];?>"><?php echo $listagemFornecedor['razao_social'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
  </div>
  <div class="row">             
    <label class="ls-label col-md-3">
      <b class="ls-label-text">Marca</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="marca" required>
           <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlListagemMarca    = mysql_query('SELECT * FROM marcas ORDER BY nome');
            while($listagemMarca = mysql_fetch_array($sqlListagemMarca)) {
          ?>                
          <option <?php if ($listagemMarca['id'] == $linhaProduto['marca']) {echo 'selected="selected"';}?> value="<?php echo $listagemMarca['id'];?>"><?php echo $listagemMarca['nome'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
    <label class="ls-label col-md-3">
      <b class="ls-label-text">Tipo</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="tipo" required>
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlListagemTipo    = mysql_query('SELECT * FROM tipos ORDER BY nome');
            while($listagemTipo = mysql_fetch_array($sqlListagemTipo)) {
          ?>                
          <option <?php if ($listagemTipo['id'] == $linhaProduto['tipo']) {echo 'selected="selected"';}?>value="<?php echo $listagemTipo['id'];?>"><?php echo $listagemTipo['nome'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
    <div class="row">
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Situação</b>
        <div class="ls-custom-select">
          <select class="ls-custom" name="situacao" required>
            <option value="" selected="selected">Selecione</option>
            <option value="1" <?php if ($linhaProduto['situacao'] == '1') { echo ' selected="selected"';}?>>Ativo</option>
            <option value="0" <?php if ($linhaProduto['situacao'] == '0') { echo ' selected="selected"';}?>>Bloqueado</option>
          </select>
        </div>
      </label>
    </div>
  </div>
  <hr>
  <button type="submit" class="ls-btn-primary">Salvar</button>
  <a href="produtos.php" class="ls-btn">Cancelar</a>
</form>
<?php
}
?>