<?php

require_once "database.php";

$hashed = password_hash($_POST["password"], PASSWORD_BCRYPT);

$statement = $db->prepare(
  "INSERT INTO users 
  (username, password)
  VALUES (:username, :password)"
);
$statement->execute([
  ":username" => $_POST["username"],
  ":password" => $hashed
]);

header("Location: /index.php");

?>