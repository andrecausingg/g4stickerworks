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

        // Start of Save on data base the info
        function create(){
            // File Path
            require_once "../helper/global/global.php";

            // Class
            $classConnDB = new classConnDB();
            $classDateTime = new classDateTime();
        
            // Variable
            $conn = $conn;
            $dateTimeVarChar = $classDateTime->getDateTime();

            // prepare the SQL statement with placeholders 
            $sql = "INSERT INTO user_tbl (email, password, created_at_varchar, created_at) VALUES (?, ?, ?, NOW())";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("sss", $this->email, $this->password, $dateTimeVarChar);
            // execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "created";
            }

            $_SESSION["signUpUserEmail"] =  $this->email;

            $check_email_table = mysqli_query($conn, "SELECT * FROM users_tbl WHERE email ='$this->email'");
            $check_email_row = mysqli_num_rows($check_email_table); // Get the data on specific row database

            if($check_email_row > 0){
                while($row = mysqli_fetch_assoc($check_email_table)){
                    if($check_email_row > 0  && $row["status"] == 'activate'){
                        echo "EmailExist";
                    }else if($check_email_row > 0  && $row["status"] == NULL){
                        $query_update = mysqli_query($conn,"UPDATE users_tbl SET verification_code = '$sixDigitCode'WHERE email ='$this->email'");
                        if($query_update){
                            $classSendVerCodeEmail->sendVerCodeEmail();
                        }
                    }
                }
            }else{
                $query_insert = mysqli_query($conn,"INSERT INTO users_tbl (ney_id, password, email, is_nfl, nick_name, birthdate, gender, verification_code, created_at_var, created_at) 
                VALUES ('$neyID', '$this->password', '$this->email', '$isNFL', '$this->nickName', '$this->birthDate', '$this->gender', '$sixDigitCode',  '$dateTimeVarChar', NOW())");
                if($query_insert){
                    $classSendVerCodeEmail->sendVerCodeEmail();
                }
            }
        } // End of Save on data base the info

    } // End of Class
?>