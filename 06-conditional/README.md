# Conditional

> เงื่อนไขใน PHP สามารถเขียนได้ด้วย
>
> - `if`
> - `if...else`
> - `if...elseif...else`
> - `switch`

<br><br>

# if

```php
<?php
  $score = 100;

  if ($score === 100) {
    echo "You have full score! Congrats!";
  }
?>
```

<br><br>

# if...else

```php
<?php
  $score = 100;

  if ($score === 100) {
    echo "You have full score! Congrats!";
  } else {
    echo "You have no full score! You did well";
  }
?>
```

<br><br>

# if...elseif... else

```php
<?php
  $score = 100;

  if ($score === 100) {
    echo "You have full score! Congrats!";
  } elseif ($score >= 50) {
    echo "You pass the exam with half score!";
  } else {
    echo "You not pass the exam!"
  }
?>
```

<br><br>

# switch

```php
<?php
  $score = 100;

  switch ($score) {
    case $score === 100:
      echo "You have full score! Congrats!";
      break;
    case $score >= 50:
      echo "You pass the exam with half score!";
      break;
    default:
      echo "You not pass the exam!";
      break;
  }
?>
```
