<?php 
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    class classSendVerCodeEmail{
        function sendVerCodeEmail(){
            //Load Composer's autoloader
            require_once '../helper/library/email-api/vendor/autoload.php';
            // Database Connection
            require_once '../helper/global/global.php';
            // Sign Up session
            require_once 'signup.php';

            $classConnDB = new classConnDB();

            if(isset($_SESSION["signUpUserEmail"])){
                $email = $_SESSION["signUpUserEmail"];

                $check_email_table = mysqli_query($classConnDB->conn(), "SELECT * FROM users_tbl WHERE email ='$email'");
                while($row = mysqli_fetch_assoc($check_email_table)){
                    
                    //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try {
                        //Server settings
                        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'shawngomo@gmail.com';                     //SMTP username
                        $mail->Password   = 'qrcjdthuealfhcnl';                               //SMTP password
                        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom('from@example.com', 'Mailer');
                        $mail->addAddress($email, 'Joe User');     //Add a recipient

                        // $mail->addAddress('ellen@example.com');               //Name is optional
                        // $mail->addReplyTo('info@example.com', 'Information');
                        // $mail->addCC('cc@example.com');
                        // $mail->addBCC('bcc@example.com');

                        //Attachments
                        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Here is the subject';
                        $mail->Body    = 'This is the HTML message body <b>' .$row["verification_code"] .'</b>';
                        $mail->AltBody = $row["verification_code"];

                        if($mail->send())
                            echo 'Message has been sent';
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                }
            }
        }
    }
?>



