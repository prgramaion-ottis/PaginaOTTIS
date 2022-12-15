<?php
require("templates/header.html");
?>
<body>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/stylecontact.css" crossorigin="anonymous">
    <div class="container">
        <?php
            require("templates/navbar.html");
        ?>
        <div class="refence_box col-md-12"  >
            <img class="" src="./imagenes/contacto/imagen_contacto-100.jpg" style="z-index:1" width="100%" alt="">
            
            <div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-1">
                <h1 class="wellcome">CONTACTO</h1>
            </div>
        </div> 
        <div class="conecta">
            <div class="row  ">
                <div class="col-xs-12 col-sm-12 col-md-4 offset-1 contenido">
                    <div class="row col-12 col-xs-12 col-sm-12 col-md-12">
                        <h1 class="title-conecta">CONECTA CON NOSOTROS</h1> 
                    </div>
                    <br>
                    <br>
                    <div class="row row-cols-2 flexbox ">
                        <img class="col-2 col-xs-3 col-sm-4 col-md-3 icono"src="./iconos/whatsApp_3.png" >
                        <div class="col-11 col-xs-9 col-sm-6 col-md-9">
                            <h4 class="sub-title-contacto"><b>3204995482</b>
                            </h4>
                            <h4 class="texto-contacto">
                                3226096107
                            </h4>
                        </div>
                    </div>
                    <div class="row row-cols-2 flexbox" >
                        <img class="col-2 col-xs-3 col-sm-4 col-md-3 icono"src="./iconos/facebook.png" >
                        <div class="col-11 col-xs-9 col-sm-6 col-md-9">
                            <a href="https://www.facebook.com/ottiscomunica"><h4 class="sub-title-contacto">/ottiscomunica</h4></a>
                        </div>
                    </div>
                    <div class="row row-cols-2 flexbox" >
                        <img class="col-2 col-xs-3 col-sm-4 col-md-3 icono"src="./imagenes/contacto/ubicacion.png" style="margin-top:2%;margin-bottom:2%" >
                        <div class="col-11 col-xs-9 col-sm-6 col-md-9">
                            <h4 class="sub-title-contacto"><b>Cra 16 A # 13 A - 19</b>
                            </h4>
                            <h4 class="texto-contacto">
                                Sogamoso - Boyacá
                            </h4>
                        </div>
                    </div>
                    <div class="row row-cols-2 flexbox" >
                        <img class="col-2 col-xs-3 col-sm-3 col-md-3 icono"src="./imagenes/contacto/mail.png" style="margin-top:4%;margin-bottom:4%" >
                        <div class="col-11 col-xs-9 col-sm-6 col-md-9">
                            <h4 class="sub-title-contacto"><b>comercial@ottis.com.co</b></h4>
                        </div>
                    </div>
                    <div class="row row-cols-2 flexbox">
                        <img class="col-2 col-xs-3 col-sm-4 col-md-3 icono"src="./iconos/twiter.png" >
                        <div class="col-11 col-xs-9 col-sm-6 col-md-9">
                            <h4 class="sub-title-contacto"><b>@OttisComunica</b></h4>
                        </div>
                    </div>
                    <div class="row row-cols-2 flexbox">
                        <img class="col-2 col-xs-3 col-sm-4 col-md-3 icono"src="./imagenes/contacto/pbx.png" style="margin-top:3%">
                        <div class="col-11 col-xs-9 col-sm-6 col-md-9">
                            <h4 class="sub-title-contacto"><b>6019172166</b></h4>
                            <h4 class="texto-contacto">6017943254</h4>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xs-12 col-sm-12 col-md-7 "> -->
                <div class="col-xs-12 col-sm-12 col-md-7 d-none d-md-block  ">
                    <img src="./imagenes/contacto/call-center.png" height= "100%" width="100%" alt="">
                </div>
            </div>
            
            
            
   
        </div>
        <form>
            <br>
                
                <div class="form-row row">
                    <div class="form-group offset-1 col-3" >
                        <input type="text" class="form-control" id="name" placeholder="Nombre y apellido" title="Nombre" >
                    </div>
                    <div class="form-group col-4">
                        <input type="email" class="form-control" id="email" placeholder="Correo electronico" title="Email">
                    </div>
                    <div class="form-group col-3">
                        <input type="number" class="form-control" id="phone" placeholder="Numero de contacto" title="Telefono">
                    </div>
                </div>
                <br>
                <div class="form-group offset-1 col-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Por favor ingrese aquí su mensaje y uno de nuestros colaboradores se pondra en contacto."></textarea>
                </div>
                <br>
                <div class="row">
                    <button type="submit" class="btn btn-form ">Enviar Mensaje</button>
                </div>
                <br>
            </form>
    </div>

    
<?php
require("templates/footer.html");
?>