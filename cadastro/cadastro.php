<?php
include ("conexao.php");

$salario = $_POST['salario'];
$nome= $_POST['nome'];
$vencimento= $_POST['vencimento'];
$valor = $_POST['valor'];


$sql = " INSERT INTO contas (salario,nome,vencimento,valor)
values ('$salario','$nome','$vencimento','$valor')";
if (mysqli_query ($conexao,$sql)) {
    header('Location:dashboard.php');
 } else {
     echo "erro" . mysqli_connect_erro($conexao);
 }

mysqli_close($conexao);
?>