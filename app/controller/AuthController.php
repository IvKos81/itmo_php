<?php

session_start();

class AuthController
{
    const PASSWD = 123;
    const LOGIN = 'none@none.ru';
    const DOMAIN = 'http://localhost:8000/';

    public $login = null;
    public $password = null;

    public function __construct()
    {
        $this->login = $_POST['login'];
        $this->password = $_POST['password'];
    }

    public function actionLogin()
    {
        if (($this->login  == self::LOGIN) && ($this->password == self::PASSWD)) {
            $_SESSION['IS_AUTH'] = true;
            // редирект в админку
            // setcookie("login", $this->login, time() + 3600);  // Истекает через 1 час
            // setcookie("password", $this->password, time() + 3600);  // Истекает через 1 час
            // header("Set-Cookie: login=$login; Secure; Path=/; SameSite=None; Partitioned;");
            // header("Set-Cookie: passwd=$password; Secure; Path=/; SameSite=None; Partitioned;");
            header("Location:". self::DOMAIN."admin");
        } else {
            // редирект на форму логина с предупреждением
            header("Location:". self::DOMAIN."login");
        }


        // var_dump($this->login);
        // var_dump($this->password);
        // echo ("LOGIN HANDLER");
    }

    public function actionLogout()
    {
        // echo ('print Logout');
        session_unset();
        session_destroy();
        header("Location:". self::DOMAIN);
    }
}
