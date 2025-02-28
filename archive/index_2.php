<?php

define('FOLDER_TEMPLATE', './template/');
include "model_box.php";
function render($tpl, $data)
{
    extract($data);


    // include "model_box.php";

    // Start output buffering
    ob_start();

    // Include the template file
    include FOLDER_TEMPLATE . $tpl;

    // Get the contents of the buffer
    $content = ob_get_contents();

    // End output buffering and erase the buffer's contents
    ob_end_clean();

    // Perform any necessary processing on the template content
// For example, you can replace placeholders, apply filters, etc.
// $content = str_replace('{{title}}', 'My Website', $content);

    // Output the processed content
    return $content;
}

$value = ['box' => $box, 'title' => "God save the King!", 'body' => "Happy New Year!", 'auth' => false];
$portial = render('tpl_layout.php', $value);

echo $portial;