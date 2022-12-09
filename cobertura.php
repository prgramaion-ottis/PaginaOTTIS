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
        <div class="refence_box col-md-12"  >
            <img class="" src="./imagenes/cobertura/Mesa_de_trabajo_9.png" style="z-index:1" width="100%" alt="">
            <div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-1">
                <h1 class="wellcome">ZONAS DE COBERTURA</h1>
            </div>
        </div> 

        <div class="conecta">
            
            <div class="row col-12 ">
                 <h1 class="title-ventajas">NUESTRAS VENTAJAS</h1> 
            </div>
            
            <div class="card col-md-4"  >
                <div class="offset-2 col-6 col-xs-8 col-sm-8 col-md-8" >
                    <img class="card-img-top" src="./imagenes/cobertura/Mesa_de_trabajo_5.png" width="100%" alt="Card image disponibilidadd">
                </div>
                
                <div class="card-body">
                    <h5 class="card-title title-card"><b>ALTA</b> </h5>
                    <h5 class="sub-title-card"><span>DISPONIBILIDAD</span></h5>
                    <p class="card-text text-card">Servicio contínuo y permanente con disponibilidad superior al 95% mensual</p>
                </div>
            </div> 
            <div class="card col-md-4"  >
                <div class="offset-2 col-6 col-xs-8 col-sm-8 col-md-8" >
                    <img class="card-img-top" src="./imagenes/cobertura/Mesa_de_trabajo_8.png" width="100%" alt="Card image velocidad">
                </div>
                <div class="card-body">
                    <h5 class="card-title title-card"><b>VELOCIDAD</b> </h5>
                    <h5 class="sub-title-card"><span>SIMÉTRICA</span></h5>
                    <p class="card-text text-card">Nuestro servicio de internet en fibra óptica es completamente simetrico (igual velocidad de carga y descarga)</p>
                </div>
            </div> 
            
   
        </div>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    </div>
<?php
    require("templates/footer.html");
?>