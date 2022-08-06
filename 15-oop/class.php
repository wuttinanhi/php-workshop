<?php

// creating class
class Animal
{
    // Properties
    public $name;       // public properties เข้าถึงได้ทุกที่
    protected $sound;   // protected เข้าถึงได้ในคลาสและคลาสที่สืบทอด
    private $color;     // private เข้าถึงได้เฉพาะในคลาสนั้นเท่านั้น

    // constructor เรียกใช้งานตอนสร้าง object
    function __construct($name, $sound, $color)
    {
        $this->name = $name;        // set properties ของคลาส
        $this->sound = $sound;      // set properties ของคลาส
        $this->set_color($color);   // เรียกใช้สิ่งที่อยู่ใน class นี้ด้วย $this
    }

    // Methods
    // public method
    public function say()
    {
        echo "{$this->name} says {$this->sound} with color {$this->color} <br>";
    }

    // protected method
    protected function set_name($name)
    {
        $this->name = $name;
    }

    // protected method
    protected function set_sound($sound)
    {
        $this->sound = $sound;
    }

    // private method
    private function set_color($color)
    {
        $this->color = $color;
    }

    // destructor จะถูกเรียกใช้งานตอนที่ object จะถูก destroy
    function __destruct()
    {
        echo "{$this->name} tried to swim in lava <br>";
    }
}
