<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo App</title>
</head>

<body>
    <h1>Todo App</h1>
    <hr>

    <form action="todo_add.php" method="POST">
        <label for="name">Name</label><br>
        <input type="text" name="name" placeholder="Add Todo" value="<?php echo $todo_name; ?>"><br><br>
        <label for="description">Description</label><br>
        <textarea name="description" placeholder="Add Description" cols="100" rows="5"><?php echo $todo_description; ?></textarea>
        <br><br>
        <input type="submit" value="Add">
    </form>
    <hr>
    <?php
    require_once("./pdo.php");

    $select_all_statement = $pdo->prepare("SELECT id, name, description FROM todo");
    $select_all_statement->execute();
    $select_all_statement->setFetchMode(PDO::FETCH_ASSOC);

    $result = $select_all_statement->fetchAll();

    foreach ($result as $key => $value) {
        echo "
        {$value["id"]}
        <a href=\"todo_update.php?id={$value["id"]}\">Edit</a>
        <a href=\"todo_delete.php?id={$value["id"]}\">Delete</a><br>
        {$value["name"]}  <br> 
        {$value["description"]} <br> 
        <hr>
        ";
    }
    ?>
</body>

</html>