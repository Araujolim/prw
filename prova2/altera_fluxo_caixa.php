<?php
   include('conexao.php');
   $id = $_GET['id'];
   $sql = 'SELECT * FROM fluxo_caixa where id='.$id;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cadastro Fluxo Caixa - IFSP</h1>
    <div id="teste">
        <form method="post" action="altera_fluxo_caixa_exe.php">
            <fieldset>
                <legend>Cadastro</legend>
                <div class="form-item">
                    <label for="date">Data:</label>
                    <input type="text" id="date" name="date" value="<?php echo $row['date']?>" placeholder="Digite a data">
                </div>
                <div class="form-item">
                    <label for="tipo">Tipo:</label>
                    <input type="text" id="tipo" name="tipo" value="<?php echo $row['tipo']?>" placeholder="Digite o tipo">
                </div>
                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="valor" id="valor" name="valor" value="<?php echo $row['valor']?>" placeholder="Digite o valor">
                </div>
                <div class="form-item">
                    <label for="historico">Historico:</label>
                    <input type="text" id="historico" name="historico" value="<?php echo $row['historico']?>" placeholder="Digite o historico">
                </div>
                <div class="form-item">
                    <label for="cheque">Cheque:</label>
                    <input type="text" id="cheque" name="cheque" value="<?php echo $row['cheque']?>" placeholder="Digite o cheque">
                </div>
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id" type="hidden" value="<?php echo $row['id']?>">
            </fieldset>
        </form>
    </div>
</body>
</html>