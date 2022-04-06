<?php
    $palavra = "melancia";
    $vogais = array("a", "e", "i", "o", "u");
    $nova_palavra = str_replace ($vogais,"X", $palavra);
    echo "A nova palavra é: ". $nova_palavra;
?>