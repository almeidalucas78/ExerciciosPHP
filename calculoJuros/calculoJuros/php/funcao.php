
<?php 
        function calcular($v, $p, $c){
            switch($c){
               case 'j':
                    $result = ($v * $p) / 100;
                    $result = $result + $v;
                    return $result;
               break;
               
               default:
                    $result = ($v * $p) / 100;
                $result = $v - $result;
               return $result;
            }
        }
?>