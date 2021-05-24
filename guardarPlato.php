<?php 
$datosPOST = http_build_query(
    array(
        'nombrePlato' => $_POST['nombrePlato'],
        'descripcion' => $_POST['descripcion'],
        'precio' => $_POST['precio'],
        'imagen' => $_POST['imagen']
    )
    );

// stream_context_create: crear un contexto de flujo (debe ser un arreglo asociativo)

$opciones = array('http'=>
    array(
        'method' => 'GET',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => $datosPOST
    )    
    );

$contexto = stream_context_create($opciones);
$resultado = file_get_contents('http://localhost/APIRestauranteWEB2/crear.php?'.$datosPOST, false, $contexto);
header('location: crearPlato.php');
?>