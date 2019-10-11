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

        <h1>Calcular Cobrança</h1>
        <form class="form"  action="processa.php" method="POST">
            <label>Valor:</label>
            <input class="formValor" type="number" name="valor" placeholder="Digite valor"><br><br>
            <label>procentagem:</label>
            <input  class="formPorcentagem" type="number" name="porcentagem" placeholder="Digite a porcentagem"><br><br>
            <label>Operação:</label>
            <select class="select" name="op" id="op">
                <option value="j">Juros</option>
                <option value="d">Desconto</option>
           
            </select><br><br>

            <input class="btnCalcular" type="submit" value="Calcular">
        </form>

        <?php 

        ?>
    </div>

</body>

</html>