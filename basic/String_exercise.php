<?php

    function checkString ($str) {
        $errorMessage = '';

        if (!is_string($str)) {

            $errorMessage = 'Invalid parameter';
        }

        if (!empty($errorMessage)) {

            throw new LogicException ($errorMessage);
        }
    }

    // 1
    function printString () {

        return array (
            'single_quote' => 'Money $__$ money',
            'double_quote' => "Money \$__$ money"
        );
    }

    // 2
    function searchString ($str, $search) {
        
        if (!is_string($search) || $search === '') {

            return false;
        }

        return (strpos($str, $search) !== false) ? true : false;
    }

    // 3
    function checkMultiByte ($str) {

        return (mb_strlen($str) !== strlen($str));
    }

    // 4.1
    function removeLetterR ($str) {
        
        return rtrim($str, 'm');
    }

    //4.2
    function removeLetterL ($str) {

        $tmp = strrev($str);
        $tmp = ltrim($tmp, 'm');

        return strrev($tmp);
    }
    
    function handleString ($str) {
        try {

            checkString($str);
            
            // 1.
            echo printString ()['single_quote'], '<br>';
            echo printString ()['double_quote'], '<br>';

            // 2.
            var_dump (searchString($str, 'u'));
            echo "<br>";

            // 3.
            var_dump(checkMultiByte ($str));
            echo "<br>";

            // 4
            echo removeLetterR($str), '<br>';
            echo removeLetterL($str), '<br>';
        } catch (LogicException $e) {

            echo $e -> getMessage ();
        }
    }

    $str = 'trim';
    handleString ($str);
?>