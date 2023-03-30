<?php
    if (isset($_POST["width"]) && isset($_POST["height"]) && isset($_POST["quantity"]) && isset($_POST["message"]) && isset($_POST["cover"])){
        // Sanitize Input
        $width = sanitize1($_POST["width"]);
        $height = sanitize1($_POST["height"]);
        $quantity = sanitize1($_POST["quantity"]);
        $cover = sanitize1($_POST["cover"]);
        $message = isset($_POST["message"]) ? sanitize1($_POST["message"]) : '';

        // Handle Upload
        $classUpload = new classUpload($width, $height, $quantity, $message, $cover);
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
        private $cover;

        public function __construct($width, $height, $quantity, $message, $cover){
            $this->width = $width;
            $this->height = $height;
            $this->quantity = $quantity;
            $this->message = $message;
            $this->cover = $cover;
        }

        public function handle(){

            // Database Insertion Handling
            require_once "../helper/global/global.php";

            // Class
            $conn = (new classConnDB())->conn();
            $dateTimeVarChar = (new classDateTime())->getDateTime();
            $userId = (new classSessionUserID())->sessionUserID();
            $uniqueId = (new classUniqueOrderId())->uniqueOrderId();
            
            $page = "CART";
            $status = "PENDING";
            $payment = "NONE";
            $price = 0;

            $order_table_name = "sticker";

            // Calculate Price
            if ($this->width >= 0 && $this->height <= 2.5) {
                if ($this->quantity < 100) {
                    if ($this->cover === "YES") {
                        $price = 10.0;
                    } else if ($this->cover === "NO") {
                        $price = 8.0;
                    }
                } else if ($this->quantity >= 100 && $this->quantity <= 299) {
                    if ($this->cover === "YES") {
                        $price = 5.0;
                    } else if ($this->cover === "NO") {
                        $price = 4.0;
                    }
                } else {
                    if ($this->cover === "YES") {
                        $price = 3.0;
                    } else if ($this->cover === "NO") {
                        $price = 2.5;
                    }
                }
            } else if ($this->width >= 2.6 && $this->height <= 3) {
                if ($this->quantity < 100) {
                    if ($this->cover === "YES") {
                        $price = 15.0;
                    } else if ($this->cover === "NO") {
                        $price = 13.0;
                    }
                } else if ($this->quantity >= 100 && $this->quantity <= 299) {
                    if ($this->cover === "YES") {
                        $price = 6.0;
                    } else if ($this->cover === "NO") {
                        $price = 5.0;
                    }
                } else {
                    if ($this->cover === "YES") {
                        $price = 3.5;
                    } else if ($this->cover === "NO") {
                        $price = 3.0;
                    }
                }
            } else if ($this->width >= 3.1 && $this->height <= 4) {
                if ($this->quantity < 100) {
                    if ($this->cover === "YES") {
                        $price = 20.0;
                    } else if ($this->cover === "NO") {
                        $price = 18.0;
                    }
                } else if ($this->quantity >= 100 && $this->quantity <= 299) {
                    if ($this->cover === "YES") {
                        $price = 7.0;
                    } else if ($this->cover === "NO") {
                        $price = 6.0;
                    }
                } else {
                    if ($this->cover === "YES") {
                        $price = 4.0;
                    } else if ($this->cover === "NO") {
                        $price = 3.5;
                    }
                }
            }else {
                // If the size is NOt valid, set the $price to 0
                $price = 0;
            }

            $totalPrice = $price * $this->quantity;

            $image = $_FILES['imageSticker'];
        
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
                            $stmt = $conn->prepare("INSERT INTO order_sticker_tbl (user_id, order_id_sticker, width, height, image, cover, message, quantity, total_price, page, status, payment, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
                            $stmt->bind_param("isiisssidssss", $userId, $uniqueId, $this->width, $this->height, $imageNameNew, $this->cover, $this->message, $this->quantity, $totalPrice, $page, $status, $payment, $dateTimeVarChar);
                            if($stmt->execute()){
                                if($stmt->affected_rows > 0){
                                    // get the last insert ID
                                    $last_insert_id = $conn->insert_id;                
                                    $sql = "INSERT INTO cart_tbl (user_id, order_table_name, order_table_id, created_at_varchar, created_at) VALUES (?, ?, ?, ?, NOW())";
                                    $stmt1 = $conn->prepare($sql);
                                    $stmt1->bind_param("isis", $userId, $order_table_name, $last_insert_id, $dateTimeVarChar);
                                    if($stmt1->execute()){
                                        // Close First Query
                                        $stmt->close();
                            
                                        // Close Second Query
                                        $stmt1->close();
                                        $conn->close();
                                        echo "created";
                                    }
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