<?php 
    namespace Core;
    use PDO;
    
    abstract class Model {
        protected static function getDB () {
            static $db = null;

            if ($db === null) {
                $host = "localhost";
                $user = "root";
                $pass = "";
                $dbName = "mvc";

                try {
                    $db = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $pass);
                    
                } catch (PDOException $e) {
                    
                    echo $e->getMessage();
                }
                return $db;
            }
        }

        protected static function begin () {
            $db = self::getDB();
            $db->beginTransaction();
        }

        protected static function commit () {
            $db = self::getDB();
            $db->commit();
        }

        protected static function rollback () {
            $db = self::getDB();
            $db->rollback();
        }
    }
?>