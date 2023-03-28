<?php
    if (isset($_POST["width"]) && isset($_POST["height"]) && isset($_POST["quantity"]) && isset($_POST["message"])){
        // Sanitize Input
        $width = sanitize1($_POST["width"]);
        $height = sanitize1($_POST["height"]);
        $quantity = sanitize1($_POST["quantity"]);
        $message = isset($_POST["message"]) ? sanitize1($_POST["message"]) : '';

        // Handle Upload
        $classUpload = new classUpload($width, $height, $quantity, $message);
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
        private $width;
        private $height;
        private $quantity;
        private $message;

        public function __construct($width, $height, $quantity, $message){
            $this->width = $width;
            $this->height = $height;
            $this->quantity = $quantity;
            $this->message = $message;
        }

        public function handle(){

            // Database Insertion Handling
            require_once "../helper/global/global.php";

            // Class
            $conn = (new classConnDB())->conn();
            $dateTimeVarChar = (new classDateTime())->getDateTime();
            $userId = (new classSessionUserID())->sessionUserID();
            $uniqueId = (new classUniqueOrderId())->uniqueOrderId();

            $totalPrice = $this->width * $this->height * $this->quantity * 15.00;

            $page = "CART";
            $status = "PENDING";
            $payment = "NONE";

            $image = $_FILES['image'];
        
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
                            $imageDestination = '../../images/all-orders/'. $imageNameNew;
                            move_uploaded_file($imageTemp, $imageDestination);
        
                            // Use prepared statement to prevent SQL injection
                            $stmt = $conn->prepare("INSERT INTO order_ready_to_print_tbl (user_id, order_id_ready_to_print, width, height, image, message, quantity, total_price, page, status,  payment, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
                            $stmt->bind_param("isiissidssss", $userId, $uniqueId, $this->width, $this->height,  $imageNameNew, $this->message, $this->quantity, $totalPrice, $page, $status, $payment, $dateTimeVarChar);
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
    }
?>