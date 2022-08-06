<?php

/**
 * 
 * Traits ใน PHP เป็นเหมือน class ที่สร้าง และให้คลาสอื่นๆนำไป reuse รวมกันได้
 * https://www.php.net/manual/en/language.oop5.traits.php
 * 
 */

trait Fly
{
    public function fly()
    {
        echo "It can fly! <br>";
    }
}

trait Swim
{
    public function swim()
    {
        echo "It can swim! <br>";
    }
}

class Monster
{
    use Fly, Swim;
}



$monster = new Monster();
$monster->fly();
$monster->swim();
