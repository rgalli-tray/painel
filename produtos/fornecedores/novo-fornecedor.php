<?php
  include('../../sessao.php');
  include('../../config.php');
?>

<!DOCTYPE html>
<html class="<?php if(!empty($classCorSite)){echo $classCorSite;} else {echo 'ls-theme-blue';}?>">
  <head>
    <title>Cadastro Fornecedor</title>
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
          <li><a href="../home.php" class="ls-ico-home">Página Inicial</a></li>
          <li><a href="../vendas/vendas.php" class="ls-ico-chart-bar-up" role="menuitem">Vendas</a></li>
          <li><a href="../produtos/produtos/produtos;php" class="ls-ico-text" role="menuitem">Produtos</a>
            <ul class"ls-submenu" role="menu">
              <li>
                <a href="../categorias/categorias.php" class"ls-sub-menu-item" role="menuitem">Categorias</a>
                <a href="../tipos/tipos.php" class"ls-sub-menu-item" role="menuitem">Tipos</a>
                <a href="../marcas/marcas.php" class"ls-sub-menu-item" role="menuitem">Marcas</a>
                <a href="fornecedores.php" class"ls-sub-menu-item" role="menuitem">Fornecedores</a>
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
        <h1 class="ls-title-intro ls-ico-users">Cadastrar fornecedores</h1>
        <form id="cad-fornecedor" name="cad-fornecedor" method="post" action="sql-insere-fornecedor.php" class="ls-form-horizontal ls-form" data-ls-module="form">
          <legend class="ls-title-2">Identificação</legend>
          <div class="row">
            <label class="ls-label col-md-2">
              <span class="ls-label-text">Código</span>
              <input type="text" name="codigo" maxlength="4" placeholder="Digite o código" required>
            </label>
          </div>
          <div class="row">
            <label class="ls-label col-md-6">
              <span class="ls-label-text">Razão Social</span>
              <input type="text" name="razao_social" placeholder="Digite o nome completo" required>
            </label>
            <label class="ls-label col-md-4 col-xs-12">
              <b class="ls-label-text">Nome Fantasia</b>
              <input type="text" name="nome_fantasia" placeholder="Digite o nome fantasia">
            </label>  
          </div>
          <div class="row">
            <label class="ls-label col-md-2">
              <b class="ls-label-text">CNPJ</b>
              <input type="text" name="cnpj" maxlength="14" class="ls-mask-cnpj" placeholder="00.000.000/0000-00" required>
            </label>
            <label class="ls-label col-md-2 col-xs-12">
              <b class="ls-label-text">Telefone Fixo</b>
              <input type="text" name="telefone" class="ls-mask-phone8_with_ddd" placeholder="(00) 0000-0000">
            </label> 
            <label class="ls-label col-md-2 col-xs-12">
              <b class="ls-label-text">Telefone Celular</b>
              <input type="text" name="celular" class="ls-mask-phone9_with_ddd" placeholder="(00) 90000-0000">
            </label>
            <label class="ls-label col-md-4 col-xs-12">
              <b class="ls-label-text">Contato</b>
              <input type="text" name="contato" placeholder="Digite o(s) contato(s)">
            </label>     
          </div>
          <div class="row">
            <label class="ls-label col-md-6">
              <span class="ls-label-text">E-mail</span>
              <input type="email" name="email" placeholder="Digite o e-mail">
            </label>
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
          <hr>
          <div class="row">
            <label class="ls-label col-md-6">
              <span class="ls-label-text">Endereço</span>
              <input type="text" name="endereco" placeholder="Digite o endereço"required>
            </label>
            <label class="ls-label col-md-1 col-xs-12">
              <b class="ls-label-text">Numero</b>
              <input type="text" name="numero" placeholder="Digite o numero" required>
            </label>  
            <label class="ls-label col-md-3 col-xs-12">
              <b class="ls-label-text">Bairro</b>
              <input type="text" name="bairro" placeholder="Digite o bairro" required>
            </label>  
          </div> 
          <div class="row">
            <label class="ls-label col-md-2">
              <span class="ls-label-text">Cidade</span>
              <input type="text" name="cidade" placeholder="Digite a cidade" required>
            </label>
            <label class="ls-label col-md-2">
              <b class="ls-label-text">Estado</b>
              <div class="ls-custom-select">
                <select class="ls-custom" name="estado" required>
                  <option value="estado">Selecione</option> 
                  <option value="ac">Acre</option> 
                  <option value="al">Alagoas</option> 
                  <option value="am">Amazonas</option> 
                  <option value="ap">Amapá</option> 
                  <option value="ba">Bahia</option> 
                  <option value="ce">Ceará</option> 
                  <option value="df">Distrito Federal</option> 
                  <option value="es">Espírito Santo</option> 
                  <option value="go">Goiás</option> 
                  <option value="ma">Maranhão</option> 
                  <option value="mt">Mato Grosso</option> 
                  <option value="ms">Mato Grosso do Sul</option> 
                  <option value="mg">Minas Gerais</option> 
                  <option value="pa">Pará</option> 
                  <option value="pb">Paraíba</option> 
                  <option value="pr">Paraná</option> 
                  <option value="pe">Pernambuco</option> 
                  <option value="pi">Piauí</option> 
                  <option value="rj">Rio de Janeiro</option> 
                  <option value="rn">Rio Grande do Norte</option> 
                  <option value="ro">Rondônia</option> 
                  <option value="rs">Rio Grande do Sul</option> 
                  <option value="rr">Roraima</option> 
                  <option value="sc">Santa Catarina</option> 
                  <option value="se">Sergipe</option> 
                  <option value="sp">São Paulo</option> 
                  <option value="to">Tocantins</option> 
                </select>
              </div>
            </label>
            <label class="ls-label col-md-2 col-xs-12">
              <b class="ls-label-text">CEP</b>
              <input type="text" name="cep" class="ls-mask-cep" placeholder="00000-000" required>
            </label>   
          </div>     
          <hr>
          <button type="submit" class="ls-btn-primary">Salvar</button>
          <a href="fornecedores.php" class="ls-btn">Cancelar</a>
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