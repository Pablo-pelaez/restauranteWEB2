<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../views/formStyle.css">
	<title>Iniciar Sesion</title>
</head>

<body>
	<div class="body"></div>
	<div class="grad"></div>
	<div class="header">
		<div>Site<span>Random</span></div>
	</div>
	<br>
	<form method="POST" action="../login.php" class="login" name="login">
		<input type="text" name="usuario" placeholder="Usuario"><br>
		<input type="password" placeholder="Contraseña" name="clave"><br>
		<button type="button" value="login" onclick="login.submit()">Iniciar Sesión</button>
		<button type="button" value="login"><a href="registrate.view.php">Regístrate aquí</a></button>
	</form>

	<!--Mensaje de error -->
	<?php if (!empty($errores)) : ?>
		<div>
			<ul>
				<?php echo $errores; ?>
			</ul>
		</div>
	<?php endif; ?>

</body>

</html>