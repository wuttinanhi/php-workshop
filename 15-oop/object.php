<?php
require_once("class.php"); // โหลด class จาก class.php

// สร้าง object ใหม่ด้วย new ตามด้วยชื่อ class
$cat = new Animal("cat", "meow", "white");
// เรียกใช้ public method ของ object 
$cat->say();
// set property ของ object
$cat->name = "Persian";
$cat->say();
