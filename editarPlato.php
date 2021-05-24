<?php
session_start();
session_destroy();
if (isset($_SESSION['idPlato'])) {
    $idPlato = $_SESSION['idPlato'];
} else {
    $idPlato = '';
}

if (isset($_SESSION['nombrePlato'])) {
    $nombrePlato = $_SESSION['nombrePlato'];
} else {
    $nombrePlato = '';
}

if (isset($_SESSION['descripcion'])) {
    $descripcion = $_SESSION['descripcion'];
} else {
    $descripcion = '';
}

if (isset($_SESSION['precio'])) {
    $designation = $_SESSION['precio'];
} else {
    $precio = '';
}

if(isset($_SESSION['imagen'])){
    $imagen = $_SESSION['imagen'];
} else {
    $imagen = '';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formStyle.css">
    <title>Edición de Platos</title>
</head>

<body>
<script>
    function updateemployee()
    {
        document.getElementById('idPlatoU').value = document.getElementById('idPlato').value;
        // document.getElementById('idd').value = document.getElementById('id').value;
        document.getElementById('nombrePlatoU').value = document.getElementById('nombrePlato').value;
        document.getElementById('descripcionU').value = document.getElementById('descripcion').value;
        document.getElementById('precioU').value = document.getElementById('precio').value;
        document.getElementById('imagrnU').value = document.getElementById('imagen').value;
    }
</script>

    <!-- ------------------------------------------------------------------- -->

    <main>
        <div class="background">
            <div class="container">
                <div class="screen">
                    <div class="screen-header">
                        <div class="screen-header-left">
                            <div class="screen-header-button close"></div>
                            <div class="screen-header-button maximize"></div>
                            <div class="screen-header-button minimize"></div>
                        </div>
                        <div class="screen-header-right">
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                        </div>
                    </div>
                    <div class="screen-body">
                        <div class="screen-body-item left">
                            <div class="app-title">
                                <span>Edita el</span>
                                <span>Plato del Menú</span>
                            </div>
                            <div class="app-contact">Copy Rigths By Gururaj</div>
                        </div>

                        <div class="screen-body-item">
                            <form class="app-form" method="POST" action="actualizarPlato.php">
                                <div class="app-form-group">
                                    <input type="text" class="app-form-control" placeholder="ID del Plato" name="idPlatoU" id="idPlatoU">
                                    <br>
                                </div>
                                <div class=" app-form-group">
                                    <input type="text" class="app-form-control" placeholder="Nombre del Plato" name="nombrePlatoU" id="nombrePlatoU">
                                </div>
                                <div class="app-form-group">
                                    <input type="text" class="app-form-control" placeholder="Descripción" name="descripcionU" id= "descripcionU">
                                </div>
                                <div class="app-form-group">
                                    <input type="number" class="app-form-control" placeholder="Precio" name="precioU" id="precioU">
                                </div>
                                <div class="app-form-group">
                                    <input type="text" class="app-form-control" placeholder="Imagen del Plato" name="imagenU" id= "imagenU">
                                </div>
                                <div class="app-form-group buttons">
                                    <button type="submit" class="app-form-button">Editar</button>
                                    <button type="button" onclick="limpiarCampos()" class="app-form-button">Limpiar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="credits">
                    inspired by
                    <a class="credits-link" href="https://dribbble.com/shots/2666271-Contact" target="_blank">
                        <svg class="dribbble" viewBox="0 0 200 200">
                            <g stroke="#ffffff" fill="none">
                                <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
                                <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
                                <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
                                <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
                            </g>
                        </svg>
                        Gururaj
                    </a>
                </div>
            </div>
        </div>

    </main>

    <script>
        function limpiarCampos(){
      document.getElementById("idPlatoU").value = ''
      document.getElementById("nombrePlatoU").value = ''
      document.getElementById("descripcionU").value = ''
      document.getElementById("precioU").value = ''
      document.getElementById("imagenU").value = ''
  }
    </script>

</body>

</html>