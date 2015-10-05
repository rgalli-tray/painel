<h1 class="ls-title-intro ls-ico-list2">Detalhes Produto</h1>

<?php
  $sqlFornecedor    = mysql_query('SELECT * FROM fornecedores WHERE id='.$_GET['id']);
  $linhaFornecedor  = mysql_fetch_array($sqlFornecedor);
  $sqlEstado        = mysql_query('SELECT * FROM estados WHERE id='.$linhaFornecedor['estado']);
  $linhaEstado      = mysql_fetch_array($sqlEstado);
  $sqlStatus        = mysql_query('SELECT * FROM status WHERE id='.$linhaFornecedor['status']);
  $linhaStatus      = mysql_fetch_array($sqlStatus);
?>

<div class="ls-box">
  <div class="ls-float-right ls-regroup">
    <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
      <a href="#" class="ls-btn"></a>
      <ul class="ls-dropdown-nav">
        <li><a href="index.php?pg=altera-fornecedor&id=<?php echo $linhaFornecedor['id'];?>">Editar</a></li>
        <li><a href="sql-altera-status-produto.php?id=<?php echo $linhaFornecedor['id'];?>">Ativar/Bloquear</a></li>
        <li><a href="sql-deleta-ptoduto.php?id=<?php echo $linhaFornecedor['id'];?>" class="ls-color-danger">Excluir</a></li>
      </ul>
    </div>
  </div>

  <form id="" name="detalhes-produto" class="ls-form-horizontal ls-form" data-ls-module="form">
    <fieldset id="domain-form" class="ls-form-disable ls-form-text">
      <div class="row">
        <label class="ls-label col-md-2">
          <span class="ls-label-text">Código</span>
          <input type="text" name="codigo" value="<?php echo $linhaFornecedor['codigo'];?>">
        </label>
      </div>
      <div class="row">
        <label class="ls-label col-md-6">
          <span class="ls-label-text">Razão Social</span>
          <input type="text" name="razao_social" value="<?php echo $linhaFornecedor['razao_social'];?>">
        </label>
        <label class="ls-label col-md-4 col-xs-12">
          <b class="ls-label-text">Nome Fantasia</b>
          <input type="text" name="nome_fantasia" value="<?php echo $linhaFornecedor['nome_fantasia'];?>">
        </label>  
      </div>
      <div class="row">
        <label class="ls-label col-md-2">
          <b class="ls-label-text">CNPJ</b>
          <input type="text" name="cnpj" value="<?php echo $linhaFornecedor['cnpj'];?>">
        </label>
        <label class="ls-label col-md-2 col-xs-12">
          <b class="ls-label-text">Telefone Fixo</b>
          <input type="text" name="telefone" value="<?php echo $linhaFornecedor['telefone'];?>">
        </label> 
        <label class="ls-label col-md-2 col-xs-12">
          <b class="ls-label-text">Telefone Celular</b>
          <input type="text" name="celular" value="<?php echo $linhaFornecedor['celular'];?>">
        </label>
        <label class="ls-label col-md-4 col-xs-12">
          <b class="ls-label-text">Contato</b>
          <input type="text" name="contato" value="<?php echo $linhaFornecedor['contato'];?>">
        </label>     
      </div>
      <div class="row">
        <label class="ls-label col-md-6">
          <span class="ls-label-text">E-mail</span>
          <input type="email" name="email" value="<?php echo $linhaFornecedor['email'];?>">
        </label>
        <label class="ls-label col-md-6">
          <span class="ls-label-text">Status</span>
          <input type="email" name="email" value="<?php echo $linhaStatus['status'];?>">
        </label>
      </div>
      <div class="row">
        <label class="ls-label col-md-6">
          <span class="ls-label-text">Endereço</span>
          <input type="text" name="endereco" value="<?php echo $linhaFornecedor['endereco'];?>">
        </label>
        <label class="ls-label col-md-1 col-xs-12">
          <b class="ls-label-text">Numero</b>
          <input type="text" name="numero" value="<?php echo $linhaFornecedor['numero'];?>">
        </label>  
        <label class="ls-label col-md-3 col-xs-12">
          <b class="ls-label-text">Bairro</b>
          <input type="text" name="bairro" value="<?php echo $linhaFornecedor['bairro'];?>">
        </label>  
      </div> 
      <div class="row">
        <label class="ls-label col-md-2">
          <span class="ls-label-text">Cidade</span>
          <input type="text" name="cidade" value="<?php echo $linhaFornecedor['cidade'];?>">
        </label>
        <label class="ls-label col-md-2">
          <span class="ls-label-text">Estado</span>
          <input type="text" name="cidade" value="<?php echo $linhaEstado['nome'];?>">
        </label>
      </div>
    </fieldset>
  </form>        
</div>

<div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3 col-md-6 ls-ico-calendar-check">
      Período atual
      <small>01/01/2014 a 01/01/2015</small>
    </h2>

    <div class="ls-actions-btn ls-float-right">
      <a href="" data-ls-module="modal" data-target="#removeMessage" class="ls-btn">Remover envios</a>
      <a href="" data-ls-module="modal" data-target="#addMessage" class="ls-btn-primary">Adicionar envios</a>
    </div>
  </header>

  <div class="row">
    <div class="col-md-3 col-sm-6">
      <div class="ls-box">
        <strong class="ls-board-info">9 <small>milhões</small></strong>
        <small>Válido até 01/01/2014</small>
        <a href="#" class="ls-btn-sm ls-btn">Comprar mais envios</a>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="ls-box">
        <h6 class="ls-title-4">Avulso</h6>
        <strong class="ls-board-info">0</strong>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="ls-box">
        <h6 class="ls-title-4">Distribuído</h6>
        <strong class="ls-board-info">0</strong>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="ls-box">
        <h6 class="ls-title-4 color-default">Utilizados</h6>
        <strong class="ls-board-info">10.743</strong>
      </div>
    </div>
  </div>

</div>

<h2 class="ls-title-3">Histórico de compras </h2>

<div class="ls-box-filter">
  <form action="" class="ls-form ls-form-inline">
    <label class="ls-label">
      <b class="ls-label-text">Período</b>
      <input type="text" name="cel2" class="datepicker">
    </label>
    <label class="ls-label">
      <b class="ls-label-text">a</b>
      <input type="text" name="cel2" class="datepicker">
    </label>
    <div class="ls-actions-btn">
      <button type="button" class="ls-btn">Filtrar</button>
    </div>
  </form>
</div>

<table class="ls-table">
  <thead>
    <tr>
      <th>Descrição</th>
      <th>Ação</th>
      <th>Envios</th>
      <th class="hidden-xs">Data</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Crédito envios mensais</td>
      <td>Crédito</td>
      <td>10.000</td>
      <td class="hidden-xs">01/01/2012 - 15h00</td>
    </tr>          
  </tbody>
</table>

<!-- Modal de senha -->
<div class="ls-modal" id="editPassword">
  <form action="#change-password" class="ls-form">
    <div class="ls-modal-box">
      <div class="ls-modal-header">
        <button data-dismiss="modal">×</button>
        <h4 class="ls-modal-title">Alterar senha</h4>
      </div>
      <div class="ls-modal-body">

          <label class="ls-label">
            <b class="ls-label-text">Senha *</b>
            <input type="password" required />
          </label>
          <label class="ls-label">
            <b class="ls-label-text">Confirmação de senha *</b>
            <input type="password" required />
          </label>
      </div>
      <div class="ls-modal-footer">
        <button type="submit" class="ls-btn-primary">Salvar</button>
        <a href="#atualizar-senha" class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
      </div>
    </div>
  </form>
</div>

<!-- Modal Adicionar envios -->
<div class="ls-modal" id="addMessage">
  <form action="" class="ls-form">
    <div class="ls-modal-box">
      <div class="ls-modal-header">
        <button data-dismiss="modal">×</button>
        <h4 class="ls-modal-title">Adicionar envios avulsos</h4>
      </div>
      <div class="ls-modal-body ls-form-inline">
        <p>Os envios avulsos terão o mesmo prazo de expiração que os envios normais cadastrados para esse cliente. 07/05/2014</p>
        <p>
          <strong>Saldo disponível da sua revenda</strong>
          <span>889.239</span>
        </p>
        <hr>
        <label class="ls-label">
          <b class="ls-label-text">Quantidade de envios avulsos a adicionar</b>
          <input type="number" name="" required>
        </label>
      </div>
      <div class="ls-modal-footer">
        <button type="submit" class="ls-btn-primary">Adicionar</button>
        <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
      </div>
    </div>
  </form>
</div>

<!-- Modal Remover envios -->
<div class="ls-modal" id="removeMessage">
  <form action="" class="ls-form">
    <div class="ls-modal-box">
      <div class="ls-modal-header">
        <button data-dismiss="modal">×</button>
        <h4 class="ls-modal-title">Remover envios</h4>
      </div>
      <div class="ls-modal-body">
        <p>Os envios serão removidos automaticamente após esta ação.</p>
        <label class="ls-label">
          <b class="ls-label-text">Saldo disponível do cliente</b>
          <input type="number" disabled="disabled" readonly="readonly" name="" value="8" >
        </label>
        <label class="ls-label">
          <b class="ls-label-text">Disponível para remoção até 27/04/2014</b>
          <input type="number" disabled="disabled" readonly="readonly" name="" value="8" >
        </label>
        <label class="ls-label">
          <b class="ls-label-text">Quantidade de envios a remover</b>
          <input type="number" name="" required>
        </label>
      </div>
      <div class="ls-modal-footer">
        <button type="submit" class="ls-btn-primary">Remover</button>
        <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
      </div>
    </div>
  </form>
</div>

<!-- Modal Alterar quantidade -->
<div class="ls-modal" id="editAmount">
  <form action="" class="ls-form">
    <div class="ls-modal-box">
      <div class="ls-modal-header">
        <button data-dismiss="modal">×</button>
        <h4 class="ls-modal-title">Alterar quantidade de envios</h4>
      </div>
      <div class="ls-modal-body">
        <p>O novo valor só entrará em vigor após a data de 08/05/2014</p>
        <label class="ls-label">
          <b class="ls-label-text">Saldo disponível da sua revenda</b>
          <input type="number" disabled="disabled" readonly="readonly" name="" value="889.239" >
        </label>
        <label class="ls-label">
          <b class="ls-label-text">Quantidade de envios</b>
          <input type="number" name="" value="10" >
        </label>
      </div>
      <div class="ls-modal-footer">
        <button type="submit" class="ls-btn-primary">Alterar</button>
        <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
      </div>
    </div>
  </form>
</div>