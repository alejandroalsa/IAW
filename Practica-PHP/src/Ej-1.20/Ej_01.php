<!DOCTYPE html>
<html>
<head>
    <title>Formulario GET</title>
</head>
<body>
    <h2>Formulario GET</h2>
    <form method="get">
        <label for="nombre">Ingresa tu nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            echo "<p>Tu nombre es: $nombre</p>";
        }
    ?>
</body>
</html>
