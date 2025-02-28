<?php

namespace PhpUser2\Core;

define('DB_PERSISTENCY', 'true');
define('DB_SERVER', '127.127.127.0');
define('DB_USERNAME', 'music_user');
define('DB_PASSWORD', '123456');
define('DB_DATABASE', 'musicbox');
define('PDO_DSN', 'pgsql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);


class DataBase_
{

    private static $db;

    // Clear the PDO class instance
    public static function Close()
    {
        self::$db = null;
    }

    protected function createTable(\PDO $db)
    {



        $db->exec("
        CREATE TABLE IF NOT EXISTS top_chart (
            id INT(4) serial PRIMARY KEY,
            name varchar(100),
            url varchar(100),
        )");
    }


    public function openDataBase()
    {
        if (!isset(self::$db)) {
            // Execute code catching potential exceptions
            try {
                // $options = array(\PDO::ATTR_PERSISTENT => DB_PERSISTENCY, \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
                self::$db = new \PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
                // self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                // $this->createTable(self::$db);
            } catch (\PDOException $e) {
                // Close the database handler and trigger an error
                self::Close();
                trigger_error($e->getMessage(), E_USER_ERROR);
            }
        }
        return self::$db;
    }

    public function lastInsertId()
    {
        $db = $this->openDataBase();
        return $db->lastInsertId();
    }

    public function setDataBase($string)
    {
        $db = $this->openDataBase();
        $db->exec($string);
    }

    public function setBasePrepare($query, $data)
    {
        $db = $this->openDataBase();
        $stmt = $db->prepare($query);
        $stmt->execute($data);
    }

    public function getDataBase($string)
    {
        $db = $this->openDataBase();
        $query = $db->query($string);
        if ($query) {
            return $query->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    public function rowCount($query, $data)
    {
        $db = $this->openDataBase();
        $stmt = $db->prepare($query);
        $stmt->execute($data);
        return $stmt->rowCount();
    }

    public function getBasePrepare($query, $data)
    {
        $db = $this->openDataBase();
        $stmt = $db->prepare($query);
        $stmt->execute($data);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
