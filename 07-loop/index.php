<?php

// for loop
$n = 2;
for ($x = 0; $x <= 12; $x++) {
    // echo $n . " x " . $x . " = " . $n * $x . "<br>";  // 2 x 1 = 2
    $ans = $n * $x;
    echo "{$n} x {$x} = {$ans} <br>";
}

echo "<br>";

// while loop
$x = 1;
while ($x <= 12) {
    $ans = $n * $x;
    echo "{$n} x {$x} = {$ans} <br>";
    $x++;
}

echo "<br>";

// do-while loop
$n = 2;
$x = 0;
do {
    $ans = $n * $x;
    echo "{$n} x {$x} = {$ans} <br>";
    $x++;
} while ($x <= 12);

echo "<br>";

// foreach loop
$values = array(1, 2, 3, 4, 5);
foreach ($values as $x) {
    echo "x is $x <br>";
}

// for loop array
for ($i = 0; $i < count($values); $i++) {
    echo "x is {$values[$i]} <br>";
}

// example array
$age = array(
    "Peter" => "35",
    "Ben" => "37",
    "Joe" => "43"
);

// sort array by keys
ksort($age);

// for each loop array
foreach ($age as $key => $val) {
    echo "$key = $val<br>";
}

echo "<br>";

// reverse array
$new_array = array_reverse($age);

// for each loop reverse array
foreach ($new_array as $key => $val) {
    echo "$key = $val<br>";
}

// continue
for ($i = 0; $i < 10; $i++) {
    if ($i === 2) {
        continue;
    }

    echo "{$i} <br>";
}

// break
for ($i = 0; $i < 10; $i++) {
    if ($i === 2) {
        break;
    }

    echo "{$i} <br>";
}
