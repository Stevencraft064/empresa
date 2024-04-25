<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="st.php">
  <link rel="stylesheet" href="stc.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="script.js" defer></script>
  <title>Vinos Solei</title>
  <link rel="icon" type="image/png" href="img\unknown2.png">
</head>
<body>
    
  <header class="header2">
    <div class="logo">
      <a href="index.php"><img src="img\RV3.png" alt="Inicio"></a>
    </div>
    <nav>
      <ul class="nav-links">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
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

  <header class="header">
    <h1>Vinos</h1>

    <div class="container-icon">
      <div class="container-cart-icon">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="icon-cart"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
          />
        </svg>
        <div class="count-products">
          <span id="contador-productos">0</span>
        </div>
      </div>

      <div class="container-cart-products hidden-cart">
        <div class="row-product hidden">
          <div class="cart-product">
            <div class="info-cart-product">
              <span class="cantidad-producto-carrito">1</span>
              <p class="titulo-producto-carrito">Nuit</p>
              <span class="precio-producto-carrito">$80</span>
            </div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="icon-close"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </div>
        </div>

        <div class="cart-total hidden">
          <h3>Total:</h3>
          <span class="total-pagar">$200</span>
          <button class="btn-pay2" onclick="P()">Comprar</button>
        </div>
        <p class="cart-empty">El carrito está vacío</p>
      </div>
    </div>
  </header>

  <!--Productos-->

  <div class="container-items">
    <div class="item">
      <figure>
        <img
          src="img/vinos/1.png"
          alt="producto"
        />
      </figure>
      <div class="info-product">
        <h2>Nuit</h2>
        <div class="star">     
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					</div>
        <p class="price">$2500</p>
        <button class="btn-pay" onclick="P()">Comprar</button>
        <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
      </div>
    </div>
    <div class="item">
      <figure>
        <img
          src="img/vinos/2.png"
          alt="producto"
        />
      </figure>
      <div class="info-product">
        <h2>Aube</h2>
        <div class="star">     
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
        <p class="price">$2300</p>
        <button class="btn-pay" onclick="P()">Comprar</button>
        <button class="btn-add-cart" onclick="C()">Añadir al carrito</button>
      </div>
    </div>
    <div class="item">
      <figure>
        <img
          src="img/vinos/3.png"
          alt="producto"
        />
      </figure>
      <div class="info-product">
        <h2>ROSE</h2>
        <div class="star">     
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					</div>
        <p class="price">$2100</p>
        <button class="btn-pay" onclick="P()">Comprar</button>
        <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
      </div>
    </div>
    <div class="item">
      <figure>
        <img
          src="img/vinos/4.png"
          alt="producto"
        />
      </figure>
      <div class="info-product">
        <h2>De Muller</h2>
        <div class="star">     
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					</div>
        <p class="price">$2000</p>
        <button class="btn-pay" onclick="P()">Comprar</button>
        <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
      </div>
    </div>
  <div class="item">
    <figure>
      <img
        src="img/vinos/5.png"
        alt="producto"
      />
    </figure>
    <div class="info-product">
      <h2>Cabernet Sauvignon</h2>
      <div class="star">     
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        </div>
      <p class="price">$2200</p>
      <button class="btn-pay" onclick="P()">Comprar</button>
      <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
    </div>
  </div>
  <div class="item">
    <figure>
      <img
        src="img/vinos/6.png"
        alt="producto"
      />
    </figure>
    <div class="info-product">
      <h2>Chardonnay</h2>
      <div class="star">     
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        </div>
      <p class="price">$1900</p>
      <button class="btn-pay" onclick="P()">Comprar</button>
      <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
    </div>
  </div>
  <div class="item">
    <figure>
      <img
        src="img/vinos/7.png"
        alt="producto"
      />
    </figure>
    <div class="info-product">
      <h2>Malbec</h2>
      <div class="star">     
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        </div>
      <p class="price">$2350</p>
      <button class="btn-pay" onclick="P()">Comprar</button>
      <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
    </div>
  </div>
  <div class="item">
    <figure>
      <img
        src="img/vinos/8.png"
        alt="producto"
      />
    </figure>
    <div class="info-product">
      <h2>Merlot</h2>
      <div class="star">     
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        </div>
      <p class="price">$2230</p>
      <button class="btn-pay" onclick="P()">Comprar</button>
      <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
    </div>
  </div>
  <div class="item">
    <figure>
      <img
        src="img/vinos/9.png"
        alt="producto"
      />
    </figure>
    <div class="info-product">
      <h2>Pinot Noir</h2>
      <div class="star">     
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        </div>
      <p class="price">$2250</p>
      <button class="btn-pay" onclick="P()">Comprar</button>
      <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
    </div>
  </div>
  <div class="item">
    <figure>
      <img
        src="img/vinos/10.png"
        alt="producto"
      />
    </figure>
    <div class="info-product">
      <h2>Sauvignon Blanc</h2>
      <div class="star">     
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        </div>
      <p class="price">$1950</p>
      <button class="btn-pay" onclick="P()">Comprar</button>
      <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
    </div>
  </div>
  <div class="item">
    <figure>
      <img
        src="img/vinos/11.png"
        alt="producto"
      />
    </figure>
    <div class="info-product">
      <h2>Syrah</h2>
      <div class="star">     
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        </div>
      <p class="price">$1800</p>
      <button class="btn-pay" onclick="P()">Comprar</button>
      <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
    </div>
  </div>
  <div class="item">
    <figure>
      <img
        src="img/vinos/12.png"
        alt="producto"
      />
    </figure>
    <div class="info-product">
      <h2>Riesling</h2>
      <div class="star">     
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        </div>
      <p class="price">$1850</p>
      <button class="btn-pay" onclick="P()">Comprar</button>
      <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
    </div>
  </div>
  <div class="item">
    <figure>
      <img
        src="img/vinos/13.png"
        alt="producto"
      />
    </figure>
    <div class="info-product">
      <h2>Zinfandel</h2>
      <div class="star">     
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        </div>
      <p class="price">$2450</p>
      <button class="btn-pay" onclick="P()">Comprar</button>
      <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
    </div>
  </div>
  <div class="item">
    <figure>
      <img
        src="img/vinos/14.png"
        alt="producto"
      />
    </figure>
    <div class="info-product">
      <h2>Tempranillo</h2>
      <div class="star">     
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        </div>
      <p class="price">$2300</p>
      <button class="btn-pay" onclick="P()">Comprar</button>
      <button class="btn-add-cart"onclick="C()">Añadir al carrito</button>
    </div>
  </div>

  <!--Copy for More-->

  <div class="item">
    <figure>
      <img
        src="img/vinos/15.png"
        alt="producto"
      />
    </figure>
    <div class="info-product">
      <h2>Gewürztraminer</h2>
      <div class="star">     
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        </div>
      <p class="price">$2340</p>
      <button class="btn-pay" onclick="P()">Comprar</button>
      <button class="btn-add-cart" onclick="C()">Añadir al carrito</button>
    </div>
  </div>
  
  <!--Copy for More-->

  

  <!--Final-->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
          <h4>SOBRE NOSOTROS</h4>
          <p>Somos una empresa dedicada a la creación y venta web de vinos de calidad en la Republica Dominicana.</p>
      </div>
      <div class="box">
          <h4>SÍGUENOS EN</h4>
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