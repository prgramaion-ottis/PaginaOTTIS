<?php 
/*-----------------------
Autor: Deissy Neita Nuvan
Fecha: 05-04-2019
Version de PHP: 7.0.32
----------------------------*/


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



/* BD class. */
include('./conectdb.php'); 

//Defino la zona Horaria
date_default_timezone_set('America/Bogota');
$fecha = date('Y-m-d H:i:s');		

//Recibo las variables
		$codigo=$_POST["identificacion"];
		$nombre=$_POST["name"];
		$apellido=$_POST["apellido"];
		$email=$_POST["email"];
		$contacto=$_POST["celular"];
		$direccion=$_POST["direccion"];
		$municipio=$_POST["municipio"];
		$tipoTramite=$_POST["tipoTramite"];
		$tramite=$_POST["tramite"];
		// $medio = $_POST["medio"];

		// $codigo="1118562713";
		// $nombre="carlos";
		// $apellido="Gonzalez";
		// $email="carlos.gzalez1903@gmail.com";
		// $contacto="3121597532";
		// $direccion="altos cataluna";
		// $municipio=1;
		// $tipoTramite=4;
		// $tramite="Esto es una prueba";
		$medio = 0;

		if ($tipoTramite==1) {
			$name_tramite="Petición";
		}if ($tipoTramite==2) {
			$name_tramite="Queja";
		}if ($tipoTramite==3) {
			$name_tramite="Reclamo";
		}if ($tipoTramite==4) {
			$name_tramite="Sugerencia";
		}

		// Se consulta el tipo de tramite que esta registrando
		$nameT = mysqli_query($conn, "SELECT nombreTramite FROM TipoTramite WHERE idTipoTramite = ".$tipoTramite);

		if (mysqli_num_rows($nameT) > 0) {
			while($row = mysqli_fetch_assoc($nameT)) {
				$nameTramite = $row["nombreTramite"];
			}
		}
		
		$result = mysqli_query($conn, "SELECT idPersona FROM Persona WHERE numeroIdentificacion = ".$codigo);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$id = $row["idPersona"];
			}
			$reg_tramite= "INSERT INTO TramitePersona (fechaRegistro,detalleTramite,estadoTramite,Persona_idPersona,TipoTramite_idTipoTramite,Medio_idMedio,Seguimiento_idSeguimiento,Usuario_idUsuario) VALUES('$fecha', '$tramite', '1', '$id', '$tipoTramite', '1', '0', '0')";
			$query_update = mysqli_query($conn,$reg_tramite);
			//Consulto el Id del ultimo registro del tramite
			$idTramite =  mysqli_insert_id($conn);
				if ($query_update){
					
					$enviarReg = envio_email($nombre, $apellido, $name_tramite, $fecha, $email, $contacto, $tramite, $idTramite);
					if ($enviarReg == true){
						echo json_encode(array('success' => "1"));
						// $messages[] = "El tramite se ha registrado satisfactoriamente, en breve atenderemos su solicitud.";
					}
				} else{
					echo json_encode(array('success' => "0.1".mysqli_error($conn)));
					// $errors []= "Lo siento debe intentar nuevamente, el tramite no se ha registrado.".mysqli_error($conn);
				}
		}else {	
			$sql="INSERT INTO Persona (numeroIdentificacion, nombres, apellidos, email, numeroContacto, direccion, id_municipio) VALUES ( '$codigo','$nombre','$apellido', '$email','$contacto','$direccion', '$municipio')";
			// $sql="INSERT INTO Persona ( nombre, correo, celular, nacionalidad) VALUES ( '$name', '$email', '$phone', '$country')";	
			$query_update = mysqli_query($conn,$sql);
				if ($query_update){
					//Consulto el Id del ultimo registro realizado
					$idPersona =  mysqli_insert_id($conn);
					
					$reg_tramite= "INSERT INTO TramitePersona VALUES('0', '".$fecha."', '".$tramite."', '1', '".$idPersona."', '".$tipoTramite."', '".$medio."', '0', '0')";
					
					$query_update = mysqli_query($conn,$reg_tramite);
					//Consulto el Id del ultimo registro del tramite
					$idTramite =  mysqli_insert_id($conn);
					if ($query_update){
						$enviarReg = envio_email($nombre, $apellido, $name_tramite, $fecha, $email, $contacto, $tramite, $idTramite);
						if ($enviarReg){
							echo json_encode(array('success' => "1"));
							// $messages[] = "Se ha registrado satisfactoriamente, en breve sera atendida su solicitud.";
						}
					}
					else{
						echo json_encode(array('success' => "0.2".mysqli_error($conn)));
						// $errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conn);
					}
				} 
				else{
					echo json_encode(array('success' => "0.3".mysqli_error($conn)));
					// $errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conn);
				}
			} 
		/*else {
				$errors []= "Error desconocido.";
			
			}*/


		// if (isset($errors)){
		// 	echo json_encode(array('success' => "0"));
			
		// }
		// if (isset($messages)){
		// 	echo json_encode(array('success' => "1"));	
				
		// }


function envio_email($nombre,$apellido,$name_tramite, $fecha, $email, $celular, $tramite, $query_update) {
	/* Exception class. */
	include_once('../phpmailer/src/PHPMailer.php');
	include_once('../phpmailer/src/SMTP.php');
	include_once('../phpmailer/src/Exception.php');

	$mail = new PHPMailer();
	//Inicio la validacion por SMTP:
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure ="ssl";

	//Se registra el SMTP a utilizar, para gmail es: "smtp.gmail.com"
	$mail->Host = "mail.fsdcomunicaciones.com"; 
	// Puerto de conexión al servidor de envio. 
	$mail->Port = 465;

	$mail->Username = "programacion@fsdcomunicaciones.com"; // Email de la cuenta de correo. 
	$mail->Password = "8305025806-OTTIS"; // Contrase帽a de la cuenta de correo
	$mail->From = ('mesaservicio@fsdcomunicaciones.com'); //Parametro de donde enviamos la solicitud de correo.
	$mail->addAddress ('mesaservicio@ottis.com.co'); //Registramos la direcci贸n a donde enviamos la solicitud de correo
	$mail->addCC('administracion@ottis.com.co');
	$mail->addCC(' comercial@ottis.com.co');
	$mail->addCC('sistemadegestion@ottis.com.co');
	$mail->addCC('programacion@ottis.com.co');
	$mail->addCC($email); // Registramos el email que va con copia

	$mail->FromName = $nombre ; //Nombre a mostrar del remitente. 
	$mail->Subject = ('OTTIS Comunica!'); // Este es el titulo del email.

	$body = " <div style='background-image: url(http://www.ottis.com.co/img/HojaMembrete.jpg); width: 794px; height: 1123px; color: #2c3e50;  border-radius: 10px; background-size: contain; position: relative;  background-repeat: no-repeat; '>
				";
	$body .= "<div class='descripcion' style= 'padding: 25% 10% 10% 10%; border-bottom: 1px solid #f2f2f2; text-align: left; top: 50%;'>";
	$body .= "<div>
				<h3 style='text-align: right;'><strong>Fecha:</strong> ".$fecha."</h3>
			</div>
			<br>
			<div>
				<h3><strong>Solicitud: </strong> ".$name_tramite."</h3>
			</div>
			<br>
			<div>
				<strong>Estimado(a) Sr(a): </strong> ".$nombre." ".$apellido."
			</div>
			<br>
			<div>
				Te informamos, que tu solicitud fue registrada con <strong>número de radicado ".$query_update."</strong> en nuestro sistema, pronto un agente estará comunicándose para realizar seguimiento a tu PQRS. 
				Es importante que tengas en cuenta que la solicitud debe estar a nombre del titular del servicio, de igual forma si el agente considera necesario realizar una visita haya un mayor de edad, cuentes con los permisos de administración para el ingreso y dispongas de 2 horas para la realizar el trabajo.
				Para realizar seguimiento, cancelar tu solicitud, es importante que los datos suministrados sean veraces, ya que a través de ellos podremos gestionar tu solicitud.
				Los datos de contacto son:
			</div>
			<br>
			<div>
				<strong>No de Contacto:</strong> ".$celular."
			</div>
			<br>
			<div>
				<strong>Email:</strong> ".$email."
			</div>
			<br>
			<div>
				<strong>".$name_tramite.":</strong>
			</div>
			<div>
				".$tramite."
			</div>
			";		

			$body .= "</div>";

			$mail->Body = $body; // Mensaje a enviar. 
			$mail->MsgHTML($body);
			$exito = $mail->send(); // Funcion que permite el envio del correo.

			//Se valida el envio del mensaje:
			if ($exito = 1){
				// echo json_encode(array('success' => "1"));
				// echo "Tu mensaje ha sido enviado, pronto estaremos en contacto. Gracias!";
				return true;
			}else {
			/* PHPMailer error. */
			// echo $mail->ErrorInfo;
				// echo json_encode(array('success' => "0"));
				// echo "Tu mensaje NO ha sido enviado, pronto estaremos en contacto. Gracias!";
				return false;
			}
}
?>
