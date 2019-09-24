<?php
    class Log {
        
        public function write ($fileName, $data) {

            if (!is_writeable($fileName)) {

                die ("Change your CHMOD permission to " . $fileName);
            }

            $fp = @fopen($fileName, 'a+');
            fwrite($fp, $data);

            fclose($fp);
        }

        public function read ($fileName) {
            $fp = @fopen ($fileName, 'r');

            return file_get_contents($fileName);
        }
    }
?>