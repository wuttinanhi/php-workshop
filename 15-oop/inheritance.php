<?php
require_once("class.php"); // โหลด class จาก class.php

// extending class
class Cow extends Animal
{
    // override constructor
    function __construct($name)
    {
        $this->set_name($name);
        $this->set_sound("Moo Moo");
    }

    // override method
    public function say()
    {
        echo "Cow says {$this->sound} <br>";
    }
}

// สร้าง object จาก class ที่ inherit จาก class Animal
$cow = new Cow("Wagyu");
$cow->say();
