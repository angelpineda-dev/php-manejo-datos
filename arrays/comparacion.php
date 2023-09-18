<?php

$courses = ['javascript', 'php'];
$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

echo "<pre>";
var_dump(array_diff($wishes, $courses));
echo "</pre> <br/><br/>";

$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

echo "<pre>";
var_dump(array_diff($arrayA, $arrayB));
var_dump(array_diff($arrayB, $arrayA));
echo "</pre> <br/><br/>";

// array_diff_assoc

$arrayC = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrayD = ['c' => 4, 'd' => 5, 'e' => 6, 'f' => 7, 'g' => 8];

echo "<pre>";
var_dump(array_diff($arrayC, $arrayD));
var_dump(array_diff($arrayD, $arrayC));
echo "</pre> <br/><br/>";