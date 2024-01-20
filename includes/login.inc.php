<?php

if (isset($_POST["submit"])) {

    //grab data from form
    $user = $_POST["user"];
    $pwd = $_POST["pwd"];

    //instantiate signup class
    include "../classes/dbh.classes.php";
    include "../classes/login.class.php";
    include "../classes/loginController.class.php";

    $login = new LoginController($user, $pwd);

    //runs error handlers
    $login->loginUser();

    //redirect to login
    header("location: ../index.php?error=none");
}
