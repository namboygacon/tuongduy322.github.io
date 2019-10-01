<?php
    namespace App\Controller;
    use Core\Views;
    // use Core\Controller as Controller;
    
    class Home extends \Core\Controller {

        public function before () {
            if (!isset($_SESSION['user_id'])) {
                // return false;
            }
        }

        public function after () {
        }

        public function indexAction () {
            $data = array (
                'name' => "Duy",
                'color' => ['Red', 'Screen', 'Blue']
            );
            // Views::render ('Home/Index.php', $data);
            Views::renderTemplate ('Home/Index.html', $data);
        }

        public function getProfileAction () {
            echo "getProfile - homeController";
        }
    }
?>