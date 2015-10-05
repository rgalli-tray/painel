<h1 class="ls-title-intro ls-ico-list2">Marcas</h1>
<a href="index.php?pg=nova-marca" class="ls-btn-primary">Cadastrar marca</a>
<div class="ls-box-filter">
  <form action="" class="ls-form ls-form-inline ls-float-left">
    <label class="ls-label col-md-6 col-sm-8">
      <b class="ls-label-text">Status</b>
      <div class="ls-custom-select ls-field-sm">
        <select name="" class="ls-select">
          <option>Todas</option>
          <option>Ativas</option>
          <option>Bloqueadas</option>
        </select>
      </div>
    </label>
  </form>
  <form  action="" class="ls-form ls-form-inline ls-float-right">
    <label class="ls-label" role="search">
      <b class="ls-label-text ls-hidden-accessible">Nome da marca</b>
      <input type="text" id="q" name="q" aria-label="Faça sua busca por marca" placeholder="Nome da marca" required="" class="ls-field-sm">
    </label>
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn ls-btn-sm" title="Buscar">
    </div>
  </form>
</div>

<table class="ls-table">
  <thead>
    <tr>
      <th>Nome da marca</th>
      <th class="ls-txt-center hidden-xs">Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sqlListagemMarca       = mysql_query('SELECT * FROM marcas ORDER BY nome');
      while($listagemMarca    = mysql_fetch_array($sqlListagemMarca)) {
        $sqlStatus            = mysql_query('SELECT * FROM status WHERE id='.$listagemMarca['id_status']);
        $linhaStatus          = mysql_fetch_array($sqlStatus);
    ?>
    <tr>
      <td><?php echo $listagemMarca['nome'];?></td>
      <td class="ls-txt-center hidden-xs"><?php echo $linhaStatus['status']; ?></td>
      <td class="ls-txt-right ls-regroup">
        <a href="index.php?pg=detalhes-marca&id=<?php echo $listagemMarca['id']; ?>" class="ls-btn ls-btn-sm">Detalhes</a>
        <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
          <a href="#" class="ls-btn ls-btn-sm"></a>
          <ul class="ls-dropdown-nav">
            <li><a href="index.php?pg=altera-marca&id=<?php echo $listagemMarca['id']; ?>">Editar</a></li>
            <li><a href="sql-altera-status-marca.php?id=<?php echo $listagemMarca['id']; ?>">Ativar/Bloquear</a></li>
            <li><a href="sql-deleta-marca.php?id=<?php echo $listagemMarca['id']; ?>" class="ls-color-danger">Excluir</a></li>
          </ul>
        </div>
      </td>
    </tr>   
    <?php
      }
    ?>     
  </tbody>
</table>