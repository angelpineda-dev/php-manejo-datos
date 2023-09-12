<?php

function greet($name = "Italo"){
    return "Hola, $name <br/>";
}

echo greet('Juan');
echo greet();

$course = 'PHP';
function path(&$course){
    // el parametro por referencia afectara a nuestra variable que se encuentra fuera de la funcion.
    $course = 'Laravel' . '<br/>';
    echo $course;
}

path($course);
echo $course;

$greet2 = function ($name){
    return "Hello $name";
};

echo $greet2('Angel <br/>');

// Cuando colocamos 'Closure' indicamos que se espera una funcion anonima
function greet3 (Closure $lang, $name){
    return $lang($name);
}

$es = function($name){
    return "Hola, $name <br/>";
};

$en = function ($name) {
    return "Hello, $name <br/>";
};

echo greet3($es, 'Mariano');
echo greet3($es, 'Bartholomeo');