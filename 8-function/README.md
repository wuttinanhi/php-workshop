# Function

> ชื่อฟังก์ชันควรใช้ snake_case ในการตั้งชื่อ <br>
> ชื่อฟังก์ชันใน PHP ไม่ควรมีเว้นวรรค

<br><br>

# Function with no return

```php
<?php
  function hello_world() {
    echo "Hello world!";
  }
?>
```

<br><br>

# Function with return

```php
<?php
  function hello_world() {
    return "Hello world!";
  }
?>
```

<br><br>

# Function with parameter

```php
<?php
  function hello($name) {
    echo "Hello ". $name;
  }
?>
```

<br><br>

# Function with typed parameter

```php
<?php
  function hello(string $name) {
    echo "Hello ". $name;
  }
?>
```

<br><br>

# Function with typed return

```php
<?php
  function hello(string $name) : string {
    return "Hello ". $name;
  }
?>
```

<br><br>

# Function with default parameter

```php
<?php
  function hello(string $name = "World") : string {
    return "Hello ". $name;
  }
?>
```

<br><br>

# Function with passing by reference

```php
<?php
  function add_five(&$value) {
    $value += 5;
  }

  $num = 2;
  add_five($num);
  echo $num;
?>
```
