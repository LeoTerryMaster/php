<?php


$idade = 10;

$idades = "50";


if($idade<= 40 && $idades >= 40){
    echo"Idades são iguais";
}else{
    echo"Idades são Diferentes";
}


echo"<br>";

if($idade<= 40 || $idades >= 40){
    echo"Idades são iguais";
}else{
    echo"Idades são Diferentes";
}

echo"<br>";

if(!($idade<= 40 && $idades >= 40)){
    echo"Idades são iguais";
}else{
    echo"Idades são Diferentes";
}

echo"<br>";



if(!($idade<= 40 || $idades >= 40)){
    echo"Idades são iguais";
}else{
    echo"Idades são Diferentes";
}
?>