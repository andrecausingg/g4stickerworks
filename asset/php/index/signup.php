<?php
    session_start();

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Isset for check email already exist
    if(isset($_POST["emailCheckExist"])){
        $emailCheckExist = sanitize($_POST["emailCheckExist"]);

        $classSignUp = new classSignUp();
        $classSignUp->setEmailCheckExist($emailCheckExist);
        $classSignUp->emailCheckExist();
    }

    // Isset for Create
    if(isset($_POST["email"]) && isset($_POST["password"])){
        $email = sanitize($_POST["email"]);
        $password = sanitize($_POST["password"]);

        $classSignUp = new classSignUp();
        $classSignUp->setEmail($email);
        $classSignUp->setPassword($password);
        $classSignUp->create();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Start of Class
    class classSignUp{
        protected $email;
        protected $password;
        protected $emailCheckExist;


        // METHODS
        // Set the all the data
        public function setEmail($email){
            $this->email = $email;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function setEmailCheckExist($emailCheckExist){
            $this->emailCheckExist = $emailCheckExist;
        }

        function emailCheckExist(){
            require_once "../helper/global/global.php";
        
            $conn = (new classConnDB())->conn();
            $sixDigitCode = (new classSixDigitCode())->sixDigitCodeF();

            $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $this->emailCheckExist);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                $_SESSION["emailCheckExistSignUp"] = $this->emailCheckExist;

                while ($row = $result->fetch_assoc()) {
                    if($row["status"] != 'activated') {
                        // prepare the SQL statement with placeholders
                        $sql = "UPDATE user_tbl SET activate_code = ? WHERE email = ?";
                        // create a prepared statement
                        $stmt1 = $conn->prepare($sql);
                        // bind the parameters to the placeholders
                        $stmt1->bind_param("is", $sixDigitCode, $this->emailCheckExist);
                        // Execute the statement
                        if($stmt1->execute()){
                            // close the prepared statement and database connection
                            if($stmt1->close() && $conn->close()){
                                $this->sendVerCodeEmailCheckExist();
                            }
                        }
                    }else{
                        echo "emailExist";
                    }
                }
            }
        }
        
        function create(){
            require_once "../helper/global/global.php";
        
            $conn = (new classConnDB())->conn();
            $sixDigitCode = (new classSixDigitCode())->sixDigitCodeF();
            $dateTimeVarChar = (new classDateTime())->getDateTime();
            $role = 'user';
        
            $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0){
                // Session
                $_SESSION["emailSignUp"] = $this->email;
                while ($row = $result->fetch_assoc()) {
                    if($row["status"] == 'activated'){
                        echo "emailExist";
                    }else{
                        echo"sendingCode";
                    }
                }
            }else{
                $_SESSION["emailSignUp"] = $this->email;
                $stmt1 = $conn->prepare("INSERT INTO user_tbl (email, password, role, activate_code, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
                $stmt1->bind_param("sssis", $this->email, $this->password, $role,  $sixDigitCode, $dateTimeVarChar);
                if ($stmt1->execute()){
                    if($stmt1->close() && $conn->close()){
                        $this->sendVerCodeEmail();
                    }
                }
            }
        }

        // Send code for new email
        function sendVerCodeEmail(){
            // Database Connection
            require_once "../helper/global/global.php";
            //Load Composer's autoloader
            require_once "../helper/vendor/autoload.php";

            // Class
            $classConnDB = new classConnDB();

            // Variable
            $conn = $classConnDB->conn();

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

        // Send Code if email already Exist
        function sendVerCodeEmailCheckExist(){
            // Database Connection
            require_once "../helper/global/global.php";
            //Load Composer's autoloader
            require_once "../helper/vendor/autoload.php";

            // Class
            $classConnDB = new classConnDB();

            // Variable
            $conn = $classConnDB->conn();

            $name = '';
            if (filter_var($this->emailCheckExist, FILTER_VALIDATE_EMAIL)) {
                $parts = explode('@', $this->emailCheckExist);
                $name = str_replace('.', '', $parts[0]); // remove the dot (.) from the name
            }

            // Sanitize user input using prepared statements
            $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $this->emailCheckExist);
            $stmt->execute();
            $result = $stmt->get_result();
        
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