<?php

//valid constant names
define("PASSWD", "fuf");
define("LOGIN", "fuf@fuf.tv");

// var_dump($_POST);

$login = $_POST['login'];
$password = $_POST['password'];


if (($login  == LOGIN ) && ($password == PASSWD)) {
// редирект в админку
setcookie("login", $login, time()+3600);  // Истекает через 1 час
setcookie("password", $password, time()+3600);  // Истекает через 1 час
// header("Set-Cookie: login=$login; Secure; Path=/; SameSite=None; Partitioned;");
// header("Set-Cookie: passwd=$password; Secure; Path=/; SameSite=None; Partitioned;");
header('Location: http://localhost:8000/admin.php');
} else {
// редирект на форму логина с предупреждением
header('Location: http://localhost:8000/index.php');
}


var_dump($login);
var_dump($password);
echo("LOGIN HANDLER"); 