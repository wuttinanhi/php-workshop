<?php
require_once("./pdo.php");

$todo_id = $_GET["id"];

$todo_name = $_POST["name"];
$todo_description = $_POST["description"];
$request_method = $_SERVER["REQUEST_METHOD"];

if ($request_method === "POST") {
    $update_statement = $pdo->prepare("UPDATE todo SET name = :name, description = :description WHERE id = :id");
    $update_statement->bindParam(":id", $todo_id);
    $update_statement->bindParam(":name", $todo_name);
    $update_statement->bindParam(":description", $todo_description);
    $update_statement->execute();
    return header("Location: index.php");
}

$select_statement = $pdo->prepare("SELECT id, name, description FROM todo WHERE id = :id");
$select_statement->bindParam(":id", $todo_id);
$select_statement->execute();
$result = $select_statement->fetch();

$todo_name = $result["name"];
$todo_description = $result["description"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo App</title>
</head>

<body>
    <h1>Update Todo</h1>
    <a href="index.php">Back</a>
    <hr>
    <form action="todo_update.php?id=<?php echo $todo_id; ?>" method="POST">
        <label for="name">Name</label><br>
        <input type="text" name="name" placeholder="Add Todo" value="<?php echo $todo_name; ?>"><br><br>
        <label for="description">Description</label><br>
        <textarea name="description" placeholder="Add Description" cols="100" rows="5"><?php echo $todo_description; ?></textarea>
        <br><br>
        <input type="submit" value="Update">
    </form>
    <hr>
</body>

</html>