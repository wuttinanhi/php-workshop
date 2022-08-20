<?php
require_once("pdo.php");

$todo_id = $_GET["id"];

$statement = $connection->prepare($sql = "DELETE FROM todo WHERE id=:id");
$statement->bindParam(":id", $todo_id);
$statement->execute();

header("location:index.php");
