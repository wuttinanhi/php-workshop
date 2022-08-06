# Cookies

> cookie reference [https://www.php.net/manual/en/reserved.variables.cookies.php](https://www.php.net/manual/en/reserved.variables.cookies.php)

<br>

# Set cookie

> ตัวอย่างการ set ค่า cookie

```php
setcookie(
    string $name,
    string $value = "",
    int $expires_or_options = 0,
    string $path = "",
    string $domain = "",
    bool $secure = false,
    bool $httponly = false
): bool
```

> [https://www.php.net/manual/en/function.setcookie.php](https://www.php.net/manual/en/function.setcookie.php)

example:

```php
$cookie_name = "user";
$cookie_value = "Bob";
setcookie($cookie_name, $cookie_value, 60, "/");
```

<br><br>

# Get cookie

> สามารถ get ค่า cookie ได้ด้วย global variable `$_COOKIE`

example:

```php
$cookie_name = "user";
$cookie_value = $_COOKIE[$cookie_name];
echo $cookie_value;
```

<br><br>

# Delete cookie

> การ delete cookie ทำได้โดยตั้ง expire time ให้หมดอายุ

example:

```php
$cookie_name = "user";
setcookie($cookie_name, "", time() - 3600);
```

<br><br>
