<?php
    if(isset($_POST["caption"])){
        $caption = sanitize($_POST['caption']);

        $classCreate = new classCreate($caption);
        $classCreate->create();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classCreate{
        // Properties
        private $caption;

        // Method
        public function __construct($caption){
            $this->caption = $caption;
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
            $sql = "INSERT INTO gallery_page_tbl (caption, created_at_varchar, created_at) VALUES (?, ?, NOW())";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("ss", $this->caption, $dateTimeVarChar);
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