<?php 

require __DIR__ .  '/vendor/autoload.php';

var_dump(App\Validate::email('email@domain.com'));
var_dump(App\Validate::url('https://url.com'));
var_dump(App\Validate::password('123456789'));