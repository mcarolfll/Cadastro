<?php

// Incluindo a conexão
include("conexao.php");


$sql = "SELECT * FROM candidato";

$result = mysqli_query($conexao, $sql);
?>
<div class="container">
    <a href="candidato.html"><button>Voltar</button></a>

    
  <h2>Lista de Candidato</h2>

  <table>
    <tr>
    <th>id</th>
        <th>nome</th>
        <th>email</th>
        <th>telefone</th>
        <th>senha</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
      <td><?php echo $row['id_candidato']; ?></td>
          <td><?php echo $row['nome']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['telefone']; ?></td>
          <td><?php echo $row['senha']; ?></td>
        <td>
        <a href="editar_candidato.php? id=<?php echo $row['id_candidato'];?>" >Editar</a>
        <a href="deletar2.php? id=<?php echo $row['id_candidato'];?>" >Deletar</a>
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
