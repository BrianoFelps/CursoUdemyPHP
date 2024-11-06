<?php
    require './Lib/PHPMailer/Exception.php';
    require './Lib/PHPMailer/PHPMailer.php';
    require './Lib/PHPMailer/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
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
                throw new Exception('EmailErro');
              } 

              if(empty($this->destinatario) || empty($this->assunto) || empty($this->mensagem)){
                throw new Exception('CamposErro');
              }

              return true;

            } catch (Exception $e){

                if($e->getMessage() == "EmailErro") header('Location: index.php?envio=erro1');
                
                if($e->getMessage() == "CamposErro") header('Location: index.php?envio=erro2');

                die();
            }

        }
    }

    $envioEmail = new Email();

    $envioEmail->__set("destinatario", $_POST['destinatario']);
    $envioEmail->__set("assunto", $_POST['assunto']);
    $envioEmail->__set("mensagem", $_POST['mensagem']);

    $envioEmail-> validarEnvio();

    echo '<pre>';
    print_r($envioEmail);
    echo '</pre>';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'briansticknodesbr@gmail.com';                     //SMTP username
        $mail->Password = 'hzgrivjehpkdvfzk';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('briansticknodesbr@gmail.com', 'Briano envia');
        $mail->addAddress($envioEmail->__get("destinatario"));     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $envioEmail->__get('assunto');
        $mail->Body    = $envioEmail->__get('mensagem');
        $mail->AltBody = "O aplicativo não suporta a mensagem!!!";

        $mail->send();
        header("Location: index.php?envio=sucesso");
    } catch (Exception $e) {
        // echo "A mensagem não pode ser enviada. Erro: {$mail->ErrorInfo}";
        header("Location: index.php?envio=erro3&erro=" . $mail->ErrorInfo);
    }

?>