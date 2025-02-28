<?php
if (isset($_COOKIE['login'])) {
    var_dump($_COOKIE['login']);
    //проверка и валидация
} else {
    var_dump('Кука не установлена');
};
