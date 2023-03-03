<?php
    if(isset($_POST["id"]) && isset($_POST["subTitle"])){
            
        $id = sanitize($_POST['id']);
        $subTitle = sanitize($_POST['subTitle']);

        $classUpdate = new classUpdate($id, $subTitle);
        $classUpdate->getUpdate();
    }
    
    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    class classUpdate{
        private $id;
        private $subTitle;
    
        public function __construct($id, $subTitle){
            $this->id = $id;
            $this->subTitle = $subTitle;
        }

        public function getUpdate(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
        
            // Class
            $classConnDB = new classConnDB();
        
            // Variable
            $conn = $classConnDB->conn();
        
            // prepare the SQL statement with placeholders
            $sql = "UPDATE about_us_page_tbl SET sub_title = ? WHERE about_us_page_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("si",  $this->subTitle, $this->id);
        
            // Execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "updated";
            }
        }
    }
?>