<?php

$x = 99;
$y = 55;

echo "A soma entre 2 números é " .$x + $y. "<br>";
echo "Multiplicação entre 2 números é " .$x * $y. "<br>";
echo "A Divisão entre 2 números é " .$x / $y. "<br>";
echo "A Subtração entre 2 números é " .$x - $y. "<br>";
echo "O resto  entre 2 números é " .$x % $y. "<br>";



if($x>= $y){
    echo"O X é maior que Y";
}else{
    echo"O y é mairo que X";  
}

echo "<br>";

$resultado =  ($x>= $y) ? "O X é maior que Y" :"O y é mairo que X";

echo $resultado;


echo "<br>";

?>