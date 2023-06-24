<?php
    $numeroUsuario = $_POST ["pnro"];

    if($numeroUsuario > 0) {
        echo "Valor Positivo";
    } elseif($numeroUsuario < 0){
        echo "Valor Negativo";
    }else{
        echo "Igual a zero";
    }

    echo "<br>";
    echo '<a href="formulario1.html"><input type="submit" value="Retornar"></a>';
?>

