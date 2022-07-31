# Prevent XSS Attack

> XSS คือการฝังโค๊ดเข้าไปที่ Server เมื่อผู้ใช้คนอื่นเปิดหน้าเว็บ โค๊ดที่ฝังไว้อาจจะส่งข้อมูล sensitive data ไปให้ attacker ได้

> ทางป้องกันที่ดีที่สุดคือ `Never trust user input` โดยที่ Server จะต้องทำการ validate และจัดการกับข้อมูลที่ user ส่งเข้ามาก่อนนำไปใช้งาน

<br><br>

# Using Filter

> ใช้ filter_var() เพื่อ sanitize user input

```php
  <?php
    $data = "<h1>Hello World!</h1>";
    $data = filter_var($data, FILTER_SANITIZE_STRING);
    echo $data;
  ?>
```

> สามารถดู [Filter flags](https://www.php.net/manual/en/filter.filters.flags.php) ได้ที่ official website

<br><br>

# htmlspecialchars()

> ใช้ฟังก์ชัน `htmlspecialchars()` เพื่อ escape HTML ก่อนใช้ข้อมูล

```php
<?php
  $str = "This is some <b>bold</b> text.";
  echo htmlspecialchars($str);
?>

// output This is some &lt;b&gt;bold&lt;/b&gt; text.
```
