<?php
    $nome =$_POST["nome"];

    echo "nome: ".$nome;
    echo '<br>';
    echo "CPF:";
    $cpf = $_POST["cpf"];
    echo $cpf;
    echo '<br>';
    $estado = $_POST["estado"];
    echo "Estado:";
    echo $estado;
    echo'<br>';
    echo "RG: ";
    $rg = $_POST["rg"];
    echo $rg;
    echo '<br>';
    $sexo = $_POST["sexo"];
    echo "Sexo:". $sexo;
    echo '<br>';
    echo "Saldo da conta: ";
    $saldo = $_POST["saldo"];
    echo $saldo;
    echo '<br>';
    echo "Total da compra: ";
    $total = $_POST["total"];
    echo $total;
    echo '<br>';

    $erro=0;

    
    //Verificando campos de formulários
    if(empty($nome)){
         echo "Favor digitar seu nome"; $erro=1;}
    if(empty($estado)){
         echo "Favor digitar seu estado"; $erro=1;}
    if(empty($cpf))
    { echo "Favor digitar seu CPF"; $erro=1;}
    if(empty($rg))
    { echo "Favor digitar seu RG"; $erro=1;}

    //VERIFICA SE NÃO HOUVE ERRO
    if($erro==0)
    { echo "Todos os dados foram digitados corretamente!";}
    echo '<br>';

    //Verificando saldo
    if($saldo>=$total){
        $novosaldo = $saldo - $total;
        echo "Novo saldo é: ". $novosaldo;
        }
        else
        echo "<p style='color:red'> Saldo Insuficiente para Concluir Compra! <p/>";
    ?>