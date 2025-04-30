<?php
include("conexao.php");

$id = $_GET['id'];
$sql = "SELECT * FROM contas WHERE id_conta = $id";
$result = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($result);
?>

<h2>Editar Usuário</h2>
<form action="atualizar.php" method="POST">
<!-- O hidden vai esconder o ID do usuário para que não 
 seja atualizado pelo usuário na troca de atualização -->
  <input type="hidden" name="id" value="<?php echo $dados['id_conta']; ?>">
  Vencimento: <input type="text" name="vencimento" value="<?php echo $dados['vencimento']; ?>"><br>
  Valor: <input type="text" name="valor" value="<?php echo $dados['valor']; ?>"><br>
  <button type="submit">Atualizar</button>
</form> 