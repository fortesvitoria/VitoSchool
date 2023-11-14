    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    //importa dos dados do banco com método include()
    include("conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = mysqli_real_escape_string($banco, $_POST['email']);

        // Verificar se o email existe no banco de dados
        $sql = "SELECT * FROM cadastro WHERE email = '$email'";
        $result = mysqli_query($banco, $sql);

        if (mysqli_num_rows($result) > 0) {
            /**
             * This example shows sending a message using a local sendmail binary.
             */

            //Import the PHPMailer class into the global namespace


            require '../vendor/autoload.php';

            //Create a new PHPMailer instance
            $mail = new PHPMailer();
            //Set PHPMailer to use the sendmail transport
            $mail->isSendmail();
            //Set who the message is to be sent from
            $mail->setFrom($email, $cpf);
            //Set an alternative reply-to address
            $mail->addReplyTo('replyto@example.com', 'First Last');
            //Set who the message is to be sent to
            $mail->addAddress('fortesvitoria@gmail.com', 'vitória Fortes');
            //Set the subject line
            $mail->Subject = 'PHPMailer sendmail test';
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
            //Replace the plain text body with one created manually
            $mail->AltBody = 'This is a plain-text message body';
            //Attach an image file
            $mail->addAttachment('images/phpmailer_mini.png');

            //send the message, check for errors
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message sent!';
            }

            // Enviar email com link de redefinição de senha (não implementado aqui)

            echo "Um email com instruções para a recuperação de senha foi enviado para $email.";
        } else {
            echo "Email não encontrado. Verifique se você digitou corretamente.";
        }
    }

    mysqli_close($banco);
    ?>