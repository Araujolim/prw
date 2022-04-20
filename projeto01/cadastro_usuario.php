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

    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
            VALUES ('".$nome."', '".$email."', '".$telefone."')";

    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados inseridos com sucesso";
    else
        echo "Erro ao inserir no banco de dados". mysqli_error($con);
    

?>