<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST["sendCodeNow"])){
        $classSendVerificationCode = new classSendVerificationCode();
        $classSendVerificationCode->updateCode();
    }

    // Start of Class
    class classSendVerificationCode{
        function updateCode(){
            require_once "../helper/global/global.php";
            require_once "/xampp/htdocs/g4stickerworks/asset/php/index/signup.php";
        
            $conn = (new classConnDB())->conn();
            $sixDigitCode = (new classSixDigitCode())->sixDigitCodeF();

            if(isset($_SESSION["emailCheckExistSignUp"]) || isset($_SESSION["emailSignUp"])){
                $email = $_SESSION["emailCheckExistSignUp"] ?? $_SESSION["emailSignUp"] ?? null;
            }
        
            $stmt = $conn->prepare("SELECT status FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0){
                // prepare the SQL statement with placeholders 
                $sql = "UPDATE user_tbl SET activate_code = ? WHERE email = ?";
                // updateCode a prepared statement
                $stmt2 = $conn->prepare($sql);
                // bind the parameters to the placeholders
                $stmt2->bind_param("is", $sixDigitCode, $email);

                // Execute the statement
                if($stmt2->execute()){
                    $this->sendVerCodeEmail();
                    $stmt2->close();
                } else {
                    echo "failed";
                    $stmt2->close();
                }
            }else{
                echo "emailNotExist";
            }
        }

        function sendVerCodeEmail(){
            // Database Connection
            require_once "../helper/global/global.php";
            //Load Composer's autoloader
            require_once "../helper/vendor/autoload.php";
            // Session
            require_once "/xampp/htdocs/g4stickerworks/asset/php/index/signup.php";

            $conn = (new classConnDB())->conn();

            if(isset($_SESSION["emailCheckExistSignUp"]) || isset($_SESSION["emailSignUp"])){
                if($_SESSION["emailCheckExistSignUp"] != ""){
                    $email = $_SESSION["emailCheckExistSignUp"];
                }else{
                    $email = $_SESSION["emailSignUp"];
                }
            }

            $name = '';
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $parts = explode('@', $email);
                $name = str_replace('.', '', $parts[0]); // remove the dot (.) from the name
            }

            // Sanitize user input using prepared statements
            $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    
                    //updateCode an instance; passing `true` enables exceptions
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
                            <p style="font-weight:300; font-size:18px;">Thank you for signing up for our service. To complete the verification process, please use the following code: <span style="font-size: 24px; font-weight:800;">'. $row["activate_code"] .'</span> .</p>
                            <p style="font-weight:300; font-size:18px;">If you did not request this verification code, please ignore this message.</p>

                            <h3 style="margin:0;font-size: 16px">Best regards,</h3>
                            <span style="font-size: 14px; font-weight:bolder;">The g4stickerworks Team</span>
                        </div>';

                        $mail->AltBody = '    
                        <div style="width:500px; margin:auto auto; padding:56px; box-shadow: 0 4px 4px 0 rgba(233,240,243,0.4); border:1px solid #ECEFF3;border-radius: 12px">
                            <h2 style"font-size:30px;">Dear valued '.$name.',</h2>
                            <p style="font-weight:300; font-size:18px;">Thank you for signing up for our service. To complete the verification process, please use the following code: <span style="font-size: 24px; font-weight:800;">'. $row["activate_code"] .'</span> .</p>
                            <p style="font-weight:300; font-size:18px;">If you did not request this verification code, please ignore this message.</p>

                            <h3 style="margin:0;font-size: 16px">Best regards,</h3>
                            <span style="font-size: 14px; font-weight:bolder;">The g4stickerworks Team</span>
                        </div>';
                    
                        if($mail->send()){
                            if($stmt->close() && $conn->close()){
                                echo "sentCode";
                            }
                        }   
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                }
            }
        }
    } // End of Class
?>