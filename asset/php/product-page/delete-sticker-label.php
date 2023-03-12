<?php
    if(isset($_POST["id"])){
        $id = sanitize($_POST['id']);
        $classDelete = new classDelete();
        $classDelete->setId($id);
        $classDelete->getDelete();
    }
    
    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    class classDelete{
        private $id;
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getDelete(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
    
            // Class
            $classConnDB = new classConnDB();
    
            // Variable
            $conn = $classConnDB->conn();
    
            // prepare the SQL statement with placeholders 
            $sql = "DELETE FROM sticker_label_tbl WHERE sticker_label_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("i",$this->id);
    
            // Execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "deleted";
            }
        }
    }
?>