<html>
	<head>
		<title>Prueba de PHP - alejocas</title>
	</head>
	<body>
		<?php
		if(isset($_GET['nombre'])){
			$nombre = $_GET['nombre'];
		} else {
			$nombre = "¿Quieres ingresar un nombre?, prueba añadiendo a la URL este código: ?nombre=Elkin";
		}
		?>
		<p>Hola mundo -> <?php echo $nombre ?> :D</p>
	</body>
</html>
