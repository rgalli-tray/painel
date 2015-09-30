<?php
  include('../../sessao.php');
  include('../../config.php');
?>

<?php
    //caso nao queire exclui, vc pode ocultar lembrando que em todas as selects do sistema
    //devera ser feita na seguinte forma (SELECT * FROM clientes WHERE status <> "R")
    //$deletaCliente = mysql_query('UPDATE clientes SET status="R" WHERE id='.$_GET['id']);

    $sqlDeletaTipo = mysql_query('DELETE FROM tipos WHERE id='.$_GET['id']);

    $resultado = '';

    if ($sqlDeletaTipo) {
        $resultado = 'Categoria excluida com sucesso!';
    } else {
        $resultado = 'Ops, houve um algum!';
    }

    $redirect = 'tipos.php';
    header("location:$redirect");

?>