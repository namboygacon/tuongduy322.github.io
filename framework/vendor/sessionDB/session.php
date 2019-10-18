<?php
    namespace vendor\sessionDB;
    use PDO;
    
    class Session {
        public static $session_id;

        public function __construct ($id = '') {
            @session_set_save_handler(
                array($this, "open"),
                array($this, "close"),
                array($this, "read"),
                array($this, "write"),
                array($this, "destroy"),
                array($this, "garbage")
            );
            if ($id === '') {
                
                session_start();
            } else {
                
                session_id($id);
                session_start();
            }
        }
        public function open($path, $name) {
            $db = new PDO("mysql:host=domain1.com;dbname=mydb", "root", "");
        
            $sql = "INSERT INTO session SET session_id =" . $db->quote($name) . ", session_data = '' ON DUPLICATE KEY UPDATE session_lastaccesstime = NOW()";
            $db->query($sql);   
            
            return true;
        }

        public function read($sessionId) { 
            Session::$session_id = $sessionId;
            $db = new PDO("mysql:host=domain1.com;dbname=mydb", "root", "");
        
            $sql = "SELECT session_data FROM session where session_id =" . $db->quote($sessionId);
            $result = $db->query($sql);
            $data = $result->fetchColumn();
            if (!$data) {
                $data = '';
            }
            $result->closeCursor();
        
            return $data;
        }

        public function write($sessionId, $data) { 
            $db = new PDO("mysql:host=domain1.com;dbname=mydb", "root", "");
        
            $sql = "INSERT INTO session SET session_id =" . $db->quote($sessionId) . ", session_data =" . $db->quote($data) . " ON DUPLICATE KEY UPDATE session_data =" . $db->quote($data);
            $db->query($sql);
        
            return true;
        }

        public function close() {
            $sessionId = session_id();
            //perform some action here
            return true;
        }

        public function destroy($sessionId) {
            $db = new PDO("mysql:host=domain1.com;dbname=mydb", "root", "");
        
            $sql = "DELETE FROM session WHERE session_id =" . $db->quote($sessionId); 
            $db->query($sql);
        
            setcookie(session_name(), "", time() - 3600);
            
            return true;
        }

        public function garbage($lifetime) {
            $db = new PDO("mysql:host=domain1.com;dbname=mydb", "root", "");
        
            $sql = "DELETE FROM session WHERE session_lastaccesstime < DATE_SUB(NOW(), INTERVAL " . $lifetime . " SECOND)";
            $db->query($sql);
            
            return true;
        }
    }
?>