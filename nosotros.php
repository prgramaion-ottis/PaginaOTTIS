<!-- SE AGREGA LAS LIBRERIAS NECESARIOS CON BOOTSTRAP Y JQUERY QUE ESTAN EN HEADER -->
<?php
    require("templates/header.html");
?>
<body>
    <!-- AGREGAMOS LOS ESTILOS NECESARIOS PARA ESTA PESTAÑA -->
<link rel="stylesheet" href="css/stylenosotros.css" crossorigin="anonymous">
<!-- SE CREA UN CONTENEDOR Y SE AGREGA LA BARRA DE NAVEGACION  -->
    <div class="container">
        <?php
            require("templates/navbar.html");
        ?>
        <!-- ESTE ES EL DIV QUE CONTIENE LA IMAGEN Y EL TITULO DE LA PESTAÑA -->
        <div class="col-12">
            <img src="./imagenes/nosotros/Mesa_de_trabajo_9.png" alt="" width="100%">                
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-md-6 offset-1 titulo">
            <h1 class="wellcome">¿QUIÉNES SOMOS?</h1>
        </div>
        <div class="nosotros">
            <div class="row row-cols-2 justify-content-end">
                <div class="vehiculos d-none d-sm-none d-md-none d-lg-block">
                    <img src="./imagenes/nosotros/Mesa_de_trabajo_70.png" style="z-index:5;" height="500px" width="600px" alt="">
                </div>
                <div class="offset-1 col-10 col-sm-10 col-md-11 col-lg-4">
                    <p class="text-1"><b>Somos un PRST</b> boyacense líder en el mercado, que busca suplir con calidad y competitividad las necesidades de nuestros clientes y apoyar el
                            crecimiento tecnológico de la región, integrando soluciones propias, individuales, escalables al igual que herramientas (privativas y de 
                            open source) bajó el desarrollo integral de nuestro recurso humano. Nuestra empresa se rige y está ceñida a las normas vigentes de la 
                            legislación y regulación de Colombia, bajo la resolución No 29343 que confiere el registro de signo distintivo OTTIS HARDWARE y OTTIS SOFTWARE,
                            con lo cual se garantiza la calidad de nuestros productos y servicios en busca de la fidelización de nuestros clientes.    
                    </p>
                </div>
                
            </div>
        </div>
        <div class="img-mision" style="background-image: url('./imagenes/nosotros/Mesa_de_trabajo_5.png');"  >
            <!-- <img src="./imagenes/nosotros/Mesa_de_trabajo_5.png" alt="" height="100%" width="100%" style="z-index: -2; position: absolute;"> -->
            <div class="row">
                <div class="operativo">
                    <img src="./imagenes/nosotros/Mesa_de_trabajo_2.png" alt="" class="img-cracks d-none d-sm-none d-lg-block" height="100%">
                </div>    
                <div class="tarjeta-mision" >
                        <h1 class="sub-title">MISIÓN</h1>
                        <h4 class="text-2">DE NUESTRA EMPRESA</h4>
                        <p class="text-1">
                            Future Solutions Development SAS - FSD SAS
                            desarrolla e implementta solucionesy modelos 
                            tecnologicos de TIC, mediante el empleo de Software 
                            y Hardware. Brindando conectividad mediante 
                            tecnologia de punta en telecomunicaciones, 
                            empresarial de I+D+i contribuyendo al bienestar 
                            de su zona de influencia con la ejecución de 
                            proyectos basados de tecnologia.
                        </p>
                </div>
            </div>
        </div>
            
            
        <div class="img-vision" style="background-image: url('./imagenes/nosotros/Mesa_de_trabajo_6.png');"  >
            <!-- <img src="./imagenes/nosotros/Mesa_de_trabajo_5.png" alt="" height="100%" width="100%" style="z-index: -2; position: absolute;"> -->
            <div class="row">
                <div class="administrativo">
                    <img src="./imagenes/nosotros/Mesa_de_trabajo_4.png" alt="" class="img-administrativo d-none d-sm-none d-lg-block" height="100%">
                </div>    
                <div class="tarjeta-vision" >
                        <h1 class="sub-title">VISIÓN</h1>
                        <h4 class="text-2">DE NUESTRA EMPRESA</h4>
                        <p class="text-1">
                            En el 2030 Future Solutions Development SAS 
                            será la organización privada más reconocida 
                            del departamento de Boyacá, que promueva el 
                            talento humano regional e impulse el crecimiento 
                            de la sociedad boyacense, con la apropiación de 
                            tecnología y desarrollos innovadores mediante 
                            la ejecución de proyectos de investigación y 
                            aplicación en ciencia y tecnologia.



                        </p>
                </div>
            </div>
            
            
        </div>

    </div>
            
<!-- SE INSERTA TODO EL CONTENIDO DEL FOOTER -->
<?php
    require("templates/footer.html");
?>  