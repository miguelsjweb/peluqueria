<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;
class Email{

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token){
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){
        
        //Crear objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail -> SMTPAuth = true ;
        $mail -> Port = 587;
        $mail -> Username = 'miguelserranj@gmail.com';
        $mail -> Password = 'rwwzxsxzyphknpyc';

        $mail->setFrom('miguelserranj@gmail.com');
        $mail->addAddress($_POST['email']);
        $mail->Subject = 'Confirma tu cuenta';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->email . "</strong>. Gracias por unerte a nosotros. Para continuar, confirma tu cuenta en el siguiente enlance.</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://$_SERVER["HTTP_HOST"] . "/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";
        $contenido .= "<p>Si no fuiste tú , puedes ignorar el mensaje.</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }

    public function enviarInstrucciones(){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail -> SMTPAuth = true ;
        $mail -> Port = 587;
        $mail -> Username = 'miguelserranj@gmail.com';
        $mail -> Password = 'rwwzxsxzyphknpyc';

        $mail->setFrom('miguelserranj@gmail.com');
        $mail->addAddress($_POST['email']);
        $mail->Subject = 'Reestablece tu contraseña';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado recuperar tu contraseña. Pulsa en el siguiente enlace  </p>";
        $contenido .= "<p>Presiona aquí: <a href='http://$_SERVER["HTTP_HOST"] . "/recuperar?token=" . $this->token . "'>Reestablecer Contraseña</a>";
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje.</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }
}
