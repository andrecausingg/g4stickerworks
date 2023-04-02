<?php
    if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["price"])){
        // Sanitize Input
        $name = sanitize1($_POST["name"]);
        $description = sanitize1($_POST["description"]);
        $price = sanitize1($_POST["price"]);

        // Handle Upload
        $classUpload = new classUpload($name, $description, $price);
        $result = $classUpload->handle();
    }

    // Sanitize Input
    function sanitize1($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classUpload{
        private $name;
        private $description;
        private $price;

        public function __construct($name, $description, $price){
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
        }

        public function handle(){

            // Database Insertion Handling
            require_once "../helper/global/global.php";

            // Class
            $conn = (new classConnDB())->conn();
            $dateTimeVarChar = (new classDateTime())->getDateTime();
            $userId = (new classSessionUserID())->sessionUserID();
            
            $image = $_FILES['imageUserProduct'];
        
            if(!isset($image)){
                echo 'putimagefirst';
            }else{
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
                            $imageDestination = '../../images/user-all-products/'. $imageNameNew;
                            move_uploaded_file($imageTemp, $imageDestination);
        
                            // Use prepared statement to prevent SQL injection
                            $stmt = $conn->prepare("INSERT INTO user_product_tbl (name, description, price, image, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
                            $stmt->bind_param("ssdss", $this->name, $this->description, $this->price, $imageNameNew, $dateTimeVarChar);
                            if($stmt->execute()){
                                $stmt->close();
                                $conn->close();
                                echo "created";
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
    }
?>