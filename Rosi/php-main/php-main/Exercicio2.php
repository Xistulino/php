<?php

$valorA = $_POST ["pnro"];
$valorB = $_POST ["snro"];

if($valorA > $valorB) {
    $resultado = $valorB . " - " . $valorA;
} elseif($valorA < $valorB){
    $resultado = $valorA . " - " . $valorB;
}else{
    $resultado = "Os valores são iguai e o valor é -> " . $valorA;
}
    echo $resultado;

    echo "<br>";
    echo '<a href="formulario2.html"><input type="submit" value="Retornar"></a>';

?>


