<?php
  include_once('conexao.php');
?>  

<?php
  session_start();
?>

<?php
  if(!isset($_SESSION['login']) && (!isset($_SESSION['senha']))){
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
  $login   = $_SESSION['login'];
  $senha   = $_SESSION['senha'];
?>