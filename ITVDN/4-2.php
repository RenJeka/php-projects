<?php
    $num1 = 22;
    $num2 = 5587;
    $operationSigh = "+";

    function calculation($sigh){
        global $num1, $num2;
        $result = 0;
        switch ($sigh){
            case "+": $result = $num1 + $num2;
                break;
            case "-": $result = $num1 - $num2;
                break;
            case "*": $result = $num1 * $num2;
                break;
            case "/": $result = $num1 / $num2;
                break;
            default: $result = $result;
        }
        echo $result;
        return $result;
    }

    calculation("+");
