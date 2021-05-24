<?php 
    session_start();
    $datosPOST = http_build_query(
        array(
            'idPlato' => $_POST['idPlato']
        )
    );
    $opciones = array('http' =>
        array(
            'method' => 'GET',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => $datosPOST
        )
        );
    $contexto = stream_context_create($opciones);
    $data = json_decode(file_get_contents('http://localhost/APIRestauranteWEB2/consultaIndividualPlato.php?'.$datosPOST,true,$contexto));
    // Crear de variables de sesion para cada campo
    $_SESSION['idPlato'] = $data->idPlato;
    $_SESSION['nombrePlato'] = $data->nombrePlato;
    $_SESSION['descripcion'] = $data->descripcion;
    $_SESSION['precio'] = $data->precio;
    $_SESSION['imagen'] = $data->imagen;
    header('location:buscarPlato.php');

?>