<?php
    $dia_semana = array ("domingo", "segunda", "terça", "quarta", "quinta", "sexta","sabado");
    //data padrão americano
    $data = strtotime('04/07/2022');
    $dia = date('w', $data);
    echo $dia . '<br>';
    echo $dia_semana[$dia];
?>