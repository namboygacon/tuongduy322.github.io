<?php
    namespace Core;

    class Views {

        public static function render ($view, $args = []) {
            $file = "./App/Views/$view";
            extract($args);
            if (is_readable($file)) {
                
                require ($file);
            } else {

                echo "$file not found";
            }
        }

        public static function renderTemplate ($template, $args = []) {
            static $twig = null;
            
            if ($twig === null) {
                $loader = new \Twig_Loader_Filesystem("./App/Views");
                $twig = new \Twig_Environment($loader);

            }

            echo $twig->render($template, $args);
        }
    }
?>