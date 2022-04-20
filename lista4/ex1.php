<?php
    $operacao=$_POST["operacao"];
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];

    if($operacao == 0){
        $soma = $num1 + $num2;
        echo "soma: ". $soma;
    }
    else if($operacao == 1){
            $sub = $num1 - $num2;
            echo "subtração: ". $sub;
        } 
        else if($operacao == 2){
                $div = $num1 / $num2;
                echo "divisão: ". $div;
            } 
            else if($operacao == 3){
                $mult = $num1 * $num2;
                echo "multiplicação ". $mult;
            } 
?>