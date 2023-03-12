<!DOCTYPE html>
<html>
<head>
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h2>Tabla de multiplicar</h2>
    <form method="get">
        <label for="numero">Ingresa un número:</label>
        <input type="number" name="numero" id="numero">
        <br><br>
        <input type="submit" value="Mostrar tabla">
    </form>

    <?php
        if(isset($_GET['numero'])) {
            $numero = $_GET['numero'];
            echo "<h3>Tabla de multiplicar del $numero:</h3>";
            echo "<table>";
            for($i=1; $i<=10; $i++) {
                echo "<tr><td>$numero x $i</td><td>= " . ($numero * $i) . "</td></tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>
