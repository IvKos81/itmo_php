<?php

session_start();

require_once __DIR__ . "/../view/View.php";
class AdminController
{

    public function actionIndex()
    {
        if (
            isset($_SESSION['IS_AUTH'])
            and $_SESSION['IS_AUTH'] == true
        ) {
            echo (View::render(['content' => ''], 'layout_admin.php'));
        } else {
            header("Location:http://localhost:8000/login");
        };
    }
}
