<?php


require 'vendor/autoload.php';

use App\Parser\Parser;

$parser = new Parser();



print_r($parser->process('https://thermo-spb.ru/', 'a'));
