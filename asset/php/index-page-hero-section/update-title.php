<?php
    if(isset($_POST["id"]) && isset($_POST["title"])){
            
        $id = sanitize($_POST['id']);
        $title = sanitize($_POST['title']);

        $classUpdate = new classUpdate($id, $title);
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
        private $title;
    
        public function __construct($id, $title){
            $this->id = $id;
            $this->title = $title;
        }

        public function getUpdate(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
        
            // Class
            $classConnDB = new classConnDB();
        
            // Variable
            $conn = $classConnDB->conn();
        
            // prepare the SQL statement with placeholders
            $sql = "UPDATE home_hero_section_tbl SET title = ? WHERE home_hero_section_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("si",  $this->title, $this->id);
        
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