<?php

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
    //----------------------------------
    //require_once "database.php";
    //----------------------------------
    
    $statement = $db->prepare(
        "UPDATE entries SET content=:content WHERE entryID=:entryID"
    );

    $statement->execute(array(
        ":content"=>$_POST["content"],
        ":entryID"=>$_POST["entryID"]
    ));
    header("Location: /index.php");
?>
