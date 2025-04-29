<?php
include ("conexao.php");

$id = $_GET['id'];
$sql = "DELETE FROM candidato WHERE id_candidato = $id";
$result = mysqli_query($conexao, $sql);
if($result){
    header("Location: dashboard2.php");
}
else{
	echo "Exclusão falhou " . mysqli_error($conexao);
}
?>