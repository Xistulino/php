<?php

$numero[1] = "Janeiro";
$numero[2] = "Fevereiro";
$numero[3] = "Março";
$numero[4] = "Abril"; 
$numero[5] = "Maio";
$numero[6] = "Junho";
$numero[7] = "Julho";
$numero[8] = "Agosto";
$numero[9] = "Setembro";
$numero[10] = "Outubro";
$numero[11] = "Novembro";
$numero[12] = "Dezembro";

$numeroUser = $_POST ["pnro"];

//var_dump($numero);

if($numeroUser >=1 && $numeroUser <=12 ){
    echo "Mês Correspondente = ". $numero[$numeroUser] . ".";
}else{
    echo "Número invalido";
}

echo "<br>";
echo '<a href="formulario4.html"><input type="submit" value="Retornar"></a>';
?>