<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET request example</title>
</head>

<body>
    <?php
    $name = $_GET['name'];
    echo "Hello " . $name;
    ?>
    <br>
    <a href="index.php?name=PHP">Send GET Request</a>
</body>

</html>