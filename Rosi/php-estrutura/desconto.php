<?php
    $salario = 900;
    $reajuste1 = 1.5;
    $reajuste2 = 1.3;
    $salarioDefinido = 3;

    if($salario <= 300){
       $parametro = 1;
    }else{
        $parametro = 2;
    } 
    

    switch($parametro){
      case 1;
            $salarioReajustado =  $parametro;  
            echo "Salário". "$salarioReajustado";
      break;

      case 2;
            $salarioReajustado = ($salario * $reajuste1);
            echo "Salário reajustado:" . "$salarioReajustado";
       break;

       case 3;
            $salarioReajustado =  ($salario * $reajuste2);
            echo "Salário reajustado:" . "$salarioReajustado";
        break;
    }


?>