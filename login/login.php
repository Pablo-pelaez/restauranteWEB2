<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$clave = $_POST['clave'];
	$clave = hash('sha512', $clave);


	try {
		$conexion = new PDO('mysql:host=localhost;dbname=restaurantejdf', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();;
	}

	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND clave = :clave'
	);
	$statement->execute(array(
		':usuario' => $usuario, 
		':clave' => $clave
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}


require 'views/login.view.php';

?>