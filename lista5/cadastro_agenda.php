<?php
    include ("conexao.php");
    $nome =$_POST["nome_usuario"];
    echo "nome: ".$nome;
    echo '<br>';
    $apelido = $_POST["apelido_usuario"];
    echo "apelido: ".$apelido;
    echo '<br>';
    $endereco = $_POST["endereco_usuario"];
    echo "endereço: ".$endereco;
    echo '<br>';
    $bairro = $_POST["bairro_usuario"];
    echo "bairro: ".$bairro;
    echo '<br>';
    $cidade = $_POST["cidade_usuario"];
    echo "cidade: ".$cidade;
    echo '<br>';
    $estado = $_POST["estado_usuario"];
    echo "estado: ".$estado;
    echo '<br>';
    $telefone =$_POST["fone_usuario"];
    echo "telefone: ".$telefone;
    echo '<br>';
    $celular = $_POST["cel_usuario"];
    echo "celular: ".$celular;
    echo '<br>';
    $email =$_POST["email_usuario"];
    echo "email: ".$email;
    echo '<br>';
    $dt_cadastro =$_POST["dt_cadastro"];
    echo "data do cadastro: ".$dt_cadastro;
    echo '<br>';

    $sql = "INSERT INTO agenda (nome, apelido, endereço, bairro, cidade, estado, telefone, celular, email, dt_cadastro)
            VALUES ('".$nome."', '".$apelido."', '".$endereco."', '".$bairro."', '".$cidade."', '".$estado."', '".$telefone."', '".$celular."', '".$email."', '".$dt_cadastro."')";

    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados inseridos com sucesso";
    else
        echo "Erro ao inserir no banco de dados". mysqli_error($con);
    

?>
<p><a href="index.php">voltar</a></p>