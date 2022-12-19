<?php
// require("class.phpmailer.php");
// header('Access-Control-Allow-Origin: *');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once('../phpmailer/src/PHPMailer.php');
include_once('../phpmailer/src/SMTP.php');
include_once('../phpmailer/src/Exception.php');

if (isset($_POST['name']) && $_POST['name'] &&
    isset($_POST['email']) && $_POST['email'] &&
    isset($_POST['phone']) && $_POST['phone'] &&
    isset($_POST['message']) && $_POST['message']) {

    //  Asigna variables con los datos que llegan del formulario    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $mail = new PHPMailer;

    //Defino la zona Horaria
    date_default_timezone_set('America/Bogota');
    $fecha = date('Y-m-d H:i');

    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'mail.ottis.com.co';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->Username = "programacion@fsdcomunicaciones.com"; // Email de la cuenta de correo. 
    $mail->Password = "8305025806-OTTIS"; // Contrase帽a de la cuenta de correo
    $mail->From = ('comercial@ottis.com.co'); //Parametro de donde enviamos la solicitud de correo.
    $mail->addAddress ('comercial@ottis.com.co'); //Registramos la direcci贸n a donde enviamos la solicitud de correo
    $mail->addCC($email); // Registramos el email que va con copia

    $mail->FromName = $name ; //Nombre a mostrar del remitente. 
    $mail->Subject = ('OTTIS Comunica sobre el servicio de Internet!'); // Este es el titulo del email.

    //  Define el mensaje HTML que se va a enviar
    $body = " <div style='background-image: url(http://www.ottis.com.co/img/HojaMembrete.jpg); width: 794px; height: 1123px; color: #2c3e50;  border-radius: 10px; background-size: contain; position: relative;  background-repeat: no-repeat; '>
                ";
    $body .= "<div class='descripcion' style= 'padding: 25% 10% 10% 10%; border-bottom: 1px solid #f2f2f2; text-align: left; top: 50%;'>";
    $body .= "<div>
                <h3 style='text-align: right;'><strong>Fecha:</strong> ".$fecha."</h3>
            </div>
            <br>
            <div>
                <h3><strong>Solicitud: </strong> Información prestación del servicio.</h3>
            </div>
            <br>
            <div>
                <strong>Estimado(a) Sr(a): </strong> ".$name."
            </div>
            <br>
            <div>
                Te informamos, que tu solicitud fue registrada en nuestro sistema, pronto un agente estará comunicándose para atender tus inquietudes.
                
                Para realizar seguimiento, cancelar tu solicitud, es importante que los datos suministrados sean veraces, ya que a través de ellos podremos gestionar tu solicitud.
                
                Los datos de contacto son:
            </div>
            <br>
            <div>
                <strong>No de Contacto:</strong> ".$phone."
            </div>
            <br>
            <div>
                <strong>Email:</strong> ".$email."
            </div>
            <br>
            <div>
                <strong>Descripción de la solicitud</strong>
            </div>
            <div>
                ".$message."
            </div>
            ";		

    $body .= "</div>";

	$mail->Body = $body; // Mensaje a enviar. 
	$mail->MsgHTML($body);
	$exito = $mail->send(); // Funcion que permite el envio del correo.

    if($exito = 1){
        //  Mensaje si se puede enviar el correo
        echo json_encode(array('success' => "1"));
    }else{
        //  Mensaje si NO se puede enviar el correo
        echo json_encode(array('success' => "0"));
    }
}