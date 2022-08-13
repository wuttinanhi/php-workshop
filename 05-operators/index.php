<?php

$x = 3;
$y = "3";

echo var_dump($x == $y);    // bool(true)
echo "<br>";
echo var_dump($x === $y);   // bool(false)
echo "<br>";

echo var_dump("a" == "A");  // bool(false)
echo "<br>";
echo var_dump("a" === "A"); // bool(false)

$x = 2;
$y = 1;

// x = 0, y = 0, output = 0  
// x = 1, y = 2, output = -1
// x = 2, y = 1, output = 1
echo var_dump($x <=> $y);     
