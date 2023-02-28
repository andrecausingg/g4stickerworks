<?php
    if(isset($_POST["id"])){
        $id = sanitize($_POST['id']);
        $classDisplayCutFileDeleteContainer = new classDisplayCutFileDeleteContainer();
        $classDisplayCutFileDeleteContainer->setId($id);
        $classDisplayCutFileDeleteContainer->getDeleteContainer();
    }
    
    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    class classDisplayCutFileDeleteContainer{
        private $id;
    
        public function setId($id){
            $this->id = $id;
        }
    
        // Get Nick Name
        public function getDeleteContainer(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
    
            // Class
            $classConnDB = new classConnDB();
    
            // Variable
            $conn = $classConnDB->conn();
    
            // prepare the SQL statement with placeholders for the job name, job number, datetime varchar, and datetime
            $sql = "DELETE FROM cut_file_tbl WHERE cut_file_id = ?";
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