<?php
require_once("pdo.php");

$request_method = $_SERVER["REQUEST_METHOD"];

$todo_id = $_GET["id"];
$todo_name = $_POST["name"];
$todo_description = $_POST["description"];

if ($request_method === "POST") {
    $statement = $connection->prepare($sql = "UPDATE todo SET name=:name, description=:description WHERE id=:id");
    $statement->bindParam(":name", $todo_name);
    $statement->bindParam(":description", $todo_description);
    $statement->bindParam(":id", $todo_id);
    $statement->execute();

    header("location:index.php");
    return;
}

$statement = $connection->prepare("SELECT * FROM todo WHERE id=:id");
$statement->bindParam(":id", $todo_id);
$statement->execute();
$result = $statement->fetch();
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
    <form action="update.php?id=<?php echo $result["id"] ?>" method="POST">
        <h1>Update todo</h1>

        <label for="">Name</label><br>
        <input type="text" name="name" placeholder="Add todo" id="" value="<?php echo $result["name"] ?>"><br>

        <label for="">Description</label><br>
        <input type="text" name="description" placeholder="description" id="" value="<?php echo $result["description"] ?>"><br>

        <input type="submit" value="อัปเดตข้อมูล">
    </form>
    <hr>
</body>

</html>