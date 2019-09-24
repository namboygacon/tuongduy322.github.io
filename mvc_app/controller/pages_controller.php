<?php
    include ('BaseController.php');
    class PagesController extends BaseController {
        public function __construct () {
            $this->folder = 'pages';
        }
        
        public function home () {
            $data = [
                'name' => 'Andrew',
                'mail' => 'Andrew@gmail.com'
            ];
            $this->render ('home', $data);
        }

        public function error () {
            
            $this->render ('error');
        }
    }
?>