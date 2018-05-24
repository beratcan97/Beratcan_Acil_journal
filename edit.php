<?php require_once "partials/head.php";

if (isset($_GET["message"])) {
    echo $_GET["message"];
}

require_once "classes/lastActivity.php";


if(!isset($_SESSION["loggedIn"])){
    //Form for registration
    require_once "partials/forms/registration.php";

    //Form for signin
    require_once "partials/forms/signin.php";
}
//Runs if you have signed in
else{
    //Navbar
    require_once "partials/navbar.php";
    
    //Form for creating new entries
    require_once "partials/forms/entries.php";

    //Showing entries
    require_once "classes/getEditEntries.php";
}

require_once "partials/footer.php";?>