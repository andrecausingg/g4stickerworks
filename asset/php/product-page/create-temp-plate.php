<?php
    if(isset($_POST['selectTempPlate'])) {
        $selectTempPlate = sanitize($_POST['selectTempPlate']);

        $classUpload = new classUpload($selectTempPlate);
        $classUpload->handle();
    }else{
        echo "not isset";
    }
    
    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    class classUpload {
        private $selectTempPlate;
    
        public function __construct($selectTempPlate) {
            $this->selectTempPlate = $selectTempPlate;
        }
    
        public function handle() {
            // File Path
            require_once "../helper/global/global.php";
        
            // Class
            $classConnDB = new classConnDB();
            $classDateTime = new classDateTime();
    
            // Variable
            $conn = $classConnDB->conn();
            $dateTimeVarChar = $classDateTime->getDateTime();
    
            $image = $_FILES['imageTempPlate'];
    
            if(!isset($image)){
                echo 'putimagefirst';
            }
    
            $imageName = $image['name'];
            $imageSize = $image['size'];
            $imageTemp = $image['tmp_name'];
            $imageError = $image['error'];
            $imageType = $image['type'];
            $imageExt = explode('.', $imageName);
            $imageActualExt = strtolower(end($imageExt));
            $allowed = array('jpg', 'jpeg', 'png');
    
            if(in_array($imageActualExt, $allowed)){
                if($imageError === 0){
                    if($imageSize < 50000000){
                        $imageNameNew = uniqid('', true).".".$imageActualExt;
                        $imageDestination = '../../images/all-products/'.$imageNameNew;
                        move_uploaded_file($imageTemp, $imageDestination);
    
                        // Use prepared statement to prevent SQL injection
                        $stmt = $conn->prepare("INSERT INTO temp_plate_tbl (type, image, created_at_varchar, created_at) VALUES (?, ?, ?, NOW())");
                        $stmt->bind_param("sss",  $this->selectTempPlate, $imageNameNew, $dateTimeVarChar);
                        if($stmt->execute()){
                            if($stmt->affected_rows > 0){
                                $stmt->close();
                                $conn->close();
                                echo "created";
                            }
                        }
                    } else {
                        echo 'imagetoolarge';
                    }
                } else {
                    echo 'errorUploadingimage';
                }
            } else {
                echo 'invalidfiletype';
            }
        }
    }
    
    
?>