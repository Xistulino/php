<?php

$nota[1] = $_POST ["pnro"];
$nota[2] = $_POST ["snro"];
$nota[3] = $_POST ["cnro"];

$media = ($nota [1] + $nota [2] + $nota[3]) /3;


echo "Média: " . round($media,1) ."<br>";

//var_dump($nota) mostra a nota;

if($media > 6) {
    echo "Aprovado" ;
} elseif($media < 6){
    echo "Reprovado";
}else{
    echo "Aluno Recuperação";
}

echo "<br>";
    echo '<a href="formulario3.html"><input type="submit" value="Retornar"></a>';


?>
