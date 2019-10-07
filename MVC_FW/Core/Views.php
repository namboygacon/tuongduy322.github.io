<?php
    namespace Core;
    use Asm89\Twig\CacheExtension\CacheProvider\PsrCacheAdapter;
    use Asm89\Twig\CacheExtension\CacheStrategy\LifetimeCacheStrategy;
    use Asm89\Twig\CacheExtension\Extension as CacheExtension;
    use Cache\Adapter\Apcu\ApcuCachePool;

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
                $twig = new \Twig_Environment($loader, [
                    'cache' => './App/Views/cache',
                ]);
                
                $cacheProvider  = new PsrCacheAdapter(new ApcuCachePool());
                $cacheStrategy  = new LifetimeCacheStrategy($cacheProvider);
                $cacheExtension = new CacheExtension($cacheStrategy);

                $twig->addExtension($cacheExtension);
            }

            echo $twig->render($template, $args);
        }
    }
?>