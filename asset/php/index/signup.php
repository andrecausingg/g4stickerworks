<?php
    session_start();
    if(isset($_POST["nickName"]) && isset($_POST["birthDate"]) && isset($_POST["gender"]) && isset($_POST["email"]) && isset($_POST["password"])){
        $classSignUp = new classSignUp( $_POST["nickName"], $_POST["birthDate"], $_POST["gender"], $_POST["email"], $_POST["password"],);
        $classSignUp->isSave();
    }

    // Start of Class
    class classSignUp{
        // PROPERTIES
        protected $nickName;
        protected $birthDate;
        protected $gender;
        protected $email;
        protected $password;

        // METHODS
        // Set the all the data
        function __construct($nickName, $birthDate,$gender,$email,$password){
            $this->nickName = $nickName;
            $this->birthDate = $birthDate;
            $this->gender = $gender;
            $this->email = $email;
            $this->password = $password;
        }

        // Start of Save on data base the info
        function isSave(){
            require_once "../helper/global/global.php";
            require_once "send-email-code.php";

            $classConnDB = new classConnDB();
            $classDateTime = new classDateTime();
            $classSixDigitCode = new classSixDigitCode();
            $classNeyID = new classNeyID();
            $classSendVerCodeEmail = new classSendVerCodeEmail();

            $dateTimeVarChar = $classDateTime->getDateTime();
            $sixDigitCode = $classSixDigitCode->sixDigitCodeF();
            $neyID = $classNeyID->neyID();

            $_SESSION["signUpUserEmail"] =  $this->email;
            $isNFL = 'nName';

            // This table for user_accounts_table
            // Check if the Email is already Registered on user_accounts_tbl for correction
            $check_email_table = mysqli_query($classConnDB->conn(), "SELECT * FROM users_tbl WHERE email ='$this->email'");
            $check_email_row = mysqli_num_rows($check_email_table); // Get the data on specific row database

            if($check_email_row > 0){
                while($row = mysqli_fetch_assoc($check_email_table)){
                    if($check_email_row > 0  && $row["status"] == 'activate'){
                        echo "EmailExist";
                    }else if($check_email_row > 0  && $row["status"] == NULL){
                        $query_update = mysqli_query($classConnDB->conn(),"UPDATE users_tbl SET verification_code = '$sixDigitCode'WHERE email ='$this->email'");
                        if($query_update){
                            $classSendVerCodeEmail->sendVerCodeEmail();
                        }
                    }
                }
            }else{
                $query_insert = mysqli_query($classConnDB->conn(),"INSERT INTO users_tbl (ney_id, password, email, is_nfl, nick_name, birthdate, gender, verification_code, created_at_var, created_at) 
                VALUES ('$neyID', '$this->password', '$this->email', '$isNFL', '$this->nickName', '$this->birthDate', '$this->gender', '$sixDigitCode',  '$dateTimeVarChar', NOW())");
                if($query_insert){
                    $classSendVerCodeEmail->sendVerCodeEmail();
                }
            }
        } // End of Save on data base the info

    } // End of Class
?>