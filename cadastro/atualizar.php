<?php
include("conexao.php");

$id = $_POST['id'];
$vencimento= $_POST['vencimento'];
$valor = $_POST['valor'];

$sql = "UPDATE contas SET vencimento='$vencimento', valor='$valor' WHERE id_conta=$id";

if (mysqli_query($conexao, $sql)) {
    header("Location: dashboard.php");
} else {
    echo "Erro ao atualizar: " . mysqli_error($conexao);
}
?>