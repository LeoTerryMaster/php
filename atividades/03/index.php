<?php

$idade =102;



if($idade >= 0 && $idade <= 2){
    echo"Temos um bebe de colo";
}else if($idade >= 3 && $idade <= 7){
    echo"Temos uma criança";
}else if($idade >= 8 && $idade <= 13){
    echo"Temos um pré adolescente";
}else if($idade >= 14 && $idade <= 18){
    echo"Temos um adolescente";
}else if($idade >= 18 && $idade <= 60){
    echo"Temos um adulto";
}else if($idade >= 60 && $idade <= 90){
    echo"Temos um idoso";
}else{
    echo"Temos um super idoso";
}



?>