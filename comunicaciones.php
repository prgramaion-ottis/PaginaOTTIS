<?php
require("templates/header.html");
?>
<body>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/stylecomunicaciones.css" crossorigin="anonymous">
    <div class="container">
        <?php
            require("templates/navbar.html");
        ?>
        <div class=" col-md-12"  >
            <img class="" src="./imagenes/mejor_internet/mejor_internet.png" style="z-index:1" width="100%" alt="">
            <div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-1">
                <h1 class="wellcome">El MEJOR SERVICIO <br> Para todos</h1>
            </div>
        </div> 

           

      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators" style="bottom: 5%;">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="background-color: #001C51; height: 600px">
        <div class="carousel-item active ">
            <div class="card-slider row" style="width: 100%;" >  
                <div class="col-sm-5 offset-1">
                    <img class="img-card" src="./imagenes/mejor_internet/hogar.png" alt="Servivio Hogar">
                </div>
                <div class="card-body col-sm-5 col-11">
                    <h1 class="card-title title-card"><b>SERVICIO</b> </h1>
                    <h1 class="sub-title-card"><span>HOGAR</span></h1>
                    <p class=" text-card">OTTIS Comunicaciones suministra el mejor internet a viviendad urbanas y rurales con las <span id="resaltado">MEJORES VELOCIDADES</span>.</p>
                </div>
            </div>  
        </div>
        <div class="carousel-item">
            <div class="card-slider row" style="width: 100%;" >  
                <div class="col-sm-5 offset-1">
                    <img class="img-card" src="./imagenes/mejor_internet/estatal.png" alt="Servivio Hogar">
                </div>
                <div class="card-body col-sm-5 col-11">
                    <h1 class="card-title title-card"><b>SERVICIO</b> </h1>
                    <h1 class="sub-title-card"><span>EMPRESARIAL</span></h1>
                    <p class="t text-card">Los <span id="resaltado">MEJORES SERVICIOS</span>, que permitiran a tu empresa estar mas cerca de tus clientes, con los mejores tiempos de respuesta.</p>
                </div>
            </div>  
        </div>
        <div class="carousel-item">
            <div class="card-slider row" style="width: 100%;" >  
                <div class="col-sm-5 offset-1">
                    <img class="img-card" src="./imagenes/mejor_internet/estatal.png" alt="Servivio Hogar">
                </div>
                <div class="card-body col-sm-5 col-11">
                    <h1 class="card-title title-card"><b>SERVICIOS</b> </h1>
                    <h1 class="sub-title-card"><span>ESTATALES</span></h1>
                    <p class="t text-card">Los Servicios prestados a organizaciones estatales cuentan con características técnicas preferentes y de <span id="resaltado">INMEDIATA ATENCIÓN</span>.</p>
                </div>
            </div>  
        </div>
        <!-- <br>
        <div class="row col-12 ">
          <h1 class="title-ventajas">NUESTRAS VENTAJAS</h1> 
        </div>
          <div class="carousel-item active">
            <div class="card-slider" >  
                    <img class="img-card" src="./imagenes/cobertura/Mesa_de_trabajo_5.png" alt="Card image disponibilidadd">
                    <div class="card-body">
                        <h5 class="card-title title-card"><b>ALTA</b> </h5>
                        <h5 class="sub-title-card"><span>DISPONIBILIDAD</span></h5>
                        <p class="card-text text-card">Servicio contínuo y permanente con disponibilidad superior al 95% mensual</p>
                    </div>
            </div>  
          </div>
          <div class="carousel-item">
            <div class="card-slider" >  
                    <img class="img-card" src="./imagenes/cobertura/Mesa_de_trabajo_8.png" alt="Card image disponibilidadd">
                    <div class="card-body">
                        <h5 class="card-title title-card"><b>VELOCIDAD</b> </h5>
                        <h5 class="sub-title-card"><span>SIMÉTRICA</span></h5>
                        <p class="card-text text-card">Nuestro servicio de internet en fibra óptica es completamente simetrico (igual velocidad de carga y descarga)</p>
                    </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-slider" >  
                    <img class="img-card" src="./imagenes/cobertura/Mesa_de_trabajo_7.png" alt="Card image disponibilidadd">
                    <div class="card-body">
                        <h5 class="card-title title-card"><b>SERVICIO</b> </h5>
                        <h5 class="sub-title-card"><span>POSTVENTA</span></h5>
                        <p class="card-text text-card">Nuestra mesa de servicios TI permite entregar soporte técnico oportuno y de calidad</p>
                    </div>
            </div>
          </div>
          <div class="carousel-item" >
            <div class="card-slider" >  
                    <img class="img-card" src="./imagenes/cobertura/Mesa_de_trabajo_6.png" alt="Card image disponibilidadd">
                    <div class="card-body">
                        <h5 class="card-title title-card"><b>REDUNDANCIA</b> </h5>
                        <h5 class="sub-title-card"><span>GARANTIZADA</span></h5>
                        <p class="card-text text-card">Contamos con diversos proveedores nacionales simultáneos con canales dedicados que garantizan la disponibilidad del servicio en todo momento</p>
                    </div>
            </div>
          </div> -->
          
        </div>

        <button class="carousel-control-prev"  type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span> 
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button> 
        
      </div>

      <!-- <iframe src="https://www.google.com/maps/d/embed?mid=1eJZIQ25SFiBL1pIYcnur3iEoB86I2ho&hl=es&ehbc=2E312F" width="100%" height="480"></iframe> -->
    </div>
<?php
    require("templates/footer.html");
?>