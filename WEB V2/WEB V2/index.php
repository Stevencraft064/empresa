<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <title>Vinos Solei</title>
  <link rel="icon" type="image/png" href="img\unknown2.png">
  <style>
    .video{
      margin-top: 100px;
      display: flex;
      background-color: #EFE7DC; 
      padding: 25px;
      height: 500px;
    }

    .text{
      padding-left: 25px;
    }

    h1{
      margin: 60px auto 0;
    }
  </style>
</head>
<body>

  <header class="header">
    <div class="logo">
      <a href="index.php"><img src="img\RV3.png" alt="Inicio"></a>
    </div>
    <nav>
      <ul class="nav-links">
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="contacto.php">Contacto</a></li>
			  <li><a><label for="btn-menu">
          <?php
          echo $_SESSION['usuario'];
          ?>
        </label></a></li>
      </ul>
    </nav>
  </header>

  <div class="capa">
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
	    <div class="cont-menu">
		  <nav>
			<a href="cerrar_session.php">Cerrar sesion</a>
		  </nav>
		  <label for="btn-menu">✖️</label>
	  </div>
  </div>

  <div class="slider-frame">
    <ul>
      <li><img src="Videos\1.png" alt="PD"></li>
      <li><img src="Videos\2.png" alt="PD"></li>
      <li><img src="Videos\3.png" alt="PD"></li>
      <li><img src="Videos\4.png" alt="PD"></li>
    </ul>
  </div>

  <div class="container-vino">
    
    <h3 class="title">Vinos en temporada</h3>
    <div class="products-container">

      <div class="product" data-name="p-1">
        <img src="img\nuit.png" alt="">
        <h3>Nuit</h3>
        <div class="price">$4000.00</div>
      </div>

      <div class="product" data-name="p-2">
        <img src="img\aube.png" alt="">
        <h3>Aube</h3>
        <div class="price">$4000.00</div>
      </div>

      <div class="product" data-name="p-3">
        <img src="img/vinos/vino3.png" alt="">
        <h3>Honoro Vera</h3>
        <div class="price">$3500.00</div>
      </div>

      <div class="product" data-name="p-4">
        <img src="img/vinos/vino2.png" alt="">
        <h3>Priorat</h3>
        <div class="price">$2500.00</div>
      </div>

      <div class="product" data-name="p-5">
        <img src="img/vinos/vino1.png" alt="">
        <h3>Merlot</h3>
        <div class="price">$2500.00</div>
      </div>

      <div class="product" data-name="p-6">
        <img src="img/vinos/vino4.png" alt="">
        <h3>Fronteriz</h3>
        <div class="price">$1500.00</div>
      </div>

    </div>
  </div>  

  <div id="A">
    <div class="B">
     <h3>NUESTRO OBJECTIVO</h3>
     <p>El objetivo general de nuestra empresa de vinos es convertirnos en un referente reconocido a nivel nacional e internacional en la producción y comercialización de vinos de alta calidad, destacándonos por la excelencia en cada etapa del proceso, desde la selección de las mejores uvas hasta la entrega de productos finales que satisfagan los gustos y exigencias de nuestros clientes. Nuestra meta es posicionarnos como una marca líder en el mercado de vinos, construyendo una reputación sólida basada en la calidad, la innovación y el respeto por la tradición vitivinícola. A través de la constante mejora de nuestros procesos, la inversión en tecnología y el compromiso con la sostenibilidad, buscamos brindar experiencias únicas a nuestros consumidores, fomentando el disfrute responsable del vino y promoviendo la cultura enológica en cada uno de nuestros productos.</p>
     <a href="nosotros.php" style = text-aling: center>Saber mas</a>
   </div>
  </div>
  
  <div class="video">
    <video width="550" height="300" autoplay muted loop>
      <source src="Videos\Vid.mp4" type="video/mp4">
    </video>
    <div class="text">
      <h1>Vinos Solei como el calor del sol</h1>
      <br>
    <p>Siente la experiencia de un nuevo vino, siente el sabor de Vinos Solei.</p>
    </div>
  </div>

  <footer class="pie">
    <div class="grupo1">
      <div class="box">
          <figure>
              <a>
                <img src="img\RV3.png" height="150px" alt="logo">
              </a>
          </figure>
      </div>
      <div class="box">
        <h2>SOBRE NOSOTROS</h2>
        <p>Somos una empresa dedicada a la creación y venta web de vinos de calidad en la Republica Dominicana.</p>
      </div>
      <div class="box">
          <h2>SÍGUENOS EN</h2>
          <div class="red-social">
              <a href="https://www.facebook.com/profile.php?id=100089199723389" target="_blank" class="fa-brands fa-facebook"></a>
              <a href="https://www.instagram.com/vinos_solei_oficial/" target="_blank" class="fa-brands fa-instagram"></a>
          </div>
      </div>
    </div>
    <div class="grupo2">
      <small>&copy; 2023 <b>Vinos Solei</b> - TODOS LOS DERECHOS RESERVADOS.</small>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>