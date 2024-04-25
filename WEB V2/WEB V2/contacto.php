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
</head>
<body>

  <header class="header">
    <div class="logo">
      <a href="index.php"><img src="img\RV3.png" alt="Inicio"></a>
    </div>
    <nav>
      <ul class="nav-links">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="productos.php">Productos</a></li>
			  <li><a><label for="btn-menu">
          <?php
          echo $_SESSION['usuario'];
          ?>
        </label></a></li>
      </ul>
    </nav>
  </header>

  <div class="capa"></div>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
	    <div class="cont-menu">
		  <nav>
			<a href="cerrar_session.php">Cerrar sesion</a>
		  </nav>
		  <label for="btn-menu">✖️</label>
	  </div>
  </div>

  <br>

  <div class="container-form">
    <div class="info-form">
      <h3> Contactenos </h3>
      <p>Contáctenos en casos de querer uno de nuestros productos/vinos 
        por nuestro WhatsApp o nuestros correos electrónicos/redes sociales.  
      </p>
      <a href="#" target="_blank">809-415-9540</a>
      <a href="#" target="_blank">vinossoleioficial@gmail.com</a>
    </div>
    <form action="https://formsubmit.co/vinossoleioficial@gmail.com" target="_blank" method="POST">
      <input type="text" name="nombre" placeholder="Ingrese su nombre" class="campo">
      <input type="email" name="email" placeholder="Ingrese su correo" class="campo">
      <textarea name="mensaje" placeholder="Ingrese su mensaje"></textarea>
      <input type="submit" value="Enviar" class="btn-enviar">
    </form>
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