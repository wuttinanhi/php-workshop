<?php

$a = 0;
if ($a < 5 and $a == 0) {
    echo "true";
} else {
    echo "false";
}

echo "<br>";

echo ($a < 5 and $a == 0) ? "true" : "false"; // short form


echo "<br>";


$x = false;
$y = 2;
echo var_dump($x ?? $y);

$score = 45;
if ($score === 100) {
    echo "You have full score! Congrats!";
} elseif ($score >= 50) {
    echo "You pass the exam with half score!";
} else {
    echo "You not pass the exam!";
}

$score = 95;
switch ($score) {
    case 100:
        echo "You have full score! Congrats!";
        break;
    case 50:
        echo "You pass the exam with half score!";
        break;
    default:
        echo "You not pass the exam!";
        break;
}
