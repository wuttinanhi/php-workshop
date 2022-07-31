# Number

```php
<?php
  $integer_number = 123;
  echo $integer_number

  $float_number = 3.14;
  echo $float_number;
?>
```

<br><br>

# Arithmetic Operators

<table style="width:100%">
  <tbody>
    <tr>
      <th>เครื่องหมาย</th>
      <th>คำอธิบาย</th>
      <th>ตัวอย่าง</th>
    </tr>
    <tr>
      <td>+</td>
      <td>บวก</td>
      <td>$x + $y</td>
    </tr>
    <tr>
      <td>-</td>
      <td>ลบ</td>
      <td>$x - $y</td>
    </tr>
    <tr>
      <td>*</td>
      <td>คูณ</td>
      <td>$x * $y</td>
    </tr>
    <tr>
      <td>/</td>
      <td>หาร</td>
      <td>$x / $y</td>
    </tr>
    <tr>
      <td>%</td>
      <td>หารเอาเศษ</td>
      <td>$x % $y</td>
    <tr>
      <td>**</td>
      <td>ยกกำลัง</td>
      <td>$x ** $y</td>
    </tr>
  </tbody>
</table>

```php
<?php
  $x = 1;
  $y = 2;

  echo $x + $y; // 3
  echo $x - $y; // -1
  echo $x * $y; // 2
  echo $x / $y; // 0.5
  echo $x % $y; // 1
  echo $x ** $y; // 2
?>
```

<br><br>

# Number Functions

> ดึงค่า pi

```php
<?php
  echo(pi()); // 3.1415926535898
?>
```

> เปลี่ยนตัวเลขให้เป็น absolute

```php
<?php
  echo(abs(-1.23));  // 1.23
?>
```

> หา square root ของตัวเลข

```php
<?php
  echo(sqrt(64));  // 8
?>
```

> ปัดเศษตัวเลข 0.5

```php
<?php
  echo(round(0.60));  // 1
  echo(round(0.49));  // 0
?>
```

> สุ่มตัวเลข

```php
<?php
  echo(rand(10, 100));
?>
```

> หาค่า min และ max ใน arguments

```php
<?php
  echo(min(-5, 0, 1 , 2 , 3));  // -5
  echo(max(-5, 0, 1 , 2 , 3));  // 3
?>
```
