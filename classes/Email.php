<?php
//Load Composer's autoloader
require 'vendor/autoload.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Email
{
    private $mail;

    public function __construct($host,$user,$password,$name)
    {
        $this->mail =  new PHPMailer(true);

        $this->mail->isSMTP();                                            //Send using SMTP
        $this->mail->Host       = $host;                     //Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $this->mail->Username   = $user;                     //SMTP username
        $this->mail->Password   = $password;                               //SMTP password
        $this->mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $this->mail->setFrom($user, $name); 
        $this->mail->isHTML(true);           
    }

    public function addAddress($recipient,$name){
        $this->mail->addAddress($recipient, $name);
    }

    public function content($info){
        $this->mail->Subject = $info['subject'];
        $this->mail->Body    = $info['body'];
        $this->mail->AltBody = $info['altbody'];
    }

    public function send(){
        // try{
        //     $this->mail->send();
        //     return true;
        // } catch (Exception $e) {
        //     echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        //     return false;
        // }
        return $this->mail->send() ? true : false;
    }


}

?>
