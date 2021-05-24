<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formStyle.css">
    <title>Creación de Platos</title>
</head>

<body>



    <header></header>

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
                                <span>Agrega tu Nuevo</span>
                                <span>Plato al Menú</span>
                            </div>
                            <div class="app-contact">Copy Rigths By Gururaj</div>
                        </div>
                        <div class="screen-body-item">
                            <form class="app-form" method="POST" action="guardarPlato.php">
                                <div class="app-form-group">
                                    <input required type="text" class="app-form-control" placeholder="Nombre del Plato" name="nombrePlato">
                                    <span style="color: red;"  ></span>
                                </div>
                                <div class="app-form-group">
                                    <input required type="text" class="app-form-control" placeholder="Descripción" name="descripcion">
                                </div>
                                <div class="app-form-group">
                                    <input required type="number" class="app-form-control" placeholder="Precio" name="precio">
                                </div>
                                <div class="app-form-group">
                                    <input required type="text" class="app-form-control" placeholder="Imagen del Plato" name="imagen">
                                </div>
                                <div class="app-form-group buttons">
                                    <button type="submit" class="app-form-button">Agregar</button>
                                    <button type="button" class="app-form-button">Limpiar</button>
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
        function limpiarCampos() {
            document.getElementById("idPlato").value = ''
            document.getElementById("nombrePlato").value = ''
            document.getElementById("descripcion").value = ''
            document.getElementById("precio").value = ''
            document.getElementById("imagen").value = ''
        }

        // function validacion() {
        //     idPlato = document.getElementById("idPlato").value
        //     nombrePlato = document.getElementById("nombrePlato").value
        //     descripcion = document.getElementById("descipcion").value
        //     precio = document.getElementById("precio").value
        //     imagen = document.getElementById("imagen").value

        //     if (isNaN(precio)) {
        //         return false;
        //     }

        //     if (nombrePlato == null || nombrePlato.length == 0 || /^\s+$/.test(nombrePlato)) {
        //         error.html('<span>Todos los campos son obligatorios</span>');
        //         return false;
        //     }
        //     if (descripcion == null || descripcion.length == 0 || /^\s+$/.test(descripcion)) {
        //         error.html('<span>Todos los campos son obligatorios</span>');
        //         return false;
        //     }
        //     if (imagen == null || imagen.length == 0 || /^\s+$/.test(imagen)) {
        //         error.html('<span>Todos los campos son obligatorios</span>');
        //         return false;
        //     }
        // }
    </script>

</body>

</html>