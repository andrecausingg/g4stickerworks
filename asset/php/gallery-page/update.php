<?php
    if(isset($_POST["id"]) && isset($_POST["caption"])){
            
        $id = sanitize($_POST['id']);
        $caption = sanitize($_POST['caption']);

        $classUpdate = new classUpdate($id, $caption);
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
        private $caption;
    
        public function __construct($id, $caption){
            $this->id = $id;
            $this->caption = $caption;
        }

        public function getUpdate(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
        
            // Class
            $classConnDB = new classConnDB();
        
            // Variable
            $conn = $classConnDB->conn();
        
            // prepare the SQL statement with placeholders
            $sql = "UPDATE gallery_page_tbl SET caption = ? WHERE gallery_page_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("si",  $this->caption, $this->id);
        
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