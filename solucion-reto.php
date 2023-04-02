<?php

// $horas = readline("Introduce el número de horas: ");
// $minutos = readline("Introduce el número de minutos: ");
// $segundos = readline("Introduce el número de segundos: ");

// $horas = $horas * 60 * 60;
// $minutos = $minutos * 60;
// $segundos = $segundos;

// $total = $horas + $minutos + $segundos;
// echo "El total son $total segundos ";

// echo "\n";


$horas = readline("Por favor, ingresa el número de horas: ");
$minutos = readline("Por favor, ingresa los minutos: ");
$segundos = readline("Por favor, ingresa los segundos: ");

$tiempo_en_segundos = ($horas * 3600) + ($minutos * 60) + $segundos; 

echo "Este tiempo equivale a $tiempo_en_segundos segundos. \n"; 