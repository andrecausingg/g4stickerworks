<?php
    if((isset($_POST["id"]) && isset($_POST["role"])) && 
        (isset($_POST["updateFacebookUrl"]) ||
            isset($_POST["updateTiktokUrl"]) ||
            isset($_POST["updateInstagramUrl"]) ||
            isset($_POST["updateEmail"]) ||
            isset($_POST["updatePhone"]) ||
            isset($_POST["updateAddress"]))
        ){
            
        $id = sanitize($_POST['id']);
        $role = sanitize($_POST['role']);
        $updateFacebookUrl = sanitize($_POST['updateFacebookUrl'] ?? '');
        $updateTiktokUrl = sanitize($_POST['updateTiktokUrl'] ?? '');
        $updateInstagramUrl = sanitize($_POST['updateInstagramUrl'] ?? '');
        $updateEmail = sanitize($_POST['updateEmail'] ?? '');
        $updatePhone = sanitize($_POST['updatePhone'] ?? '');
        $updateAddress = sanitize($_POST['updateAddress'] ?? '');

        $classUpdate = new classUpdate($id, $role, $updateFacebookUrl, $updateTiktokUrl, $updateInstagramUrl, $updateEmail, $updatePhone, $updateAddress);

        if($role == "facebook" && $updateFacebookUrl != ""){
            $classUpdate->getUpdateFacebook();
        }else if($role == "tiktok" && $updateTiktokUrl != ""){
            $classUpdate->getUpdateTiktok();
        }else if($role == "instagram" && $updateInstagramUrl != ""){
            $classUpdate->getUpdateInstagram();
        }else if($role == "email" && $updateEmail != ""){
            $classUpdate->getUpdateEmail();
        }else if($role == "phone" && $updatePhone != ""){
            $classUpdate->getUpdatePhone();
        }else if($role == "address" && $updateAddress != ""){
            $classUpdate->getUpdateAddress();
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
        private $updateTiktokUrl;
        private $updateInstagramUrl;
        private $updateEmail;
        private $updatePhone;
        private $updateAddress;
    
        public function __construct($id, $role, $updateFacebookUrl, $updateTiktokUrl, $updateInstagramUrl, $updateEmail, $updatePhone, $updateAddress){
            $this->id = $id;
            $this->role = $role;
            $this->updateFacebookUrl = $updateFacebookUrl;
            $this->updateTiktokUrl = $updateTiktokUrl;
            $this->updateInstagramUrl = $updateInstagramUrl;
            $this->updateEmail = $updateEmail;
            $this->updatePhone = $updatePhone;
            $this->updateAddress = $updateAddress;
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
            $stmt->bind_param("si",  $this->updateFacebookUrl, $this->id);
        
            // Execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "updated";
            }
        }
        
        public function getUpdateTiktok(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
        
            // Class
            $classConnDB = new classConnDB();
        
            // Variable
            $conn = $classConnDB->conn();
        
            // prepare the SQL statement with placeholders
            $sql = "UPDATE all_footer_tbl SET tiktok = ? WHERE all_footer_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("si",  $this->updateTiktokUrl, $this->id);
        
            // Execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "updated";
            }
        }
        
        public function getUpdateInstagram(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
        
            // Class
            $classConnDB = new classConnDB();
        
            // Variable
            $conn = $classConnDB->conn();
        
            // prepare the SQL statement with placeholders
            $sql = "UPDATE all_footer_tbl SET instagram = ? WHERE all_footer_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("si",  $this->updateInstagramUrl, $this->id);
        
            // Execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "updated";
            }
        }

        public function getUpdateEmail(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
        
            // Class
            $classConnDB = new classConnDB();
        
            // Variable
            $conn = $classConnDB->conn();
        
            // prepare the SQL statement with placeholders
            $sql = "UPDATE all_footer_tbl SET email = ? WHERE all_footer_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("si",  $this->updateEmail, $this->id);
        
            // Execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "updated";
            }
        }
    
        public function getUpdatePhone(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
        
            // Class
            $classConnDB = new classConnDB();
        
            // Variable
            $conn = $classConnDB->conn();
        
            // prepare the SQL statement with placeholders
            $sql = "UPDATE all_footer_tbl SET cellphone_num = ? WHERE all_footer_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("si",  $this->updatePhone, $this->id);
        
            // Execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "updated";
            }
        }
    
        public function getUpdateAddress(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
        
            // Class
            $classConnDB = new classConnDB();
        
            // Variable
            $conn = $classConnDB->conn();
        
            // prepare the SQL statement with placeholders
            $sql = "UPDATE all_footer_tbl SET address = ? WHERE all_footer_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("si",  $this->updateAddress, $this->id);
        
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