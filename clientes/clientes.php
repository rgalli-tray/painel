<h1 class="ls-title-intro ls-ico-users">Clientes</h1>        
<a href="index.php?pg=novo-cliente" class="ls-btn-primary ls-ico-user-add" title="Cadastrar Cliente">Cadastrar Cliente</a>            
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
      <b class="ls-label-text ls-hidden-accessible">Nome do cliente</b>
      <input type="text" id="q" name="q" aria-label="Faça sua busca por cliente" placeholder="Nome do cliente" required="" class="ls-field-sm">
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
      <th class="ls-txt-center hidden-xs">Nome do cliente</th>
      <th class="ls-txt-center hidden-xs">Apelido</th>
      <th class="ls-txt-center hidden-xs">Status</th>
      <th></th>
    </tr>
  </thead>      
  <tbody>

  <?php
    $sqlListagemCliente    = mysql_query('SELECT * FROM clientes ORDER BY nome');
    while($listagemCliente = mysql_fetch_array($sqlListagemCliente)) {
  ?>

    <tr>
      <td><?php echo $listagemCliente['codigo']; ?></td>
      <td class="ls-txt-center hidden-xs"><?php echo $listagemCliente['nome']; ?></td>
      <td class="ls-txt-center hidden-xs"><?php echo $listagemCliente['apelido']; ?></td>
      <td class="ls-txt-center hidden-xs"><?php if($listagemCliente['situacao'] == 1) {
                                                  $status = 'Ativo';
                                                }else{
                                                  $status = 'Bloqueado';
                                                } echo $status; ?></td>
      <td class="ls-txt-right ls-regroup">
        <a href="index.php?pg=detalhes-cliente&id=<?php echo $listagemCliente['id'];?>" class="ls-btn ls-btn-sm">Detalhes</a>
        <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
          <a href="#" class="ls-btn ls-btn-sm"></a>
          <ul class="ls-dropdown-nav">
            <li><a href="index.php?pg=altera-cliente&?id=<?php echo $listagemCliente['id'];?>">Editar</a></li>
            <li><a href="sql-altera-status-cliente.php?id=<?php echo $listagemCliente['id'];?>">Ativar/Bloquear</a></li>
            <li><a href="sql-deleta-cliente.php?id=<?php echo $listagemCliente['id'];?>" class="ls-color-danger">Excluir</a></li>
          </ul>
        </div>
      </td>
    </tr>
  <?php
  }
  ?>
  </tbody>      
</table>