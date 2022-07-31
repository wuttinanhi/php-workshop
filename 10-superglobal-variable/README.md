# Superglobal Variables

> Superglobal variables สามารถเข้าถึงได้ทุก scope <br>
> เป็น predefined variables

> Example Superglobal variables:
>
> - $GLOBALS
> - $\_SERVER
> - $\_REQUEST
> - $\_POST
> - $\_GET
> - $\_FILES
> - $\_ENV
> - $\_COOKIE
> - $\_SESSION
>   <br><br>

<br><br>

# $GLOBALS

```php
<?php
  $x = 75;
  $y = 25;

  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

  echo $z;
?>
```
