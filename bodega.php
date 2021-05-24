<?php
//file_get_contents Transmite un fichero completo a una cadena $data
$data = json_decode(file_get_contents('http://localhost/APIRestauranteWEB2/consultaPlato.php?'), true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dell'Son Ristorante</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <nav class="navbar">
        <div class="content">
            <div class="logo"><a href="index.php">Dell'Son Ristorante</a></div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li><a class="active" href="index.php">Inicio</a></li>
                <li><a href="menu.php">Menú</a></li>
                <li><a href="bodega.php">Bodega</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="#">Contáctenos</a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <div class="banner3"></div>
    <div class="about">
        <div class="content">
            <div class="title">
                BIENVENIDOS A DELL'SON RISTORANTE
            </div>
            <p>
                Mission statements are often paired with company values and/or a vision. Together, a mission, vision, and values describe what your restaurant stands for. In other words, they collectively serve as a compass for your business, guiding you towards your north star – the goals that you hope to achieve through your restaurant.
            </p>

        </div>
    </div>

    <!------------------------------------------------------------------------------ -->
    <div class="btcontainer">
        <a href="crearPlato.php" class="boton">CREAR NUEVO PLATO</a>
    </div>


    <div class="container">

    <?php foreach ($data['body'] as $row) : ?>
    
        <div class="card">
            <img src="<?php echo ($row["imagen"]) ?>">
            <h4><?php echo ($row["nombrePlato"]) ?></h4>
            <p><?php echo ($row["descripcion"]) ?></p>
            <div><a href="#"><?php echo ($row["precio"]) ?></a></div>
            <div><a href="buscarPlato.php">Consultar Plato</a></div>
            <div><a href="editarPlato.php">Editar Plato</a></div>
            <div><a href="eliminarPlato.php">eliminar Plato</a></div>
        </div>

    <?php endforeach ?>
        <!--
        <div class="card">
            <img src="../ImagenesRestaurante/dumplings.jpg">
            <h4>Dumpling</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$12.000</a>
        </div>

        <div class="card">
            <img src="../ImagenesRestaurante/sushi.jpg">
            <h4>Sushi</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$18.000</a>
        </div>

        <div class="container">

        <div class="card">
            <img src="../ImagenesRestaurante/tacos.jpg">
            <h4>Tacos</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$10.000</a>
        </div>

        <div class="card">
            <img src="../ImagenesRestaurante/enchiladas.jpg">
            <h4>Enchiladas</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$14.000</a>
        </div>

        <div class="card">
            <img src="../ImagenesRestaurante/nachos.jpg">
            <h4>Nachos</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$18.000</a>
        </div>

        <div class="card">
            <img src="../ImagenesRestaurante/sancocho.jpg">
            <h4>Sancocho</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$10.000</a>
        </div>

        <div class="card">
            <img src="../ImagenesRestaurante/bandejaPaisa.jpg">
            <h4>Bandeja Paisa</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$13.000</a>
        </div>

        <div class="card">
            <img src="../ImagenesRestaurante/sandwich.jpg">
            <h4>Sánduche</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$9.000</a>
        </div>

        <div class="card">
            <img src="../ImagenesRestaurante/pasta.jpg">
            <h4>Pasta</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$11.000</a>
        </div>

        <div class="card">
            <img src="../ImagenesRestaurante/lasagna.jpg">
            <h4>Lasagna</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$20.000</a>
        </div>

        <div class="card">
            <img src="../ImagenesRestaurante/pizza.jpg">
            <h4>Pizza</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$29.000</a>
        </div> -->

    </div>

    <!-- --------------------------------------------------------------------------- -->


    <script>
        const body = document.querySelector("body");
        const navbar = document.querySelector(".navbar");
        const menu = document.querySelector(".menu-list");
        const menuBtn = document.querySelector(".menu-btn");
        const cancelBtn = document.querySelector(".cancel-btn");
        menuBtn.onclick = () => {
            menu.classList.add("active");
            menuBtn.classList.add("hide");
            body.classList.add("disabledScroll");
        };
        cancelBtn.onclick = () => {
            menu.classList.remove("active");
            menuBtn.classList.remove("hide");
            body.classList.remove("disabledScroll");
        };

        window.onscroll = () => {
            this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky")
        }
    </script>
</body>

</html>