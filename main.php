<?php 
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

   
    $message = htmlspecialchars(($message));
    $message = urldecode(($message));
    $message = trim(($message));
    
    $to = "gavruluknazar0210@gmail.com";
    $from = trim($email);

    $headers = "From : $from". "\r\n".
    "Reply-to: $from". "\r\n".
    "X-Mailer: PHP/". phpversion();

    mail($to,$userName,$Pnumber,$email,$message)


    
 ?>