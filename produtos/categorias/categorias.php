<h1 class="ls-title-intro ls-ico-list2">Categorias</h1>
<a href="index.php?pg=nova-categoria" class="ls-btn-primary">Cadastrar categoria</a>
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
      <b class="ls-label-text ls-hidden-accessible">Nome da categoria</b>
      <input type="text" id="q" name="q" aria-label="Faça sua busca por categoria" placeholder="Nome da categoria" required="" class="ls-field-sm">
    </label>
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn ls-btn-sm" title="Buscar">
    </div>
  </form>
</div>

<table class="ls-table">
  <thead>
    <tr>
      <th>Nome da categoria</th>
      <th class="ls-txt-center hidden-xs">Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sqlListagemCategoria    = mysql_query('SELECT * FROM categorias ORDER BY nome');
    while($listagemCategoria = mysql_fetch_array($sqlListagemCategoria)) {
      $sqlStatus             = mysql_query('SELECT * FROM status WHERE id='.$listagemCategoria['id_status']);
      $linhaStatus           = mysql_fetch_array($sqlStatus);
  ?>

  <tr>
    <td><?php echo $listagemCategoria['nome'];?></td>
    <td class="ls-txt-center hidden-xs"><?php echo $linhaStatus['status']; ?></td>
    <td class="ls-txt-right ls-regroup">
      <a href="index.php?pg=detalhes-categoria&id=<?php echo $listagemCategoria['id']; ?>" class="ls-btn ls-btn-sm">Detalhes</a>
      <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
        <a href="#" class="ls-btn ls-btn-sm"></a>
        <ul class="ls-dropdown-nav">
          <li><a href="index.php?pg=altera-categoria&id=<?php echo $listagemCategoria['id']; ?>">Editar</a></li>
          <li><a href="sql-altera-status-categoria.php?id=<?php echo $listagemCategoria['id']; ?>">Ativar/Bloquear</a></li>
          <li><a href="sql-deleta-categoria.php?id=<?php echo $listagemCategoria['id']; ?>" class="ls-color-danger">Excluir</a></li>
        </ul>
      </div>
    </td>
  </tr>   
  <?php
  }
  ?>           
  </tbody>         
</table>