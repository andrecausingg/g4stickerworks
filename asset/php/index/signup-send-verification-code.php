<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST["email"])){
        $email = sanitize($_POST["email"]);
        $classSendVerificationCode = new classSendVerificationCode($email);
        $classSendVerificationCode->create();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Start of Class
    class classSendVerificationCode{
        protected $email;

        // METHODS
        // Set the all the data
        function __construct($email){
            $this->email = $email;
        }

        function create(){
            require_once "../helper/global/global.php";
        
            $conn = (new classConnDB())->conn();
            $sixDigitCode = (new classSixDigitCode())->sixDigitCodeF();
        
            $stmt = $conn->prepare("SELECT status FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $this->sendVerCodeEmail();
            }else{
                echo "emailNotExist";
            }
        }


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
                        $mail->setFrom('from@example.com', 'Mailer');
                        $mail->addAddress($row["email"], 'Joe User');     //Add a recipient
                        $mail->addAddress('ellen@example.com');               //Name is optional
                        $mail->addReplyTo('info@example.com', 'Information');
                        $mail->addCC('cc@example.com');
                        $mail->addBCC('bcc@example.com');
                    
                        //Attachments
                        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                    
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Here is the subject';
                        $mail->Body    = 'This is the HTML message body <b>'. $row['activate_code'] .'</b>';
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    
                        if($mail->send()){
                            echo "sentCode";
                            $stmt->close();
                            $conn->close();
                        }   
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                }
            }
        }
    } // End of Class
?>