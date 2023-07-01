<?php

    $numeroUsuario[1] = 10;
    $numeroUsuario[2] = 20;
    $operacao = "-";
        

    switch($operacao){
    case "+";
        $resultado = $numeroUsuario[1] + $numeroUsuario[2]; 
        break;
    case "-":
        $resultado = $numeroUsuario[1] - $numeroUsuario[2]; 
        break;
    case "*";
        $resultado = $numeroUsuario[1] * $numeroUsuario[2]; 
        break; 
    case "/";
        $resultado = $numeroUsuario[1] / $numeroUsuario[2]; 
        break;
    
    }

    echo "Resultado: " . round($resultado) ."<br>";



    /*$a = 10;
    $b = 20;
    $tipo = "soma";
    switch($tipo){
        case "soma";
        $resultado = $a + $b;
        echo $resultado;
    }*/ 
?>
