<?php
    namespace App\Models;
    use PDO;

    class Post extends \Core\Model{
        
        public static function getAll () {

            try {
                $db = static::getDB ();
                // $stmt = $db->query('SELECT id, title, content FROM posts ORDER BY created_at');
                $stmt = $db->prepare('SELECT id, title, content FROM posts ORDER BY created_at');

                if ($stmt->execute()) {
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    return false;
                }

               return $result;
            } catch (PDOException $e) {
                
                echo $e->getMessage();
            }
        }
        
        public static function getPostById ($id) {
            try {
                $db = static::getDB();
                // $stmt = $db->query("SELECT id, title, content FROM posts WHERE id=$id ORDER BY created_at");
                $stmt = $db->prepare("SELECT id, title, content FROM posts WHERE id=:id ORDER BY created_at");
                $stmt->bindParam(":id", $id);

                if ($stmt->execute()) {
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    return false;
                }

                return $result;
            } catch (PDOException $e) {

                echo $e->getMessage();
            }
        }
    }
?>