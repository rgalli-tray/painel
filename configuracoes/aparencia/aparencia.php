<?php
  if($_POST){
    $nome_exibicao  = $_POST['nome_exibicao']; 
    $id_tema        = $_POST['id_tema'];   

    $updateConfig = mysql_query('UPDATE configuracoes SET 
    nome_exibicao="'.$nome_exibicao.'",
    id_tema="'.$id_tema.'"
    WHERE
    id=1');
    
    if($updateConfig) {
      $redirect = 'index.php?pg=aparencia';
      header("location:$redirect");
    }else{
      echo 'Ops!, houve um erro!';
    }    
  }else{
  $sqlConfiguracoes    = mysql_query('SELECT * FROM configuracoes');
  $linhaConfiguracoes  = mysql_fetch_array($sqlConfiguracoes);
?>

<h1 class="ls-title-intro ls-ico-cog">Configurações</h1>
<form id="cad-aparencia" name="cad-aparencia" method="post" action="" class="ls-form-horizontal ls-form row">
  <legend class="ls-title-2">Apresentação</legend>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Nome exibição</span>
      <input type="text" name="nome_exibicao" value="<?php echo $linhaConfiguracoes['nome_exibicao'];?>" maxlength="50" placeholder="Digite o nome de exibição"required>
    </label>
  </div>
  <legend class="ls-title-2">Aparência</legend>
  <div class="row">
    <label class="ls-label col-md-3">
      <b class="ls-label-text">Tema</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="id_tema" required>
          <option value="" selected="selected">Selecione</option> 
          <?php
            $sqlAparencia         = mysql_query('SELECT * FROM aparencia ORDER BY nome');
            while($linhaAparencia = mysql_fetch_array($sqlAparencia)) {
          ?>                
          <option <?php if ($linhaAparencia['id'] == $linhaConfiguracoes['id_tema']) {echo 'selected="selected"';}?> value="<?php echo $linhaAparencia['id'];?>"><?php echo $linhaAparencia['nome'];?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </label>
  </div>
  <button type="submit" class="ls-btn-primary">Salvar</button>
  <a href="../../home.php" class="ls-btn">Cancelar</a>
</form>
<?php
}
?>