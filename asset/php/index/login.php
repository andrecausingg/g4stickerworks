<?php
    session_start();

    if (isset($_POST["email"])  && ($_POST["password"])){
        $email = sanitize($_POST["email"]);
        $password = sanitize($_POST["password"]);

        $classForgotPassword = new ClassForgotPassword($email, $password);
        $classForgotPassword->verifyPassword();
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
        private $password;

        // Method
        function __construct($email, $password){
            $this->email = $email;
            $this->password = $password;
        }

        function verifyPassword(){
            require_once "../helper/global/global.php";
            $conn = (new classConnDB())->conn();
            
            // Check if the email exists in the database
            $stmt =  $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                
                // Verify the password
                if($row["password"] == $this->password) {
                    // Session
                    $_SESSION["id"] = $row["user_id"];
                    
                    if($row["role"] == "admin"){
                        echo "admin";
                    }else{
                        if($row["first_name"] == ""){
                            echo "newUser";
                        }else{
                            echo "set";
                        }
                    }
                }else {
                    echo "passwordIsIncorrect" ;
                }
            } else {
                echo "accountNotFound";
            }
        }
    }

?>