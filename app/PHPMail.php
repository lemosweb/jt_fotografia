<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PHPMail extends Model
{
    public $mail;

    public function __construct()
    {
        $this->mail = new \PHPMailer();
    }

    public function sendMail()
    {
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = 'sampletest';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = 'sampletest';                 // SMTP username
        $this->mail->Password = 'sampletest';                           // SMTP password
        $this->mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 587;                                    // TCP port to connect to

        $this->mail->setFrom('sampletest', 'Site Julio Torres');
        $this->mail->addAddress('sampletest', 'Site Julio Torres');     // Add a recipient


        $this->mail->isHTML(true);                                  // Set email format to HTML

        $this->mail->Subject = 'Here is the subject';
        $this->mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    }
}
