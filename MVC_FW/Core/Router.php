<?php
    namespace Core;
    class Router {
        public static $route = array (
            
        );

        public static $param = array (

        );

        public static function getRoutes () {

            return self::$route;
        }

        public static function addRoute ($route, $param=[]) {

            $route = preg_replace("/\//", "\\/", $route);
            $route = preg_replace("/\{([a-z]+)\}/",'(?P<\1>[a-z-]+)', $route);
            $route = preg_replace("/\{([a-z]+):([^\}]+)\}/", '(?P<\1>\2)', $route);
            $route = '/^' . $route . '$/i';
            self::$route[$route] = $param;
        }

        public static function match($url) {
            foreach (self::$route as $key => $value) {
                if (preg_match($key, $url, $matches)) {
                    foreach ($matches as $key_ => $value_) {
                        
                        if (is_string ($key_)) {
                            $value[$key_] = $value_;
                        }
                    }
                    self::$param = $value;
                    return true;
                }
            }

            return false;
        }

        public static function getParams () {

            return self::$param;
        }

        public static function dispatch($url) {

            $url = self::removeStringQueryVariables($url);

            if (self::match($url)) {
                $controller = self::$param['controller'];
                // Get controller name
                $controller = str_replace('-', ' ', $controller);
                $controller = ucwords($controller);
                $controller = str_replace(' ', '', $controller);
                // $controller = 'App\Controller\\' . $controller;
                $controller = self::getControlerName() . $controller;
                if (class_exists($controller)) {
                    $controllerObject = new $controller(self::$param);
                    $action = self::$param['action'];
                    // Get action name
                    $action = str_replace('-', ' ', $action);
                    $action = ucwords($action);
                    $action = lcfirst($action);
                    $action = str_replace(' ', '', $action);

                    // if (is_callable([$controllerObject, $action])) {

                    //    $controllerObject->$action();
                    // } else {
                    
                    //     echo "Can not call action";
                    // }
                    if (!preg_match("/action$/i", $action)) {

                       $controllerObject->$action();
                    } else {
                    
                        echo "Can not call action directly";
                    }
                } else {
                    echo $controller;
                    echo "Controller not found";
                }

            } else {

                echo "Page not found";
            }
        }

        public static function removeStringQueryVariables ($url) {
            if ($url != '') {
                $path = explode('&', $url, 2);
                if (strpos($path[0], '=') === false) {
                    $url = $path[0];
                } else {
                    $url = '';
                }
            }

            return $url;
        }
        
        public static function getControlerName () {
            $controllerName = "App\Controller\\";
            if (array_key_exists("namespace", self::$param)) {
                $controllerName .= (self::$param['namespace'] . "\\");
            }

            return $controllerName;
        }
    }
?>