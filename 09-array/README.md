# Array

> สามารถสร้างได้ด้วย `array();` หรือ `[]` <br>
> ใน PHP Array ประกาศ Object ได้ <br>
> เข้าถึง (Access) ได้ด้วย `[]` เช่น `$array[1]`

<br><br>

# Creating Array

```php
<?php
  $fruits = array("Apple", "Banana", "Orange");
  var_dump($fruits);
?>
```

```php
<?php
  $obj = [
    "name" => "John",
    "age" => "23"
  ];
  var_dump($obj);
?>
```

<br><br>

# Counting elements in an array

```php
<?php
  $fruits = array("Apple", "Banana", "Orange");
  echo count($fruits);
?>
```

<br><br>

# Add element to array

```php
<?php
  $fruits = array("Apple", "Banana", "Orange");
  array_push($fruits, "Cherry");
  var_dump($fruits);
?>
```

<br><br>

# Add element to array at specific index

```php
<?php
  $fruits = array("Apple", "Banana", "Orange");
  $fruits[3] = "Cherry";
  var_dump($fruits);
?>
```

<br><br>

# Remove element from array by index

```php
<?php
  $fruits = array("Apple", "Banana", "Orange");
  unset($fruits[1]);
  var_dump($fruits);
?>
```

<br><br>

# Remove element by value

```php
<?php
  $fruits = array("Apple", "Banana", "Orange");
  $fruits = array_filter($fruits, fn ($val) => $val != "Banana");
  var_dump($fruits);
?>
```

```php
<?php
  $fruits = array("Apple", "Banana", "Orange");
  $fruits = array_diff($fruits, ["Banana"]);
  var_dump($fruits);
?>
```
