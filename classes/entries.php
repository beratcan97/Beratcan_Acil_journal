<?php
header('Location: /');
require_once "database.php";

$statement = $db->prepare(
  "INSERT INTO entries 
  (title, content, createdAt, userID)
  VALUES (:title, :content, :createdAt, :userID)"
);

$statement->execute([
  ":title" => $_POST["title"],
  ":content" => $_POST["content"],
  ":createdAt" => $_POST["createdAt"],
  ":userID" => $_POST["userID"]
]);
?>