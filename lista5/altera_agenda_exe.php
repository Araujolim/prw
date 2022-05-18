<?php
    include('conexao.php');
    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $celular = $_POST['celular'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $dt_cadastro = $_POST['dt_cadastro'];
        
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome Usuário: " . $nome . "<p>";    
	
	$sql = "UPDATE agenda SET
            nome_usuario='".$nome."',
            apelido_usuario='".$apelido."',
            endereco_usuario='".$endereco."',
            cidade_usuario='".$cidade."',
            estado_usuario='".$estado."',
            telefone_usuario='".$telefone."'
            celular_usuario='".$celular."',
            email_usuario='".$email."',
            dt_cadastro='".$dt_cadastro."'
          WHERE id_usuario=".$id_agenda;
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";  
?>
<a href='index.php'> Voltar</a>