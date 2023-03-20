<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST["email"])){
        $email = sanitize($_POST["email"]);
        
        $classForgotPassword = new ClassForgotPassword($email);
        $classForgotPassword->forgotPasswordSendUpdatePassLink();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classForgotPassword{
        // Properties
        private $email;

        // Method
        function __construct($email){
            $this->email = $email;
        }

        function forgotPasswordSendUpdatePassLink(){
            require_once "../helper/global/global.php";
            
            $conn = (new classConnDB())->conn();
            $queryUrlRand = (new classQueryUrlRand())->queryUrlRand();
            
            // Check if the email exists in the database
            $stmt =  $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                // prepare the SQL statement with placeholders
                $sql = "UPDATE user_tbl SET update_pass_key = ? WHERE email = ?";
                // create a prepared statement
                $stmt1 = $conn->prepare($sql);
                // bind the parameters to the placeholders
                $stmt1->bind_param("ss", $queryUrlRand, $this->email);
                // Execute the statement
                if($stmt1->execute()){
                    // close the prepared statement and database connection
                    if($stmt1->close() && $conn->close()){
                        $this->sendLinkKey();
                    }
                }
            }else{
                echo "accountNotFound";
            }
        }

        function sendLinkKey(){
            // Database Connection
            require_once "../helper/global/global.php";
            //Load Composer's autoloader
            require_once "../helper/vendor/autoload.php";

            $conn = (new classConnDB())->conn();

            // Sanitize user input using prepared statements
            $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();

            $name = '';
            if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $parts = explode('@', $this->email);
                $name = str_replace('.', '', $parts[0]); // remove the dot (.) from the name
            }
        
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    
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
                        $mail->setFrom('g4stickerworks@example.com', 'Mailer');
                        $mail->addAddress($row["email"], $name);     //Add a recipient
                        // $mail->addCC('cc@example.com');
                        // $mail->addBCC('bcc@example.com');
                                        
                        //Attachments
                        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                    
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Verification code for your account';

                        $mail->Body = '    
                        <div style="width:500px; margin:auto auto; padding:56px; box-shadow: 0 4px 4px 0 rgba(233,240,243,0.4); border:1px solid #ECEFF3;border-radius: 12px">
                            <h2 style"font-size:30px;">Dear valued '.$name.',</h2>
                            <p style="font-weight:300; font-size:18px;">We have received a request to change your password. To ensure the security of your account, please follow the link below to reset your password immediately:</p>
                            
                            <div style="display:inline-block; padding:12px 24px; font-size:18px; background-color:hsl(221, 70%, 45%); text-align:center;">
                                <a style="text-decoration: none; color: hsl(0, 0%, 100%);" href="http://localhost/g4stickerworks/update-password?vKey='.$row["update_pass_key"].'">Change Password</a>
                            </div>

                            <p style="font-weight:300; font-size:18px;">If you did not initiate this password change request, please disregard this message.</p>
                            <p style="font-weight:300; font-size:18px;">Thank you for your attention to this matter.</p>

                            <h3 style="margin:0;font-size: 16px">Best regards,</h3>
                            <span style="font-size: 14px; font-weight:bolder;">The g4stickerworks Team</span>
                        </div>';

                        $mail->AltBody = '    
                        <div style="width:500px; margin:auto auto; padding:56px; box-shadow: 0 4px 4px 0 rgba(233,240,243,0.4); border:1px solid #ECEFF3;border-radius: 12px">
                            <h2 style"font-size:30px;">Dear valued '.$name.',</h2>
                            <p style="font-weight:300; font-size:18px;">We have received a request to change your password. To ensure the security of your account, please follow the link below to reset your password immediately:</p>
                            
                            <p style="font-weight:300; font-size:18px;">If you did not initiate this password change request, please disregard this message.</p>
                            <p style="font-weight:300; font-size:18px;">Thank you for your attention to this matter.</p>

                            <h3 style="margin:0;font-size: 16px">Best regards,</h3>
                            <span style="font-size: 14px; font-weight:bolder;">The g4stickerworks Team</span>
                        </div>';
                    
                        if($mail->send()){
                            if($stmt->close() && $conn->close()){
                                echo "sent";
                            }
                        }   
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                }
            }
        }
    }
?>