<?php
    $valorCompra = 800;
    $tipoCliente = 0.10;
    $tipoFuncionario = 0.05;
    $tipoCodigodaCompra = 3;

    switch( $tipoCodigodaCompra){
        case 1;
            $valorFinal = $valorCompra;  
            echo "Valor da Compra". "$valorFinal";
            break;

        case 2;
            $valorFinal =  $valorCompra - ($valorCompra * $tipoCliente) ;
            echo "Valor da Compra com Desconto" ."$valorFinal";
            break;

        case 3;
           $valorFinal = $valorCompra - ($valorCompra * $tipoFuncionario);
           echo "Valor da Compra com Desconto Funcionário" . "$valorFinal";
           break;
        }

    

?>
