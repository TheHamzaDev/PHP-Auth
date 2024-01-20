<?php

class SignupController extends Signup
{
    private $user;
    private $email;
    private $pwd;
    private $pwdRepeat;

    public function __construct($user, $email, $pwd, $pwdRepeat)
    {
        $this->user = $user;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
    }

    //handles errors
    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            header("Location: ../signup.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUser() == false) {
            header("Location: ../signup.php?error=username");
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("Location: ../signup.php?error=email");
            exit();
        }
        if ($this->pwdMatch() == false) {
            header("Location: ../signup.php?error=passwordmatch");
            exit();
        }
        if ($this->userTakenCheck() == false) {
            header("Location: ../signup.php?error=useralreadyexists");
            exit();
        }

        $this->setUser($this->user, $this->pwd, $this->email);
    }

    //checks if form fields are empty
    private function emptyInput()
    {
        $results = false;
        if (empty($this->user) || empty($this->email) || empty($this->pwd) || empty($this->pwdRepeat)) {
            $results = false;
        } else {
            $results = true;
        }
        return $results;
    }

    //allow only certain values in username field
    private function invalidUser()
    {
        $results = false;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->user)) {
            $results = false;
        } else {
            $results = true;
        }
        return $results;
    }

    //check if email is valid
    private function invalidEmail()
    {
        $results = false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $results = false;
        } else {
            $results = true;
        }
        return $results;
    }

    //password repeat
    private function pwdMatch()
    {
        $results = false;
        if ($this->pwd !== $this->pwdRepeat) {
            $results = false;
        } else {
            $results = true;
        }
        return $results;
    }

    private function userTakenCheck()
    {
        $results = false;
        if (!$this->checkUser($this->user, $this->email)) {
            $results = false;
        } else {
            $results = true;
        }
        return $results;
    }
}
