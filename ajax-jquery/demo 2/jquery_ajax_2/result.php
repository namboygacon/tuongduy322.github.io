<?php
    if (isset($_POST["number"])) {
        $input = $_POST["number"];
        $params = explode(",", $input);
        $sum = 0;
        $multi = 1;
        for ($i = 0; $i < count($params); $i ++){
            $sum += $params[$i];
            $multi *= $params[$i];
        }
        $result = array (
            "sum" => $sum,
            "mul" => $multi
        );
        die(json_encode($result));
    }
?>