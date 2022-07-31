# Intro to PHP

> PHP ใช้แท็ก `<php? ?>` for example:

```php
<?php
  echo "Hello World";
?>
```

<br>
<br>

### Keywords and Naming Conventions

> แต่แนะนำให้เขียนเป็น Lowercase <br>
> เขียน constant variable เป็น Uppercase <br>
> และไม่ใช้ช่องว่างระหว่างตัวแปร

```php
<?php
  ECHO "Hello World!<br>";
  echo "Hello World!<br>";
  EcHo "Hello World!<br>";
?>

```

<br>
<br>

### Comments

> ใช้ได้ทั้ง `//` หรือ `#` และสามารถทำ multi-line หรือ inline ได้

```php
<?php
  // This is a single-line comment

  # This is also a single-line comment
?>
```

> Multi-line

```php
<?php
  /*
    This is a multiple-lines comment block
    that spans over multiple
    lines
  */
?>
```

> Inline

```php
<?php
  $x = 5 /* + 15 */ + 5;
  echo $x;
?>
```

<br>
<br>

### Display

> ใช้ `echo` หรือ `print`

```php
<?php
  echo "Hello World!<br>";
  print "Hello World!<br>";
  print("Hello World!<br>");
?>
```

<br>
<br>

### Variable

> ขึ้นต้นด้วย `$` และไม่มีเว้นวรรค เช่น

```php
<?php
  $text = "Hello World";
  $pi = 3.14;
?>
```

> Scope: <br>
> ถ้าประกาศนอกฟังก์ชันจะเป็น Global <br>
> ถ้าประกาศในฟังก์ชันจะเป็น Local

```php
<?php
  $x = 5;

  function myFunction() {
    echo "x is" . $x;
  }

  myFunction();
  echo $x;
?>
```
