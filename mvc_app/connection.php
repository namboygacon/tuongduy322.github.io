<?php
    class DB {
        public static $instance = null;

        public static function getInstance () {
            if(!isset(self::$instance)) {
                try {
                    $host = "localhost";
                    $user = "root";
                    $pass = "";
                    $dbName = "demo_mvc";
                    // Connect db
                    self::$instance = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
                } catch (PDOException $ex) {

                    die ($ex->getMessage());
                }
            }
            
            return self::$instance;
        }
    }
?>