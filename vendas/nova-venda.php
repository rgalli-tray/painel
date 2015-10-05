<h1 class="ls-title-intro ls-ico-cart">Nova Venda</h1>
<form id="busca-cliente" name="busca-cliente" method="get" action="" enctype="mutipart/form-data" class="ls-form-horizontal ls-form" data-ls-module="form">
  <legend class="ls-title-2">Cliente</legend>
  <div class="row container-fluid">
    <label class="ls-label col-md-1">
      <button type="buscar" id="busca" class="ls-btn-primary">Buscar</button>
    </label>
    <label class="ls-label col-md-4">
      <span class="ls-label-text">Código / Nome / Apelido:</span>
      <input type="text" id="busca-cliente" name="busca-cliente" onkeyup="busca();"/>
    </label>
    <table class="ls-table">
      <thead>
        <tr>
          <th class="hidden-xs">Nome</th>
          <th class="hidden-xs">Apelido</th>
          <th class="hidden-xs">Status</th>
          <th class="hidden-xs">CPF</th>
        </tr>
      </thead>
      <tbody>
        <div id="resultado-busca">          

        </div>
      </tbody>
    </table>
  </div>
  <legend class="ls-title-2">Produtos</legend>
  <div class="row container-fluid">
    <label class="ls-label col-md-1">
      <button type="buscar" class="ls-btn-primary">Buscar</button>
    </label>
    <label class="ls-label col-md-4">
      <span class="ls-label-text">Código / Nome / Descrição:</span>
      <input type="text" name="busca-produto">
    </label>
     <table class="ls-table">
      <thead>
        <tr>
          <th class="hidden-xs">Código</th>
          <th class="hidden-xs">Nome</th>
          <th class="hidden-xs">Locação</th>
          <th class="hidden-xs">Qtd</th>
          <th class="hidden-xs">Valor</th>
          <th class="hidden-xs">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="hidden-xs">1234</td>
          <td class="hidden-xs">Cabo acelerador</td>
          <td class="hidden-xs">AA-1234</td>
          <td class="hidden-xs">2</td>
          <td class="hidden-xs">R$ 10,00</td>
          <td class="hidden-xs">R$ 20,00</td>
        </tr>
        <tr>
          <td class="hidden-xs">5678</td>
          <td class="hidden-xs">Cabo embreagem</td>
          <td class="hidden-xs">AA-4567</td>
          <td class="hidden-xs">2</td>
          <td class="hidden-xs">R$ 15,00</td>
          <td class="hidden-xs">R$ 230,00</td>
        </tr>
      </tbody>
    </table>  
  </div>
</form>
<form action="" class="ls-form ls-form-horizontal row">
  <legend class="ls-title-2">Formas Pagamento</legend>
  <fieldset>
    <!-- Exemplo com Radio button -->
    <div class="ls-label col-md-12">
      <label class="ls-label-text">
        <input type="radio" name="plataforms" class="ls-field-radio">Dinheiro
      </label>
      <label class="ls-label-text">
        <input type="radio" name="plataforms" class="ls-field-radio">Aprazo
      </label>
      <label class="ls-label-text">
        <input type="radio" name="plataforms" class="ls-field-radio">Cartão Avista
      </label>
      <label class="ls-label-text">
        <input type="radio" name="plataforms" class="ls-field-radio">Cartão Aprazo
      </label>
    </div>
  </fieldset>
</form>
<hr>
<form action="" class="ls-form ls-form-inline">
  <label class="ls-label col-md-3">
    <b class="ls-label-text">Total Produtos</b>
      <div class="ls-prefix-group">
        <span class="ls-label-text-prefix">R$</span>
        <input type="text" name="valor_custo" class="ls-mask-money">
      </div>
  </label>
  <label class="ls-label col-md-2">
    <b class="ls-label-text">Desconto</b>
      <div class="ls-prefix-group">
        <span class="ls-label-text-prefix">%</span>
        <input type="text" name="valor_custo" class="ls-mask-money">
      </div>
  </label>
  <label class="ls-label col-md-3">
    <b class="ls-label-text">Total Pedido</b>
      <div class="ls-prefix-group">
        <span class="ls-label-text-prefix">R$</span>
        <input type="text" name="valor_custo" class="ls-mask-money">
      </div>
  </label>
  <div class="ls-actions-btn">
    <button type="buscar" class="ls-btn-primary">Finalizar Venda</button>
  </div>
</form>