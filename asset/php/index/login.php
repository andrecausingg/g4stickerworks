<?php
    // Start the session
    session_start();

    if((isset($_POST["email"])) && (isset($_POST["password"]))){
        $classLogin = new classLogin($_POST["email"],$_POST['password']);
        $classLogin->verifyPassword();
    }

    // Start of classSignUp
    class classLogin{
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
            
            $classConnDB = new classConnDB();

            $check_email_table = mysqli_query($classConnDB->conn(), "SELECT * FROM users_tbl WHERE email ='$this->email'");
            $check_email_row = mysqli_num_rows($check_email_table); // Get the data on specific row database

            if($check_email_row > 0){
                $check_email = mysqli_query($classConnDB->conn(), "SELECT * FROM users_tbl WHERE email = '$this->email'");
                while($row = mysqli_fetch_assoc($check_email)){
                    $id = $row["id"];
                    $password = $row["password"];

                    if($password == $this->password){
                        // Session
                        $_SESSION["id"] = $id;
                        echo "Verified";
                    // Input user password and password in data base not match generate Error
                    }else{
                        echo "EmailorPasswordIsIncorrect";
                    }
                } // End of While 
            }else{
                echo "AccountNotFound";
            }
        }
    }

?>