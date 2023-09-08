<?php

$data = 'Estudio PHP';
echo $data[0];
// echo $data{1}; # Deprecado en PHP 8.0.0
echo "<br/>";
echo "<hr/>";

# Extraction of letters from string
$post = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, dolorem soluta alias quia ut voluptatibus dicta. Optio eos rerum dolores laboriosam vel et corrupti odit sint qui! Quidem, commodi maiores.";

$extract = substr($post, 0, 20);

echo "$extract... [ver mas]";
echo "<br/>";
echo "<hr/>";

# String to array
$data = 'JavaScript, PHP, Laravel';
$tags = explode(', ', $data);

echo "<pre>";
var_dump($tags);
echo "</pre>";

echo "<br/>";
echo "<hr/>";

$courses = ['javascript', 'php', 'laravel'];
echo implode(', ', $courses);

echo "<br/>";
echo "<hr/>";

$frase = "     Curso de PHP    ";
$frase_no_espacios = trim($frase);
$frase_no_espacios_izq = ltrim($frase);
$frase_no_espacios_der = rtrim($frase);

echo "<pre>";
echo "Esta oracion contiene la frase '$frase' con espacios, la misma frase '$frase_no_espacios' sin espacios <br/>y de la misma forma la frase '$frase_no_espacios_izq', '$frase_no_espacios_der', sin espacios del lado izquierdo y derecho respectivamente. ";
echo "</pre>";