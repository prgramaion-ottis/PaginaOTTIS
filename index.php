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
            
            <p class="description">
                <br><br><strong>La mejor empresa de telecomunicaciones de la región.</strong> 
                <!-- Recuerda que ahora puedes <br>
                realizar tus pagos sin salir de casa o consultar tu deuda <br>
                ingresando tú número de identificación, de manera <br>
                rápida y sencilla con un solo clic.     -->
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
                <input type="number" id="inputCedula" name="inputCedula" class="id_number col-lg-2 col-md-2 offset-7">
                <!-- Button trigger modal -->
                <button type="button"  class="btn btn-primary search col-lg-1 col-md-1 offset-9" onclick="accionBuscar()">Buscar</button>
                <!-- Modal -->
            </div>   

            <!-- MODAL QUE MUESTRA CLIENTES Y SUS DEUDA -->

                <div class="modal fullscreen-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Clientes Encontrados</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container" id="tabla_respuesta">

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- FINAL DEL MODAL DE CLIENTES Y DEUDAS -->
            
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
                <input type="number" id="inputCedula" name="inputCedula" class="id_number2 col-4 col-sm-4 offset-3">
                <!-- Button trigger modal -->
                <button type="button"  class="btn btn-primary search2 col-2 col-sm-2 offset-7" onclick="accionBuscar()">Buscar</button>
                <!-- Modal -->
            </div>

            <!-- ESTE MODAL PARECE QUE SOBRA -->

            <!-- <div class="modal fullscreen-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            </div> -->

            <!-- EL MODAL ANTERIOR SOBRA -->

            <div class="col-md-11 col-lg-11 col-xl-11">
                <img class="offset-2 silvia d-none d-sm-none d-md-block img-fluid" src="./imagenes/home/call center 1 home.png" alt="">
            </div>
        </div>

        <!-- ---------------------------------------------------------- -->
        <div class="white_box">
            <div class="row">
                <a new target="_blank" type="button" href="https://api.whatsapp.com/send/?phone=573114916907&text&type=phone_number&app_absent=0">
                    <img class="icon1 img-fluid offset-0 col-lg-4 col-md-4 d-none d-sm-none d-md-block" src="./imagenes/home/icono.png" alt="">
                </a>
                <img class="icon2 img-fluid offset-7 col-lg-4 col-md-4 d-none d-sm-none d-md-block" src="./imagenes/home/icono2.png" alt="">
            </div>
              <!-- media screen UNDER 760px -->
            <div class="row">
                <a new target="_blank" type="button" href="https://api.whatsapp.com/send/?phone=573114916907&text&type=phone_number&app_absent=0">
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
            <a new target="_blank" type="button" href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments/StartPayment?id=7883&amp;searchedCategoryId=&amp;searchedAgreementName=FUTURE%20SOLUTIONS%20DEVELOPMENT%20SAS">
                <div class="d-none d-xl-none d-xxl-block">
                    <img class="my_pay-left img-fluid" src="./iconos/mi_pago_amigo.png" alt="">
                </div>
                <div class="pay_line-left d-none d-xl-none d-xxl-block">
                    <p class="text_pay_line">PAGO EN</p>
                    <p class="text_pay_line2">LÍNEA</p>
                </div>
            </a>
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
            <a new target="_blank" type="button" href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments/StartPayment?id=7883&amp;searchedCategoryId=&amp;searchedAgreementName=FUTURE%20SOLUTIONS%20DEVELOPMENT%20SAS">
                <div class="d-none d-sm-none d-md-block d-xxl-none">
                    <img class="my_pay img-fluid" src="./iconos/mi_pago_amigo.png" alt="">    
                </div>
                <div class="pay_line d-none d-sm-none d-md-block d-xxl-none">
                    <p class="text_pay_line">PAGO EN</p>
                    <p class="text_pay_line2">LÍNEA</p>
                </div>
            </a>

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
            <a new target="_blank" type="button" href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments/StartPayment?id=7883&amp;searchedCategoryId=&amp;searchedAgreementName=FUTURE%20SOLUTIONS%20DEVELOPMENT%20SAS">
                <div class="d-block d-sm-block d-md-none">
                    <img class="my_pay1 img-fluid" src="./iconos/mi_pago_amigo.png" alt="">    
                </div>
                <div class="pay_line1 d-block d-sm-block d-md-none">
                    <p class="text_pay_line_sm">PAGO EN</p>
                    <p class="text_pay_line2_sm">LÍNEA</p>
                </div>
            </a>
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
            <p class="text_exclusive d-none d-sm-none d-md-block">EXCLUSIVO <strong>DE OTTIS</strong></p>
            <!-- <img class="apps offset-1" src="./iconos/apps.svg" alt=""> -->
            <img class="cloud d-none d-sm-none d-md-block" src="./imagenes/home/nube4.png" alt="">
            <img class="cloud2 d-none d-sm-none d-md-block" src="./imagenes/home/nube3.png" alt="">
            <img class="cloud3 d-none d-sm-none d-md-block" src="./imagenes/home/nube5.png" alt="">
            <img class="cloud4 d-none d-sm-none d-md-block" src="./imagenes/home/nube2.png" alt="">
            <img class="cloud5 d-none d-sm-none d-md-block" src="./imagenes/home/nube3.png" alt="">
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

            <!-- -----------media screen under 768px-------------- -->
            <div class="offset-3 float_box1 d-block d-sm-block d-md-none">
                <p class="exclu_text_1">Tenemos excelente calidad en <br>
                                        el servicio, principalmente en la <br>
                                        velocidad de conexión.
                </p>
            </div>
            <div class="offset-3 float_box2 d-block d-sm-block d-md-none">
                <p class="exclu_text_2">Contamos con <br>
                                        costos asequibles.
                </p>
            </div>
            <div class="offset-3 float_box3 d-block d-sm-block d-md-none">
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
            <a type="button" class="btn register btn-primary offset-6" href="./registrarpqrs.php">Registralas <br> <strong>AQUÍ</strong></a>
            <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn register btn-primary offset-6" onclick="Buscar()">Registralas <br> <strong>AQUÍ</strong></button> -->
        </div>

        <!-- ----------------------------------------------------------------- -->
        

            <!-- <div class="first_img">
                <div class="bill_and_admon">
                    <h3 class="text_admon"><strong>FACTURACIÓN<br>Y ADMINISTRACIÓN</strong></h3>
                    <h3 class="text_schedule"><strong>Lunes a Viernes</strong> <br> 
                                    8:00am - 1:00pm <br> 
                                    2:00pm - 6:00pm <br>
                                    <strong>Sábados</strong> <br>
                                    9:00am - 12:00pm <br>
                                    facturacion@ottis.com.co
                    </h3>           
                </div>
                <div class="contact_whatsapp">
                    <h3 class="text_whatsapp"> CONTACTO <img src="./iconos/whatsApp_3.png" alt="" width="6%"><strong> 311 491 6907</strong></h3>
                </div>
                <img class="silvia_channel offset-2" src="./imagenes/home/call _enter_home_2.png" alt="">
            </div> -->

            <!-- -------------------------- -->
            <!-- <div class="second_img">
                <div class="bill_and_admon">
                    <h3 class="text_support"><strong>SOPORTE TÉCNICO</strong></h3>
                    <h3 class="text_schedule_sup"><strong>Lunes a Sábado</strong> <br> 
                                    6:00am - 1:00pm <br> 
                                    <strong>Domingo y Festivos</strong> <br>
                                    9:00am - 5:00pm <br>
                                    mesadeservicio@ottis.com.co
                    </h3>           
                </div>
                <div class="contact_whatsapp">
                    <h3 class="text_whatsapp"> CONTACTO <img src="./iconos/whatsApp_3.png" alt="" width="6%"> <strong> 321 289 3978</strong></h3>
                </div>
                <img class="silvia_channel offset-2" src="./imagenes/home/call _enter_home_2.png" alt="">
            </div>   -->
              <!-- ----------------------------  -->
            <!-- <div class="third_img">
                <div class="bill_and_admon">
                    <h3 class="text_trade"><strong>COMERCIAL<br>Y VENTAS</strong></h3>
                    <h3 class="text_schedule_trade"><strong>Lunes a Viernes</strong> <br> 
                                        8:00am - 1:00pm <br>
                                        2:00pm - 6:00pm <br> 
                                        <strong>Sábados</strong> <br>
                                        9:00am - 12:00pm <br>
                                        comercial@ottis.com.co
                    </h3>           
                </div>
                <div class="contact_whatsapp">
                    <h3 class="text_whatsapp_trade">CONTACTO <img src="./iconos/whatsApp_3.png" alt="" width="6%"> <strong> 320 499 5482 - 322 609 3107 </strong></h3>
                </div>
                <img class="silvia_channel offset-2" src="./imagenes/home/call _enter_home_2.png" alt="">
            </div>  -->
            
        <div class="attention_channel">
            <h2 class="channel_text ">CANALES DE <strong>ATENCIÓN</strong></h2>
            <h3 class="pbx_text ">PBX 6017943254 - 6019172166</h3>     
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active machete">
                        <!-- <div class="first_img"> -->
                            <div class="bill_and_admon">
                                <h3 class="text_admon"><strong>FACTURACIÓN<br>Y ADMINISTRACIÓN</strong></h3>
                                <h3 class="text_schedule"><strong>Lunes a Viernes</strong> <br> 
                                                8:00am - 1:00pm <br> 
                                                2:00pm - 6:00pm <br>
                                                <strong>Sábados</strong> <br>
                                                9:00am - 12:00pm <br>
                                                facturacion@ottis.com.co
                                </h3>           
                            </div>
                            <div class="contact_whatsapp">
                                <h3 class="text_whatsapp"> CONTACTO <img src="./iconos/whatsApp_3.png" alt="" width="6%"><strong> 311 491 6907</strong></h3>
                            </div>
                            <img class="silvia_channel offset-2" src="./imagenes/home/call _enter_home_2.png" alt="">
                        <!-- </div> -->
                    </div>
                    <div class="carousel-item machete">
                        <!-- <div class="second_img"> -->
                            <div class="bill_and_admon">
                                <h3 class="text_support"><strong>SOPORTE TÉCNICO</strong></h3>
                                <h3 class="text_schedule_sup"><strong>Lunes a Sábado</strong> <br> 
                                                6:00am - 1:00pm <br> 
                                                <strong>Domingo y Festivos</strong> <br>
                                                9:00am - 5:00pm <br>
                                                mesadeservicio@ottis.com.co
                                </h3>           
                            </div>
                            <div class="contact_whatsapp">
                                <h3 class="text_whatsapp"> CONTACTO <img src="./iconos/whatsApp_3.png" alt="" width="6%"> <strong> 321 289 3978</strong></h3>
                            </div>
                            <img class="silvia_channel offset-2" src="./imagenes/home/call _enter_home_2.png" alt="">
                        <!-- </div>     -->
                    </div>
                    <div class="carousel-item machete">
                        <!-- <div class="third_img"> -->
                            <div class="bill_and_admon">
                                <h3 class="text_trade"><strong>COMERCIAL<br>Y VENTAS</strong></h3>
                                <h3 class="text_schedule_trade"><strong>Lunes a Viernes</strong> <br> 
                                                    8:00am - 1:00pm <br>
                                                    2:00pm - 6:00pm <br> 
                                                    <strong>Sábados</strong> <br>
                                                    9:00am - 12:00pm <br>
                                                    comercial@ottis.com.co
                                </h3>           
                            </div>
                            <div class="contact_whatsapp">
                                <h3 class="text_whatsapp_trade">CONTACTO <img src="./iconos/whatsApp_3.png" alt="" width="6%"> <strong> 320 499 5482 - 322 609 3107 </strong></h3>
                            </div>
                            <img class="silvia_channel offset-2" src="./imagenes/home/call _enter_home_2.png" alt="">
                        <!-- </div>  -->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>   
    </div>

    <!-- MODAL DE CONSULTA DEUDAS -->
    <!-- <div id="myModal" class="modal hide fade">
    
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Clientes Encontrados</h3>
        </div>
        
        <div class="modal-body" > 
            
            <div class="container" id="tabla_respuesta">

            </div>
            <br>
            <br>
            <br>
            
        </div>
        
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
        </div>
    </div> -->

    <script type="text/javascript" src="js/script.js"></script>
<?php
require("templates/footer.html");
?>