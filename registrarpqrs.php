<?php
require("templates/header.html");
include('ajax/conectdb.php');
?>
<body>
<script src="js/script.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="css/stylepqrs.css" crossorigin="anonymous">
    <div class="container">
        <?php
            require("templates/navbar.html");
        ?>
        <div class="refence_box col-md-12"  >
            <img class="" src="./imagenes/contacto/imagen_contacto-100.jpg" style="z-index:1" width="100%" alt="">
            
            <div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-1">
                <h1 class="wellcome">REGISTRA TUS PQRS</h1>
            </div>
        </div> 

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="background-color: #001C51; height: 100%; padding-bottom: 10%">
            <br>
            <div class="row col-12 ">
            <h1 class="title-ventajas">RECUERDE QUE...</h1> 
            <p class="text-info-pqrs">Señor usuario si tiene algún inconveniente con su facturación, terminación y/o modificación del contrato, 
                suspensión, cambio de plan, mensajes de contenidos y aplicaciones, negativa del contrato o cualquier petición asociada a la prestación del servicio, 
                recuerde contactarnos ya que somos el primer canal para darle una solución. Si no obtiene oportuna respuesta por parte nuestra, 
                puede dirigirse ante la Superintendencia de Industria y Comercio. Recuerde que los plazos para dar respuesta a sus peticiones, 
                quejas, reclamos o recursos (PQR), no han sido modificados. <b>Hasta 15 dias podemos darle respuesta a sus peticiones </b>, 
                quejas o recursos por medios digitales, sino tiene correo, por favor indíquenos a que dirección la hacemos llegar
            </p>
            </div>
            <div class="carousel-item active">
                <div class="card-slider" >  
                <img class="img-card" src="./iconos/chat.png"  alt="Card image disponibilidadd">
                        <div class="card-body">
                            <h5 class="card-title title-card"><b>PETICIÓN</b> </h5>
                            <p class="card-text text-card">Es el derecho que tiene toda persona para solicitar o reclamar para elevar solicitudes respetuosas de información y/o consulta y obtener pronta resolución de las mismas.</p>
                        </div>
                </div>  
            </div>
            <div class="carousel-item">
                <div class="card-slider" >  
                        <img class="img-card" src="./iconos/martillo.png"  alt="Card image disponibilidadd">
                        <div class="card-body">
                            <h5 class="card-title title-card"><b>QUEJA</b> </h5>
                            <p class="card-text text-card">Expresión verbal, escrita o en medio electrónica de insatisfacción con la conducta o la acción de los trabajadores y que requiere una respuesta. (Las quejas deben ser resueltas, atendidas o contestadas dentro de los quince (15) días siguientes a la fecha de su presentación.</p>
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card-slider" >  
                        <img class="img-card" src="./iconos/hojas.png"  alt="Card image disponibilidadd">
                        <div class="card-body">
                            <h5 class="card-title title-card"><b>RECLAMO</b> </h5>
                            <p class="card-text text-card">Expresión verbal, escrita o en medio electrónico, de insatisfacción referida a la prestación de un servicio o la deficiente atención, es decir, es una declaración formal por el incumplimiento de un derecho que ha sido perjudicado o amenazado, ocasionado por la deficiente prestación o suspensión injustificada del servicio. (Los reclamos deben ser resueltos, atendidos o contestados dentro de los quince (15) días siguientes a la fecha de su presentación).</p>
                        </div>
                </div>
            </div>
            <div class="carousel-item" >
                <div class="card-slider" >  
                        <img class="img-card" src="./iconos/llave.png"  alt="Card image disponibilidadd">
                        <div class="card-body">
                            <h5 class="card-title title-card"><b>SUGERENCIA</b> </h5>
                            <p class="card-text text-card">Expresión verbal, escrita o en medio electrónico de recomendación entregada por el ciudadano, que tiene por objeto mejorar el servicio que se presta en OTTIS Comunicaciones. (En un término de diez (10) días se informará sobre la viabilidad de su aplicación).</p>
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
        <div class="formulario">
                <p>
                Para nosotros es muy importante contar con clientes satisfechos y en pro de mejorar nuestros servicios, podrás registrar tus 
                <strong>peticiones, quejas, reclamos y/o sugerencias</strong> sobre nuestro servicio a continuación:</p>
            <form action="" id="pqrForm" method="post" role="form" class="pqrForm">
                <div class="row">
			        <div class="col-6  form-group">
                        <input type="number" name="identificacion" class="form-control" require id="identificacion" placeholder="Número de identificación" data-rule="minlen:7" data-msg="Registra tu número de identificación." />
                    </div>
                    <div class="col-6 col-md-3 form-group">
                        <input type="text" name="name" class="form-control" id="name" require placeholder="Nombre " data-rule="minlen:3" data-msg="Registra tu nombre." />                   
                    </div>
				    <div class="col-12 col-sm-12 col-md-3 form-group">
                        <input type="text" name="apellido" class="form-control" id="apellido" require placeholder="Apellido" data-rule="minlen:3" data-msg="Registra tu apellido." />               
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                    <input type="email" class="form-control" name="email" require id="email" placeholder="Su correo electónico" data-rule="email" data-msg="Registra tu correo electrónico valido." />
                    </div>
                    <div class="col-6 form-group">
                    <input type="number" class="form-control" name="celular" require id="celular" placeholder="Numero de Contacto" data-rule="minlen:7" data-msg="Registra tu número de contacto." />
                    </div>
                </div>
				<div class="row">
                    <div class="col-6 col-md-3 form-group">
                        <input type="text" class="form-control" require name="direccion" id="direccion" placeholder="Dirección de residencia" data-rule="minlen:5" data-msg="Registra tu dirección de residencia." />
                    </div>
                    <div class="col-6 col-md-3 form-group">
                        <select id="pet-select" class="form-select form-group" height="5px" name="municipio" id="municipio" data-msg="Selecciona el municipio." >
                            <option value="">--Seleccione municipio--</option>
                            <?php
                            $consult = mysqli_query($conn, "SELECT * FROM municipios WHERE  departamento_id ='15' AND estado = '1'");
                            if ($consult){
                                    while ($row = mysqli_fetch_array($consult)) { 
                                    ?> 
                                        <option value= "<?php echo ($row['id_municipio']);?>"><?php echo ( utf8_encode( $row['municipio']));?></option> 
                                    <?php
                                    }
                                }else {
                                    echo "Error de BD, no se pudo consultar la base de datos\n";
                                    echo "Error MySQL: " . mysqli_error();
                                    exit;
                                    
                                    }
                        ?> 
        
                        </select>   
                    
                    </div>
                    
                    <div class="col-12 col-sm-12 col-md-6 form-group">
                        <select id="pet-select" require class="form-select form-group" name="tipoTramite" id="tipoTramite" data-msg="Seleccione el trámite." >
                            <option value="">--Seleccione el tipo de trámite--</option>
                            <?php
                            $resultado = mysqli_query($conn, "select * from TipoTramite");

                                if (!$resultado) {
                                    echo "Error de BD, no se pudo consultar la base de datos\n";
                                    echo "Error MySQL: " . mysqli_error();
                                    exit;
                                }else{
                                    while ($row = mysqli_fetch_array($resultado)) { 

                            ?> 

                            <option value= "<?php echo ($row['idTipoTramite']);?>"><?php echo ( $row['nombreTramite']);?></option><?php 
                                    } 

                            mysqli_close($conn);
                            } 
                            ?>
                        </select>  
                        
                    
                    </div>
                </div>  
				<div class="row">
                    <div class="col-12 margintop10 form-group">
                        <textarea class="form-control form-area" id="text-tramite" require name="tramite"  data-rule="required" data-msg="Regalanos más detalles de tu solicitud. " placeholder="Registre de forma respetuosa su trámite" ></textarea>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-form offset-3 col-6">Enviar PQRS</button>
                </div>
            </form>
        </div>

    </div>
    <script type="text/javascript" src="js/formpqr.js"></script>
<?php
require("templates/footer.html");
?>    