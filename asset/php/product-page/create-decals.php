<?php
    if(isset($_POST['selectDecals']) && isset($_POST['brandSelect']) && isset($_POST['modelSelect'])) {
        $decals = sanitize($_POST['selectDecals']);
        $brand = sanitize($_POST['brandSelect']);
        $model = sanitize($_POST['modelSelect']);

        $classUpload = new classUpload($decals, $brand, $model);
        $classUpload->handle();
    } else {
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
        private $decals;
        private $brand;
        private $model;
    
        public function __construct($decals, $brand, $model) {
            $this->decals = $decals;
            $this->brand = $brand;
            $this->model = $model;
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
    
            $image = $_FILES['imageDecals'];
    
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
                        // $finalNameImage = $this->decals . "-" . $this->brand . "-" . $this->model . "-" . $imageNameNew;
                        $imageDestination = '../../images/products/'.$imageNameNew;
                        move_uploaded_file($imageTemp, $imageDestination);
    
                        // Use prepared statement to prevent SQL injection
                        $stmt = $conn->prepare("INSERT INTO decals_tbl (decals_type, brand, model, image, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
                        $stmt->bind_param("sssss",  $this->decals, $this->brand, $this->model, $imageNameNew, $dateTimeVarChar);
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