# String

> สามารถใช้ double-quote `"` `'` ในการสร้าง string ได้ เช่น

```php
<?php
  $doublequote = "Double quote!";
  echo $doublequote;

  $singlequote = 'Singlequote!';
  echo $singlequote;
?>
```

<br>

# String Concatenation

> สามารถต่อ string ได้ด้วยเครื่องหมายจุด `.` หรือใช้ `.=`

```php
<?php
  $x = "Hello";
  $y = "World";

  echo $x . " " . $y; // Hello World
  echo $x .= " " . $y; // Hello World
?>
```

<br><br>

# strlen()

> หาความยาวของ string

```php
<?php
  echo strlen("Hello world!"); // outputs 12
?>
```

<br>

# str_word_count()

> นับคำใน string

```php
<?php
  echo str_word_count("Hello world!"); // outputs 2
?>
```

<br>

# strrev()

> ใช้ reverse string

```php
<?php
  echo strrev("Hello world!"); // outputs !dlrow olleH
?>
```

<br>

# strpos()

> หาตำแหน่งของคำ

```php
<?php
  echo strpos("Hello world!", "world"); // outputs 6
?>
```

<br>

# str_replace()

> ใช้เปลี่ยนคำใน string

```php
<?php
  echo str_replace("world", "Dolly", "Hello world!");
  // outputs Hello Dolly!
?>
```
