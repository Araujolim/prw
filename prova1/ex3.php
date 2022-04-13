<?php
    $peso=$_POST["num1"];
    $altura=$_POST["num2"];

    $imc = $peso / ($altura * $altura);
    echo "O imc é: ". $imc;
    echo "<br>";
    if($imc<17){
        echo"Muito abaixo do peso";
    }
    else if($imc>=17 && $imc<=18.49){
        echo "Abaixo do peso";
        }
        else if($imc>=18.5 && $imc <=24.99){
            echo "Peso normal";
        }
            else if($imc>=25 && $imc <=29.99){
                echo "Acima do peso";
            }
                else if($imc>=30 && $imc<=34.99){
                    echo "Obesidade 1";
                }
                    else if($imc>=35 && $imc<=39.99){
                        echo "Obesidade 2";
                    }
                        else if($imc>=40){
                            echo "Obesidade 3";
                        }

    

?>