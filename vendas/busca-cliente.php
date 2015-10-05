<?php
	include_once ("conexao.php");
?>

<?php

    $get = strip_tags($_GET['q']);
    $string = sprintf("SELECT * FROM 'clientes' WHERE codigo LIKE '%%%s%%' OR nome '%%%s%%' OR apelido '%%%s%%' $get, %get");
    $executar = mysql_query("SELECT * FROM 'clientes' WHERE codigo LIKE '%".$get."%' OR nome '%".$get."%' OR apelido '%".$get."%'");

    if(mysql_num_rows($executar)==0){
      echo "<p>Não encontrado</p>";
    }else{
      $nun = mysql_num_rows($executar);      	
     while($res = mysql_fetch_object($executar)){ 
     	echo '<tr>'; 
?>
        	<td class="hidden-xs"><?php echo $res->nome;?></td>
        	<td class="hidden-xs"><?php echo $res->apelido;?></td>
<?php

        echo '</tr>';
            
?>