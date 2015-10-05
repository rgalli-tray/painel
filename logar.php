<?php

	if(isset($_REQUEST['entrar'])){

		$login    = $_REQUEST['login'];
		$senha    = $_REQUEST['senha'];

		echo $sql = "SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'";
		$query    = mysql_query($sql) or die(mysql_error());
		$qtda     = mysql_num_rows($query);

		if($qtda == 0){
			echo "Erro ao Logar!!!";
		}else{
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			header("Location: index.php");
		}

	}

?>