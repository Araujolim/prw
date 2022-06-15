<?php
    include ("conexao.php");
    $data =$_POST["date"];
    echo '<br>';
    echo "Data: ".$data;
    echo '<br>';
    $tipo =$_POST["tipo"];
    echo "Tipo: ".$tipo;
    echo '<br>';
    $valor =$_POST["valor"];
    echo "Valor: ".$valor;
    echo '<br>';
    $historico =$_POST["historico"];
    echo "Histórico: ".$historico;
    echo '<br>';
    $cheque =$_POST["cheque"];
    echo "Cheque: ".$cheque;
    echo '<br>';

    $sql = "INSERT INTO fluxo_caixa (date, tipo, valor, historico, cheque)
            VALUES ('".$data."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";

    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados inseridos com sucesso";
    else
        echo "Erro ao inserir no banco de dados". mysqli_error($con);
    

?>
<p><a href="index.php">voltar</a></p>