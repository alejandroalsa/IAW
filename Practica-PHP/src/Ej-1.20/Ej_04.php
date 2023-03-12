<!DOCTYPE html>
<html>
<head>
    <title>Lanzamiento de monedas</title>
</head>
<body>
    <h2>Lanzamiento de monedas</h2>
    <form method="get">
        <label for="cantidad">Cantidad de monedas:</label>
        <input type="number" name="cantidad" id="cantidad" min="1" max="20">
        <br><br>
        <label for="tipo">Tipo de moneda:</label>
        <select name="tipo" id="tipo">
            <option value="USD">Dólar Estadounidense</option>
            <option value="EUR">Euro</option>
            <option value="ESP">Peseta Española</option>
            <option value="GBP">Libra esterlina</option>
            <option value="CHF">Franco suizo</option>
        </select>
        <br><br>
        <input type="submit" value="Lanzar monedas">
    </form>

    <?php
        // Arreglo asociativo de imágenes de monedas
        $imagenes = array(
            "USD" => "https://www.random.org/coins/faces/60-usd/0001c/obverse.jpg",
            "EUR" => "https://www.random.org/coins/faces/60-eur/spain-1euro/obverse.jpg",
            "ESP" => "https://www.random.org/coins/faces/60-esp/5ptas/obverse.jpg",
            "GBP" => "https://www.random.org/coins/faces/60-gbp/1pound/obverse.jpg",
            "CHF" => "https://www.random.org/coins/faces/60-chf/1franc/obverse.jpg"
        );

        if(isset($_GET['cantidad']) && isset($_GET['tipo'])) {
            $cantidad = $_GET['cantidad'];
            $tipo = $_GET['tipo'];
            echo "<h3>Lanzamiento de $cantidad monedas de $tipo:</h3>";
            echo "<p>Resultado:";
            for($i=1; $i<=$cantidad; $i++) {
                if(rand(0, 1) == 1) {
                    $imagen = $imagenes[$tipo];
                } else {
                    // Usar la imagen en reversa de la moneda seleccionada
                    $imagen = str_replace("obverse", "reverse", $imagenes[$tipo]);
                }
                echo "<img src='$imagen' alt='$tipo'> ";
            }
            echo "</p>";
        }
    ?>
</body>
</html>
