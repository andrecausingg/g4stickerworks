<?php
    if(isset($_POST["phone"])){
        $phone = sanitize($_POST['phone']);

        $classCreateAllFooterPage = new classCreateAllFooterPage($phone);
        $classCreateAllFooterPage->create();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classCreateAllFooterPage{
        // Properties
        private $phone;

        // Method
        public function __construct($phone){
            $this->phone = $phone;
        }

        public function create(){
            // File Path
            require_once "../helper/global/global.php";
        
            // Class
            $classConnDB = new classConnDB();
            $classDateTime = new classDateTime();
        
            // Variable
            $conn = $classConnDB->conn();
            $dateTimeVarChar = $classDateTime->getDateTime();

            // prepare the SQL statement with placeholders 
            $sql = "INSERT INTO all_footer_tbl (cellphone_num, created_at_varchar, created_at) VALUES (?, ?, NOW())";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("ss", $this->phone, $dateTimeVarChar);
            // execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "created";
            }
        }
    }
?>