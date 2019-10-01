<?php
    namespace Core;

    abstract class Controller {
        public $routeParams = [];

        public function __construct ($params) {

            $this->routeParams = $params;
        }

        public function __call ($method, $args) {
            $action = $method . "Action";
            if (method_exists($this, $action)) {
                if ($this->before() !== false) {
                    // before
                    call_user_func_array ([$this, $action], $args);
                    // after
                    $this->after();
                }
            } else {
                echo $action;
                echo "Aciton not found";
            }
            
        }

    }
?>