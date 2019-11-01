<?php
namespace App\View\Helper;
use Cake\View\Helper;

class MathHelper extends Helper {
    public function square($number) {
        return $number * $number;
    }
    public function stringLen($str) {
        return strlen($str);
    }
}
?>