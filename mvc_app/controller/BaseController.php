<?php
    class BaseController {
        protected $folder;

        public function render ($file, $data=[]) {

            $path = 'views/'. $this->folder . '/' . $file . '.php';
            
            if (is_file($path)) {
                ob_start();
                extract($data);
                require_once ($path);
                $content = ob_get_clean();
                require_once ('views/layouts/application.php');
            } else {
                
                header ('Location: index.php?controller=pages&action=error');
            }
        }
    }

?>