<?php 

namespace PhpUser2\PhpUser2;

use Doctrine\DBAL\DriverManager;
class Db {
    private static $connection;

    public static function connection(array $data)
    {
        self::$connection = DriverManager::getConnection($data);
        return self::$connection;
    }

    public static function SQLBuilder(?array $data = null)
    {
       
        return (self::$connection)->createQueryBuilder();
    }

}