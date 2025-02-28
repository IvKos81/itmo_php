<?php
require_once __DIR__ . "/../view/View.php";
class LoginController {
    public function actionIndex() {
        echo(View::render([], 'login.php'));
    }
}