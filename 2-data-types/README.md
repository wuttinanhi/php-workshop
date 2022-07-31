# Data Types

> PHP มีประเภทของข้อมูลอยู่หลากหลายรูปแบบเพียงพอมากต่อการใช้เพื่อเขียนโปรแกรม ไม่จำเป็นต้องระบุ type เพราะ PHP เป็นภาษา Dynamic Typing

| Type    |   Description   |
| ------- | :-------------: |
| String  |     ข้อความ     |
| Integer | ตัวเลขจำนวนเต็ม |
| Float   |  ตัวเลขทศนิยม   |
| Boolean |      บูลีน      |
| Array   |     อาเรย์      |
| Object  |      วัตถุ      |
| NULL    |    ไม่มีค่า     |

<br>

### String

```php
<?php
  $text = "Hello world!";
  echo $text;
?>
```

<br>

### Integer

```php
<?php
  $x = 5985;
  var_dump($x);
?>
```

<br>

### Float

```php
<?php
  $pi = 3.14;
  var_dump($pi);
?>
```

<br>

### Float

```php
<?php
  $x = true;
  var_dump($x);
?>
```

<br>

### Array

```php
<?php
  $cars = array("Volvo","BMW","Toyota");
  var_dump($cars);
?>
```

<br>

### Object

```php
<?php
  class Car {
    public $color;
    public $model;
  }

  $myCar = new Car("black", "Volvo");
  $myCar->color = "red";
  $myCar->model = "nice!";

  var_dump($myCar);
?>
```
