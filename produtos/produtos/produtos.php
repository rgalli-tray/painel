<h1 class="ls-title-intro ls-ico-list2">Produtos</h1>
<a href="index.php?pg=novo-produto" class="ls-btn-primary">Cadastrar produto</a>
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
      <b class="ls-label-text ls-hidden-accessible">Nome do produto</b>
      <input type="text" id="q" name="q" aria-label="Faça sua busca por produto" placeholder="Nome da produto" required="" class="ls-field-sm">
    </label>
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn ls-btn-sm" title="Buscar">
    </div>
  </form>
</div>

<table class="ls-table">
  <thead>
    <tr>
      <th>Codigo</th>
      <th class="ls-txt-center hidden-xs">Nome Produto</th>
      <th class="ls-txt-center hidden-xs">Locacão</th>
      <th class="ls-txt-center hidden-xs">Preço</th>
      <th class="ls-txt-center hidden-xs">Situação</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sqlListagemProduto    = mysql_query('SELECT * FROM produtos ORDER BY nome');
    while($listagemProduto = mysql_fetch_array($sqlListagemProduto)) {
  ?>

  <tr>
    <td><?php echo $listagemProduto['codigo_1']; ?> / <?php echo $listagemProduto['codigo_2'];?></td>
    <td class="ls-txt-center hidden-xs"><?php echo $listagemProduto['nome']; ?></td>
    <td class="ls-txt-center hidden-xs"><?php echo $listagemProduto['locacao']; ?></td>
    <td class="ls-txt-center hidden-xs"><?php echo 'R$ '.number_format($listagemProduto['valor_venda'],2, ',', '.'); ?></td>
    <td class="ls-txt-center hidden-xs"><?php if($listagemProduto['situacao'] == 1) {
                                                $status = 'Ativo';
                                              }else{
                                                $status = 'Bloqueado';
                                              } echo $status; ?></td>
    <td class="ls-txt-right ls-regroup">
      <a href="index.php?pg=detalhes-produto&id=<?php echo $listagemProduto['id']; ?>" class="ls-btn ls-btn-sm">Detalhes</a>
      <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
        <a href="#" class="ls-btn ls-btn-sm"></a>
        <ul class="ls-dropdown-nav">
          <li><a href="index.php?pg=altera-produto&id=<?php echo $listagemProduto['id']; ?>">Editar</a></li>
          <li><a href="sql-altera-status-produto.php?id=<?php echo $listagemProduto['id']; ?>">Ativar/Bloquear</a></li>
          <li><a href="sql-deleta-produto.php?id=<?php echo $listagemProduto['id']; ?>" class="ls-color-danger">Excluir</a></li>
        </ul>
      </div>
    </td>
  </tr>   
  <?php
    }
  ?>           
  </tbody>         
</table>
