<?php

class Signup extends Dbh
{
    protected function setUser($user, $pwd, $email)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users(username, pwd, email) VALUES (?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($user, $hashedPwd, $email))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($user, $email)
    {
        $stmt = $this->connect()->prepare('SELECT id FROM users WHERE id = ? OR email = ?;');
        if (!$stmt->execute(array($user, $email))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();
        }

        //checks if user or email taken, don't sign up
        $resultCheck = false;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}
