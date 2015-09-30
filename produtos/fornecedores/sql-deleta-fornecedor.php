<?php
  include('../../conexao.php');
?>

<?php
    //caso nao queire exclui, vc pode ocultar lembrando que em todas as selects do sistema
    //devera ser feita na seguinte forma (SELECT * FROM clientes WHERE status <> "R")
    //$deletaCliente = mysql_query('UPDATE clientes SET status="R" WHERE id='.$_GET['id']);

    $sqlDeletaFornecedor = mysql_query('DELETE FROM fornecedores WHERE id='.$_GET['id']);

    $resultado = '';

    if ($sqlDeletaFornecedor) {
        $resultado = 'Fornecedor excluido com sucesso!';
    } else {
        $resultado = 'Ops, houve um algum!';
    }

    $redirect = 'fornecedores.php';
    header("location:$redirect");

?>