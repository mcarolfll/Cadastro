<?php
include ("conexao.php");

$id = $_GET['id'];
$sql = "DELETE FROM empresa WHERE id_empresa = $id";
$result = mysqli_query($conexao, $sql);
if($result){
    header("Location: dashboard.php");
}
else{
	echo "Exclusão falhou " . mysqli_error($conexao);
}
?>