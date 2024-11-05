<?php
    // require './Lib/PHPMailer/DNSConfigurator.php';
    require './Lib/PHPMailer/Exception.php';
    // require './Lib/PHPMailer/OAuth.php';
    // require './Lib/PHPMailer/OAuthTokenProvider.php';
    require './Lib/PHPMailer/PHPMailer.php';
    require './Lib/PHPMailer/POP3.php';
    require './Lib/PHPMailer/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class Email{
        private $destinatario;
        private $assunto;
        private $mensagem;

        public function __get($atr) { 
            return $this->$atr; 
        }

        public function __set($atr, $v) {
            $this->$atr = $v;
        }

        public function validarEnvio(){
            try{

              if(!filter_var($this->__get('destinatario'), FILTER_VALIDATE_EMAIL)){
                throw new Exception('Erro! E-mail digitado inválido, tente novamente.');

                //Parei aqui, penso em redirecionar a página para a inicial.
              } 

              if(empty($this->destinatario) || empty($this->assunto) || empty($this->mensagem)){
                throw new Exception('Erro! os campos estão incompletos!!!');
              }

              return true;

            } catch (Exception $e){
                echo '<p style="color: red">' . $e->getMessage() . '</p>';
                die();
            }

        }
    }

    $envioEmail = new Email();

    $envioEmail->__set("destinatario", $_POST['destinatario']);
    $envioEmail->__set("assunto", $_POST['assunto']);
    $envioEmail->__set("mensagem", $_POST['mensagem']);

    // print_r($envioEmail);
    $envioEmail-> validarEnvio();

    echo 'conteúdo que vem depoiss!!!!';

    //hei de me virar bem aqui também.

/*
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'user@example.com';                     //SMTP username
        $mail->Password   = 'secret';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
        $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        //Attachments
        $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
*/
?>