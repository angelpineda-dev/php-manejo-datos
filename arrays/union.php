<?php

$frontend = ['javascript'];
$backend = ['php', 'laravel'];

echo "<pre>";
var_dump(array_merge($frontend, $backend));
echo "</pre> <br/><br/>";

$courses = array_merge($frontend, $backend);
$categories = array('frontend', 'backend', 'framework');
echo "<pre>";
var_dump(array_combine($categories, $courses));
echo "</pre> <br/><br/>";