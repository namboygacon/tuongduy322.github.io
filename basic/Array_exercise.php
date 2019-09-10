<?php

    /**
     * Format array
     * Convert array to string
     * @param: {$arr} is an array
     * @return: A string: "[value1],[value2],[value3],..."
     */
    function arrayFormat ($arr) {
        
        return implode(",", $arr);
    }

    /**
     * sumNumber
     * Calc sum of number
     * @param: {$num} is an number
     * @return: Calculate the total number
     */
    function sumNumber ($num) {
        $result = 0;

        do {
            
            $result += $num % 10;
            $num = (int)$num / 10;
        } while ($num >= 1);

        return $result;
    }

    /**
     * checkParamater
     * Validate input parameters
     * @param: {$firstArray, $secondArray, $thirdArray} are three array
     * @return: if paramerters are arrays, return 1 else throw 1 Logic Exception with message "Invalid parameter 1,2..."
     */
    function checkParamater ($firstArray, $secondArray, $thirdArray) {
        $errorMessage = '';
        $errorParameters = array ();
        
        if (!is_array($firstArray) || !isset($firstArray)) {

            $errorParameters[] = 1;
        }

        if (!is_array($secondArray) || !isset($secondArray)) {

            $errorParameters[] = 2;
        }

        if (!is_array($thirdArray) || !isset($thirdArray)) {

            $errorParameters[] = 3;
        }

        if (count($errorParameters) > 0) {

            $stringErrorParameter = implode (", ", $errorParameters);
            $errorMessage = "Invalid parameter " . $stringErrorParameter;
        }

        if (!empty($errorMessage)) {

            throw new LogicException($errorMessage);
        }
        
        return 1;
    }

    /**
     * findOneInArray
     * Find number in first array
     * @param: {$num, $arr} $num is a number, $arr is an array
     * @return: return found if number is found in array else return not found
     */
    function findOneInArray ($num, $arr) {
        if (in_array($num, $arr)) {

            return  "Found";
        } else {
            
            return  "Not found";
        }
    }

    /**
     * mergeArray
     * merge 2 arrays into 1 array
     * @param : {$arr1, $arr2} array two arrays
     * @return : A result array: item 1 is a combination of 2 arrays, item 2 is a string converted from array
     */
    function mergeArray ($arr1, $arr2) {

        $resultArr = array_merge($arr1, $arr2);
        $resultArr = array_unique($resultArr);
        $stringResult = arrayFormat($resultArr);

        return array (
           "arr" => $resultArr,
           "str" => $stringResult
        );
    }

    /**
     * filterEvenArr
     * Filter even values in array
     * @param : {$arr)} is a array
     * @return : a result array with item 1 is an array filtered from $arr, item 2 is a string converted from array
     */
    function filterEvenArr ($arr) {

        $filterArr = array_filter ($arr, function ($item) {
            return (sumNumber($item) % 2 == 0);
        });
        $stringResultArray = arrayFormat($filterArr);

        return array (
            "arr" => $filterArr,
            "str" => $stringResultArray
        );
    }

    /**
     * filterDiffKeyArr
     * Finds the non-repeated values between 2 arrays
     * @param : {$arr1, $arr2} are 2 array
     * @return : A result array with item 1 is a array filtered and item 2 is a string converted from array
     */
    function filterDiffKeyArr ($arr1, $arr2) {

        $diffKeys = array_keys($arr1);
        $diffKeys = array_diff($diffKeys, $arr2);
        $diffArr = array_intersect_key($arr1, array_flip($diffKeys));
        rsort($diffArr);
        $formatDiffResult = arrayFormat($diffArr);

        return array (
            "arr" => $diffArr,
            "str" => $formatDiffResult
        );
    }

    /**
     * filterIntersect
     * Finds the repeated values between 2 arrays
     * @param : {$arr1, $arr2} are 2 arrays
     * @return : a result array with item 1 is a array filtered and item 2 is a string converted from array
     */
    function filterIntersect ($arr1, $arr2) {

        $intsResult = array_intersect($arr1, $arr2);
        sort($intsResult);
        $stringIntsResult = arrayFormat($intsResult);

        return array (
            "arr" => $intsResult,
            "str" => $stringIntsResult
        );
    }

    /**
     * handleArray
     * Main function call functions and print results
     * @param : {$firstArray, $secondArray, $thirdArray}
     */
    function handleArray($firstArray, $secondArray, $thirdArray) {

        try {
            checkParamater($firstArray, $secondArray, $thirdArray);
            
            /**
             * 1. Search for number 1 in the 1st array. Echo raises "Found"
             * if found or "Not found" otherwise
             */
            echo findOneInArray(1, $firstArray), "<br>";

            /**
             * 2. Merge the 2nd and 3rd arrays again, delete duplicates, 
             * echo the result to the screen in the format of string (*)
             */
            list($resultArray, $formatResult) = array (
                mergeArray($secondArray, $thirdArray)['arr'],
                mergeArray($secondArray, $thirdArray)['str']
            );

            echo $formatResult, '<br>';

            /**
             * 3.Print out all values of (*) 
             * whose sum of digits is divisible by 2.
             */
            list($filterResultArray, $formatResultArray) = array (
                filterEvenArr($resultArray)['arr'],
                filterEvenArr($resultArray)['str']
            );

            echo $formatResultArray, "<br>";

            /**
             * 4. Print out all the (ascending sorted) 
             * values of the 1st array that it exists in (*)
             */
            list($intsResult, $formatIntsResult) = array (
                filterIntersect($firstArray, $resultArray)['arr'],
                filterIntersect($firstArray, $resultArray)['str']
            );

            echo $formatIntsResult, "<br>";

            /**
             * 5. Print out all the (sorted by descending) 
             * values of the 1st array, whose key is not in (*)
             */
            list($diffResult, $formatDiffResult) = array (
                filterDiffKeyArr ($firstArray, $resultArray)['arr'],
                filterDiffKeyArr($firstArray, $resultArray)['str']
            );
    
            echo $formatDiffResult;

        } catch (LogicException $e) {

            echo $e -> getMessage();
        }

        return 1;
    }

    // Three input arrays
    $firstArray = array (1, 2, 3, 9);
    $secondArray = array (1, 2, 3, 4, 111);
    $thirdArray = array (1, 444, 2, 212, 55);
    
    handleArray($firstArray, $secondArray, $thirdArray);
?>