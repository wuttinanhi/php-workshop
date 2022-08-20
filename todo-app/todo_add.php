<?php

require_once("./pdo.php");

$todo_name = $_POST["name"];
$todo_description = $_POST["description"];

$insert_statement = $pdo->prepare("INSERT INTO todo (name, description) VALUES (:name, :description)");
$insert_statement->bindParam(":name", $todo_name);
$insert_statement->bindParam(":description", $todo_description);
$insert_statement->execute();

// redirect to index.php
header("Location: index.php");
