<?php
  include('sessao.php');
  include('config.php');
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
          <li><a href="home.php" class="ls-ico-home">Página inicial</a></li>
          <li><a href="vendas/vendas.php" class="ls-ico-chart-bar-up" role="menuitem">Vendas</a></li>
          <li><a href="produtos/produtos/produtos;php" class="ls-ico-text" role="menuitem">Produtos</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="produtos/categorias/categorias.php" class"ls-sub-menu-item" role="menuitem">Categorias</a>
                <a href="produtos/tipos/tipos.php" class"ls-sub-menu-item" role="menuitem">Tipos</a>
                <a href="produtos/marcas/marcas.php" class"ls-sub-menu-item" role="menuitem">Marcas</a>
                <a href="produtos/fornecedores/fornecedores.php" class"ls-sub-menu-item" role="menuitem">Fornecedores</a>
                <a href="produtos/produtos/produtos.php" class"ls-sub-menu-item" role="menuitem">Produtos</a>
              </li>
            </ul>
          </li>
          <li><a href="clientes/clientes.php" class="ls-ico-users">Clientes</a></li>
          <li><a href="#" class="ls-ico-bars">Relatórios</a></li>
          <li><a href="#" class="ls-ico-cog" role="menuitem">Configurações</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="configuracoes/aparencia/aparencia.php" class"ls-sub-menu-item" role="menuitem">Aparência</a>
                <a href="configuracoes/empresa/dados-empresa.php?id=1" class"ls-sub-menu-item" role="menuitem">Dados Empresa</a>
                <a href="configuracoes/usuarios/usuarios.php" class"ls-sub-menu-item" role="menuitem">Usuários</a>
                <a href="configuracoes/notificacao/notificacao.php" class"ls-sub-menu-item" role="menuitem">Notificação</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>

    <main class="ls-main">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-home">Página Inicial</h1>

        <div class="ls-box ls-board-box">
          <header class="ls-info-header">
            <h2 class="ls-title-3">Lista de dados</h2>
          </header>

          <div id="sending-stats" class="row">
            <div class="col-sm-6 col-md-3">
              <div class="ls-box">
                <h6 class="ls-title-4">Contratado</h6>
                <span class="ls-board-data">
                  <strong>1 <small>milhão</small></strong>
                </span>
                <a href="#" class="ls-btn ls-btn-xs">Botão 1</a>
              </div>
            </div>

            <div class="col-sm-6 col-md-3">
              <div class="ls-box">
                <h6 class="ls-title-4">Avulso</h6>
                <span class="ls-board-data">
                  <strong>0</strong>
                </span>
                <a href="#" class="ls-btn ls-btn-xs">Botão 2</a>
              </div>
            </div>

            <div class="col-sm-6 col-md-3">
              <div class="ls-box">
                <h6 class="ls-title-4">Distribuído</h6>
                <span class="ls-board-data">
                  <strong>10.743</strong>
                </span>
              </div>
            </div>

            <div class="col-sm-6 col-md-3">
              <div class="ls-box">
                <h6 class="ls-title-4 color-default">Disponível</h6>
                <span class="ls-board-data">
                  <strong class="ls-color-theme">81%</strong>
                  <small>989.257</small>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="ls-box">
          <header class="ls-info-header">
            <h2 class="ls-title-3">Lista de Dados</h2>
            <a href="#" class="ls-btn ls-btn-sm">Botão 3</a>
          </header>

          <table class="ls-table">
                <thead>
                  <th>Nome do cliente</th>
                  <th>Data de expiração</th>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">João da Silva</a> </td>
                    <td>10.04.2014</td>
                  </tr>
                  <tr>
                    <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">João da Silva</a> </td>
                    <td>10.04.2014</td>
                  </tr>
                  <tr>
                    <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">João da Silva</a> </td>
                    <td>10.04.2014</td>
                  </tr>
                </tbody>
          </table>         
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="ls-box">
              <header class="ls-info-header">
                <h2 class="ls-title-3">Lista de Dados</h2>
                <a href="#" class="ls-btn ls-btn-sm">Botão 4</a>
              </header>

              <table class="ls-table">
                <thead>
                  <th>Nome do cliente</th>
                  <th>Data de expiração</th>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">João da Silva</a> </td>
                    <td>10.04.2014</td>
                  </tr>
                  <tr>
                    <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">João da Silva</a> </td>
                    <td>10.04.2014</td>
                  </tr>
                  <tr>
                    <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">João da Silva</a> </td>
                    <td>10.04.2014</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
          <div class="col-md-6">
            <div class="ls-box">
              <header class="ls-info-header">
                <h2 class="ls-title-3">Lista de Dados</h2>
                <a href="/locawebstyle/documentacao/exemplos/painel1/clients" class="ls-btn ls-btn-sm">Botão 5</a>
              </header>

              <table class="ls-table">
                <thead>
                  <th>Nome do cliente</th>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">João da Silva</a> </td>
                  </tr>
                  <tr>
                    <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">João da Silva</a> </td>
                  </tr>
                  <tr>
                    <td><a href="/locawebstyle/documentacao/exemplos/painel1/client">João da Silva</a> </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
        <h3 class="ls-title-2">Notificações</h3>
        <ul>
          <li class="ls-dismissable">
            <a href="#">Blanditiis est est dolorem iure voluptatem eos deleniti repellat et laborum consequatur</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Similique eos rerum perferendis voluptatibus</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Qui numquam iusto suscipit nisi qui unde</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Nisi aut assumenda dignissimos qui ea in deserunt quo deleniti dolorum quo et consequatur</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Sunt consequuntur aut aut a molestiae veritatis assumenda voluptas nam placeat eius ad</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
        </ul>
      </nav>

      <nav class="ls-notification-list" id="ls-help-curtain" style="left: 1756px;">
        <h3 class="ls-title-2">Feedback</h3>
        <ul>
          <li><a href="#">&gt; quo fugiat facilis nulla perspiciatis consequatur</a></li>
          <li><a href="#">&gt; enim et labore repellat enim debitis</a></li>
        </ul>
      </nav>

      <nav class="ls-notification-list" id="ls-feedback-curtain" style="left: 1796px;">
        <h3 class="ls-title-2">Ajuda</h3>
        <ul>
          <li class="ls-txt-center hidden-xs">
            <a href="#" class="ls-btn-dark ls-btn-tour">Fazer um Tour</a>
          </li>
          <li><a href="#">&gt; Guia</a></li>
          <li><a href="#">&gt; Wiki</a></li>
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