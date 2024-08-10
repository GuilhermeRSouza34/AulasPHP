<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora em PHP</title>
</head>
<body>
    <div class="calculadora">
        <form method="post" action="calcular.php">
            <input type="text" name="num1" placeholder="Numero 1" required>
            <input type="text" name="num2" placeholder="Numero 2" required>
            <select name="operacao" required>
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="submit" name="calculate" value="Calcular">
        </form>
    </div>
</body>
</html>