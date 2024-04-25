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

  <div id="A">
    <div class="B">
     <h3>NUESTRO FUNDADOR</h3>
     <p>En el 1985 Hector Brito estaba en la finca del patrón el cual le había dicho que cuidara las uvas las cuales era muy baratas en esos momentos pero el patrón sabía que el precio cambiaria en la siguiente temporada por eso intentaba conservar las uvas el mayor tiempo posible haci que encargo a Hector protegerlas como todos los años pero entonces Hector mientras protegía las uvas escucho un ruido cuando Hector se adentró en los arbustos de las uvas y encontró una funda llena de uvas cuando intento ver quien había robado las uvas recibió un golpe con un palo en la cabeza mientras estaba inconsciente robaron toda la reserva de uvas cuando Hector despertó encontró toda la finca de uvas robada no había ni una sola uva después de eso el patrón de Hector lo despidió por lo que Hector tubo que encontrar(buscar) un buen trabajo para poder mantener a su familia nadie se esperaría que en el 1993 Hector encontrara una receta de su esposa la cual le decía como hacer un jugo de uva pero Hector mojaría sin querer esta receta por lo que tuvo que seguir algunos paso de este pero cuando llego a la parte mojada de la receta tuvo que Improvisar haci que busco algunas cosas y al juntarlas con un poco de una de sus cervezas favoritas para añadirle algo al jugo encontró que lo que acababa de crear era exquisito por lo que enseguida decidió empezar un pequeño negocio de bebidas en su casa y entonces no solo tubo fama en su barrio si no que en toda la provincia de punta cana lo cual atrajo a muchos turistas lo que empezó como un pequeño negocio termino como una gran empresa la cual sueña por ampliar sus fronteras para vender su tan delicioso vino en todas partes del mundo. </p>
   </div>
  </div>

  <div id="A">
    <div class="B">
     <h3>MISIÓN</h3>
     <p>Elaborar vinos de alta calidad que reflejen la riqueza y la diversidad de los Vinos de la República Dominicana. Nos comprometemos a utilizar técnicas innovadoras y sostenibles en la producción, manteniendo al mismo tiempo un profundo respeto por la tradición vinícola de la región.</p>
   </div>
  </div>

  <div id="A">
    <div class="B">
     <h3>VISIÓN</h3>
     <p>convertirnos en un referente de excelencia en la industria vinícola dominicana y en el mercado internacional. Aspiramos a ser reconocidos por la calidad excepcional de nuestros vinos, por nuestra innovación constante en técnicas de producción y por nuestro compromiso con la sostenibilidad ambiental y el desarrollo social en nuestras comunidades.</p>
   </div>
  </div>

  <div id="A">
    <div class="B">
     <h3>NUESTRO OBJECTIVO</h3>
     <p>El objetivo general de nuestra empresa de vinos es convertirnos en un referente reconocido a nivel nacional e internacional en la producción y comercialización de vinos de alta calidad, destacándonos por la excelencia en cada etapa del proceso, desde la selección de las mejores uvas hasta la entrega de productos finales que satisfagan los gustos y exigencias de nuestros clientes. Nuestra meta es posicionarnos como una marca líder en el mercado de vinos, construyendo una reputación sólida basada en la calidad, la innovación y el respeto por la tradición vitivinícola. A través de la constante mejora de nuestros procesos, la inversión en tecnología y el compromiso con la sostenibilidad, buscamos brindar experiencias únicas a nuestros consumidores, fomentando el disfrute responsable del vino y promoviendo la cultura enológica en cada uno de nuestros productos.</p>
    </div>
  </div>

  <h4>Personal</h4>
  <br> 
  <div class="process-wrapper">
  <div id="progress-bar-container">
	  <ul>
		  <li class="step step01 active"><div class="step-inner">PRESIDENTE</div></li>
		  <li class="step step02"><div class="step-inner">RR.HH</div></li>
		  <li class="step step03"><div class="step-inner">CONTABLE Y MARQUETING</div></li>
		  <li class="step step04"><div class="step-inner">ASESORA LEGAL</div></li>
		  <li class="step step05"><div class="step-inner">TEC. INFORMATICO</div></li>
	  </ul>
	
	  <div id="line">
		  <div id="line-progress"></div>
	  </div>
  </div>

  <div id="progress-content-section">
	  <div class="section-content discovery active">
		  <h3>PRESIDENTE</h3>
		  <p>Saludos mi nombre es Stevens Brito el presidente de esta, nuestra historial se puede resumir en breves palabras 'Generacion de vinos' nuestra empresa en su especialidad de basa en la venta, frabricacion y exportacion de vinos al nivel nacional. Nosotrso queremos llevar una experienca mas alla de tomar un vino sencillo queremos que prueben nuestras cosechas de vinos de 10 a 5 años, de vinos añejos para que saboreen la calidad y especialidad de un buen vino por lo tanto tomamos el nombre de Vinos Solei o Vinos del Sol.</p>
	  </div>
	
	  <div class="section-content strategy">
		  <h3>RECURSOS HUMANOS</h3>
		  <p>mi nombre es melvin suberbi gonzalez soy el encargado de recursos humanos de esta empresa naci el 9/1/2007 como recursos humanos de esta empresa me encargo de la reclutacion de nuestro empleados y me encargo de mantener su seguridad.</p>
	  </div>
	
	  <div class="section-content creative">
		  <h3>CONTABLE Y MARQUETING</h3>
		  <p>Saludos mi nombre es roniel mateo pacheco  encargado de contabilidad y marketing en Vinos Solei, me encargo de llevar las finansas y llevar las redes sociales,los anuncios,las promociones etc.
      </p>
	  </div>
	
	  <div class="section-content production">
		  <h3>ASESORA LEGAL</h3>
		  <p>mi nombre es denisse ferreiras soy la acesora legal de la empresa vino solei la cual me encargo de estudiar analizar comprender y proponer soluciones a problemas jurudicos . unas de mis funciones de hacer todo los tipos de contrato.</p>
	  </div>
	
	  <div class="section-content analysis">
		  <h3>TEC. INFORMATICO</h3>
		  <p>Saludos! mi nombre es Manuel de Jesús el encargado del mantenimiento y del contenido de esta página web, cualquier duda o sugerencia que tengan pueden contactarme a travez de mi gmail <a href="" target="_blank" style="text-decoration:none">(ethanmanuel06@gmail.com)</a> que con gusto los leere.</p>
	  </div>
	  </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script>    
    $(".step").click( function() {
	    $(this).addClass("active").prevAll().addClass("active");
	    $(this).nextAll().removeClass("active");
    });

    $(".step01").click( function() {
	    $("#line-progress").css("width", "3%");
	    $(".discovery").addClass("active").siblings().removeClass("active");
    });

    $(".step02").click( function() {
	    $("#line-progress").css("width", "25%");
	    $(".strategy").addClass("active").siblings().removeClass("active");
    });

    $(".step03").click( function() {
	    $("#line-progress").css("width", "50%");
	    $(".creative").addClass("active").siblings().removeClass("active");
    });

    $(".step04").click( function() {
	    $("#line-progress").css("width", "75%");
	    $(".production").addClass("active").siblings().removeClass("active");
    });

    $(".step05").click( function() {
	    $("#line-progress").css("width", "100%");
	    $(".analysis").addClass("active").siblings().removeClass("active");
    });
  </script>

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
    
</body>
</html>