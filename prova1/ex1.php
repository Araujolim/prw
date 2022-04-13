<?php
    $salario = 1000;
    if($salario <= 300){
        $reajuste = $salario + (1000 * 0.5);
        echo "Novo salário é: ". $reajuste;
    }
    else{
        $reajuste=0;
        $reajuste = $salario + (1000 * 0.3);
        echo "Novo salário é: ". $reajuste; 
    }
?>