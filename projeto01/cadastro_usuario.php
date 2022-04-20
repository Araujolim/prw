<?php
    include ("conexao.php");
    $nome =$_POST["nome_usuario"];
    echo "nome: ".$nome;
    echo '<br>';
    $email =$_POST["email_usuario"];
    echo "email: ".$email;
    echo '<br>';
    $telefone =$_POST["fone_usuario"];
    echo "telefone: ".$telefone;
    echo '<br>';

?>