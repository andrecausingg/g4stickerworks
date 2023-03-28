<?php 
    // Unique Order Id
    class classUniqueOrderId{
        public function uniqueOrderId(){
            // Set the time zone to Philippine time
            date_default_timezone_set('Asia/Manila');

            // Set the prefix and date format
            $prefix = 'G4';
            // Set the desired format for the date
            $date_format = 'Ymd h:i:s a T';
            // Generate the date and time code
            $date_code = date($date_format);
            // Generate a random string
            $random_str = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
            // Generate a unique ID
            $unique_id = mt_rand(100000, 999999);
            // Concatenate the order number
            $order_no = $prefix . $date_code . $random_str . $unique_id;
        
            return $order_no;
        }

        function generateOrderNumber() {
            // Set the prefix and date format
            $prefix = 'G4';
            $date_format = 'YmdHis';
            // Generate the date code
            $date_code = date($date_format);
            // Generate a random string
            $random_str = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
            // Initialize the unique ID
            $unique_id = '';
            // Initialize the order number
            $order_no = '';
            // Connect to the database and retrieve the last unique ID
            $conn = new mysqli("localhost", "username", "password", "dbname");
            $result = $conn->query("SELECT MAX(unique_id) FROM orders");
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $last_id = $row["MAX(unique_id)"];
                // Generate a new unique ID if the last one has been used before
                do {
                    $unique_id = mt_rand(100000000000000, 999999999999999);
                } while ($unique_id == $last_id);
            } else {
                // Generate a new unique ID if there are no previous orders
                $unique_id = mt_rand(100000000000000, 999999999999999);
            }
            // Close the database connection
            $conn->close();
            // Concatenate the order number
            $order_no = $prefix . $date_code . $random_str . $unique_id;
            return $order_no;
        }
    }

    // Check if correct query
    class classCheckUrlQueryExist {
        private $classConnDB;
        
        function __construct() {
            $this->classConnDB = new classConnDB();
        }

        function checkQueryUrlExist() {
            if(isset($_GET['vKey'])) {
                $vKey = $_GET['vKey'];
            
                // create a new instance of classConnDB
                $classConnDB = new classConnDB();
                $conn = $classConnDB->conn();
            
                // prepare and execute the SQL statement with parameter binding
                $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE update_pass_key = ?");
                $stmt->bind_param("s", $vKey);
                $stmt->execute();
                $result = $stmt->get_result();
                
                // check if there are any matching records
                if ($result->num_rows > 0) {
                    
                } else {
                    // redirect to 404 page
                    echo "<script>window.location.href='404';</script>";
                }
            
                // close the statement and database connection
                $stmt->close();
                $conn->close();
            }
            
        }
    }

    // Random Url Query
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
