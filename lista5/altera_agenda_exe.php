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
            nome='".$nome."',
            apelido='".$apelido."',
            endereço='".$endereco."',
            cidade='".$cidade."',
            estado='".$estado."',
            telefone='".$telefone."',
            celular='".$celular."',
            email='".$email."',
            dt_cadastro='".$dt_cadastro."'
          WHERE id_agenda=".$id_agenda;

         
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";  
?>
<a href='index.php'> Voltar</a>