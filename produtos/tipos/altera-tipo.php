<?php
  include('../../sessao.php');
  include('../../config.php');
?>

<!DOCTYPE html>
<html class="<?php if(!empty($classCorSite)){echo $classCorSite;} else {echo 'ls-theme-blue';}?>">
  <head>
    <title>Alterarão Categoria</title>
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
          <li><a href="../../../home.php" class="ls-ico-home">Página inicial</a></li>
          <li><a href="../../vendas/vendas.php" class="ls-ico-chart-bar-up" role="menuitem">Vendas</a></li>
          <li><a href="../../produtos/produtos/produtos;php" class="ls-ico-text" role="menuitem">Produtos</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="../categorias/categorias.php" class"ls-sub-menu-item" role="menuitem">Categorias</a>
                <a href="tipos.php" class"ls-sub-menu-item" role="menuitem">Tipos</a>
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

    <?php
      $sqlTipo = mysql_query('SELECT * FROM tipos WHERE id='.$_GET['id']);
      $linhaTipo = mysql_fetch_array($sqlTipo);
    ?>

    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-list2">Alterar categoria</h1>
        <form id="cad-categoria" name="cad-categoria" method="post" action="sql-altera-tipo.php?id=<?php echo $linhaTipo['id'];?>" class="ls-form-horizontal ls-form row">
          <legend class="ls-title-2">Identificação</legend>
          <div class="row">
            <label class="ls-label col-md-6">
              <span class="ls-label-text">Nome</span>
              <input type="text" name="nome" value="<?php echo $linhaTipo['nome'];?>" maxlength="20" placeholder="Digite a categoria"required>
            </label>
          </div>
          <div class="row">
            <fieldset>
              <label class="ls-label col-md-6">
                <b class="ls-label-text">Descrição</b>
                <textarea type="text" name="descricao" data-ls-module="charCounter" maxlength="200"><?php echo $linhaTipo['descricao'];?></textarea>
              </label>
            </fieldset>
          </div>
          <div class="row">
            <label class="ls-label col-md-2">
            <b class="ls-label-text">Categoria</b>
              <div class="ls-custom-select">
                <select class="ls-custom" name="categoria" required>
                  <option value="" selected="selected">Selecione</option> 
                  <?php
                    $sqlListagemCategoria    = mysql_query('SELECT * FROM categorias ORDER BY nome');
                    while($listagemCategoria = mysql_fetch_array($sqlListagemCategoria)) {
                  ?>                
                    <option value="<?php echo $listagemCategoria['id'];?>"><?php echo $listagemCategoria['nome'];?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
            </label>
            <label class="ls-label col-md-2">
              <b class="ls-label-text">Situação</b>
              <div class="ls-custom-select">
                <select class="ls-custom" name="situacao" required>
                  <option value="" selected="selected">Selecione</option>
                  <option value="1" <?php if ($linhaTipo['situacao'] == '1') { echo ' selected="selected"';}?>>Ativo</option>
                  <option value="0" <?php if ($linhaTipo['situacao'] == '0') { echo ' selected="selected"';}?>>Bloqueado</option>
                </select>
              </div>
            </label>
          </div>
          <hr>
          <button type="submit" class="ls-btn-primary">Salvar</button>
          <a href="tipos.php" class="ls-btn">Cancelar</a>
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