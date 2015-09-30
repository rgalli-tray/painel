<?php
  include('../sessao.php');
  include('../config.php');
  include('../funcao.php');
?>

<!DOCTYPE html>
<html class="<?php if(!empty($classCorSite)){echo $classCorSite;} else {echo 'ls-theme-blue';}?>">
  <head>
    <title>Alteração Cliente</title>
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
          <li><a href="../home.php" class="ls-ico-home">Página Inicial</a></li>
          <li><a href="../vendas/vendas.php" class="ls-ico-chart-bar-up" role="menuitem">Vendas</a></li>
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
          <li><a href="clientes.php" class="ls-ico-users">Clientes</a></li>
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
        
    <?php
      $sqlCliente = mysql_query('SELECT * FROM clientes WHERE id='.$_GET['id']);
      $linhaCliente = mysql_fetch_array($sqlCliente);
    ?>

    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-users">Alterar cliente</h1>
        <form id="cad-cliente" name="cad-cliente" method="post" action="sql-altera-cliente.php?id=<?php echo $linhaCliente['id'];?>" class="ls-form-horizontal ls-form row">
          <legend class="ls-title-2">Identificação Pessoal</legend>
          <div class="row">
            <label class="ls-label col-md-2">
              <span class="ls-label-text">Código</span>
              <input type="text" name="codigo" value="<?php echo $linhaCliente['codigo'];?>" maxlength="4" placeholder="Digite o código"required>
            </label>
          </div>
          <div class="row">
            <label class="ls-label col-md-6">
              <span class="ls-label-text">Nome</span>
              <input type="text" name="nome" value="<?php echo $linhaCliente['nome'];?>" placeholder="Digite o nome completo"required>
            </label>
            <label class="ls-label col-md-4 col-xs-12">
              <b class="ls-label-text">Apelido</b>
              <input type="text" name="apelido" value="<?php echo $linhaCliente['apelido'];?>" placeholder="Digite o apelido">
            </label>  
          </div>
          <div class="row">
            <label class="ls-label col-md-2">
              <b class="ls-label-text">CPF</b>
              <input type="text" name="cpf" maxlength="14" value="<?php echo $linhaCliente['cpf'];?>" class="ls-mask-cpf" placeholder="000.000.000-00" required>
            </label>
            <label class="ls-label col-md-2 col-xs-12">
              <b class="ls-label-text">RG</b>
              <input type="text" name="rg" maxlength="12" value="<?php echo $linhaCliente['rg'];?>" class="ls-mask-rg" placeholder="00.000.000-0" required>
            </label> 
            <label class="ls-label col-md-2 col-xs-12">
              <b class="ls-label-text">Nascimento</b>
              <input type="text" name="nascimento" maxlength="10" value="<?php echo converteDataNormal($linhaCliente['nascimento']);?>" class="data" placeholder="00/00/0000" required>
            </label> 
            <label class="ls-label col-md-2 col-xs-12">
              <b class="ls-label-text">Telefone Fixo</b>
              <input type="text" name="telefone" value="<?php echo $linhaCliente['telefone'];?>" class="ls-mask-phone8_with_ddd" placeholder="(00) 0000-0000">
            </label> 
            <label class="ls-label col-md-2 col-xs-12">
              <b class="ls-label-text">Telefone Celular</b>
              <input type="text" name="celular" value="<?php echo $linhaCliente['celular'];?>" class="ls-mask-phone9_with_ddd" placeholder="(00) 90000-0000">
            </label>   
          </div>
          <div class="row">
            <label class="ls-label col-md-6">
              <span class="ls-label-text">E-mail</span>
              <input type="email" name="email" value="<?php echo $linhaCliente['email'];?>" placeholder="Digite o e-mail">
            </label>
            <label class="ls-label col-md-2">
              <b class="ls-label-text">Situação</b>
              <div class="ls-custom-select">
                <select class="ls-custom" name="situacao" required>
                  <option value="" selected="selected">Selecione</option>
                  <option value="1" <?php if ($linhaCliente['situacao'] == '1') { echo ' selected="selected"';}?>>Ativo</option>
                  <option value="0" <?php if ($linhaCliente['situacao'] == '0') { echo ' selected="selected"';}?>>Inativo</option>
                </select>
              </div>
            </label>
          </div>
          <div class="row">
            <fieldset>
              <label class="ls-label col-md-6">
                <b class="ls-label-text">Informações</b>
                <textarea type="text" name="informacoes" data-ls-module="charCounter" maxlength="200"><?php echo $linhaCliente['informacoes'];?></textarea>
              </label>
            </fieldset>
          </div>
          <hr>
          <div class="row">
            <label class="ls-label col-md-6">
              <span class="ls-label-text">Endereço</span>
              <input type="text" name="endereco" value="<?php echo $linhaCliente['endereco'];?>" placeholder="Digite o endereço"required>
            </label>
            <label class="ls-label col-md-1">
              <span class="ls-label-text">Numero</span>
              <input type="text" name="numero" value="<?php echo $linhaCliente['numero'];?>" placeholder="Digite o numero"required>
            </label>
            <label class="ls-label col-md-3 col-xs-12">
              <b class="ls-label-text">Bairro</b>
              <input type="text" name="bairro" value="<?php echo $linhaCliente['bairro'];?>" placeholder="Digite o bairro" required>
            </label>  
          </div> 
          <div class="row">
            <label class="ls-label col-md-2">
              <span class="ls-label-text">Cidade</span>
              <input type="text" name="cidade" value="<?php echo $linhaCliente['cidade'];?>" placeholder="Digite a cidade" required>
            </label>
            <label class="ls-label col-md-2">
              <b class="ls-label-text">Estado</b>
              <div class="ls-custom-select">
                <select class="ls-custom" name="estado" required>
                  <option value="" selected="selected">Selecione ....</option>
                  <option value="ac" <?php if ($linhaCliente['estado'] == 'ac') { echo ' selected="selected"';}?>>Acre</option>
                  <option value="al" <?php if ($linhaCliente['estado'] == 'al') { echo ' selected="selected"';}?>>Amazonas</option>       
                  <option value="am" <?php if ($linhaCliente['estado'] == 'am') { echo ' selected="selected"';}?>>Amazonas</option> 
                  <option value="ap" <?php if ($linhaCliente['estado'] == 'ap') { echo ' selected="selected"';}?>>Amapá</option> 
                  <option value="ba" <?php if ($linhaCliente['estado'] == 'ba') { echo ' selected="selected"';}?>>Bahia</option> 
                  <option value="ce" <?php if ($linhaCliente['estado'] == 'ce') { echo ' selected="selected"';}?>>Ceará</option> 
                  <option value="df" <?php if ($linhaCliente['estado'] == 'df') { echo ' selected="selected"';}?>>Distrito Federal</option>
                  <option value="es" <?php if ($linhaCliente['estado'] == 'es') { echo ' selected="selected"';}?>>Espírito Santo</option> 
                  <option value="go" <?php if ($linhaCliente['estado'] == 'go') { echo ' selected="selected"';}?>>Goiás</option> 
                  <option value="ma" <?php if ($linhaCliente['estado'] == 'ma') { echo ' selected="selected"';}?>>Maranhão</option> 
                  <option value="mt" <?php if ($linhaCliente['estado'] == 'mt') { echo ' selected="selected"';}?>>Mato Grosso</option> 
                  <option value="ms" <?php if ($linhaCliente['estado'] == 'ms') { echo ' selected="selected"';}?>>Mato Grosso do Sul</option> 
                  <option value="mg" <?php if ($linhaCliente['estado'] == 'mg') { echo ' selected="selected"';}?>>Minas Gerais</option> 
                  <option value="pa" <?php if ($linhaCliente['estado'] == 'pa') { echo ' selected="selected"';}?>>Pará</option> 
                  <option value="pb" <?php if ($linhaCliente['estado'] == 'pb') { echo ' selected="selected"';}?>>Paraíba</option> 
                  <option value="pr" <?php if ($linhaCliente['estado'] == 'pr') { echo ' selected="selected"';}?>>Paraná</option> 
                  <option value="pe" <?php if ($linhaCliente['estado'] == 'pe') { echo ' selected="selected"';}?>>Pernambuco</option> 
                  <option value="pi" <?php if ($linhaCliente['estado'] == 'pi') { echo ' selected="selected"';}?>>Piauí</option> 
                  <option value="rj" <?php if ($linhaCliente['estado'] == 'rj') { echo ' selected="selected"';}?>>Rio de Janeiro</option> 
                  <option value="rn" <?php if ($linhaCliente['estado'] == 'rn') { echo ' selected="selected"';}?>>Rio Grande do Norte</option> 
                  <option value="ro" <?php if ($linhaCliente['estado'] == 'ro') { echo ' selected="selected"';}?>>Rondônia</option> 
                  <option value="rs" <?php if ($linhaCliente['estado'] == 'rs') { echo ' selected="selected"';}?>>Rio Grande do Sul</option> 
                  <option value="rr" <?php if ($linhaCliente['estado'] == 'rr') { echo ' selected="selected"';}?>>Roraima</option> 
                  <option value="sc" <?php if ($linhaCliente['estado'] == 'sc') { echo ' selected="selected"';}?>>Santa Catarina</option> 
                  <option value="se" <?php if ($linhaCliente['estado'] == 'se') { echo ' selected="selected"';}?>>Sergipe</option> 
                  <option value="sp" <?php if ($linhaCliente['estado'] == 'sp') { echo ' selected="selected"';}?>>São Paulo</option> 
                  <option value="to" <?php if ($linhaCliente['estado'] == 'to') { echo ' selected="selected"';}?>>Tocantins</option> 
                </select>
              </div>
            </label>
            <label class="ls-label col-md-2 col-xs-12">
              <b class="ls-label-text">CEP</b>
              <input type="text" name="cep" value="<?php echo $linhaCliente['cep'];?>" class="ls-mask-cep" placeholder="00000-000" required>
            </label>   
          </div>     
          <hr>
          <button type="submit" class="ls-btn-primary">Salvar</button>
          <a href="clientes.php" class="ls-btn">Cancelar</a>
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
    <script src="../../javascripts/libs/jquery-2.1.0.min.js" type="text/javascript"></script>
    <script src="../../javascripts/example.js" type="text/javascript"></script>
    <script src="../../javascripts/locastyle.js" type="text/javascript"></script>
    <script src="../../javascripts/docs/panel-charts.js" type="text/javascript"></script>
  </body>
</html>