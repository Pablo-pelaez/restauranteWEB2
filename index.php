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
      Mission statements are often paired with company values and/or a vision. Together, a mission, vision, and values describe what your restaurant stands for. In other words, they collectively serve as a compass for your business, guiding you towards your north star – the goals that you hope to achieve through your restaurant.
      </p>
    
    </div>
  </div>

  <!-- ------------------------------------------------------------------------------------- -->

  <h1 class="title"> Nuestra especialidad</h1>
    
    <div class="container">
       
        <div class="card">
            <img src="../../../ImagenesRestaurante/pasta.jpg">
            <h4>Pasta Italiana</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">Ver más platos</a>
        </div>
        
        <div class="card">
            <img src="../../../ImagenesRestaurante/tacos.jpg">
            <h4>Tacos</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">Ver más platos</a>
        </div>
        
        <div class="card">
            <img src="../../../ImagenesRestaurante/sandwich.jpg">
            <h4>Sánduches</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="#">Ver más platos</a>
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