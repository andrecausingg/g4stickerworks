<?php
    if(isset($_POST["id"]) && isset($_POST["content"])){
            
        $id = sanitize($_POST['id']);
        $content = sanitize($_POST['content']);

        $classUpdate = new classUpdate($id, $content);
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
        private $content;
    
        public function __construct($id, $content){
            $this->id = $id;
            $this->content = $content;
        }

        public function getUpdate(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
        
            // Class
            $classConnDB = new classConnDB();
        
            // Variable
            $conn = $classConnDB->conn();
        
            // prepare the SQL statement with placeholders
            $sql = "UPDATE services_page_tbl SET content = ? WHERE services_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("si",  $this->content, $this->id);
        
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