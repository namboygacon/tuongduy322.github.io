<?php

    /**
     * Check parameter is string
     * @param {$str} is a string
     */
    function checkString ($str) {
        $errorMessage = '';

        if (!is_string($str)) {

            $errorMessage = 'Invalid parameter';
        }

        if (!empty($errorMessage)) {

            throw new LogicException ($errorMessage);
        }
    }

    /**
     * Print Money $__$ money with single_quote and double_quote
     */
    function printString () {

        return array (
            'single_quote' => 'Money $__$ money',
            'double_quote' => "Money \$__$ money"
        );
    }

    /**
     * @param {$str, $search} $str are strings.
     * @return : a result is a boolean value, true if found, false if not found or $search not a string
     */
    function searchString ($str, $search) {
        
        if (!is_string($search) || $search === '') {

            return false;
        }

        return (strpos($str, $search) !== false) ? true : false;
    }

    // 3
    /**
     * Check string is MultiByte
     * @param {$str} is a string
     * @return : a result is a boolean value, true if is MultiByte, false if is not MultiByte
     */
    function checkMultiByte ($str) {

        return (mb_strlen($str) !== strlen($str));
    }

    /**
     * remove 'm' character in a string
     * @param {$str} is s string
     * @return : return a string after the m character has been removed with rtrim() function
     */
    function removeLetterR ($str) {
        
        return rtrim($str, 'm');
    }

    /**
     * remove 'm' character in a string
     * @param {$str} is s string
     * @return : return a string after the m character has been removed with ltrim() function
     */
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