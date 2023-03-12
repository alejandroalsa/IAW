<!DOCTYPE html>
<html>
<head>
	<title>Previsión meteorológica</title>
</head>
<body>
	<h1>Previsión meteorológica</h1>
	<form method="POST">
		<label for="city">Introduce la ciudad:</label>
		<input type="text" name="city" id="city">
		<input type="submit" value="Consultar previsión">
	</form>
	<?php
		if(isset($_POST['city'])) {
			$city = $_POST['city'];
			$api_key = '45ab341ff7a856dc660dc9c6a12cc6ef'; // Reemplaza esto por tu propia API key de OpenWeatherMap

			// URL de la API
			$url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key&units=metric&lang=es";

			// Realizamos una petición HTTP a la API
			$response = file_get_contents($url);

			// Decodificamos la respuesta JSON
			$data = json_decode($response);

			// Mostramos la información de la previsión meteorológica
			echo "<h2>Previsión meteorológica para $city</h2>";
			echo "<p>Temperatura: " . $data->main->temp . " °C</p>";
			echo "<p>Clima: " . $data->weather[0]->description . "</p>";
			echo "<p>Humedad: " . $data->main->humidity . "%</p>";
			echo "<p>Velocidad del viento: " . $data->wind->speed . " km/h</p>";
		}
	?>
	<h2>En su día profesor cree una web que realiza la misma función que esta, pero más bonita</h2>
	<a href="https://apps.alejandroalsa.es/proyectos/weather-app/">Weather APP Web alejandroalsa.es</a>
</body>
</html>
