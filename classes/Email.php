<?php


namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    protected $email;
    protected $nombre;
    protected $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '491165c4ebfe6c';
        $mail->Password = '218ec7447d13dd';


        $mail->setFrom('cuentas@uptask.com', 'Mailer');
        $mail->addAddress('cuentas@uptask.com', 'uptask.com');
        $mail->Subject = 'Confirma tu cuenta';

        // Set HTML. Aquí le vamos a decir que vamos a utilizar HTML en el cuerpo del E-Mail
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        // Contenido del E-Mail
        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en UpTask, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona Aquí: <a href='http://". $_SERVER["HTTP_HOST"] . "/confirmar?token=" . $this->token . "'>Confirmar Cuenta</a> </p>";
        $contenido .= "<p>Si tu no creaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar el E-Mail
        $mail->send();
    }

    public function enviarInstrucciones()
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '491165c4ebfe6c';
        $mail->Password = '218ec7447d13dd';


        $mail->setFrom('cuentas@uptask.com', 'Mailer');
        $mail->addAddress('cuentas@uptask.com', 'uptask.com');
        $mail->Subject = 'Restablece tu password';

        // Set HTML. Aquí le vamos a decir que vamos a utilizar HTML en el cuerpo del E-Mail
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        // Contenido del E-Mail
        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Parece que has olvidado tu password, sigue el siguiente enlace para recuperarlo</p>";
        $contenido .= "<p>Presiona Aquí: <a href='http://". $_SERVER["HTTP_HOST"] . "/restablecer?token=" . $this->token . "'>Restablecer Password</a> </p>";
        $contenido .= "<p>Si tu no has solicitado este cambio, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar el E-Mail
        $mail->send();
    }

}
