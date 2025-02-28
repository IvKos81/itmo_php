<?php

session_start();

require_once __DIR__ . "/../view/View.php";

class UploadController
{
    public function actionIndex()
    {
        // todo: Вынести проверку авторизации в отдельный модуль
        if (
            isset($_SESSION['IS_AUTH'])
            and $_SESSION['IS_AUTH'] == true
        ) {
            $portial = (View::render([], 'upload_tpl.php'));
            echo (View::render(['content' => $portial], 'layout_admin.php'));
        } else {
            header("Location:http://localhost:8000/login");
        };
    }

    public function actionAddfile()
    {
        $uploaddir = 'C:\\Lerning\\itmo-php-course\\engine\\uploads\\';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

        echo '<pre>';
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo "Файл не содержит ошибок и успешно загрузился на сервер.\n";
        } else {
            echo "Возможная атака на сервер через загрузку файла!\n";
        }
    }
}
