<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="stl.css">
    <title>Login</title>
    <link rel="icon" type="image/png" href="img\unknown2.png">
</head>
<body>
    <div class="wrapper">

    <!----------------------------- Form box ----------------------------------->    
    <form action="validar.php" method="post" class="form-box">
        
        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
            <div class="top">
                <header>Iniciar sesion</header>
                <span>No tiene una cuenta? <a href="#" onclick="register()">Registrése</a></span>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Usuario" name="usuario">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Contraseña" name="clave">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Ingresar" name="entrar">
            </div>
            <div class="two-col">
                <div class="one">
                </div>
                <div class="two">
                    <label><a href="contrasena.html" target="_blank">Olvido la contraseña?</a></label>
                </div>
            </div>
        </div>
        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <header>Registrar</header>
                <span>Tienes una cuenta? <a href="#" onclick="login()">Inicie sesion</a></span>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Nombre y Apellido" name="nombre">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box" id="a">
                    <input type="number" class="input-field" placeholder="Edad" name="edad">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email" name="email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Contraseña" name="claves">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <img src="img/card_img.png" alt="">
            </div>
            <br>
            <div class="input-box">
                <input type="number" class="input-field" placeholder="Numero de tarjeta" name="numDta">
            </div>
            <br>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="fecha de exp." name="fecha">
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="CVV" name="cvv">
                </div>
            </div>
            <br>
            <div class="input-box">
                <input type="submit" class="submit" value="Ingresar" name="guardar">
            </div>
            <div class="two-col">
                <div class="one">
                </div>
            </div>
        </div>
    </form>
 </div>   
<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>

</body>
</html>