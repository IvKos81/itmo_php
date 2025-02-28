<?php


$form = <<<EOD
Тип кодирования данных, enctype, требуется указывать только так, как показывает пример
<form enctype="multipart/form-data" action="file_upload.php" method="POST">
    Поле MAX_FILE_SIZE требуется указывать перед полем загрузки файла
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    Название элемента input определяет название элемента в суперглобальном массиве $_FILES
    Отправить файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>
EOD;

echo($form);
