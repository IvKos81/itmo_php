<?php

namespace App\View;

define('FOLDER_TEMPLATE', __DIR__ .'/../template/');

class View {
    static function render( $data, $tpl ) {
        extract($data);
        // Start output buffering
        ob_start();
        // Include the template file
        include   FOLDER_TEMPLATE .  $tpl; 
        // Get the contents of the buffer
        $content = ob_get_contents();
        // End output buffering and erase the buffer's contents
        ob_end_clean();
        return $content;
    }


}