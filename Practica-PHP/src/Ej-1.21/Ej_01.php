<!DOCTYPE html>
<html>
<head>
	<title>Subir imagen</title>
</head>
<body>
	<h1>Subir imagen</h1>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<label for="image">Selecciona una imagen:</label>
		<input type="file" name="image" id="image" accept="image/*">
		<input type="submit" value="Subir imagen">
	</form>
</body>
</html>
