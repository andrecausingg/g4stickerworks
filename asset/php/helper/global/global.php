<?php 
    class classQueryUrlRand{
        function queryUrlRand(){
            $random_string = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 20);
            return $random_string;
        }
    }

    // Database Connection
    class classConnDB{
        // Properties
        private $serverName = "localhost";
        private $dbName = "g4_db";
        private $userName = "root";
        private $password = "";
        
        // Methods
        public function conn(){
            $connection = mysqli_connect($this->serverName,$this->userName,$this->password,$this->dbName);
            if(mysqli_connect_errno()){
                echo "FAILED TO CONNECT TO MYSQL: " . mysqli_connect_error();
            }
            return $connection;
        }
    }

    // Sanitize Data
    class classSanitize{
        public function getSanitize($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }

    // Hide Email
    class classHideEmail{
        public function getEmailHide($email){
            $hiddenEmail = substr($email, 0, 2) . str_repeat("*", 5) . substr($email, 7);
            return $hiddenEmail; // Outputs "ad*****@gmail.com"
        }
    }

    // Hide Password
    class classHidePassword{
        public function getHidePassword($password){
            $hiddenPassword = str_repeat("*", strlen($password));
            return $hiddenPassword; // Output: *********
        }
    }

    // Philippine Date Time Format
    class classDateTime{
        public function getDateTime(){
            // create new DateTime object
            $date = new DateTime();

            // set timezone to Philippines
            $timezone = new DateTimeZone('Asia/Manila');
            $date->setTimezone($timezone);

            // format the date and time to display AM/PM
            $formattedDate = $date->format("M d, Y h:i:s A");

            return $formattedDate;
        }
    }

    // Default Date and time Format
    class classDefaultDateTime {
        public function getDefaultDateTime() {
            return date("Y-m-d h:i:s a");
        }
    }
    
    // 6 Random Digit
    class classSixDigitCode{
        function sixDigitCodeF(){
            $sixDigitRandomNumber = mt_rand(100000, 999999);
            return $sixDigitRandomNumber;
        }
    }

    // Email Verification 404
    class classSessionEmailSignup{
        function sessionEmailSignup(){
            require_once "/xampp/htdocs/g4stickerworks/asset/php/index/signup.php";

            if(!isset($_SESSION["emailCheckExistSignUp"]) && !isset($_SESSION["emailSignUp"])){
                echo "<script>window.location.href='404';</script>";
            }
        }
    }

    // Login Session Verification 404
    class classSessionLogin{
        function sessionLogin(){
            require_once "/xampp/htdocs/g4stickerworks/asset/php/index/login.php";

            if(!isset($_SESSION["id"])){
                echo "<script>window.location.href='404';</script>";
            }
        }
    }

    // Login User Session return I.D
    class classSessionUserID{
        function sessionUserID(){
            require_once "/xampp/htdocs/g4stickerworks/asset/php/index/login.php";

            if(isset($_SESSION["id"])){
                return $_SESSION["id"];
            }
        }
    }
?>
