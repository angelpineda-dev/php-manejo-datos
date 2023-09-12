<?php

# Alterar
$text = "PHP es un LENGUAJE";
echo strtolower($text) . "<br/>";
echo strtoupper($text) ." <br/>";
echo lcfirst($text) ." <br/>";
echo ucfirst($text) ." <br/>";

echo "<br/>";
echo "<hr/>";

# Reemplazar

$slug = str_replace(" ", '-', $text);
echo strtolower($slug);

echo "<br/>";
echo "<hr/>";

# Modificacion

$code = 39;
$text_with_html = "<h1>Soy un texto</h1>";
$text_special_characters = "Comence a aprender programación en el año 3000";
echo str_pad($code, 8, '#') . "<br/>";
echo str_pad($code, 8, '#', STR_PAD_BOTH) . "<br/>";
echo str_pad($code, 8, '#', STR_PAD_LEFT) . "<br/>";
echo strip_tags($text_with_html) . "<br/>";
echo strtoupper($text_special_characters) . "<br/>";
echo mb_strtoupper($text_special_characters) . "<br/>";