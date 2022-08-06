<?php

/**
 * 
 * Static Keyword
 * สามารถเรียกใช้โดยไม่ต้องสร้าง object จาก class
 * 
 */


class Math
{
    public static $PI = 3.14;

    public static function sum($a, $b)
    {
        return $a + $b;
    }
}

echo "Static keyword: <br>";
echo "Math::$PI = " . Math::$PI;
echo "<br>";
echo "Math::sum(1, 2) = " . Math::sum(1, 2);
