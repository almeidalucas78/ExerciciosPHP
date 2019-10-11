<?php 
    function calculadora($a, $b, $c){
        switch($c){
            //adição
            case "soma":
                $res = $a +$b;
                return $res;   
           break;

           //subtração
            case "sub":
                $res = $a - $b;
                return $res;
            break;

            //multiplicação
            case "multi":
                $res = $a * $b;
                return $res;
            break;

            //divisão
            default:
                $res = $a / $b;
                return $res;
        }
    }
?>