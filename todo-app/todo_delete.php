<?php
require_once("./pdo.php");

$todo_id = $_GET["id"];

$select_statement = $pdo->prepare("DELETE FROM todo WHERE id = :id");
$select_statement->bindParam(":id", $todo_id);
$select_statement->execute();

return header("Location: index.php");
