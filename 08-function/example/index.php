<?php

require_once("lib.php");

welcome_customer();


function hello(string $name = "World"): string
{
    return "Hello " . $name;
}

echo hello();
echo "<br>";


echo hello("PHP");
echo "<br>";

function add_five(&$value)
{
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;
