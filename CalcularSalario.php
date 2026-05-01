<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Calculo de Salário</title>
    <link rel="stylesheet" href="CalcularSalario.css">
</head>
<body>
    <div class="StartText">
        <h1>Calculadora de Salário</h1>
    </div>

    <div class="container">
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $horas = $_POST["txthoras"];
            $valor = $_POST["txtvalor"];
            $salario = $horas * $valor;
            echo "O salário é: R$ " . number_format($salario, 2, ",", ".");
        }
    ?>
    </div>
</body>
</html>