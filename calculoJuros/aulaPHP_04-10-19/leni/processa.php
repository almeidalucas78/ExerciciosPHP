<?php
	require_once "class/Calcula.class.php";
	$calcular = new Calcula;
	$calcular->setValor($_POST["valor"]);
	echo "O valor é: {$calcular->getValor()}"
?>