<?php

require_once __DIR__ . "/../model/MusicModule.php";
require_once __DIR__ . "/../view/View.php";
class AboutController
{
    public function actionIndex()
    {
        $result = MusicModel::getData();
        // var_dump($result);
        echo (View::render([
            'box' => $result,
            'body' => 'To home',
            'auth' => false
        ], 'tpl_layout.php'));
    }
}
