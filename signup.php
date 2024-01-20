<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/container.module.css">
    <link rel="stylesheet" href="styles/form.module.css">
    <link rel="stylesheet" href="styles/footer.module.css">
    <title>Website | Sign Up</title>
</head>

<body>

    <div class="container mx-auto containerMaxWidth containerMinHeight containerCenter">
        <nav class="navbar navbar-light bg-white shadow-none">
            <div class="container-fluid justify-content-center pt-3">
                <a href="index.php" title="Website Logo" class="navbar-brand mb-0 h1"><i class="fa-solid fa-layer-group"></i></a>
            </div>
        </nav>
        <form class="w-100 formCenter formPaddingY" action="./includes/signup.inc.php" method="post">
            <h4 class="pb-2 text-dark">
                <strong>Create New Account</strong>
            </h4>
            <div class="form-group form-outline mb-3 " data-mdb-input-init>
                <input type="text" name="user" id="inputUsernameSignup" class="form-control form-control-lg" aria-label="Username Input Signup" />
                <label class="form-label" for="inputUsernameSignup">Username</label>
            </div>
            <div class="form-group form-outline mb-3 " data-mdb-input-init>
                <input type="text" name="email" id="inputEmailSignup" class="form-control form-control-lg" aria-label="Email Input Signup" />
                <label class="form-label" for="inputEmailSignup">Email Address</label>
            </div>
            <div class="form-group form-outline mb-3" data-mdb-input-init>
                <input type="password" name="pwd" id="inputPasswordSignup" class="form-control form-control-lg" aria-label="Password Input Signup" />
                <label class="form-label" for="inputPasswordSignup">Password</label>
            </div>
            <div class="form-group form-outline mb-3" data-mdb-input-init>
                <input type="password" name="pwdRepeat" id="inputRepeatPasswordSignup" class="form-control form-control-lg" aria-label="Password Repeat Input Signup" />
                <label class="form-label" for="inputRepeatPasswordSignup">Repeat Password</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-lg w-100 mt-3 text-capitalize" aria-label="Signup Button">Continue</button>
            <p class="mt-3">Already have an account? <a href="login.php" title="Login Redirect" aria-label="Login Redirect" class="text-primary pe-auto">Sign
                    In</a></p>
            <div class="line mt-5">
                <hr />
                <p class="text-nowrap mb-0 px-2">or continue with</p>
                <hr />
            </div>
            <button type="submit" name="submit" class="btn btn-lg text-white w-100 mt-5 text-capitalize" style="background-color: #dd4b39" aria-label="Signup Button"><i class="fab fa-google me-2"></i>Continue
                with
                Google</button>
        </form>
        <div class="container ml-0 mr-0 formCenter">
            <p><span class="footerColor">Terms of use</span> | <span class="footerColor">Privacy Policy</span></p>
        </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js">
    </script>
</body>

</html>