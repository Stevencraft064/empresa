<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","empresa");

$consulta ="SELECT * FROM users where nombre_apellido ='$usuario' and contraseña ='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if (!empty($_POST["entrar"])){
    if(empty($_POST["usuario"]) or empty($_POST["clave"])){
        ?>
        <?php
        include("login.php");
        echo '<script> alert("Los campos estan vacios")</script>';
    }else{
        if($filas){
            header("location:index.php");
        }else{
            ?>
            <?php
            include("login.php");
            echo '<script> alert("Usuario y/o Contraseña incorrectos")</script>';
        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }
}

?>

<?php

include ("registro/conexion_bd.php");

if (!empty($_POST["guardar"])){
    if(empty($_POST["nombre"]) or empty($_POST["edad"]) or empty($_POST["email"]) or empty($_POST["claves"]) or empty($_POST["numDta"]) or empty($_POST["fecha"]) or empty($_POST["cvv"])){
        ?>
        <?php
        include("login.php");
        echo '<script> alert("Los campos estan vacios")</script>';
    }else{
        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];
        $email=$_POST["email"];
        $claves=$_POST["claves"];
        $numDta=$_POST["numDta"];
        $anoDexp=$_POST["fecha"];
        $cvv=$_POST["cvv"];
        $sql=$conex->query(" INSERT INTO users(nombre_apellido, edad, email, contraseña, numero_tarjeta, fecha, CVV)VALUES('$nombre','$edad','$email','$claves','$numDta','$anoDexp','$cvv')");
        if($sql==1){
            ?>
            <?php
            include("login.php");
            echo '<script> alert("usuario registrado correctamente")</script>';
        }else{
            ?>
            <?php
            include("login.php");
            echo '<script> alert("error de registro")</script>';
        }
    }
}

?>