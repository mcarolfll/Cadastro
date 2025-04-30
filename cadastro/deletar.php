<?php
include ("conexao.php");

$id = $_GET['id'];
$sql = "DELETE FROM contas WHERE id_conta = $id";
$result = mysqli_query($conexao, $sql);
if($result){
    header("Location: dashboard.php");
}
else{
	echo "Exclusão falhou " . mysqli_error($conexao);
}
?>