<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de temperatura</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $tempC = $_POST['temperaturaC'] ?? 0;
        $tempF = ($tempC * 9/5) + 32; 
        $tempK = $tempC + 273.15;
        ?>


        <h1>Converter para °F e K</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="temperaturaC">Temperatura em °C</label>
            <input type="number" name="temperaturaC" id="temperaturaC" value="<?=$tempC?>">
            <input type="submit" value="Converter">
        </form>

        <section>
            <h2>Resultado em Fahrenheit (°F) e Kelvin (K)</h2>
            <?php 
                echo "<p>A temperatura $tempC °C equivale a <strong>$tempF °F e $tempK K.</strong></p>"
            ?>
        </section>
    </main>
</body>
</html>