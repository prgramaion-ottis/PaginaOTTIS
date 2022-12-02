<?php
require("templates/header.html");
?>
<link rel="stylesheet" href="css/stylehome.css" crossorigin="anonymous">
<body>
    <div class="container col-12">
        <?php
            require("templates/navbar.html");
        ?>
        <div class="col-12">
            <img src="./imagenes/planes/Mesa_de_trabajo_2.png" alt="" width="100%">                
        </div>
        <div class="d-block d-xs-block d-sm-none col-xs-12 col-sm-12 col-md-12 col-lg-12 offset-1">
            <h1 class="wellcome">Bienvenido a</h1> 
            <h4 class="name "> OTTIS COMUNICACIONES </h4> 
            <img class="resource_red offset-1" src="./imagenes/home/recurso 2.png">
        </div>
        <div class="d-none d-xs-none d-sm-block col-md-12 col-lg-12 col-xl-12 offset-1">
            <h1 class="wellcome2">Bienvenido a</h1> 
            <h4 class="name2"> OTTIS COMUNICACIONES </h4> 
            <img class="resource_red2 offset-1" src="./imagenes/home/recurso 2.png">
            <p class="description"><strong>Tu empresa proveedora de redes y servicios <br>
                                    de telecomunicaciones.</strong> Recuerda que ahora puedes <br>
                                    realizar tus pagos sin salir de casa o consultar tu deuda <br>
                                    ingresando tú número de identificación, de manera <br>
                                    rápida y sencilla con un solo clic.    
            </p>
        </div>
        <div class="red_box">
            <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 col-xl-6 col-xxl-6 offset-1">
                    <h2 class="payment">Realiza Tu Pago</h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 offset-8">
                    <h2 class="debt">Consulta Tu Deuda</h2>
                </div>
            </div>
        </div>



    </div>

<?php
require("templates/footer.html");
?>