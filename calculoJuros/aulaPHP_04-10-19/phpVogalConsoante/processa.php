<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php 
    require_once "class/consoanteVogal.class.php";
    $verificar = new tamburete;
    $verificar->setLetra($_POST["letra"]);
    echo "{$verificar->getLetra()}";
?>
</body>
</html>