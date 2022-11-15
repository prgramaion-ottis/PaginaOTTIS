<?php
require("templates/header.html");
?>
<link rel="stylesheet" href="css/stylecontact.css" crossorigin="anonymous">
<div class="container-md">
    <div class="refence_box" width="100%">
        
        <img class="imagen-fondo" src="./imagenes/contacto/imagen_contacto-100.jpg" style="z-index:1" width="100%" alt="">
        <div id="titulo" class="col-12 col-sm-12 col-md-6 col-lg-6 "style="z-index:2"> 
            <h1 class="title ">Contacto</h1> 
        </div>
    </div> 
    <a new target="_blank" class="contact" type="button"  href="https://api.whatsapp.com/send/?phone=573212893978&text&type=phone_number&app_absent=0"> 
        <img src="./iconos/contacto.svg" alt="" style="background-color: rgb(0, 66, 66)">
    </a>

</div>
<br>
<br>
<?php
require("templates/footer.html");
?>