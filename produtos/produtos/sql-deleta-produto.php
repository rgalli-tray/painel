<?php
  include('../../conexao.php');
?>

<?php
    //caso nao queire exclui, vc pode ocultar lembrando que em todas as selects do sistema
    //devera ser feita na seguinte forma (SELECT * FROM clientes WHERE status <> "R")
    //$deletaCliente = mysql_query('UPDATE clientes SET status="R" WHERE id='.$_GET['id']);

    $sqlDeletaProduto = mysql_query('DELETE FROM produtos WHERE id='.$_GET['id']);

    $resultado = '';

    if ($sqlDeletaProduto) {
        $resultado = 'Produto excluido com sucesso!';
    } else {
        $resultado = 'Ops, houve um algum!';
    }

    $redirect = 'produtos.php';
    header("location:$redirect");

?>