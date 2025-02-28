<?php
// маршруты
return array(
    'news' => 'news/index', // actionIndex в NewsController
    'products' => 'product/list', // actionList в ProductController
    'about' => 'about/index',
    'login' => 'login/index',
    'admin' => 'admin/index',
    'auth' => 'auth/login',
    'logout' => 'auth/logout',
    'upload' => 'upload/index',
    'file_upload' => 'upload/addfile',
    'portial' => 'main/portial'
);
// - где 'news' - строка запроса
// 'news/index' - имя контроллера и экшена для обработки этого запроса (путь обработчика)
