<?php
    $soma=0;
    for($n=0; $n<100; $n=$n+2)
    {
        $soma=$soma+$n;
    }
    echo "A soma dos números pares de 0 até 100 é: ". $soma."<br>";
    $soma=0;
    for($n=0; $n<100; $n++)
    {
        if ($n %2 == 0)
        {
            $soma=$soma+$n;
        }
        
    }
        echo " <br>A soma dos números pares de 0 até 100 é: ". $soma;
?>