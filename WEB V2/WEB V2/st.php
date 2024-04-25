<?php
    header("Content-Type: text/css; charse: UTF-8");
?>

*{
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
    font-size: 25px;
}

body{
    background: #EFE7DC;
    position: relative;
    padding-bottom: 15em;
    min-height: 100vh;
}

.header2 li{
    text-shadow: 1px 1px 4px black;
}

.header2{
    background-color: #171B1A;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 85px;
    padding: 5px 10%;

}

.header2.logo{
    cursor: pointer;
    margin-right: auto;
}

.header2 .logo img{
    height: 50px;
    width: auto;
    transition: all 0.13;
}

.header2.logo img:hover{
    transform: scale(1.2);
}

.header2 .nav-links{
    list-style: none;
}

.header2 .nav-links li{
    display: inline-block;
    padding: 0 20px;
}

.header2 .nav-links li:hover{
    transform: scale(1.1);
}

.header2 .nav-links a{
    font-size: 700;
    color: rgb(255, 255, 255);
    text-decoration: none;
}

.header2 .nav-links li a:hover{
    color: #ffd700;
}

/*---------------------------------------------------------------*/

#btn-menu{
    display: none;
}
.container-menu{
    position: absolute;
    background: rgba(0,0,0,0.5);
    width: 100%;
    height: 100vh;
    top: 0;left: 0;
    transition: all 500ms ease;
    opacity: 0;
    visibility: hidden;
}
#btn-menu:checked ~ .container-menu{
    opacity: 1;
    visibility: visible;
}
.cont-menu{
    width: 100%;
    max-width: 250px;
    background: #1c1c1c;
    height: 100vh;
    position: relative;
    transition: all 500ms ease;
    transform: translateX(-100%);
}
#btn-menu:checked ~ .container-menu .cont-menu{
    transform: translateX(0%);
}
.cont-menu nav{
    transform: translateY(15%);
}
.cont-menu nav a{
    display: block;
    text-decoration: none;
    padding: 20px;
    color: #c7c7c7;
    border-left: 5px solid transparent;
    transition: all 400ms ease;
}
.cont-menu nav a:hover{
    border-left: 5px solid #c7c7c7;
    background: #1f1f1f;
}
.cont-menu label{
    position: absolute;
    right: 5px;
    top: 10px;
    color: #fff;
    cursor: pointer;
    font-size: 18px;
}

/*---------------------------------------------------------------*/

.star{
    color: gold;
    display: inline-flex;
}

.icon-cart{
    width: 40px;
    height: 40px;
    stroke: #000;
}

.icon-cart:hover{
    cursor: pointer;
}

img{
    max-width: 100%;
}

.header{
    display: flex;
    justify-content: space-between;
    padding: 30px 0 40px 0;
}

.container-icon{
    position: relative;
}

.count-products{
    position: absolute;
    top: 55%;
    right: 0;

    background-color: #000;
    color: #fff;
    width: 25px;
    height: 25px;

    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
}

#contador-productos{
    font-size: 12px;
}

.container-cart-products{
    position: absolute;
    top: 50px;
    right: 0;

    background-color: #fff;
    width: 400px;
    z-index: 1;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.20);
    border-radius: 10px;
    
}

.cart-product{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 30px;

    border-bottom: 1px solid rgba(0, 0, 0, 0.20);

}

.info-cart-product{
    display: flex;
    justify-content: space-between;
    flex: 0.8;
}

.titulo-producto-carrito{
    font-size: 20px;
}

.precio-producto-carrito{
    font-weight: 700;
    font-size: 20px;
    margin-left: 10px;
}

.cantidad-producto-carrito{
    font-weight: 400;
    font-size: 20px;
}

.icon-close{
    width: 25px;
    height: 25px;
}

.icon-close:hover{
    stroke: red;
    cursor: pointer;
}

.cart-total{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 0;
    gap: 20px;
}

.cart-total h3{
    font-size: 20px;
    font-weight: 700;
}

.total-pagar{
    font-size: 20px;
    font-weight: 900;
}

.hidden-cart{
    display: none;
}

.container-items{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.item{
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    display: inline-flex;
    align-items: center;
}

.item img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 20px 20px 20px 20px;
    transition: all .5s;
}

.item figure{
    overflow: hidden;
}

.info-product{
    padding: 15px 30px;
    line-height: 2;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.price{
    font-size: 18px;
    font-weight: 900;
}

.info-product button{
    border: none;
    background: none;
    background-color: #000;
    color: #fff;
    padding: 15px 10px;
    cursor: pointer;
}

.cart-empty{
    padding: 20px;
    text-align: center;
}

.😀{
    display: flex;
    flex-direction: row;
    pading: 10px;
}

.btn-add-cart{
    border-radius: 10px;
}

.btn-pay{
    border-radius: 10px;
}

.btn-pay2{
    border-radius: 10px;
    width: 150px;
    background-color: lightgreen;
}

.hidden{
    display: none;
}

h2{
    display: none;
}

.price{
    display: none;
}

/*---------------------------------------------------------------*/

.container-vino{
    max-width: 1200px;
    margin:0 auto;
    padding:3rem 2rem;
}

.container-vino .title{
    font-size: 2.5rem;
    color:#ffd700;
    margin-bottom: 1rem;
    text-transform: uppercase;
    text-align: center;
    text-shadow: 1px 1px 2px black;
}

/*---------------------------------------------------------------------*/

.pie{
    width: 100%;
    background-color: #171B1A;
    position: absolute;
    bottom: 0;
}

.pie .grupo1{
    width: 100%;
    margin: 0.1px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 50px;
    padding: 45px 0px;
}

.pie .grupo1 .box figure{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.pie .grupo1 .box h4{
    margin-bottom: 25px;
    font-size: 25px;
    color: #ffd700;
}

.pie .grupo1 .box p{
    color: #eee;
}

.pie .grupo1 .red-social a{
    display: inline-block;
    text-decoration: none;
    width: 45px;
    height: 45px;
    line-height: 45px;
    color: rgb(255, 255, 255);
    margin-right: 10px;
    background-color: rgb(0, 0, 0);
    text-align: center;
    transition: all 300ms ease;
    border-radius: 50%;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}

.pie .grupo1 .red-social a:hover{
    color: #ffd700;
}

.pie .grupo2{
    background-color: rgb(0, 0, 0);
    padding: 1px 10px;
    text-align: center;  
    color: #ffff;  
}

.pie .grupo2 small{
   font-size: 15px;
}
@media screen and (max-width:800px){
    .pie .grupo1{
        width: 90%;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 30px;
        padding: 35px 0px;
    }
}