<?php
include("conexao.php");

$sql = "SELECT * FROM empresa";
$result = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Empresas</title>

</head>
<body>

<div class="container">
    <a href="empresa.html"><button>Voltar</button></a>

    
  <h2>Lista de Empresas</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Senha</th>
      <th>Ações</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['id_empresa']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['senha']; ?></td>
        <td>
          <a href="editar_empresa.php?id=<?php echo $row['id_empresa']; ?>">Editar</a>
          <a href="deletar.php?id=<?php echo $row['id_empresa']; ?>">Deletar</a>
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
</body>
</html>
