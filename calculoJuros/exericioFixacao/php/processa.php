<?php 
    
    require_once 'funcao.php';

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $op = $_POST["op"];


   

    if($op === "soma"){
        echo soma($n1, $n2);
    }
    else if($op === "sub"){
        echo sub($n1, $n2);
    }
    else if($op === "multi"){
        echo multi($n1, $n2);
    }
    else if($op === "divi"){
        echo divi($n1, $n2);
    }
    else{
        echo "erro";
    }

?>