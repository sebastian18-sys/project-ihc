<?php
       include '../peluqueria_sistemasenoferta/dist/includes/dbcon.php';
           $query=mysqli_query($con,"select * from empresa ")or die(mysqli_error());

    while($row=mysqli_fetch_array($query)){
   $correo_empresa = $row['correo'];
     $empresa = $row['empresa'];
   
    }
		
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
 
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Crea el correo electrónico y envía el mensaje.
$to = $correo_empresa; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Formulario de contacto del sitio web:  $name";
$email_body = "Has recibido un nuevo mensaje de tu formulario de contacto de sitio web.
.\n\n"."Aquí están los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\Celular: $phone\n\Mensaje:\n$message";
$headers = "Desde: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Responder a: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>