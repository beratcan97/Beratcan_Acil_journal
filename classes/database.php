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