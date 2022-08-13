<?php

// creating array
$fruits = ["Apple", "Banana", "Orange"];
// or $fruits = array("Apple", "Banana", "Orange");


var_dump($fruits); // var_dump array $fruits
echo "<br><br>";
var_dump($fruits[1]); // var_dump element of array

// creating object
$obj = [
    "name" => "John",
    "age" => 23
];
var_dump($obj); // var_dump $obj
echo "<br><br>";
var_dump($obj["age"]); // var_dump value of $object by key
echo count($obj); // print count of element in $obj

// fruits array
$fruits = array("Apple", "Banana", "Orange");
var_dump($fruits);
echo "<br><br>";

// push element to array
array_push($fruits, "Cherry");
var_dump($fruits);

// set element of array by index
$fruits[0] = "Cherry";
var_dump($fruits);

// remove element of array by index
unset($fruits[1]);
var_dump($fruits);

// reset array
$fruits = array("Apple", "Banana", "Orange");
var_dump($fruits);
echo "<br><br>";

// remove element by value
$fruits = array_filter($fruits, function ($val) {
    // $val = Apple
    return $val != "Apple"; // = false
});
var_dump($fruits);
