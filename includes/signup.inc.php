<?php

if (isset($_POST["submit"])) {

    //grab data from form
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    //instantiate signup class
    include "../classes/dbh.classes.php";
    include "../classes/signup.class.php";
    include "../classes/signupController.class.php";

    $signup = new SignupController($user, $email, $pwd, $pwdRepeat);

    //runs error handlers
    $signup->signupUser();

    //redirect to login
    header("location: ../login.php?error=none");
}
