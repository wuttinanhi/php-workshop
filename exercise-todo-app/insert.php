<?php

$todo_name = $_POST["name"];
$todo_description = $_POST["description"];

require_once("pdo.php");

try {
    $statement = $connection->prepare("INSERT INTO todo (name, description, done) VALUES (:name, :description, false)");
    $statement->bindParam(":name", $todo_name);
    $statement->bindParam(":description", $todo_description);
    $statement->execute();

    header("Location: index.php");
} catch (PDOException $error) {
    echo "ไม่สามารถบันทึกข้อมูลได้";
}
