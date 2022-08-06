# Sessions

> Session reference [https://www.php.net/manual/en/reserved.variables.session.php](https://www.php.net/manual/en/reserved.variables.session.php)

> ต้องเรียก `session_start();` ก่อนใช้งาน session ทุกครั้ง

> Session จะเก็บข้อมูลไว้ที่ server

<br>

# Set session

> สามารถ set session ได้โดยใช้ global variable `$_SESSION`

example:

```php
<?php
    session_start();
    $_SESSION["user"] = "Bob";
>
```

<br><br>

# Get session

> สามารถ get session ได้ด้วย global variable `$_SESSION`

example:

```php
<?php
    $user = $_SESSION["user"];
    echo $user;
>
```

<br><br>

# Delete session

> ลบ session ได้โดยใช้ `unset()`

example:

```php
<?php
    session_start();
    unset($_SESSION["user"]);
>
```

> ลบ session ทั้งหมด

example:

```php
<?php
    session_start();
    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();
>
```
