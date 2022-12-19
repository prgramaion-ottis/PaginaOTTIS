<!-- SE AGREGA LAS LIBRERIAS NECESARIOS CON BOOTSTRAP Y JQUERY QUE ESTAN EN HEADER -->
<?php
require("templates/header.html");
?>
<body>
<!-- AGREGAMOS LOS ESTILOS NECESARIOS PARA ESTA PESTAÑA -->
<link rel="stylesheet" href="css/styletest.css" crossorigin="anonymous">
<!-- SE CREA UN CONTENEDOR Y SE AGREGA LA BARRA DE NAVEGACION  -->
    <div class="container">
        <?php
            require("templates/navbar.html");
        ?>
        <!-- ESTE ES EL DIV QUE CONTIENE LA IMAGEN Y EL TITULO DE LA PESTAÑA -->
        <div class=" col-md-12"  >
            <img class="" src="./imagenes/velocidad/Recurso_9.png" style="z-index:1" width="100%" alt="">
            <div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-1">
                <h1 class="wellcome">Mide Tu Velocidad <br> de Internet</h1>
            </div>
        </div> 
        <!-- CONTIENE LAS INSTUCCIONES PARA REALIZAR LAS PRUEBAS DE VELOCIDAD -->
        <div class="div-test" style="z-index:-10;">
        <br>
            <div class="title-test col-12">
                    <h1 class="title-text">
                        REALIZA TU TEST DE VELOCIDAD,
                    </h1>
                    <h1 class="sub-title-text">
                        SIGUIENDO LOS SIGUIENTES PASOS:
                    </h1>
            </div>
            <div class="row container row-card">
                <div class="card col-12 col-sm-4 col-md-4">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="sub-title-card col-8"><b>Conecta tu equipo</b> </h5>
                            <img src="./imagenes/velocidad/paso_1.png" alt="" class="col-4 img-pasos" >
                        </div>
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
                        
                </div>
                <div class="card col-12 col-sm-4 col-md-4">
                <div class="card-body">
                    <div class="row">
                        <h5 class="sub-title-card col-8 "><b>Cierra las ventanas de navegación</b> </h5>
                        <img src="./imagenes/velocidad/paso_2.png" alt="" class="col-4 img-pasos" >
                    </div>
                        
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
                </div>
                <div class="card col-12 col-sm-4 col-md-4">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="sub-title-card col-8"><b>Realiza la prueba</b></h5>
                            <img src="./imagenes/velocidad/paso_3.png" alt="" class="col-4 img-pasos">
                        </div>
                        
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
                
            </div>    
        
            <!-- <div class=" col-9 test-speet">
                <iframe width="100%" height="650px" frameborder="0" src="https://ottis.speedtestcustom.com"></iframe>
            </div> -->
            
        
            <div class="autor" >
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
        <!-- CONTIENE EL TEST DE VELOCIDAD DE SPEED TEST OOKLA -->
        <div class="test col-12">
            <iframe width="100%" height="650px" frameborder="0" src="https://ottis.speedtestcustom.com"></iframe>
        </div>
    </div>  
    
<!-- SE INSERTA TODO EL CONTENIDO DEL FOOTER -->  
<?php
    require("templates/footer.html");
?>