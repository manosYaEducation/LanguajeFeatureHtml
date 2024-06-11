<?php
 
if($_POST) {
    $visitor_name = "Prueba";
    $visitor_email = "contacto@oscargarces.cl";
    $email_title = "este es mi titulo cool";
    $concerned_department = "";
    $visitor_message = "esto es la prueba a ver si esto funciona";
    $email_body = "<div>";

//     if(isset($_POST['visitor_name'])) {
//         $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
//         $email_body .= "<div>
//                            <label><b>Visitante : </b></label>&nbsp;<span>".$visitor_name."</span>
//                         </div>";
//     }

//     if(isset($_POST['visitor_email'])) {
//         $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
//         $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
//         $email_body .= "<div>
//                            <label><b> Email:</b></label>&nbsp;<span>".$visitor_email."</span>
//                         </div>";
//     }
     
//     if(isset($_POST['email_title'])) {
//         $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
//         $email_body .= "<div>
//                            <label><b>Teléfono:</b></label>&nbsp;<span>".$email_title."</span>
//                         </div>";
//     }
//   /*   
//     if(isset($_POST['concerned_department'])) {
//         $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
//         $email_body .= "<div>
//                            <label><b>Concerned Department:</b></label>&nbsp;<span>".$concerned_department."</span>
//                         </div>";
//     }
//     */ 
//     if(isset($_POST['visitor_message'])) {
//         $visitor_message = htmlspecialchars($_POST['visitor_message']);
//         $email_body .= "<div>
//                            <label><b>Visitor Message:</b></label>
//                            <div>".$visitor_message."</div>
//                         </div>";
//     }
     

$para      = 'colaboracionasinc@gmail.com';
// $email_title    = 'El título';
$mensaje   = 'Hola esta es mi mensaje cuando es un POST ';
$cabeceras = 'From: ' . $visitor_email . "\r\n"; 
    'Reply-To: alphadocere@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $mail =  mail($para, $email_title, $mensaje, $cabeceras);

 if( $mail) {
    die('OK');
 }else{

    die('NO');
 }


//   $recipient = "colaboracionasinc@gmail.com";
     
//     $email_body .= "</div>";

//     $headers  = 'MIME-Version: 1.0' . "\r\n"
//     .'Content-type: text/html; charset=utf-8' . "\r\n"
//     .'From: ' . $visitor_email . "\r\n";
     
//     if(mail($recipient, $email_title, $email_body, $headers)) {
//         // echo "" . $recipient. ""  . $visitor_message. "" . $headers. "". $email_body. "" . $visitor_email;

//         // echo "<p>Gracias por contactarnos, $visitor_name. Te contactaremos lo antes posible.</p>";
//           /* AGU esta imagen es de la respuesta si sale todo bien*/
//         // echo '<a href="https://www.oscargarces.cl/"><img src="images/Gracias.jpg" style="max-width: 30%;"> </a>';
//         die('OK');


     

//     } else {
//         echo "<p>Gracias por contactarnos, $visitor_name. Te contactaremos lo antes posible.</p>";

//         echo '<p>Lo sentimos pero no se pudo entregar tu mensaje, puedes llamar al 226832786; 226837040 o escribir a santaines@gmail.com</p>';
 
//         echo '<a href="https://www.oscargarces.cl/"><img src="images/Recuerda.png" style="max-width: 30%;"> </a>';

//         header("Refresh:5;url=https://www.oscargarces.cl/");
      
//         die('No se pudo entregar el mensaje');
//     }
 
} else {
    echo 'hola';
    echo '<p>Algo no funciono, no se pudo enviar el mensaje, intentalo nuevamente./p>';

    $para      = 'colaboracionasinc@gmail.com';
$titulo    = 'El título';
$mensaje   = 'Hola esta es mi mensaje cuando no es POST (CAPICCI)?';
$cabeceras = 'From: contacto@oscargarces.cl' . "\r\n" .
    'Reply-To: alphadocere@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $mail =  mail($para, $titulo, $mensaje, $cabeceras);
}

// echo $para.'   '. $titulo.'   '. $mensaje. '   '.$cabeceras . ' LO MANDASTe : '. $mail;


?>