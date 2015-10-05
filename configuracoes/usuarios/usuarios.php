<h1 class="ls-title-intro ls-ico-users">Usuários</h1>
<a href="index.php?pg=novo-usuario" class="ls-btn-primary">Cadastrar Usuário</a>
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
      <b class="ls-label-text ls-hidden-accessible">Nome Usuário</b>
      <input type="text" id="q" name="q" aria-label="Faça sua busca por categoria" placeholder="Nome Usuário" required="" class="ls-field-sm">
    </label>
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn ls-btn-sm" title="Buscar">
    </div>
  </form>
</div>

<table class="ls-table">
  <thead>
    <tr>
      <th>Nome do Usuário</th>
      <th class="ls-txt-center hidden-xs">Login</th>
      <th class="ls-txt-center hidden-xs">Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sqlUsuarios         = mysql_query('SELECT * FROM usuarios ORDER BY nome');
    while($linhaUsuarios = mysql_fetch_array($sqlUsuarios)) {
      $sqlStatus       = mysql_query('SELECT * FROM status WHERE id='.$linhaUsuarios['id_status']);
      $linhaStatus     = mysql_fetch_array($sqlStatus)
  ?>

  <tr>
    <td><?php echo $linhaUsuarios['nome'];?></td>
    <td class="ls-txt-center hidden-xs"><?php echo $linhaUsuarios['login']; ?></td>
    <td class="ls-txt-center hidden-xs"><?php echo $linhaStatus['status']; ?></td>
    <td class="ls-txt-right ls-regroup">
      <a href="index.php?pg=detalhes-usuario&id=<?php echo $linhaUsuarios['id']; ?>" class="ls-btn ls-btn-sm">Detalhes</a>
      <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
        <a href="#" class="ls-btn ls-btn-sm"></a>
        <ul class="ls-dropdown-nav">
          <li><a href="index.php?pg=altera-usuario&id=<?php echo $linhaUsuarios['id']; ?>">Editar</a></li>
          <li><a href="index.php?pg=altera-senha&id=<?php echo $linhaUsuarios['id']; ?>">Alterar Senha</a></li>
          <li><a href="sql-altera-status-categoria.php?id=<?php echo $linhaUsuarios['id']; ?>">Ativar/Bloquear</a></li>
          <li><a href="sql-deleta-categoria.php?id=<?php echo $linhaUsuarios['id']; ?>" class="ls-color-danger">Excluir</a></li>
        </ul>
      </div>
    </td>
  </tr>   
  <?php
  }
  ?>           
  </tbody>         
</table>