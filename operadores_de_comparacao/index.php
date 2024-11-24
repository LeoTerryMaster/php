<?php

$x = 2.5;
$y = "5.2";



if($x == $y){
    echo"X é igual a Y";
}else{
    echo"X Não é igual a Y";
}

echo "<br>";

if($x === $y){
    echo"X é mesmo tipo Y";
}else{
    echo"X não é mesmo tipo Y";
}

echo "<br>";

if($x !== $y){
    echo"X não é idêntico tipo Y";
}else{
    echo"X  é idêntico tipo Y";
}

echo "<br>";

if($x != $y){
    echo"X não é diferente tipo Y";
}else{
    echo"X  é diferente tipo Y";
}
?>