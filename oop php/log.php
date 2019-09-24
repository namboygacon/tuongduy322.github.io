<?php
    class log {
        public $fileName;
        public $file;
        public $option = array (
            'dateFormat' => 'd-M-Y H:i:s'
        );

        public function __construct($fileName, $param=array()) {
            $this->fileName = $fileName;
            $this->option = array_merge($this->option, $param);

            if (!file_exists($this->fileName)) {
                fopen($this->fileName, 'w') or exit ("Can't create $fileName");
            }

            if (!is_writable($this->fileName)) {
                throw new Exception("Unable to write $fileName");
            }
        }

        public function openLog () {
            $this->file = @fopen($this->fileName, 'a') or exit ("Can't open $this->fileName");

        }

        public function writeLog ($message, $severity) {
            
            if(!is_resource($this->file)) {
                $this->openLog();
            }

            $path = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
            $time = date($this->option["dateFormat"]);

            fwrite($this->file, "[$time] [$path] : [$severity] - $message" . PHP_EOL);
        }

        public function info ($message) {

            $this->writeLog($message, 'INFO');
        }

        public function warning ($message) {

            $this->writeLog($message, "WARNING");
        }

        public function debug ($message) {

            $this->writeLog($message, "DEBUG");
        }

        public function error ($message) {
            
            $this->writeLog($message, 'ERROR');
        }

        public function __destruct () {
            if ($this->file){
                fclose($this->file);
            }
        }
    }
?>