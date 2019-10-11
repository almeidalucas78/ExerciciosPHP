<?php 
    
    require_once 'funcao.php';

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $op = $_POST["op"];

    echo calculadora($n1, $n2, $op);
?>