<?php
  include('sessao.php');
  include('funcao.php');
?>

<?php
  $sqlConfiguracoes    = mysql_query('SELECT * FROM configuracoes WHERE id=1');
  $linhaConfiguracoes  = mysql_fetch_array($sqlConfiguracoes);
  $sqlAparencia        = mysql_query('SELECT * FROM aparencia WHERE id='.$linhaConfiguracoes['id_tema']);
  $linhaAparencia      = mysql_fetch_array($sqlAparencia);
?>

<!DOCTYPE html>
<html class="<?php echo $linhaAparencia['tema']; ?>">
  <head>
    <title>Página inicial</title>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
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
            Olá, <?php echo $login; ?>
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
      <h1 class="ls-brand-name"><a class="ls-ico-earth"><?php echo $linhaConfiguracoes['nome_exibicao']; ?></a></h1>
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
        <?php 
          if (!empty($_GET['pg'])) {
            /*Menu Vendas*/
              if ($_GET['pg']=='vendas'){
                include_once('vendas/vendas.php');
              }
               if ($_GET['pg']=='nova-venda'){
                include_once('vendas/nova-venda.php');
              }
###################################################################################################################              
            /*Menu Produtos*/
              /*Sub Menu Categorias*/
                if ($_GET['pg']=='categorias'){
                  include_once('produtos/categorias/categorias.php');
                }
                if ($_GET['pg']=='nova-categoria'){
                  include_once('produtos/categorias/nova-categoria.php');
                }
                if ($_GET['pg']=='altera-categoria'){
                  include_once('produtos/categorias/altera-categoria.php');
                }
                if ($_GET['pg']=='detalhes-categoria'){
                  include_once('produtos/categorias/detalhes-categoria.php');
                }
              #####################################################################################################
              /*Sub Menu Tipos*/
                if ($_GET['pg']=='tipos'){
                  include_once('produtos/tipos/tipos.php');
                }
                if ($_GET['pg']=='novo-tipo'){
                  include_once('produtos/tipos/novo-tipo.php');
                }
                if ($_GET['pg']=='altera-tipo'){
                  include_once('produtos/tipos/altera-tipo.php');
                }
                if ($_GET['pg']=='detalhes-tipo'){
                  include_once('produtos/tipos/detalhes-tipo.php');
                }
              #####################################################################################################          
              /*Sub Menu Marcas*/
                if ($_GET['pg']=='marcas'){
                  include_once('produtos/marcas/marcas.php');
                }
                if ($_GET['pg']=='nova-marca'){
                  include_once('produtos/marcas/nova-marca.php');
                }
                if ($_GET['pg']=='altera-marca'){
                  include_once('produtos/marcas/altera-marca.php');
                }
                if ($_GET['pg']=='detalhes-marca'){
                  include_once('produtos/marcas/detalhes-marca.php');
                }
              #####################################################################################################                
              /*Sub Menu Fornecedores*/
                if ($_GET['pg']=='fornecedores'){
                  include_once('produtos/fornecedores/fornecedores.php');
                }
                if ($_GET['pg']=='novo-fornecedor'){
                  include_once('produtos/fornecedores/novo-fornecedor.php');
                }
                if ($_GET['pg']=='altera-fornecedor'){
                  include_once('produtos/fornecedores/altera-fornecedor.php');
                }
                if ($_GET['pg']=='detalhes-fornecedor'){
                  include_once('produtos/fornecedores/detalhes-fornecedor.php');
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
             if ($_GET['pg']=='aparencia'){
                include_once('configuracoes/aparencia/aparencia.php');
              }
              if ($_GET['pg']=='dados-empresa'){
                include_once('configuracoes/empresa/dados-empresa.php');
              }
              if ($_GET['pg']=='usuarios'){
                include_once('configuracoes/usuarios/usuarios.php');
              }
              if ($_GET['pg']=='novo-usuario'){
                include_once('configuracoes/usuarios/novo-usuario.php');
              }
              if ($_GET['pg']=='altera-usuario'){
                include_once('configuracoes/usuarios/altera-usuario.php');
              }
              if ($_GET['pg']=='detalhes-usuario'){
                include_once('configuracoes/usuarios/detalhes-usuario.php');
              }
###################################################################################################################            
          }else{
            include_once('home.php');
          }
        ?>
      </div>  
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
    <script src="../javascripts/buscas/busca.js" type="text/javascript"></script>
  </body>
</html>