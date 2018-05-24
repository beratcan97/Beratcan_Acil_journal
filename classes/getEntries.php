<?php

require_once "database.php";
require_once "partials/forms/deleteEntrie.php";

//Prepare a SQL-statement
$statement = $db->prepare(
    "SELECT * FROM entries WHERE userID = :userID"
  );
//Execute it
$statement->execute([':userID' => $_SESSION["userID"]]);
//If we only expect one user or one row, use `fetch()`
$entries = $statement->fetchAll(PDO::FETCH_ASSOC);


foreach ($entries as $value) {
    echo "<div class='center entryContainer'>";
    echo "<h3>" . $value["title"] . "</h3>";
    echo "<pre>" . $value["content"] . "</pre>";
    echo "<p>" . $value["createdAt"] . "</p>";
    
    //Delete button
    ?>
        <form action="partials/forms/deleteEntrie.php" method="POST">
            <input type="hidden" name="entryID" value="<?php echo $value["entryID"]; ?>">
            <input class="deleteButton" type="submit" value="Delete">
        </form>
    <?php
    echo "</div>";
}

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>