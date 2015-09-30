<?php
  include_once('conexao.php');
?>  

<?php
  session_start();
?>

<?php
  if(!isset($_SESSION['usuario']) && (!isset($_SESSION['senha']))){
    header("Location: login.php");
  }
?>

<?php 
  if(isset($_REQUEST['Logout'])){
    session_destroy();
    header("Location: login.php");
  }
?>

<?php
  $secao_usuario = $_SESSION['usuario'];
  $secao_senha = $_SESSION['senha'];
?>