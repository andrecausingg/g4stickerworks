<?php
    session_start();

    if(isset($_POST["email"]) && isset($_POST["password"])){
        $email = sanitize($_POST["email"]);
        $password = sanitize($_POST["password"]);

        $classSignUp = new classSignUp($email, $password);
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

        // METHODS
        // Set the all the data
        function __construct($email,$password){
            $this->email = $email;
            $this->password = $password;
        }

        function create(){
            require_once "../helper/global/global.php";
            require_once "phpmailer-send-code.php";
        
            $conn = (new classConnDB())->conn();
            $sixDigitCode = (new classSixDigitCode())->sixDigitCodeF();
            $dateTimeVarChar = (new classDateTime())->getDateTime();
            $role = 'user';
        
            $_SESSION["signUpUserEmail"] = $this->email;
        
            $stmt = $conn->prepare("SELECT status FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if($row["status"] == 'activated') {
                        echo "emailExist";
                    }else{
                        echo"sendingCode";
                    }
                }
            }else{
                $stmt = $conn->prepare("INSERT INTO user_tbl (email, password, role, activate_code, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
                $stmt->bind_param("sssis", $this->email, $this->password, $role,  $sixDigitCode, $dateTimeVarChar);
                if ($stmt->execute()) {
                    $classSendVerCodeEmail->sendVerCodeEmail();
                }
            }
        }
        
    } // End of Class
?>