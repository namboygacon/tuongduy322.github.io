<?php
    namespace App\Controller\Admin;

    class Users extends \Core\Controller {

        public function before () {

            echo "(before)";
        }

        public function after () {
            echo "(after)";
        }

        public function indexAction () {
            
            echo 'Index from users in admin';
        }
    }
?>