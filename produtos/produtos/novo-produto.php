<?php
  include('../../sessao.php');
  include('../../config.php');
?>

<!DOCTYPE html>
<html class="<?php if(!empty($classCorSite)){echo $classCorSite;} else {echo 'ls-theme-blue';}?>">
  <head>
    <title>Cadastro Produto</title>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="../../../stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="../../../imagens/logo-rg.png">
  </head> 

  <style>
    .ls-title-intro{
      padding: 10px;
    }
    .upcase {
      text-transform: uppercase;
    }
  </style>

  <body>
    <div class="ls-topbar">

      <!-- Notification bar -->
      <div class="ls-notification-topbar">
        <!-- Link of support/help 
        <div class="ls-alerts-list">
          <a href="#" class="ls-ico-bell-o" data-counter="5" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
          <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
          <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
        </div>-->

        <!-- User details -->
        <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
          <a href="#" class="ls-ico-user">
            Olá, <?php echo $secao_usuario; ?>
          </a>
          <nav class="ls-dropdown-nav ls-user-menu">
            <ul>
              <li><a href="#">Conta</a></li>
              <li><a href="?Logout">Logout</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <span class="ls-show-sidebar ls-ico-menu"></span>

      <!-- Nome do produto/marca -->
      <h1 class="ls-brand-name"><a class="ls-ico-earth"><?php if(!empty($nomeEmpresa)){echo $nomeEmpresa;} else {echo 'RG - Sistemas';}?></a></h1>
    </div>

    <aside class="ls-sidebar">
      <!-- Defails of user account -->
      <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
        <a href="#" class="ls-ico-user">
        </a>
        <nav class="ls-dropdown-nav ls-user-menu">
          <ul>
            <li><a href="#">submenu</a></li>
          </ul>
        </nav>
      </div>

      <nav class="ls-menu" role="navigation">
        <ul>
          <li><a href="../../home.php" class="ls-ico-home">Página Inicial</a></li>
          <li><a href="../../vendas/vendas.php" class="ls-ico-chart-bar-up" role="menuitem">Vendas</a></li>
          <li><a href="#" class="ls-ico-text" role="menuitem">Produtos</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="../categorias/categorias.php" class"ls-sub-menu-item" role="menuitem">Categorias</a>
                <a href="../tipos/tipos.php" class"ls-sub-menu-item" role="menuitem">Tipos</a>
                <a href="../marcas/marcas.php" class"ls-sub-menu-item" role="menuitem">Marcas</a>
                <a href="../fornecedores/fornecedores.php" class"ls-sub-menu-item" role="menuitem">Fornecedores</a>
                <a href="produtos.php" class"ls-sub-menu-item" role="menuitem">Produtos</a>
              </li>
            </ul>
          </li>
          <li><a href="../../clientes/clientes.php" class="ls-ico-users">Clientes</a></li>
          <li><a href="#" class="ls-ico-stats">Relatórios</a></li>
          <li><a href="#" class="ls-ico-cog" role="menuitem">Configurações</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="../../configuracoes/aparencia/aparencia.php" class"ls-sub-menu-item" role="menuitem">Aparência</a>
                <a href="../../configuracoes/empresa/dados-empresa.php?id=1" class"ls-sub-menu-item" role="menuitem">Dados Empresa</a>
                <a href="../../configuracoes/usuarios/usuarios.php" class"ls-sub-menu-item" role="menuitem">Usuários</a>
                <a href="../../configuracoes/notificacao/notificacao.php" class"ls-sub-menu-item" role="menuitem">Notificação</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>

    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-users">Cadastrar produto</h1>
        <form id="cad-produto" name="cad-produto" method="post" action="sql-insere-produto.php" class="ls-form-horizontal ls-form" data-ls-module="form">
          <legend class="ls-title-2">Identificação Pessoal</legend>
          <div class="row">
            <label class="ls-label col-md-2">
              <span class="ls-label-text">Código 1</span>
              <input type="text" name="codigo_1" class="ls-mask-codigo" placeholder="Digite o código"required>
            </label>
            <label class="ls-label col-md-2">
              <span class="ls-label-text">Código 2</span>
              <input type="text" name="codigo_2" class="ls-mask-codigo" placeholder="Digite o código">
            </label>
            <label class="ls-label col-md-2">
              <span class="ls-label-text">EAN</span>
              <input type="text" name="ean" class="ls-mask-ean" maxlength="13" placeholder="Digite o EAN">
            </label>
            <label class="ls-label col-md-2">
              <span class="ls-label-text">Locação</span>
              <input type="text" name="locacao" class="ls-mask-locacao upcase"  placeholder="AA-1234" required>
            </label>
          </div>
          <div class="row">
            <label class="ls-label col-md-8">
              <span class="ls-label-text">Nome</span>
              <input type="text" name="nome" placeholder="Digite o nome completo" required>
            </label>
          </div>
          <div class="row">
            <fieldset>
              <label class="ls-label col-md-8">
                <b class="ls-label-text">Aplicações</b>
                <textarea type="text" name="aplicacao" placeholder="Digite a aplicacão" data-ls-module="charCounter" maxlength="200"></textarea>
              </label>
            </fieldset>
          </div>
          <div class="row">
            <label class="ls-label col-md-2">
              <span class="ls-label-text">R$ Custo</span>
              <input type="text" name="valor_custo" class="ls-mask-money" placeholder="R$100,00" required>
            </label>
            <!--<label class="ls-label col-md-2">
              <b class="ls-label-text">Tipo Acréssimo</b>
              <div class="ls-custom-select">
                <select class="ls-custom" name="tipo" required>
                  <option value="R" selected="selected">Real</option> 
                  <option value="P">Porcentagem</option> 
                </select>
              </div>
            </label>
            <label class="ls-label col-md-2">
              <b class="ls-label-text">Acréssimo</b>
              <div class="ls-prefix-group">
                <span class="ls-label-text-prefix">R$</span>
                <input type="text" name="nome" required >
              </div>
            </label>-->
            <label class="ls-label col-md-2">
              <span class="ls-label-text">R$ Venda</span>
              <input type="text" name="valor_venda" class="ls-mask-money" placeholder="R$100,00" required>
            </label>
            <label class="ls-label col-md-2">
              <span class="ls-label-text">Estoque minimo</span>
              <input type="text" name="estoque_min" class="ls-mask-number" maxlength="4" placeholder="Digite o estoque">
            </label>   
            <label class="ls-label col-md-2">
              <span class="ls-label-text">Estoque maximo</span>
              <input type="text" name="estoque_max" class="ls-mask-number" maxlength="4" placeholder="Digite o estoque">
            </label>         
          </div>
          <div class="row">
            <label class="ls-label col-md-2">
              <span class="ls-label-text">Estoque atual</span>
              <input type="text" name="estoque" class="ls-mask-number" maxlength="4" placeholder="Digite o estoque">
            </label>
            <label class="ls-label col-md-6">
              <b class="ls-label-text">Fornecedor</b>
              <div class="ls-custom-select">
                <select class="ls-custom" name="fornecedor" required>
                  <option value="" selected="selected">Selecione</option> 
                  <?php
                    $sqlListagemFornecedor    = mysql_query('SELECT * FROM fornecedores ORDER BY razao_social');
                    while($listagemFornecedor = mysql_fetch_array($sqlListagemFornecedor)) {
                  ?>                
                  <option value="<?php echo $listagemFornecedor['id'];?>"><?php echo $listagemFornecedor['razao_social'];?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
            </label>
          </div>
          <div class="row">             
            <label class="ls-label col-md-3">
              <b class="ls-label-text">Marca</b>
              <div class="ls-custom-select">
                <select class="ls-custom" name="marca" required>
                   <option value="" selected="selected">Selecione</option> 
                  <?php
                    $sqlListagemMarca    = mysql_query('SELECT * FROM marcas ORDER BY nome');
                    while($listagemMarca = mysql_fetch_array($sqlListagemMarca)) {
                  ?>                
                  <option value="<?php echo $listagemMarca['id'];?>"><?php echo $listagemMarca['nome'];?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
            </label>
            <label class="ls-label col-md-3">
              <b class="ls-label-text">Tipo</b>
              <div class="ls-custom-select">
                <select class="ls-custom" name="tipo" required>
                  <option value="" selected="selected">Selecione</option> 
                  <?php
                    $sqlListagemTipo    = mysql_query('SELECT * FROM tipos ORDER BY nome');
                    while($listagemTipo = mysql_fetch_array($sqlListagemTipo)) {
                  ?>                
                  <option value="<?php echo $listagemTipo['id'];?>"><?php echo $listagemTipo['nome'];?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
            </label>
            <div class="row">
              <label class="ls-label col-md-2">
                <b class="ls-label-text">Situação</b>
                <div class="ls-custom-select">
                  <select class="ls-custom" name="situacao" required>
                    <option value="" selected="selected">Selecione</option> 
                    <option value="1">Ativo</option> 
                    <option value="0">Bloqueado</option> 
                  </select>
                </div>
              </label>
            </div>
          </div>
          <hr>
          <button type="submit" class="ls-btn-primary">Salvar</button>
          <a href="produtos.php" class="ls-btn">Cancelar</a>
        </form>
      </div>

      <footer class="ls-footer" role="contentinfo">
        <div class="ls-footer-info">
          <span class="last-access ls-ico-screen"><strong>Último acesso: </strong>99/99/9999 99:99:99</span>
          <div class="set-ip"><strong>IP:</strong> 000.00.00.000</div>
          <p class="ls-copy-right">Copyright © 1997-2015 Serviços de Internet S/A.</p>
        </div>
      </footer>
      
    </main>

    <!-- We recommended use jQuery 1.10 or up -->
    <script src="../../../javascripts/libs/jquery-2.1.0.min.js" type="text/javascript"></script>
    <script src="../../../javascripts/example.js" type="text/javascript"></script>
    <script src="../../../javascripts/locastyle.js" type="text/javascript"></script>
    <script src="../../../javascripts/docs/panel-charts.js" type="text/javascript"></script>
  </body>
</html>