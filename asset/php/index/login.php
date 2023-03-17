<?php
    if (isset($_POST["email"])){
        
        $classForgotPassword = new ClassForgotPassword($_POST["email"]);

        try {
            $classForgotPassword->verifyPassword();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    class classForgotPassword{
        // Properties
        private $email;
        private $password;

        // Method
        function __construct($email){
            $this->email = $email;
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
                    if($row["first_name"] == ""){
                        echo "newUser";
                    }else{
                        echo "set";
                    }
                }else {
                    throw new Exception("emailorPasswordIsIncorrect");
                }
            } else {
                throw new Exception("accountNotFound");
            }
        }
    }

?>