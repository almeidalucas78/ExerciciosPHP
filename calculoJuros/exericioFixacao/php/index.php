<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/index.css" type="text/css">
    <title>Exercicio</title>
</head>

<body>

    <div class="areaFormulario"> 

        <h1>Calculadora Bolada</h1>
        <form class="form"  action="processa.php" method="POST">
            <label>1º Número:</label>
            <input type="number" name="n1" placeholder="Digite o primeiro número"><br><br>
            <label>2º Número:</label>
            <input type="number" name="n2" placeholder="Digite o segundo número"><br><br>
            <label>Selecione a Operação:</label>
            <select name="op" id="op">
                <option value="soma">Soma</option>
                <option value="sub">Subtração</option>
                <option value="divi">Divisão</option>
                <option value="multi">Multiplicação</option>
            </select><br><br>

            <input class="btnCalcular" type="submit" value="Calcular">
        </form>

        <?php 

        ?>
    </div>

</body>

</html>