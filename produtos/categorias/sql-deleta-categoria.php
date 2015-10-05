<?php
  include('../../conexao.php');
?>

<?php
    //caso nao queire exclui, vc pode ocultar lembrando que em todas as selects do sistema
    //devera ser feita na seguinte forma (SELECT * FROM clientes WHERE status <> "R")
    //$deletaCliente = mysql_query('UPDATE clientes SET status="R" WHERE id='.$_GET['id']);

    $sqlDeletaCategoria = mysql_query('DELETE FROM categorias WHERE id='.$_GET['id']);

    $resultado = '';

    if ($sqlDeletaCategoria) {
        $redirect = 'index.php?pg=categorias';
        header("location:$redirect");
    } else {
        echo 'Ops!, houve um erro!';
    }
?>