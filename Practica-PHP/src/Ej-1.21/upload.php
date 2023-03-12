<?php
if(isset($_FILES['image'])) {
	$allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
	$file_extension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

	if(in_array($file_extension, $allowed_extensions)) {
		if(move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $_FILES['image']['name'])) {
			echo 'La imagen se ha subido correctamente.';
		} else {
			echo 'Ha ocurrido un error al subir la imagen.';
		}
	} else {
		echo 'El archivo no es una imagen válida.';
	}
}
?>
