<?php 
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    class classSendVerCodeEmail{
        function sendVerCodeEmail(){
            //Load Composer's autoloader
            require_once '../helper/library/PHPMailer/vendor/autoload.php';
            // Database Connection
            require_once '../helper/global/global.php';

            // Sign Up session
            require_once 'signup.php';

            $classConnDB = new classConnDB();

            if(isset($_SESSION["signUpUserEmail"])){
                $email = $_SESSION["signUpUserEmail"];
            
                // Sanitize user input using prepared statements
                $stmt = $classConnDB->conn()->prepare("SELECT * FROM users_tbl WHERE email = ?");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
            
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
            
                        //Create an instance; passing `true` enables exceptions
                        $mail = new PHPMailer(true);
            
                        try {
                            //Server settings
                            $mail->isSMTP();                                            //Send using SMTP
                            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                            $mail->Username   = 'shawngomo@gmail.com';                     //SMTP username or API key
                            $mail->Password   = 'qrcjdthuealfhcnl';                               //SMTP password or API secret
                            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                            //Recipients
                            $mail->setFrom('from@example.com', 'Mailer');
                            $mail->addAddress($email, 'Joe User');     //Add a recipient
            
                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = 'Here is the subject';
                            $mail->Body    = 'This is the HTML message body <b>' .$row["verification_code"] .'</b>';
                            $mail->AltBody = $row["verification_code"];
            
                            if($mail->send()) {
                                echo 'Message has been sent';
                            } else {
                                echo 'Message could not be sent';
                            }
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                    }
                } else {
                    echo "User with email $email not found.";
                }
            
                $stmt->close();
            }
            
            
        }
    }
?>


