<?php
require_once("pdo.php");

// เตรียม statement SQL
$statement = $connection->prepare("SELECT * FROM todo");
// execute statement
$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);

$result = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="POST">
        <h1>App todo</h1>

        <label for="">Name</label><br>
        <input type="text" name="name" placeholder="Add todo" id=""><br>

        <label for="">Description</label><br>
        <input type="text" name="description" placeholder="description" id=""><br>

        <input type="submit" value="บันทึกข้อมูล">
    </form>
    <hr>
    <?php
    foreach ($result as $key => $value) {
        echo "
        {$value["name"]} <a href='update.php?id={$value["id"]}'>update</a> 
        <a href='delete.php?id={$value["id"]}'>delete</a><br>
        {$value["description"]}
        <hr>
        ";
    }
    ?>
</body>

</html>