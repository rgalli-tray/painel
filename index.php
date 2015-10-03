<?php
  include('sessao.php');
  include('config.php');
  include('funcao.php');
?>

<!DOCTYPE html>
<html class="<?php if(!empty($classCorSite)){echo $classCorSite;} else {echo 'ls-theme-blue';}?>">
  <head>
    <title>Página inicial</title>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="../stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="../imagens/logo-rg.png">
  </head>

  <style>
    .ls-title-intro{
      padding: 10px;
    }
  </style>

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
            Olá, <?php echo $secao_usuario; ?>
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
          <li><a href="index.php" class="ls-ico-home">Página inicial</a></li>
          <li><a href="index.php?pg=vendas" class="ls-ico-chart-bar-up" role="menuitem">Vendas</a></li>
          <li><a href="" class="ls-ico-text" role="menuitem">Produtos</a>
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
          <li><a href="index.php?pg=clientes" class="ls-ico-users">Clientes</a></li>
          <li><a href="index.php?pg=relatorios" class="ls-ico-bars">Relatórios</a></li>
          <li><a href="" class="ls-ico-cog" role="menuitem">Configurações</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="index.php?pg=produtos" class"ls-sub-menu-item" role="menuitem">Aparência</a>
                <a href="index.php?pg=empresa?id=1" class"ls-sub-menu-item" role="menuitem">Dados Empresa</a>
                <a href="index.php?pg=usuarios" class"ls-sub-menu-item" role="menuitem">Usuários</a>
                <a href="index.php?pg=notificacoes" class"ls-sub-menu-item" role="menuitem">Notificação</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>

    <main class="ls-main">
      <div class="container-fluid">
        <?php 
          if($_GET['pg']){
            /*Menu Vendas*/
              if ($_GET['pg']=='vendas'){
                include_once('vendas/vendas.php');
              }
###################################################################################################################              
            /*Menu Produtos*/
              /*Sub Menu Produtos*/
                if ($_GET['pg']=='categorias'){
                  include_once('produtos/categorias/categorias.php');
                }
              #####################################################################################################
              /*Sub Menu Produtos*/
                if ($_GET['pg']=='tipos'){
                  include_once('produtos/tipos/tipos.php');
                }
              #####################################################################################################          
              /*Sub Menu Produtos*/
                if ($_GET['pg']=='marcas'){
                  include_once('produtos/marcas/marcas.php');
                }
              #####################################################################################################                
              /*Sub Menu Produtos*/
                if ($_GET['pg']=='fornecedores'){
                  include_once('produtos/fornecedores/fornecedores.php');
                }
              #####################################################################################################                
              /*Sub Menu Produtos*/
                if ($_GET['pg']=='produtos'){
                  include_once('produtos/produtos/produtos.php');
                }
                if ($_GET['pg']=='novo-produto'){
                  include_once('produtos/produtos/novo-produto.php');
                }
                if ($_GET['pg']=='altera-produto'){
                  include_once('produtos/produtos/altera-produto.php');
                }
                if ($_GET['pg']=='detalhes-produto'){
                  include_once('produtos/produtos/detalhes-produto.php');
                }
###################################################################################################################               
            /*Menu Clientes*/
              if ($_GET['pg']=='clientes'){
                include_once('clientes/clientes.php');
              }
              if ($_GET['pg']=='novo-cliente'){
                include_once('clientes/novo-cliente.php');
              }
              if ($_GET['pg']=='altera-cliente'){
                include_once('clientes/altera-cliente.php');
              }
              if ($_GET['pg']=='detalhes-cliente'){
                include_once('clientes/detalhes-cliente.php');
              }
###################################################################################################################              
            /*Menu Relatorios*/
###################################################################################################################
            /*Menu Configurações*/
###################################################################################################################            
          }else{
            include_once('home.php');
          }
        ?>
      </div>

      <footer class="ls-footer" role="contentinfo"> 
         <div class="ls-footer-info">
          <span class="last-access ls-ico-screen"><strong>Último acesso: </strong>99/99/9999 99:99:99</span>
          <div class="set-ip"><strong>IP:</strong> 000.00.00.000</div>
          <p class="ls-copy-right">Copyright © 1997-2015 Serviços de Internet S/A.</p>
        </div>
      </footer>
     </main>
   
    <aside class="ls-notification">
      <nav class="ls-notification-list" id="ls-notification-curtain" style="left: 1716px;">
        <h3 class="ls-title-3">Notificações</h3>
        <ul>
          <li class="ls-dismissable">
            <a href="#">Blanditiis est est dolorem iure voluptatem eos deleniti repellat et laborum consequatur</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- We recommended use jQuery 1.10 or up -->
    <script src="../javascripts/libs/jquery-2.1.0.min.js" type="text/javascript"></script>
    <script src="../javascripts/example.js" type="text/javascript"></script>
    <script src="../javascripts/locastyle.js" type="text/javascript"></script>
    <script src="../javascripts/docs/panel-charts.js" type="text/javascript"></script>
  </body>
</html>