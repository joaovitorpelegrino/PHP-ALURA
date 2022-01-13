<?php
$peso = 63;
$altura = 1.76;
$IMC = $peso / ($altura * $altura);
if($IMC <= 18.5){
echo "Você se encaixa em magreza";
}else if($IMC > 18.5){
    echo "Seu IMC está normal";
}if ($IMC > 25.0){
    echo "Você está em sobrepeso";
}if ($IMC > 30.0){
    echo "Você está obeso";
}if ($IMC > 40.0){
    echo "Você possui Obesidade grave";
}

