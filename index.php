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
        <div class="logo"><a href="#">Dell'Son Ristorante</a></div>
        <ul class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">Contact</a></li>
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
          Responsive Sticky Navigation Bar On Scroll Using HTML CSS & JavaScript
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
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat vitae
          delectus a dolores, corrupti qui pariatur repudiandae, illo asperiores
          ratione ullam placeat iusto esse consequatur aspernatur nihil? Officia
          neque suscipit cumque quia eligendi, libero sint accusantium veritatis
          quo et? Omnis eligendi, ut quos minima ea neque consectetur
          temporibus! Optio, similique.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat vitae
          delectus a dolores, corrupti qui pariatur repudiandae, illo asperiores
          ratione ullam placeat iusto esse consequatur aspernatur nihil? Officia
          neque suscipit cumque quia eligendi, libero sint accusantium veritatis
          quo et? Omnis eligendi, ut quos minima ea neque consectetur
          temporibus! Optio, similique.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat vitae
          delectus a dolores, corrupti qui pariatur repudiandae, illo asperiores
          ratione ullam placeat iusto esse consequatur aspernatur nihil? Officia
          neque suscipit cumque quia eligendi, libero sint accusantium veritatis
          quo et? Omnis eligendi, ut quos minima ea neque consectetur
          temporibus! Optio, similique.
        </p>
      </div>
    </div>

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

      window.onscroll = ()=>{
          this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky")
      }
    </script>
  </body>
</html>
