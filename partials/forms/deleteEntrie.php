<?php

    //----------------------------------
    //require_once "database.php";
    //----------------------------------

    if(isset($_POST["entryID"])) {
        $db = new PDO(
            //this is the source
            "mysql:host=localhost:3306;dbname=journal;charset=utf8",
        
            //username
            "root",
            //password
            "root",
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
            );

            $statement = $db->prepare("DELETE FROM entries WHERE entryID = :entryID");
            $statement->execute(array(
                ":entryID"     => $_POST["entryID"],
            ));
        
        header("Location: /index.php");
    }
?>