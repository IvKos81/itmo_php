<?php

namespace App\Model;
// use ElCapitano\PhpUser2\Db;
class MusicModel
{
    static function getData()
    {
        //  $link = Db::connection(CONFIG_DB);
        // $query = "SELECT * FROM track WHERE device_id = 4";
        // $result = $link->executeQuery($query);
        // $composer = $result->fetchAssociative();
        // var_dump($composer['composer_name']);
        $box = [];
        if ($handle = opendir('./uploads')) {
            while (false !== ($entry = readdir($handle))) {
                $ext = pathinfo($entry, PATHINFO_EXTENSION);

                if ($ext == 'mp3') {
                    array_push($box, "./uploads/$entry");
                }
            }
            closedir($handle);
        }
        return $box;
    }
}
