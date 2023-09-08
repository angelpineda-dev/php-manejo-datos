<?php

/**
 * Las comillas simples no respetan los saltos de linea
 * y si deseamos agregar comillas simples dentro
 * debemos de agregar un backslash
 * asi como para el backslash
 */

echo 'Un texto de una linea
varias lineas
comilla simple \' backslash \\ continuar con mas texto
$variable';

echo "<br/>";
echo "<hr/>";
/**
 * Si deseamos imprimir variables junto con las comillas simples
 * deberemos de concatenerlas mediante el punto
 */

$name = 'Pepito';
echo 'Mi nombre es: ' . $name;
echo "<br/>";
echo "<hr/>";

/**
 * Una solucion mas amigable para el programador es utilizar comillas dobles
 * estas nos permiten utilizar tanto variables asi como etiquetas html
 */

echo "Mi nombre es: $name <br/><hr/>";

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

class User{
    public $name = 'Mariano';
}

$user = new User;

echo "$user->name quiere aprender {$courses['backend'][0]}";
echo "<br/>";
echo "<hr/>";

$teacher = 'italo';
$italo = 'Profesor de PHP';

echo "$teacher es {${$teacher}}";

echo "<br/>";
echo "<hr/>";

function getTeacher(){
    return 'teach';
}

$teach = "Italo";

echo "{${getTeacher()}} enseña PHP";