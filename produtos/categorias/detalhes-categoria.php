<?php
  include('../../sessao.php');
  include('../../config.php');
  include('../../funcao.php');
?>

<!DOCTYPE html>
<html class="<?php if(!empty($classCorSite)){echo $classCorSite;} else {echo 'ls-theme-blue';}?>">
  <head>
    <title>Detalhes Categoria</title>
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
      <h1 class="ls-title-intro ls-ico-users">Detalhes Categoria</h1>

      <?php
          $sqlCategoria = mysql_query('SELECT * FROM categorias WHERE id='.$_GET['id']);
          $linhaCategoria = mysql_fetch_array($sqlCategoria);
        ?>

      <?php if($linhaCategoria['situacao'] == 1) {
        $status = 'Ativo';
      }else{
        $status = 'Bloqueado';
      }
      ?>

      <div class="ls-box">
        <div class="ls-float-right ls-regroup">
          <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
            <a href="#" class="ls-btn"></a>
            <ul class="ls-dropdown-nav">
              <li><a href="altera-categoria.php?id=<?php echo $linhaCategoria['id'];?>">Editar</a></li>
              <li><a href="sql-altera-status-categoria.php?id=<?php echo $linhaCategoria['id'];?>">Ativar/Bloquear</a></li>
              <li><a href="sql-deleta-categoria.php?id=<?php echo $linhaCategoria['id'];?>" class="ls-color-danger">Excluir</a></li>
            </ul>
          </div>
        </div>

        <form action="" class="ls-form row" data-ls-module="form">
          <fieldset id="domain-form" class="ls-form-disable ls-form-text">
            <label class="ls-label col-md-6 col-lg-8">
              <b class="ls-label-text">Nome</b>
              <input type="text" value="<?php echo $linhaCategoria['nome']; ?>" required>
            </label>
            <label class="ls-label col-md-6 col-lg-8">
              <b class="ls-label-text">Descrição:</b>
              <textarea name="" id="" cols="30" rows="5"><?php echo $linhaCategoria['descricao']; ?></textarea>
            </label>
            <label class="ls-label col-md-6 col-lg-8">
              <b class="ls-label-text">Status:</b>
              <input type="text" value="<?php echo $status?>" required>
            </label>
            <label class="ls-label col-md-6 col-lg-8">
              <b class="ls-label-text">Data de cadastro:</b>
              <input type="text" value="<?php echo converteDataNormal($linhaCategoria['data_cadastro']); ?>" required>
            </label>
          </fieldset>
          
        </form>
      </div>

      <div class="ls-box ls-board-box">

        <header class="ls-info-header">
          <h2 class="ls-title-3 col-md-6 ls-ico-calendar-check">
            Período atual
            <small>01/01/2014 a 01/01/2015</small>
          </h2>

          <div class="ls-actions-btn ls-float-right">
            <a href="" data-ls-module="modal" data-target="#removeMessage" class="ls-btn">Remover envios</a>
            <a href="" data-ls-module="modal" data-target="#addMessage" class="ls-btn-primary">Adicionar envios</a>
          </div>
        </header>

        <div class="row">

          <div class="col-md-3 col-sm-6">
            <div class="ls-box">
              <strong class="ls-board-info">9 <small>milhões</small></strong>
              <small>Válido até 01/01/2014</small>
              <a href="#" class="ls-btn-sm ls-btn">Comprar mais envios</a>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="ls-box">
              <h6 class="ls-title-4">Avulso</h6>
              <strong class="ls-board-info">0</strong>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="ls-box">
              <h6 class="ls-title-4">Distribuído</h6>
              <strong class="ls-board-info">0</strong>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="ls-box">
              <h6 class="ls-title-4 color-default">Utilizados</h6>
              <strong class="ls-board-info">10.743</strong>
            </div>
          </div>

        </div>
      </div>

      <h2 class="ls-title-3">Histórico de compras </h2>

      <div class="ls-box-filter">
          <form action="" class="ls-form ls-form-inline">
            <label class="ls-label">
              <b class="ls-label-text">Período</b>
              <input type="text" name="cel2" class="datepicker">
            </label>

            <label class="ls-label">
              <b class="ls-label-text">a</b>
              <input type="text" name="cel2" class="datepicker">
            </label>
            <div class="ls-actions-btn">
              <button type="button" class="ls-btn">Filtrar</button>
            </div>
          </form>
      </div>

      <table class="ls-table">
        <thead>
          <tr>
            <th>Descrição</th>
            <th>Ação</th>
            <th>Envios</th>
            <th class="hidden-xs">Data</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Crédito envios mensais</td>
            <td>Crédito</td>
            <td>10.000</td>
            <td class="hidden-xs">01/01/2012 - 15h00</td>
          </tr>          
        </tbody>
      </table>


      <!-- Modal de senha -->
      <div class="ls-modal" id="editPassword">
        <form action="#change-password" class="ls-form">
          <div class="ls-modal-box">
            <div class="ls-modal-header">
              <button data-dismiss="modal">×</button>
              <h4 class="ls-modal-title">Alterar senha</h4>
            </div>
            <div class="ls-modal-body">

                <label class="ls-label">
                  <b class="ls-label-text">Senha *</b>
                  <input type="password" required />
                </label>
                <label class="ls-label">
                  <b class="ls-label-text">Confirmação de senha *</b>
                  <input type="password" required />
                </label>
            </div>
            <div class="ls-modal-footer">
              <button type="submit" class="ls-btn-primary">Salvar</button>
              <a href="#atualizar-senha" class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
            </div>
          </div>
        </form>
      </div>


      <!-- Modal Adicionar envios -->
      <div class="ls-modal" id="addMessage">
        <form action="" class="ls-form">
          <div class="ls-modal-box">
            <div class="ls-modal-header">
              <button data-dismiss="modal">×</button>
              <h4 class="ls-modal-title">Adicionar envios avulsos</h4>
            </div>
            <div class="ls-modal-body ls-form-inline">
              <p>Os envios avulsos terão o mesmo prazo de expiração que os envios normais cadastrados para esse cliente. 07/05/2014</p>
              <p>
                <strong>Saldo disponível da sua revenda</strong>
                <span>889.239</span>
              </p>
              <hr>
              <label class="ls-label">
                <b class="ls-label-text">Quantidade de envios avulsos a adicionar</b>
                <input type="number" name="" required>
              </label>
            </div>
            <div class="ls-modal-footer">
              <button type="submit" class="ls-btn-primary">Adicionar</button>
              <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
            </div>
          </div>
        </form>
      </div>

      <!-- Modal Remover envios -->
      <div class="ls-modal" id="removeMessage">
        <form action="" class="ls-form">
          <div class="ls-modal-box">
            <div class="ls-modal-header">
              <button data-dismiss="modal">×</button>
              <h4 class="ls-modal-title">Remover envios</h4>
            </div>
            <div class="ls-modal-body">
              <p>Os envios serão removidos automaticamente após esta ação.</p>

              <label class="ls-label">
                <b class="ls-label-text">Saldo disponível do cliente</b>
                <input type="number" disabled="disabled" readonly="readonly" name="" value="8" >
              </label>


              <label class="ls-label">
                <b class="ls-label-text">Disponível para remoção até 27/04/2014</b>
                <input type="number" disabled="disabled" readonly="readonly" name="" value="8" >
              </label>


              <label class="ls-label">
                <b class="ls-label-text">Quantidade de envios a remover</b>
                <input type="number" name="" required>
              </label>

            </div>
            <div class="ls-modal-footer">
              <button type="submit" class="ls-btn-primary">Remover</button>
              <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
            </div>
          </div>
        </form>
      </div>

      <!-- Modal Alterar quantidade -->
      <div class="ls-modal" id="editAmount">
        <form action="" class="ls-form">
          <div class="ls-modal-box">
            <div class="ls-modal-header">
              <button data-dismiss="modal">×</button>
              <h4 class="ls-modal-title">Alterar quantidade de envios</h4>
            </div>
            <div class="ls-modal-body">
              <p>O novo valor só entrará em vigor após a data de 08/05/2014</p>
              <label class="ls-label">
                <b class="ls-label-text">Saldo disponível da sua revenda</b>
                <input type="number" disabled="disabled" readonly="readonly" name="" value="889.239" >
              </label>

              <label class="ls-label">
                <b class="ls-label-text">Quantidade de envios</b>
                <input type="number" name="" value="10" >
              </label>
            </div>
            <div class="ls-modal-footer">
              <button type="submit" class="ls-btn-primary">Alterar</button>
              <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
            </div>
          </div>
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