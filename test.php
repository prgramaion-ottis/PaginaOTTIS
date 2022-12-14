<?php
require("templates/header.html");
?>
<body>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/styletest.css" crossorigin="anonymous">
    <div class="container">
        <?php
            require("templates/navbar.html");
        ?>
        <div class=" col-md-12"  >
            <img class="" src="./imagenes/velocidad/Recurso_9.png" style="z-index:1" width="100%" alt="">
            <div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-1">
                <h1 class="wellcome">Mide Tu Velocidad <br> de Internet</h1>
            </div>
        </div> 
        <div class="div-test" style="z-index:-10;">
            <div class="title-test col-12">
                    <h1 class="title-text">
                        REALIZA TU TEST DE VELOCIDAD,
                    </h1>
                    <h1 class="sub-title-text">
                        SIGUIENDO LOS SIGUIENTES PASOS:
                    </h1>
            </div>
            <div class="row">
                <div class="card-body col-4">
                        <h5 class="sub-title-card col-8">Conecta tu equipo</h5>
                        <!-- <h5 class="card-title title-card"> </h5> -->
                        <p class="card-text text-card">Si estas conectado por la red
                            Mide siempre la velocidad con
                            el equipo de cómputo
                            conectado al router mediante
                            cable, nunca por WiFi. La
                            encriptación de seguridad de
                            las conexiones, las caídas en la
                            potencia de la señal y otros
                            factores relacionados con la
                            tecnología inalámbrica harán
                            que la velocidad que recibimos
                            sea inferior a la que llega
                            realmente al router.
                        </p>
                </div>
                <div class="card-body col-4">
                        <h5 class="sub-title-card col-8">Cierra las ventanas de navegación</h5>
                        <!-- <h5 class="card-title title-card"> </h5> -->
                        <p class="card-text text-card">En el momento de realizar la
                            medición, es muy importante
                            que el computador no esté
                            ejecutando ningún programa
                            que pueda consumir el ancho
                            de banda de la conexión. Si
                            algún software está operativo y
                            conectado a Internet, como un
                            servicio de streaming, quitará
                            parte de la conexión al test de
                            velocidad y los resultados no
                            serán representativos.
                        </p>
                </div>
                <div class="card-body col-4">
                    <h5 class="sub-title-card col-8">Realiza la prueba</h5>
                    <!-- <h5 class="card-title title-card"> </h5> -->
                    <p class="card-text text-card">
                    Puedes realizar la prueba con
                    nuestro medidor o con otros
                    medidores, te sugerimos
                    realizar varios test sobre
                    servidores diferentes. Ten en
                    cuenta que en las mediciones
                    internacionales pasan por
                    redes de diferentes
                    operadores afectando el
                    resultado de la medición
                    </p>
                </div>
            </div>    
        
            <!-- <div class=" col-9 test-speet">
                <iframe width="100%" height="650px" frameborder="0" src="https://ottis.speedtestcustom.com"></iframe>
            </div> -->
            
        
            <div class="author" >
                <p class="name"  >
					<i class=" icon-time icon-48 active icon-circled"></i> 
					<?php
                        date_default_timezone_set('America/Bogota');
                        $hora= date ("h:i");
                        $fecha= date ("j/n/Y");
                    ?>
                        <p class="text-date">
                            <?php
                            echo ("Fecha de medición: <br>").$fecha." : ".$hora;
                            ?>
                        </p>    
                    
                </p>
            </div>
            
        </div>


    </div>   
<?php
    require("templates/footer.html");
?>