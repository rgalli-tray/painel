<!DOCTYPE html>
<html>
  <head>
    <title>Página inicial</title>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="../imagens/logo-rg.png">
  </head>

  <body>

    <div class="ls-topbar">

      <!-- Notification bar -->
      <div class="ls-notification-topbar">        
        <div class="ls-alerts-list">
          <a href="#" class="ls-ico-bell-o" data-counter="" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
        </div>

        <!-- User details -->
        <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
          <a href="#" class="ls-ico-user">
            Olá, Renne
          </a>
          <nav class="ls-dropdown-nav ls-user-menu">
            <ul>
              <li><a href="#">Conta</a></li>
              <li><a href="?Logout">Sair</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Nome da empresa -->
      <h1 class="ls-brand-name"><a class="ls-ico-earth">Testando Busca</a></h1>
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
          <li><a href="index.php" class="ls-ico-home" title="Página inicial">Página inicial</a></li>
          <li><a href="index.php?pg=vendas" class="ls-ico-cart" title="Vendas">Vendas</a></li>
          <li><a href="" class="ls-ico-text" role="menuitem" title="Produtos">Produtos</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="index.php?pg=categorias" class"ls-sub-menu-item" role="menuitem">Categorias</a>
                <a href="index.php?pg=tipos" class"ls-sub-menu-item" role="menuitem">Tipos</a>
                <a href="index.php?pg=marcas" class"ls-sub-menu-item" role="menuitem">Marcas</a>
                <a href="index.php?pg=fornecedores" class"ls-sub-menu-item" role="menuitem">Fornecedores</a>
                <a href="index.php?pg=produtos" class"ls-sub-menu-item" role="menuitem">Produtos</a>
              </li>
            </ul>
          </li>
          <li><a href="index.php?pg=clientes" class="ls-ico-users" title="Clientes">Clientes</a></li>
          <li><a href="index.php?pg=relatorios" class="ls-ico-docs" title="Relatórios">Relatórios</a></li>
          <li><a href="" class="ls-ico-cog" role="menuitem" title="Configurações">Configurações</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="index.php?pg=aparencia" class"ls-sub-menu-item" role="menuitem">Aparência</a>
                <a href="index.php?pg=dados-empresa&id=1" class"ls-sub-menu-item" role="menuitem">Dados Empresa</a>
                <a href="index.php?pg=usuarios" class"ls-sub-menu-item" role="menuitem">Usuários</a>
                <a href="index.php?pg=notificacoes" class"ls-sub-menu-item" role="menuitem">Notificação</a>
              </li>
            </ul>
          </li>
          <li><a href="index.php?pg=compras" class="ls-ico-download2" title="Compras">Compras</a></li>
          <li><a href="index.php?pg=caixa" class="glyphicon-usd" title="Caixa">Caixa</a></li>
        </ul>
      </nav>
    </aside>

    <main class="ls-main">
      <div class="container-fluid">
        <div id="formulario"> 
          <table class="ls-table">
            <form action="" method="get" enctype="multipart/form-data">
              <input type="text" name="q" id="q" onkeyup="busca"/>
            </form>
            <thead>
              <tr>
                <th>Pedido</th>
                <th class="ls-txt-left hidden-xs">Dados cliente</th>
                <th class="ls-txt-center hidden-xs">Valor R$</th>
                <th class="ls-txt-center hidden-xs">Status</th>
              </tr>
            </thead> 
            <tbody id="resultado"></tbody>
          </table>          
        </div>
      </div>
    </main>

    <script src="javascripts/libs/jquery-2.1.0.min.js" type="text/javascript"></script>
    <script src="javascripts/example.js" type="text/javascript"></script>
    <script src="javascripts/locastyle.js" type="text/javascript"></script>
    <script src="javascripts/docs/panel-charts.js" type="text/javascript"></script>
    <script src="javascripts/buscas/busca-cliente.js" type="text/javascript"></script>
  </body>
</html>

<div id="formulario"> 
            <form action="" method="get" enctype="multipart/form-data">
              <input type="text" name="q" id="q" onkeyup="busca"/>
            </form>
            <div id="resultado">
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>  
              </tr>
            </div> 
          </div>          
