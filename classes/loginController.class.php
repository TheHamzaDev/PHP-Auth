<?php

class LoginController extends Login
{
    private $user;
    private $pwd;

    public function __construct($user, $pwd)
    {
        $this->user = $user;
        $this->pwd = $pwd;
    }

    //handles errors
    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            header("Location: ../signup.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->user, $this->pwd);
    }

    //checks if form fields are empty
    private function emptyInput()
    {
        $results = false;
        if (empty($this->user) || empty($this->pwd)) {
            $results = false;
        } else {
            $results = true;
        }
        return $results;
    }
}
