<?php 
$datosPOST = http_build_query(
    array(
        'idPlato' => $_POST['idPlatoU'],
        'nombrePlato' => $_POST['nombrePlatoU'],
        'descripcion' => $_POST['descripcionU'],
        'precio' => $_POST['precioU'],
        'imagen' => $_POST['imagenU']
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
$resultado = file_get_contents('http://localhost/APIRestauranteWEB2/actualizarPlato.php?'.$datosPOST, false, $contexto);
header('location: buscarPlato.php');

?>