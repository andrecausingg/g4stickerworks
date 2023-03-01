<?php
    if(isset($_POST["id"]) && isset($_POST["role"]) && isset($_POST["updateFacebookUrl"])){
        $id = sanitize($_POST['id']);
        $role = sanitize($_POST['role']);
        $updateFacebookUrl = sanitize($_POST['updateFacebookUrl']);

        $classUpdate = new classUpdate($id, $role, $updateFacebookUrl);

        if($role == "facebook"){
            $classUpdate->getUpdateFacebook();
        }
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
        private $role;
        private $updateFacebookUrl;
    
        public function __construct($id, $role, $updateFacebookUrl){
            $this->id = $id;
            $this->role = $role;
            $this->updateFacebookUrl = $updateFacebookUrl;
        }
    
        public function getUpdateFacebook(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
    
            // Class
            $classConnDB = new classConnDB();
    
            // Variable
            $conn = $classConnDB->conn();
    
            // prepare the SQL statement with placeholders
            $sql = "UPDATE all_footer_tbl SET facebook = ? WHERE all_footer_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("si", $facebook, $this->id);
    
            // Execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "Updated";
            }
        }
    }
?>