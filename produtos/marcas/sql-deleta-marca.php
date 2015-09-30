<?php
  include('../../conexao.php');
?>

<?php
    //caso nao queire exclui, vc pode ocultar lembrando que em todas as selects do sistema
    //devera ser feita na seguinte forma (SELECT * FROM clientes WHERE status <> "R")
    //$deletaCliente = mysql_query('UPDATE clientes SET status="R" WHERE id='.$_GET['id']);

    $sqlDeletaMarca = mysql_query('DELETE FROM marcas WHERE id='.$_GET['id']);

    $resultado = '';

    if ($sqlDeletaMarca) {
        $resultado = 'Categoria excluida com sucesso!';
    } else {
        $resultado = 'Ops, houve um algum!';
    }

    $redirect = 'marcas.php';
    header("location:$redirect");

?>