<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['submit'])) {


        $name = $_POST['names'];
        $email = $_POST['mail'];
        $msg = $_POST['text'];

        //Load Composer's autoloader

        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = 'sultanshaikh1029@gmail.com';                     //SMTP username
            $mail->Password = 'oinvcwbopflpihwh';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($email, 'Portfolio Message');
            $mail->addAddress('sultanshaikh1029@gmail.com', 'Sultan Shaikh');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Message from Portfolio';
            $mail->Body = "<b>Message from Professional's</b> <br> Name - $name <br> Email Address - $email <br> Message - $msg <br> <i>Portfolio Message</i>";

            $mail->send();
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script> Swal.fire({ title: "Success!", text: "Message has been sent successfully.", icon: "success", confirmButtonText: "OK" }).then((result) => { if (result.isConfirmed) { window.location.href = index.php; } }); </script>';
        } 
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

}