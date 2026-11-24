<?php
// Roep de autoloader aan
require_once __DIR__ . '/../vendor/autoload.php';

// Met use
use Project_calculator\classes\Calculator;

$calc = new Calculator();
echo $calc->add(10, 15); // 25

echo "<br>";

// Zonder use
$calc2 = new \Project_calculator\classes\Calculator();
echo $calc2->add(10, 15); // 25
