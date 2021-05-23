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
                <li><a href="index.php">Inicio</a></li>
                <li><a class="active" href="menu.php">Menú</a></li>
                <li><a href="#">Bodega</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="#">Contáctenos</a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <div class="banner"></div>
    <div class="about">
        <div class="content">
            <div class="title">
                BIENVENIDOS A DELL'SON RISTORANTE
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui sapiente
                recusandae reprehenderit tempora est! Voluptates quaerat iste eius
                nisi minima repudiandae. Delectus doloremque ratione sint eum
                mollitia, pariatur esse unde quibusdam atque commodi impedit voluptas,
                ipsam nesciunt natus. Iure aliquam eos libero dignissimos animi,
                debitis repudiandae expedita possimus nemo odio laudantium quo modi
                quas fuga, non, eum voluptatum amet pariatur ducimus recusandae
                laboriosam? Consectetur odio omnis odit placeat temporibus. Aut
                debitis minima accusantium beatae distinctio, aliquam amet!
            </p>

        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------- -->

    <h1 class="title"> Menú de Comida</h1>
    <h2 class="title">CULTURA CHINA</h2>
    <div class="container">

        <div class="card">
            <img src="../ImagenesRestaurante/dimsum.jpg">
            <h4>Dim Sum</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">$15.000</a>
        </div>

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

    </div>

    <!-- ------------------------------------------------------------------------- -->

    <h2 class="title">CULTURA MEXICANA</h2>
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

    </div>

    <!-- --------------------------------------------------------------------- -->

    <h2 class="title">CULTURA COLOMBIANA</h2>
    <div class="container">
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

    </div>

    <!-- --------------------------------------------------------------------------- -->

    <h2 class="title">CULTURA ITALIANA</h2>
    <div class="container">
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
        </div>

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