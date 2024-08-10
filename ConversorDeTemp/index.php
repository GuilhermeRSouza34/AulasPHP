<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Conversor de Temperatura</h1>
        <form action="convert.php" method="post">
            <label for="temperature">Temperatura: </label>
            <input type="number" name="temperature" id="temperature" step="0,01" required>
        
            <label for="from">De: </label>
            <select name="from" id="from" required>
                <option value="Celsius">Celsius</option>
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Kelvin">Kelvin</option>
            </select>

            <label for="to">Para: </label>
            <select name="to" id="to" required>
                <option value="Celsius">Celsius</option>
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Kelvin">Kelvin</option>
            </select>
        
            <button type="submit">Converter</button>
        </form>
    </div>
</body>
</html>