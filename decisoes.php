<?php
$numerodepessoas = 1;
$idade = 18;
echo "você só pode entrar se tiver a partir de 18 anos ou 16 acompanhado" . PHP_EOL;

if($idade >= 18){
    echo "sua idade é $idade, pode entrar!";
} else if ($idade <= 16 && $numerodepessoas > 1){
    echo "Você é menor de idade e está acompanhado";
} else {
    echo "Você não poderá entrar!";
}

