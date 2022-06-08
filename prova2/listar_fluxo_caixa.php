<?php
    include('conexao.php');
    $sql = 'SELECT * FROM fluxo_caixa';
    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem fluxo caixa</title>
</head>
<body>
    <h1>Listagem Fluxo Caixa</h1>
    <table align='center' border="1" width=500 >
        <tr>
            <th>Codigo</th>
            <th>Historico</th>
            <th>Data</th>
            <th>Valor</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_array ($result))
            {
                echo "<tr>";
                echo "<td>" .$row['id']. "</td>";
                echo "<td><a href='altera_fluxo_caixa.php?id =".$row['id']."'>" .$row['historico']. "</a></td>";
                echo "<td>" .$row['date']. "</td>";
                echo "<td>" .$row['valor']. "</td>";
                echo "<td>" .$row['cheque']. "</td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id =".$row['id']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>