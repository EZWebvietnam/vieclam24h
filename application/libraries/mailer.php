<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Mailer {
    var $mail;
    public function __construct()
    {
        require_once('PHPMailer/class.phpmailer.php');
        // the true param means it will throw exceptions on errors, which we need to catch
        $this->mail = new PHPMailer(true);
        $this->mail->IsSMTP(); // telling the class to use SMTP
        $this->mail->CharSet = "utf-8"; 
        $this->mail->IsHTML(true);
        $this->mail->SMTPDebug  = 0;                     // enables SMTP debug information
        $this->mail->SMTPAuth   = true;                  // enable SMTP authentication
        $this->mail->SMTPSecure = false;                 // sets the prefix to the servier
        $this->mail->Host       = "mail.baoveantam.com";      // sets GMAIL as the SMTP server
        $this->mail->Port       = 25;                   // set the SMTP port for the GMAIL server
        $this->mail->Username   = "no-reply@baoveantam.com";// GMAIL username
        $this->mail->Password   = "no-reply123";       // GMAIL password
        $this->mail->AddReplyTo('baoveantam2@gmail.com', 'Nhu Cầu Việc Làm');
        $this->mail->SetFrom('no-reply@baoveantam.com', 'Nhu Cầu Việc Làm');
        $this->mail->AddCC('thangdq@baoveantam.com', 'Đoàn Quang Thắng');
        //$this->mail->AddCC('nhucautimviec@baoveantam.com', 'Nhu Cầu Việc Làm Support');
    }
 
    public function sendmail($to, $to_name, $subject, $body){
        try{
            $this->mail->AddAddress($to, $to_name);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
 
            $this->mail->Send();
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }
    }
}
?>