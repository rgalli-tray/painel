<?php

	if(isset($_REQUEST['entrar'])){

		$usuario = $_REQUEST['usuario'];
		$senha = $_REQUEST['senha'];

		echo $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
		$query = mysql_query($sql) or die(mysql_error());
		$qtda = mysql_num_rows($query);

		if($qtda == 0){
			echo "Erro ao Logar!!!";
		}else{
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] = $senha;
			header("Location: index.php");
		}

	}

?>