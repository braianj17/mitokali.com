<?php
class correo
    {
        public $result;
        public function Enviar($correo,$correode,$nombre,$asunto,$contenido,$cabeceras)
            {
                require("class.phpmailer.php");
                require("class.smtp.php");
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "ssl";
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465;
                $mail->Username = "programacion@uvp.edu.mx";
                $mail->Password = "Des.Sof.13";
                //$mail->AddReplyTo = ($correode,$nombre);
                $mail->AddAddress("$correo", "$correo");                           
                $mail->FromName = ($asunto);
                $mail->Subject = ($asunto);
                $mail->AltBody = ($contenido);
                $mail->MsgHTML($contenido);                
                //$mail->AddAttachment(""); //Adjuntar algún archivo.                                
                $mail->IsHTML(true);
                $mail->send();
                
            }
    }
?>