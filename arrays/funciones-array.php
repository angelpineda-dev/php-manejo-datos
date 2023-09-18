<?php

$courses = ['javascript', 'php', 'laravel'];
$courses_assosiative = [
    10 => 'javascript',
    20 => 'php', 
    30 => 'laravel',
    40 => 'react',
    50 => 'livewire',
    60 => 'angular',

];

echo "<br/> SORT: Acomoda los elementos de mayor a menor <br/><pre>";
sort($courses);
var_dump($courses);
echo "<pre><br/>";

echo "<br/> RSORT: Acomoda los elementos de menor a mayor (forma recursiva) <br/> <pre>";
rsort($courses);
var_dump($courses);
echo "</pre><br/>";

echo "<br/> KSORT: Acomoda los elementos de forma ascendente mediante las KEYS <br/><pre>";
ksort($courses_assosiative);
var_dump($courses_assosiative);
echo "</pre><br/>";

echo "<br/> KRSORT: Acomoda los elementos de forma descendente mediante las KEYS <br/><pre>";
krsort($courses_assosiative);
var_dump($courses_assosiative);
echo "</pre><br/>";

echo "<br/> ARRAY_SLICE: Toma parte del arreglo apartir del indice indicado <br/><pre>";
var_dump(array_slice($courses_assosiative, 1));
echo "</pre><br/>";

echo "<br/> ARRAY_CHUNK: Retorna diferentes arreglos dependiendo de la cantidad que le indiquemos, ejemplo: 2 <br/><pre>";
var_dump(array_chunk($courses_assosiative, 2));
echo "</pre><br/>";

echo "<br/> ARRAY_SHIFT: Remueve el primer elemento del arreglo y lo devuelve <br/><pre>";
var_dump(array_shift($courses_assosiative));
var_dump($courses_assosiative);
echo "</pre><br/>";

echo "<br/> ARRAY_POP: Remueve el ultimo elemento del arreglo y lo devuelve <br/><pre>";
var_dump(array_pop($courses_assosiative));
var_dump($courses_assosiative);
echo "</pre><br/>";

echo "<br/> ARRAY_UNSHIFT: Agrega un nuevo elemento al inicio del arreglo <br/><pre>";
array_unshift($courses_assosiative, 'angular');
var_dump($courses_assosiative);
echo "</pre><br/>";

echo "<br/> ARRAY_PUSH: Agrega un nuevo elemento al final del arreglo <br/><pre>";
array_push($courses_assosiative, 'livewire');
var_dump($courses_assosiative);
echo "</pre><br/>";


echo "<br/> ARRAY_FLIP: Intercambia todas las claves de un array con sus valores asociados <br/><pre>";
var_dump(array_flip($courses_assosiative));
echo "</pre><br/>";