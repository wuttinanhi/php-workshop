# Sending data to server

> Server สามารถรับข้อมูลจาก user ได้ด้วย variable `$_GET` หรือ `$_POST`

<br><br>

# $\_GET

> ส่งค่าผ่าน url query parameters ไปที่ server

```html
<html>
  <body>
    <?php
      $name = $_GET['name'];
      echo "Hello " . $name ;
    ?>

    <a href="index.php?name=PHP">Send GET Request</a>
  </body>
</html>
```

<br><br>

# $\_POST

> ส่งค่าผ่าน body request ไปที่ server

```html
<html>
  <body>
    <?php
      $name = $_POST['name'];
      echo "Hello " . $name ;
    ?>

    <form method="post" action="index.php">
      Name: <input type="text" name="name" />
      <input type="submit" />
    </form>
  </body>
</html>
```

# File Upload

> ตั้งค่าอัพโหลดไฟล์ใน php.ini `file_uploads=On`

> ดูตัวอย่างได้ใน [file-upload-example](file-upload-example)

```php
// var_dump($_FILES['file']); example

array(5) {
  ["name"]=> string(9) "a_cat.jpg"
  ["type"]=> string(10) "image/jpeg"
  ["tmp_name"]=> string(14) "/tmp/phpLXPjVS"
  ["error"]=> int(0)
  ["size"]=> int(156980)
}
```
