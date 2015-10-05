<?php
	include_once ("conexao.php");
?>

<?php

    $get = strip_tags($_GET['busca-cliente']);
    $string = sprintf("SELECT * FROM 'clientes' WHERE codigo LIKE '%%%s%%' OR nome '%%%s%%' OR apelido '%%%s%%' $get, %get");
    $executar = mysql_query($string);

    if(mysql_num_rows($executar)==0){
      echo "<p>Não encontrado</p>";
    }else{
      $nun = mysql_num_rows($executar);
     while($res = mysql_fetch_object($executar)){  
?>
	<tr>
        	<td class="hidden-xs"><?php echo $res->nome;?></td>
        	<td class="hidden-xs"><?php echo $res->apelido;?></td>
        	<td class="hidden-xs">Ativo</td>
        	<td class="hidden-xs">377.964.178.02</td>  
        </tr>

<?php

     }
            
?>
