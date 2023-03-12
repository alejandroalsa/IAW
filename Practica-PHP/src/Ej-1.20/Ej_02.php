<!DOCTYPE html>
<html>
<head>
    <title>Formulario POST</title>
</head>
<body>
    <h2>Formulario POST</h2>
    <form method="post">
        <label for="nombre">Ingresa tu nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            echo "<p>Tu nombre es: $nombre</p>";
        }
    ?>
</body>
</html>
