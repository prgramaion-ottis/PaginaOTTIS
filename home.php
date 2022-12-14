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
            <img class="img-fluid resource_red offset-1" src="./imagenes/home/recurso 2.png">
        </div>
        <div class="d-none d-xs-none d-sm-block col-md-12 col-lg-12 col-xl-12 offset-1">
            <h1 class="wellcome2">Bienvenido a</h1> 
            <h4 class="name2"> OTTIS COMUNICACIONES </h4> 
            <img class="img-fluid resource_red2 offset-1" src="./imagenes/home/recurso 2.png">
            <p class="description"><strong>Tu empresa proveedora de redes y servicios <br>
                                    de telecomunicaciones.</strong> Recuerda que ahora puedes <br>
                                    realizar tus pagos sin salir de casa o consultar tu deuda <br>
                                    ingresando tú número de identificación, de manera <br>
                                    rápida y sencilla con un solo clic.    
            </p>
        </div>

        <!-- ---------------------------------------------------------- -->
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
                    <img class="img-fluid offset-2 resource2" src="./imagenes/home/recurso 1.png"> 
                    <img class="img-fluid offset-9 resource3" src="./imagenes/home/recurso 1.png"> 
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
                                <h5 class="modal-title" id="exampleModalLabel">AAAAAAAAAAA</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                XXXXXXXXXX
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
                    <img class="offset-6 resource2_2 img-fluid" src="./imagenes/home/recurso 1.png"> 
                    <img class="offset-6 resource3_2 img-fluid" src="./imagenes/home/recurso 1.png"> 
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
                <img class="offset-2 silvia d-none d-sm-none d-md-block img-fluid" src="./imagenes/home/call center 1 home.png" alt="">
            </div>
        </div>

        <!-- ---------------------------------------------------------- -->
        <div class="white_box">
            <div class="row">
                <a new target="_blank" type="button" href="https://api.whatsapp.com/send/?phone=573212893978&text&type=phone_number&app_absent=0">
                    <img class="icon1 img-fluid offset-0 col-lg-4 col-md-4 d-none d-sm-none d-md-block" src="./imagenes/home/icono.png" alt="">
                </a>
                <img class="icon2 img-fluid offset-7 col-lg-4 col-md-4 d-none d-sm-none d-md-block" src="./imagenes/home/icono2.png" alt="">
            </div>
              <!-- media screen UNDER 760px -->
            <div class="row">
                <a new target="_blank" type="button" href="https://api.whatsapp.com/send/?phone=573212893978&text&type=phone_number&app_absent=0">
                    <img class="icon3 img-fluid d-block d-sm-block d-md-none" src="./imagenes/home/icono.png" alt="">
                </a>
                <img class="icon4 img-fluid d-block d-sm-block d-md-none" src="./imagenes/home/icono2.png" alt="">
            </div>
        </div>

        <!-- ---------------------------------------------------------- -->    
        <div class="grey_box">
            <!-- media screen over 14000px -->
            <div class="d-none d-xl-none d-xxl-block">
                <img class="efecty-left img-fluid" src="./iconos/efecty.png" alt="">
            </div>
            <div class="agreement-left d-none d-xl-none d-xxl-block">
                <p class="text_efecty">PAGO</p>
                <p class="text_efecty2">PRESENCIAL</p>
                <p class="text_efecty3">Convenio 112389</p>
            </div>
            <div class="d-none d-xl-none d-xxl-block">
                <img class="my_pay-left img-fluid" src="./iconos/mi_pago_amigo.png" alt="">
            </div>
            <div class="pay_line-left d-none d-xl-none d-xxl-block">
                <p class="text_pay_line">PAGO EN</p>
                <p class="text_pay_line2">LÍNEA</p>
            </div>

            <!-- media screen under 14000px -->
            <div class="d-none d-sm-none d-md-block">
                <img class="pay img-fluid"src="./iconos/pagos.png" alt="">
                <h2 class="text_pay">MEDIOS <br> <strong>DE PAGO</strong> </h2>
            </div>
            <div class="d-none d-sm-none d-md-block d-xxl-none">
                <img class="efecty img-fluid" src="./iconos/efecty.png" alt="">
            </div>
            
            <div class="agreement d-none d-sm-none d-md-block d-xxl-none">
                <p class="text_efecty">PAGO</p>
                <p class="text_efecty2">PRESENCIAL</p>
                <p class="text_efecty3">Convenio 112389</p>
            </div>
            <div class="d-none d-sm-none d-md-block d-xxl-none">
                <img class="my_pay img-fluid" src="./iconos/mi_pago_amigo.png" alt="">
            </div>
            <div class="pay_line d-none d-sm-none d-md-block d-xxl-none">
                <p class="text_pay_line">PAGO EN</p>
                <p class="text_pay_line2">LÍNEA</p>
            </div>
            <!-- media screen UNDER 760px -->
            <div class="d-block d-sm-block d-md-none">
                <img class="pay1 img-fluid"src="./iconos/pagos.png" alt="">
                <h2 class="text_pay1">MEDIOS <br> <strong>DE PAGO</strong> </h2>
            </div>
             <div class="d-block d-sm-block d-md-none">
                <img class="efecty1 img-fluid" src="./iconos/efecty.png" alt="">
            </div>
          
            <div class="agreement1 d-block d-sm-block d-md-none">
                <p class="text_efecty_sm">PAGO</p>
                <p class="text_efecty2_sm">PRESENCIAL</p>
                <p class="text_efecty3_sm">Convenio 112389</p>
            </div>
            <div class="d-block d-sm-block d-md-none">
                <img class="my_pay1 img-fluid" src="./iconos/mi_pago_amigo.png" alt="">
            </div>
            <div class="pay_line1 d-block d-sm-block d-md-none">
                <p class="text_pay_line_sm">PAGO EN</p>
                <p class="text_pay_line2_sm">LÍNEA</p>
            </div>
        </div>
        <!-- ---------------------------------------------------------- -->
        <div class="blue_box">
            <img class="img_group d-none d-sm-none d-md-block img-fluid" src="./imagenes/home/slider.png" alt="" >
            <h1 class="offset-1 text_name">OTTIS</h1> 
            <h4 class="offset-1 text_Internet"> Más que Internet </h4>
            <img class="resource_red3 offset-1 img-fluid" src="./imagenes/home/recurso 2.png">
            <p class="offset-1 description2"><strong>Somos una empresa de tecnología</strong>, proveedores de servicio <br>
                                    de acceso a internet, expertos en el área de telecomunicaciones,<br>
                                    innovamos en diseño de Hardware y Software a la medida<br>
            </p>
            <p class="text_exclusive">EXCLUSIVO <strong>DE OTTIS</strong></p>
            <img class="apps offset-1" src="./iconos/apps.svg" alt="">
            <img class="cloud " src="./imagenes/home/nube4.png" alt="">
            <img class="cloud2" src="./imagenes/home/nube3.png" alt="">
            <img class="cloud3" src="./imagenes/home/nube5.png" alt="">
            <img class="cloud4" src="./imagenes/home/nube2.png" alt="">
            <img class="cloud5" src="./imagenes/home/nube3.png" alt="">
            <div class="offset-2 float_box1 d-none d-sm-none d-md-block">
                <p class="exclu_text_1">Tenemos excelente calidad en <br>
                                        el servicio, principalmente en la <br>
                                        velocidad de conexión.
                </p>
            </div>
            <div class="offset-5 float_box2 d-none d-sm-none d-md-block">
                <p class="exclu_text_2">Contamos con <br>
                                        costos asequibles.
                </p>
            </div>
            <div class="offset-8 float_box3 d-none d-sm-none d-md-block">
                <p class="exclu_text_3">Canales de atención <br>
                                        al usuario.
                </p>
            </div>
        </div>

        <!-- ----------------------------------------------------------------- -->
        <div class="exclusive">
            <img class="silvia_exclu d-none d-sm-none d-md-block img-fluid" src="./imagenes/home/call_center_home_3.png" alt="">  
            <h3 class="offset-6 title_exclusive">EXCLUSIVO <strong>DE OTTIS</strong></h3>
            <p class="offset-6 par_exclusive">Trabajamos a diario para brindarte la mejor <br>
                                    atención, por eso, puedes presentar tus <br>
                                    peticiones, quejas o recursos (PQRs) desde <br>
                                    la comodidad de tu hogar, a través de <br>
                                    nuestros canales electrónicos, virtuales, <br>
                                    telefónicos o si lo prefieres en nuestra <br>
                                    oficina principal.
            </p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn register btn-primary offset-6" onclick="Buscar()">Registralas <br> <strong>AQUÍ</strong></button>
        </div>

        <!-- ----------------------------------------------------------------- -->
        <div class="attention_channel">
            <h2 class="channel_text">CANALES DE <strong>ATENCIÓN</strong></h2>
            <h3 class="pbx_text">PBX 6017943254 - 6019172166</h3>
            <div class="bill_and_admon">
                

            </div>
        </div>
    </div>

<?php
require("templates/footer.html");
?>