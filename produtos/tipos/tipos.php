<h1 class="ls-title-intro ls-ico-list2">Tipos</h1>
<a href="index.php?pg=novo-tipo" class="ls-btn-primary">Cadastrar tipo</a>
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
      <b class="ls-label-text ls-hidden-accessible">Nome do tipo</b>
      <input type="text" id="q" name="q" aria-label="Faça sua busca por tipo" placeholder="Nome do tipo" required="" class="ls-field-sm">
    </label>
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn ls-btn-sm" title="Buscar">
    </div>
  </form>
</div>

<table class="ls-table">
  <thead>
    <tr>
      <th>Nome do tipo</th>
      <th class="ls-txt-center hidden-xs">Categoria</th>
      <th class="ls-txt-center hidden-xs">Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sqlTipos               = mysql_query('SELECT * FROM tipos ORDER BY nome');
    while($linhaTipo        = mysql_fetch_array($sqlTipos)) {
      $sqlStatus            = mysql_query('SELECT * FROM status WHERE id='.$linhaTipo['id_status']);
      $linhaStatus          = mysql_fetch_array($sqlStatus);
      $sqlCategoria         = mysql_query('SELECT * FROM categorias WHERE id='.$linhaTipo['id_categoria']);
      $linhaCategoria       = mysql_fetch_array($sqlCategoria);
    ?>

    <tr>
      <td><?php echo $linhaTipo['nome']; ?></td>
      <td class="ls-txt-center hidden-xs"><?php echo $linhaCategoria['nome']; ?></td>
      <td class="ls-txt-center hidden-xs"><?php echo $linhaStatus['status']; ?></td>
      <td class="ls-txt-right ls-regroup">
        <a href="index.php?pg=detalhes-tipo&id=<?php echo $linhaTipo['id']; ?>" class="ls-btn ls-btn-sm">Detalhes</a>
        <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
          <a href="#" class="ls-btn ls-btn-sm"></a>
          <ul class="ls-dropdown-nav">
            <li><a href="index.php?pg=altera-tipo&id=<?php echo $linhaTipo['id']; ?>">Editar</a></li>
            <li><a href="sql-altera-status-tipo.php?id=<?php echo $linhaTipo['id']; ?>">Ativar/Bloquear</a></li>
            <li><a href="sql-deleta-tipo.php?id=<?php echo $linhaTipo['id']; ?>" class="ls-color-danger">Excluir</a></li>
          </ul>
        </div>
      </td>
    </tr>
  <?php
    }
  ?>
  </tbody>       
</table>