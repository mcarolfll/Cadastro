<?php
include("conexao.php");

$sql = "SELECT * FROM contas";
$result = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>skdjhf</title>

</head>
<body>

<div class="container">
<a href="index.html"><button>voltar</button></a>
    
  <h2>Financeiro</h2>

  <table>
    <tr>
      <th>ID</th>
      <th id="salario">Salario</th>
      <th>Nome da conta</th>
      <th>Data de Vencimento</th>
      <th id="valor">Valor da conta</th>
      <th id="sobra">Valor Restante</th>
      <th>Ações</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['id_conta']; ?></td>
        <td><?php echo $row['salario']; ?></td>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['vencimento']; ?></td>
        <td><?php echo $row['valor']; ?></td>
        <td><?php echo $row['restante']; ?></td>
        <td>
          <a href="edita.php?id=<?php echo $row['id_conta']; ?>">Editar</a>
          <a href="deletar.php?id=<?php echo $row['id_conta']; ?>">Deletar</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</div>

<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 20px;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      max-width: 800px;
      margin: auto;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

  </style>

<script>
function Calcular(){
    const salario = parseFloat(doccument.querySelector=)
    const valor = parseFloat(doccument.querySelector=)

    const total = salario - valor

    document.querySelect(sobra)
..................................
}

</script>


</body>
</html>