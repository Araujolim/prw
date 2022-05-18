<?php
    include('conexao.php');
    $sql = 'SELECT * FROM usuario';
    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de usuarios</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <h1>Listagem de usuarios</h1>
    <table align='center' border="1" width=500 >
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        <?php

            while ($row = mysqli_fetch_array ($result))
            {
                echo "<tr>";
                echo "<td>". $row['id_usuario']. "</td>";
                echo "<td>". $row['nome_usuario']. "</td>";
                echo "<td>". $row['email_usuario']. "</td>";
                echo "<td>". $row['telefone_usuario']. "</td>";
                echo "</td>";
                echo "<td><a href='excluir_usuario.php?id_usuario=".$row['id_usuario']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>