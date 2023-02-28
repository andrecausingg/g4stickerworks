<?php
    if(isset($_POST["address"])){
        $address = sanitize($_POST['address']);

        $classCreateAllFooterPage = new classCreateAllFooterPage($address);
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
        private $address;

        // Method
        public function __construct($address){
            $this->address = $address;
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
            $sql = "INSERT INTO all_footer_tbl (address, created_at_varchar, created_at) VALUES (?, ?, NOW())";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("ss", $this->address, $dateTimeVarChar);
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