<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = 'SELECT * FROM usuario where id_usuario ='. $id_usuario;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  <title>Document</title>
</head>
<body>
    <form action="cadastro_usuario.php" method="post">
      <div>
      <h3>Alteracao do Usuario</h3>
      <fieldset>
      <legend>Cadastro</legend>
      <label for="nome">Nome: </label>
      <input type="text" size="50" name="nome_usuario" id="nome_usuario" value= "<?php echo $row['nome_usuario']?>">
      <br>
      <br>
      <label for="email_usuario">Email: </label>
      <input type="text" size="50" name="email_usuario" id="email_usuario" value= "<?php echo $row['email_usuario']?>">
      <br>
      <br>
      <label for="fone_usuario">Telefone: </label>
      <input type="text" size="50" name="fone_usuario" id="fone_usuario" value= "<?php echo $row['telefone_usuario']?>">
      <br>
      <br><div id="botao">
      <button type="submit">Alterar</button>
      </div>
      </div>
    </fieldset>
    </form>
</body>
</html>
