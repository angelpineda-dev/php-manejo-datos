<?php

# Arreglos simples
$courses = [
    'javascript', 
    'laravel', 
    10 => 'php', 
    'vuejs'
];

echo "<pre>";
var_dump($courses);
echo "</pre>";
echo "<br/>";

# Arreglos complejos/asociativos
$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php',
];

echo "<pre>";
var_dump($courses);
echo "</pre>";

foreach ($courses as $key => $value) {
    echo "$key: $value <br/>";
}

function upper($course, $key){
    echo strtoupper($course) . ": $key <br/>";
}

array_walk($courses, 'upper');

/**
 * array_key_exists('frontend', $courses); # Busca en las keys
 * in_array('javascript', $courses); # Busca a nivel de valores
 * array_keys($courses); # Devuelve todas las keys
 * array_values($courses); # Devuelve todos los valores
 */

echo "<br/> Buscando una KEY en especifico en un array <br/>";
var_dump(array_key_exists('frontend', $courses));
echo "<br/>";

echo "<br/> Buscando un VALOR en especifico en un array <br/>";
var_dump(in_array('javascript', $courses));
echo "<br/>";

echo "<br/> Devuelve todas las KEYS de un arreglo <br/>";
var_dump(array_keys($courses));
echo "<br/>";

echo "<br/> Devuelve todos los VALORES de un arreglo <br/>";
var_dump(array_values($courses));
echo "<br/>";