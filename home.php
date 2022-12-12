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
            <!-- media screen OVER 760px -->
                <div class="offset-1 col-lg-3 col-md-4 col-sm-12 d-none d-sm-none d-md-block">
                    <h2 class="payment">Realiza Tu Pago</h2>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-6 d-none d-sm-none d-md-block"></div>
                <div class="col-lg-3 col-md-4 col-sm-12 d-none d-sm-none d-md-block">
                    <h2 class="debt">Consulta Tu Deuda</h2>
                </div>
                <div class="d-none d-sm-none d-md-block">
                    <img class="offset-2 resource2" src="./imagenes/home/recurso 1.png"> 
                    <img class="offset-9 resource3" src="./imagenes/home/recurso 1.png"> 
                </div>
            </div>    
            <div class="d-none d-sm-none d-md-block">
                <input type="number" class="id_number col-lg-2 col-md-2 offset-7">
                <!-- Button trigger modal -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary search col-lg-1 col-md-1 offset-9" onclick="Buscar()">Buscar</button>
                <!-- Modal -->
            </div>   
                <div class="modal fullscreen-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sapo el que lea</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                mentiras we te queremos xD
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
           
            
            <!-- media screen UNDER 760px -->

            <div class=" row col-sm-11 d-block d-sm-block d-md-none">
                <h2 class="payment2">Realiza Tu Pago</h2>
            </div>
            <div class="row col-sm-11 d-block d-sm-block d-md-none">
                <h2 class="debt2">Consulta Tu Deuda</h2>
            </div>
            <div class="d-block d-sm-block d-md-none">
                    <img class="offset-6 resource2_2" src="./imagenes/home/recurso 1.png"> 
                    <img class="offset-6 resource3_2" src="./imagenes/home/recurso 1.png"> 
            </div>
            <div class="d-block d-sm-block d-md-none">
                <input type="number" class="id_number2 col-4 col-sm-4 offset-3">
                <!-- Button trigger modal -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary search2 col-2 col-sm-2 offset-7" onclick="Buscar()">Buscar</button>
                <!-- Modal -->
            </div>
            <div class="modal fullscreen-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sapo el que lea</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            mentiras we te queremos xD
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-11 col-lg-11 col-xl-11">
                <img class="offset-2 silvia d-none d-sm-none d-md-block" src="./imagenes/home/call center 1 home.png" alt="">
            </div>
        </div>

        <div class="white_box">
            <div class="row caja_blanca">
                <img class="icon1 offset-0 col-lg-4 col-md-4 d-none d-sm-none d-md-block" src="./imagenes/home/icono.png" alt="">
                <img class="icon2 offset-8 col-lg-4 col-md-4 d-none d-sm-none d-md-block" src="./imagenes/home/icono2.png" alt="">
                <!-- 
                
                <h4 class="texto6">En caso de suspension por pago <br>
                                extemporáneo por favor enviar <br>
                                el comprobante de pago al <br> </h4>
                <h4 class="texto7"><strong>whatsapp 311 491 6907</strong> </h4>
                <h4 class="texto8">FECHA LÍMITE DE PAGO:</h4>
                <h4 class="texto9">03 DE CADA MES </h4> -->
            </div>
            
        </div>
        <div class="row">
           
        </div>
        



    </div>

<?php
require("templates/footer.html");
?>