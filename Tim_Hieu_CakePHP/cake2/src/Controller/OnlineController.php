<?php
    namespace App\Controller;
    use App\Controller\AppController;

    class OnlineController extends AppController {
        public function onlineChannel($param1 = '', $param2 = '') {
            // echo "<pre>";
            // print_r($this->request->params['pass'][1]);

            echo $param1, ', ', $param2;
            exit();
        }
        public function myformsubmit() {
            $this->viewBuilder()->setLayout(false);
            if ($this->request->is('post')) {
                echo "<pre>";
                print_r($this->request->getData());
                echo "<pre>";
                print_r($_FILES);
            }
        }
    }
?>