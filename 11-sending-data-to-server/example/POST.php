<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST request example</title>
</head>

<body>
    <?php
    $name = $_POST['name'];
    echo "Hello " . $name;
    ?>
    <br>
    <form method="post" action="index.php">
        Name: <input type="text" name="name" />
        <input type="submit" />
    </form>
</body>

</html>