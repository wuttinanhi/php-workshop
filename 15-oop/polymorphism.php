<?php

/**
 * ใน PHP Polymorphism สามารถทำได้ด้วยการใช้ Abstract Class กับ Interface
 * 
 * 
 * Abstract Class VS Interface
 * - Abstract class มี properties ได้ แต่ Interface ไม่สามารถมีได้
 * - Interface ต้องเป็น public ทุกตัว แต่ Abstract class เป็นได้ทั้ง public และ protected
 *
 * 
 * ยกตัวอยางนกและเครื่องบินสามารถบินได้ ดังนั้นสิ่งที่มีเหมือนกันคือการบิน
 * ทีวี ตู้เย็น พัดลม มีสิ่งที่เหมือนกันคือ การเปิด-ปิดเครื่องใช้ไฟฟ้า
 */

// สร้าง interface ใหม่
interface Flyable
{
    public function fly();
}

// implement flyable interface ให้กับ bird
class Bird implements Flyable
{
    public function fly()
    {
        echo "Bird is flying <br>";
    }
}

// implement flyable interface ให้กับ plane
class Plane implements Flyable
{
    public function fly()
    {
        echo "Plane is flying <br>";
    }
}


$bird = new Bird();
$bird->fly();

$plane = new Plane();
$plane->fly();





echo "<br><br>";





// สร้าง abstract class ใหม่
abstract class Car
{
    public $name;
    public $speed;
    abstract public function drive();
    abstract protected function set_speed($speed);
}


class Truck extends Car
{
    public function __construct()
    {
        $this->name = "Truck";
        $this->set_speed(10);
    }

    public function drive()
    {
        echo "Truck is driving with speed {$this->speed}<br>";
    }

    protected function set_speed($speed)
    {
        $this->speed = $speed;
        echo "Truck set speed to {$this->speed}<br>";
    }
}


class Sedan extends Car
{
    public function __construct()
    {
        $this->name = "Sedan";
        $this->set_speed(30);
    }

    public function drive()
    {
        echo "Sedan is driving with speed {$this->speed}<br>";
    }

    protected function set_speed($speed)
    {
        $this->speed = $speed;
        echo "Sedan set speed to {$this->speed}<br>";
    }
}


$truck = new Truck();
$truck->drive();

$sedan = new Sedan();
$sedan->drive();
