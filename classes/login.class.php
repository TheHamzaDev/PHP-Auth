<?php

class Login extends Dbh
{
    protected function getUser($user, $pwd)
    {
        $stmt = $this->connect()->prepare('SELECT pwd FROM users WHERE username = ? OR email = ?;');

        if (!$stmt->execute(array($user, $user))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../login.php?error=incorrectcredentials");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["pwd"]);

        if ($checkPwd == false) {
            $stmt = null;
            header("location: ../login.php?error=incorrectcredentials");
            exit();
        } elseif ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT pwd FROM users WHERE username = ? OR email = ? AND pwd = ?;');
            if (!$stmt->execute(array($user, $user, $pwdHashed[0]['pwd']))) {
                $stmt = null;
                header("location: ../login.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../login.php?error=incorrectcredentials");
                exit();
            }

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["username"] = $user[0]["username"];
        }

        $stmt = null;
    }
}
