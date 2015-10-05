<h1 class="ls-title-intro ls-ico-book">Fornecedores</h1>
<a href="index.php?pg=novo-fornecedor" class="ls-btn-primary">Cadastrar fornecedor</a>
<div class="ls-box-filter">
  <form action="" class="ls-form ls-form-inline ls-float-left">
    <label class="ls-label col-md-6 col-sm-8">
      <b class="ls-label-text">Status</b>
      <div class="ls-custom-select ls-field-sm">
        <select name="" class="ls-select">
          <option>Todos</option>
          <option>Ativos</option>
          <option>Bloqueados</option>
        </select>
      </div>
    </label>
  </form>

  <form  action="" class="ls-form ls-form-inline ls-float-right">
    <label class="ls-label" role="search">
      <b class="ls-label-text ls-hidden-accessible">Nome do fornecedor</b>
      <input type="text" id="q" name="q" aria-label="Faça sua busca por fornecedor" placeholder="Nome do fornecedor" required="" class="ls-field-sm">
    </label>
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn ls-btn-sm" title="Buscar">
    </div>
  </form>
</div>

<table class="ls-table">
  <thead>
    <tr>
      <th>Código</th>
      <th>Razão Social</th>
      <th class="ls-txt-center hidden-xa">Nome Fantasia</th>
      <th class="ls-txt-center hidden-xs">Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sqlFornecedor          = mysql_query('SELECT * FROM fornecedores ORDER BY razao_social');
      while($linhaFornecedor  = mysql_fetch_array($sqlFornecedor)) {
        $sqlStatus            = mysql_query('SELECT * FROM status WHERE id='.$linhaFornecedor['status']);
        $linhaStatus          = mysql_fetch_array($sqlStatus);
    ?>
    <tr>
      <td><?php echo $linhaFornecedor['codigo'];?></td>
      <td><?php echo $linhaFornecedor['razao_social'];?></td>
      <td class="ls-txt-center hidden-xs"><?php echo $linhaFornecedor['nome_fantasia'];?></td>
      <td class="ls-txt-center hidden-xs"><?php echo $linhaStatus['status'];?></td>
      <td class="ls-txt-right ls-regroup">
        <a href="index.php?pg=detalhes-fornecedor&id=<?php echo $linhaFornecedor['id']; ?>" class="ls-btn ls-btn-sm">Detalhes</a>
        <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
          <a href="#" class="ls-btn ls-btn-sm"></a>
          <ul class="ls-dropdown-nav">
            <li><a href="index.php?pg=altera-fornecedor&id=<?php echo $linhaFornecedor['id']; ?>">Editar</a></li>
            <li><a href="sql-altera-status-fornecedor.php?id=<?php echo $linhaFornecedor['id']; ?>">Ativar/Bloquear</a></li>
            <li><a href="sql-deleta-fornecedor.php?id=<?php echo $linhaFornecedor['id']; ?>" class="ls-color-danger">Excluir</a></li>
          </ul>
        </div>
      </td>
    </tr>   
    <?php
    }
    ?>     
  </tbody>
</table>