<?php

if(isset($_POST['enviar'])){
    
    if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['mensaje'])){
        $name = $_POST['nombre'];
        $mail = $_POST['correo'];
        $mail_envio = 'aldorogaytan@gmail.com';
        $message = $_POST['mensaje'];
      
       
        $header = "From: " . $name . "\r\n";
        //$header.= "X-Mailer: PHP/". phpversion();
        $bodymail = mail($mail_envio,$mail,$message);
        if($bodymail){
            echo "Correo enviado exitosamente";
        }
    }
}

?>