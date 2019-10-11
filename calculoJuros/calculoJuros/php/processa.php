<?php 
    
    require_once 'funcao.php';

    $valor = $_POST["valor"];
    $porcentagem = $_POST["porcentagem"];
    $op = $_POST["op"];

    echo calcular($valor, $porcentagem, $op);
?>