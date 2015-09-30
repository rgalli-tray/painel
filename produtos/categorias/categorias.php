<?php
  include('../../sessao.php');
  include('../../config.php');
?>

<!DOCTYPE html>
<html class="<?php if(!empty($classCorSite)){echo $classCorSite;} else {echo 'ls-theme-blue';}?>">
  <head>
    <title>Categorias</title>
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
          <li><a href="../../home.php" class="ls-ico-home">Página inicial</a></li>
          <li><a href="../vendas/vendas.php" class="ls-ico-chart-bar-up" role="menuitem">Vendas</a></li>
          <li><a href="../produtos/produtos/produtos;php" class="ls-ico-text" role="menuitem">Produtos</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="categorias.php" class"ls-sub-menu-item" role="menuitem">Categorias</a>
                <a href="../tipos/tipos.php" class"ls-sub-menu-item" role="menuitem">Tipos</a>
                <a href="../marcas/marcas.php" class"ls-sub-menu-item" role="menuitem">Marcas</a>
                <a href="../fornecedores/fornecedores.php" class"ls-sub-menu-item" role="menuitem">Fornecedores</a>
                <a href="../produtos/produtos.php" class"ls-sub-menu-item" role="menuitem">Produtos</a>
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
        <h1 class="ls-title-intro ls-ico-list2">Categorias</h1>
        <a href="nova-categoria.php" class="ls-btn-primary">Cadastrar categoria</a>
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
              <b class="ls-label-text ls-hidden-accessible">Nome da categoria</b>
              <input type="text" id="q" name="q" aria-label="Faça sua busca por categoria" placeholder="Nome da categoria" required="" class="ls-field-sm">
            </label>
            <div class="ls-actions-btn">
              <input type="submit" value="Buscar" class="ls-btn ls-btn-sm" title="Buscar">
            </div>
          </form>
        </div>

        <table class="ls-table">
          <thead>
            <tr>
              <th>Nome da categoria</th>
              <th class="ls-txt-center hidden-xs">Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <?php
              $sqlListagemCategoria    = mysql_query('SELECT * FROM categorias ORDER BY nome');
              while($listagemCategoria = mysql_fetch_array($sqlListagemCategoria)) {
            ?>

              <tr>
                <td><?php echo $listagemCategoria['nome'];?></td>
                <td class="ls-txt-center hidden-xs"><?php if($listagemCategoria['situacao'] == 1) {
                                                          $status = 'Ativo';
                                                        }else{
                                                          $status = 'Bloqueado';
                                                        } echo $status; ?></td>
                <td class="ls-txt-right ls-regroup">
                  <a href="detalhes-categoria.php?id=<?php echo $listagemCategoria['id']; ?>" class="ls-btn ls-btn-sm">Detalhes</a>
                  <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
                    <a href="#" class="ls-btn ls-btn-sm"></a>
                    <ul class="ls-dropdown-nav">
                      <li><a href="altera-categoria.php?id=<?php echo $listagemCategoria['id']; ?>">Editar</a></li>
                      <li><a href="sql-altera-status-categoria.php?id=<?php echo $listagemCategoria['id']; ?>">Ativar/Bloquear</a></li>
                      <li><a href="sql-deleta-categoria.php?id=<?php echo $listagemCategoria['id']; ?>" class="ls-color-danger">Excluir</a></li>
                    </ul>
                  </div>
                </td>
              </tr>   
            <?php
            }
            ?>           
          </tbody>         
        </table>
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