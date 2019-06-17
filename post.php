<?php 

$name = $_POST['name']; 
$email = $_POST['email']; 


$header = 'From: ' . $email . " \n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \n"; 
$header .= "Mime-Version: 1.0 \n"; 
$header .= "Content-Type: text/plain";

$message .= "Mensaje: " . $_POST['message'] . " \n"; 

$para = 'sgarcia@casafragma.com';
$asunto = 'Grupo Matera - Contacto desde la web'; 
 
if(@mail($para, $asunto, utf8_decode($message), $header))
{
  print "<script>document.location.href='gracias.html';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}

/* echo 'estatus=OK';  */
?> 