<?php
require("templates/header.html");
?>
<!-- <link rel="stylesheet" href="css/font.css" crossorigin="anonymous"> -->
<link rel="stylesheet" href="css/stylehome.css" crossorigin="anonymous">
<div class="container-md">
    <div class="caja">
        <img src="./imagenes/planes/Mesa de trabajo 2.png" class="img-fluid" width="100%" alt="">
        <div class="col-6 offset-1">
            <h1 class="texto1"> Bienvenido a</h1>
        </div>
        <div class="col-6 offset-1">
            <h4 class="texto2"> OTTIS COMUNICACIONES </h4> 
        </div>
        <div class="col-2 offset-2">
            <img class="recurso1" src="./imagenes/home/recurso 2.png"> 
        </div>
        <div class="col-2 offset-1">
            <p class="texto3"><strong>Tu empresa proveedora de redes y servicios <br>
                                    de telecomunicaciones.</strong> Recuerda que ahora puedes <br>
                                    realizar tus pagos sin salir de casa o consultar tu deuda <br>
                                    ingresando tú número de identificación, de manera <br>
                                    rápida y sencilla con un solo clic.    
            </p>
        </div>
        
    </div> 
    <div>      
        <div class="caja_roja">
            <input type="number" class="buscar">
            <button type="button" class="buscar2" onclick="Buscar()">Buscar</button>
            <h2 class="texto4">Realiza Tu Pago</h2>
            <h2 class="texto5">Consulta Tu Deuda</h2>
            <img class="recurso2" src="./imagenes/home/recurso 1.png"> 
            <img class="recurso3" src="./imagenes/home/recurso 1.png"> 
        </div>
        <div class="caja_blanca">
            <img class="icono1" src="./imagenes/home/icono.png" alt="">
            <img class="icono2" src="./imagenes/home/icono2.png" alt="">
            <h4 class="texto6">En caso de suspension por pago <br>
                            extemporáneo por favor enviar <br>
                            el comprobante de pago al <br> </h4>
            <h4 class="texto7"><strong>whatsapp 311 491 6907</strong> </h4>
            <h4 class="texto8">FECHA LÍMITE DE PAGO:</h4>
            <h4 class="texto9">03 DE CADA MES </h4>
        </div>
        <img class="silvia" src="./imagenes/home/call center 1 home.png" alt="">    
    </div>
    <div class="caja_gris">

    </div>
    <a new target="_blank" class="contacto" type="button"  href="https://api.whatsapp.com/send/?phone=573212893978&text&type=phone_number&app_absent=0"> <img src="./iconos/contacto.svg" alt=""></a>   
</div>

<br>
<br>
<br>
<?php
require("templates/footer.html");
?>