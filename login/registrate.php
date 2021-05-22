<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$clave = $_POST['clave'];
	$clave2 = $_POST['clave2'];

	$errores = '';

	if (empty($usuario) or empty($clave) or empty($clave2)) {
		$errores .= '<li>Por favor rellena todos los datos</li>';
	} else {
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=restaurantejdf', 'root', '');
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();




		
		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}
		//HASS DE LA CONTRASEñA (encriptar)
		$clave = hash('sha512', $clave);
		$clave2 = hash('sha512', $clave2);

		if ($clave != $clave2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}
	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO usuarios (idUsuario, usuario, clave) VALUES (null, :usuario, :clave)');
		$statement->execute(array(':usuario' => $usuario, ':clave' => $clave));

		header('Location: login.php');
	}
}
require 'views/registrate.view.php';
?>