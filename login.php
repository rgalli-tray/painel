<?php
    session_start();
    include ('conexao.php');
    include ('logar.php');
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
        <title>Login</title>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link href="../stylesheets/locastyle.css" rel="stylesheet" type="text/css">
        <link rel="icon" sizes="192x192" href="../imagens/logo-rg.png">
    </head>
    <body> 
        <div class="ls-login-parent">
            <div class="ls-login-inner">
                <div class="ls-login-container">
                    <div class="ls-login-box">
                        <h1 class="ls-login-logo"><img title="Logo login" src="../imagens/logo-rg.png" /></h1>                        
                        <form role="form" class="ls-form ls-login-form" method="post" action="">
                            <fieldset>
                                <label class="ls-label">
                                    <b class="ls-label-text ls-hidden-accessible">Usuário</b>
                                    <input name="login" class="ls-login-bg-user ls-field-lg" type="text" placeholder="Usuário" required autofocus>
                                </label>
                                <label class="ls-label">
                                    <b class="ls-label-text ls-hidden-accessible">Senha</b>
                                    <div class="ls-prefix-group">
                                        <input id="password_field" name="senha" class="ls-login-bg-password ls-field-lg" type="password" placeholder="Senha" required>
                                        <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
                                    </div>
                                </label>
                                <input name="entrar" type="submit" value="Entrar" class="ls-btn-primary ls-btn-block ls-btn-lg">     
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- We recommended use jQuery 1.10 or up -->
    <script src="../javascripts/libs/jquery-2.1.0.min.js" type="text/javascript"></script>
    <script src="../javascripts/example.js" type="text/javascript"></script>
    <script src="../javascripts/locastyle.js" type="text/javascript"></script>
    <script src="../javascripts/docs/panel-charts.js" type="text/javascript"></script>
  </body>
</html>