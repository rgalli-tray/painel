<?php
  include('../sessao.php');
  include('../config.php');
?>

<!DOCTYPE html>
<html class="<?php if(!empty($classCorSite)){echo $classCorSite;} else {echo 'ls-theme-blue';}?>">
  <head>
    <title>Vendas</title>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="../../stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="../../imagens/logo-rg.png">
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
          <li><a href="../home.php" class="ls-ico-home" title="Página inicial">Página inicial</a></li>
          <li><a href="vendas.php" class="ls-ico-chart-bar-up" role="menuitem">Vendas</a></li>
          <li><a href="../produtos/produtos/produtos;php" class="ls-ico-text" role="menuitem">Produtos</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="../produtos/categorias/categorias.php" class"ls-sub-menu-item" role="menuitem">Categorias</a>
                <a href="../produtos/tipos/tipos.php" class"ls-sub-menu-item" role="menuitem">Tipos</a>
                <a href="../produtos/marcas/marcas.php" class"ls-sub-menu-item" role="menuitem">Marcas</a>
                <a href="../produtos/fornecedores/fornecedores.php" class"ls-sub-menu-item" role="menuitem">Fornecedores</a>
                <a href="../produtos/produtos/produtos.php" class"ls-sub-menu-item" role="menuitem">Produtos</a>
              </li>
            </ul>
          </li>
          <li><a href="../clientes/clientes.php" class="ls-ico-users">Clientes</a></li>
          <li><a href="#" class="ls-ico-stats">Relatórios</a></li>
          <li><a href="#" class="ls-ico-cog" role="menuitem">Configurações</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="../configuracoes/aparencia/aparencia.php" class"ls-sub-menu-item" role="menuitem">Aparência</a>
                <a href="../configuracoes/empresa/dados-empresa.php?id=1" class"ls-sub-menu-item" role="menuitem">Dados Empresa</a>
                <a href="../configuracoes/usuarios/usuarios.php" class"ls-sub-menu-item" role="menuitem">Usuários</a>
                <a href="../configuracoes/notificacao/notificacao.php" class"ls-sub-menu-item" role="menuitem">Notificação</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>

    <main class="ls-main">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-users">Vendas</h1>        
        <a href="nova-venda.php" class="ls-btn-primary" title="Cadastrar Cliente">Cadastrar Venda</a>            
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
              <th>Pedido</th>
              <th class="ls-txt-left hidden-xs">Dados cliente</th>
              <th class="ls-txt-center hidden-xs">Valor R$</th>
              <th class="ls-txt-center hidden-xs">Status</th>
              <th></th>
            </tr>
          </thead>      
          <tbody>
      
          <?php
            $sqlListagemVenda    = mysql_query('SELECT * FROM vendas ORDER BY pedido'); /**or die (mysql_error());*/
            while($listagemVenda = mysql_fetch_array($sqlListagemVenda)) {
          ?>

            <tr>
              <td><?php echo $listagemvenda['pedido']; ?></td>
              <td class="ls-txt-left hidden-xs"><?php echo $listagemVenda['nome']; ?></td>
              <td class="ls-txt-center hidden-xs"><?php echo $listagemVenda['valor']; ?></td>
              <td class="ls-txt-center hidden-xs"><?php echo $listagemVenda['status']; ?></td>
              <td class="ls-txt-right ls-regroup">
                <a href="detalhes-cliente.php?id=<?php echo $listagemVenda['id'];?>" class="ls-btn ls-btn-sm">Detalhes</a>
                <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
                  <a href="#" class="ls-btn ls-btn-sm"></a>
                  <ul class="ls-dropdown-nav">
                    <li><a href="altera-venda.php?id=<?php echo $listagemVenda['id'];?>">Editar</a></li>
                    <li><a href="sql-altera-status-venda.php?id=<?php echo $listagemVenda['id'];?>">Ativar/Bloquear</a></li>
                    <li><a href="sql-deleta-venda.php?id=<?php echo $listagemVenda['id'];?>" class="ls-color-danger">Excluir</a></li>
                  </ul>
                </div>
              </td>
            </tr>
          <?php
          }
          ?>
          </tbody>
      
        </table>

        <!-- paginação
        <div class="ls-pagination-filter">
          <ul class="ls-pagination">
            <li><a href="#">« Anterior</a></li>
            <li class="ls-active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#" class="hidden-xs">4</a></li>
            <li><a href="#" class="hidden-xs">5</a></li>
            <li><a href="#">Próximo »</a></li>
          </ul>-->

          <!-- filtro qtd registros por página
          <div class="ls-filter-view">
            <label for="">
              Exibir
              <div class="ls-custom-select ls-field-sm">
                <select name="" id="">
                  <option value="10">10</option>
                  <option value="30">30</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
              </div>
              ítens por página
            </label>
          </div>
        </div>-->

      </div>

      <footer class="ls-footer" role="contentinfo"> 
        <div class="ls-footer-info">
          <span class="last-access ls-ico-screen"><strong>Último acesso: </strong>99/99/9999 99:99:99</span>
          <div class="set-ip"><strong>IP:</strong> 000.00.00.000</div>
          <p class="ls-copy-right">Copyright © 1997-2015 Serviços de Internet S/A.</p>
        </div>
      </footer>
    </main>

    <!-- bloco notificações
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
    -->

    <!-- We recommended use jQuery 1.10 or up -->
    <script src="../../javascripts/libs/jquery-2.1.0.min.js" type="text/javascript"></script>
    <script src="../../javascripts/example.js" type="text/javascript"></script>
    <script src="../../javascripts/locastyle.js" type="text/javascript"></script>
    <script src="../../javascripts/docs/panel-charts.js" type="text/javascript"></script>
  </body>
</html>