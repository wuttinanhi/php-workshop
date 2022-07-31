# Loop

> การวนซ้ำใน PHP มี 4 รูปแบบได้แก่
>
> - `for`
> - `while`
> - `do...while`
> - `foreach`
>
> ใช้ continue ในการข้ามการวนซ้ำ<br>
> ใช้ break ในการออกจากการวนซ้ำ

<br><br>

# for

```php
<?php
  for ($x = 0; $x <= 10; $x++) {
    echo "x is $x <br>";
  }
?>
```

<br><br>

# while

```php
<?php
$x = 0;

while($x <= 10) {
  echo "x is $x <br>";
  $x++;
}
?>
```

<br><br>

# do...while

```php
<?php
  $x = 0;

  do {
    echo "x is $x <br>";
    $x++;
  } while ($x <= 10);
?>
```

<br><br>

# foreach

```php
<?php
  $values = array(1, 2, 3, 4, 5);

  foreach ($x as $values) {
    echo "x is $x <br>";
  }
?>
```

```php
<?php
  $age = array(
    "Peter"=>"35",
    "Ben"=>"37",
    "Joe"=>"43"
  );

  foreach($age as $key => $val) {
    echo "$key = $val<br>";
  }
?>
```

<br><br>

# continue

```php
<?php
  for ($x = 0; $x < 10; $x++) {
    if ($x % 2 == 0) {
      continue;
    }

    echo "odd number: $x <br>";
  }
?>
```

<br><br>

# break

```php
<?php
  for ($x = 0; $x < 10; $x++) {
    if ($x == 5) {
      break;
    }

    echo "x = $x <br>";
  }
?>
```
