<?php
require("templates/header.html");
?>
<body>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/stylecobertura.css" crossorigin="anonymous">
    <div class="container">
        <?php
            require("templates/navbar.html");
        ?>
        <div class=" col-md-12"  >
            <img class="" src="./imagenes/cobertura/Mesa_de_trabajo_9.png" style="z-index:1" width="100%" alt="">
            <div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-1">
                <h1 class="wellcome">ZONAS DE COBERTURA</h1>
            </div>
        </div> 

           

      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="background-color: #001C51; height: 550px">
        <br>
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
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span> 
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
        
      </div>

      <iframe src="https://www.google.com/maps/d/embed?mid=1eJZIQ25SFiBL1pIYcnur3iEoB86I2ho&hl=es&ehbc=2E312F" width="100%" height="480"></iframe>
    </div>
<?php
    require("templates/footer.html");
?>