<?php
    if(isset($_POST["id"]) && isset($_POST["deliverMethod"]) && isset($_POST["referenceNum"])){
        $id = sanitize1($_POST['id']);
        $deliverMethod = sanitize1($_POST['deliverMethod']);
        $referenceNum = sanitize1($_POST['referenceNum']);

        // echo $id;
        // echo $deliverMethod;
        // echo $referenceNum;

        $classPayment = new classPayment($id, $deliverMethod, $referenceNum);
        $classPayment->payment();
    }

    
    // Sanitize Input
    function sanitize1($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classPayment{
        private $id;
        private $deliverMethod;
        private $referenceNum;

        public function __construct($id, $deliverMethod, $referenceNum,){
            $this->id = $id;
            $this->deliverMethod = $deliverMethod;
            $this->referenceNum = $referenceNum;
        }
    
        public function payment(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
    
            // Class
            $conn = (new classConnDB())->conn();
            $userId = (new classSessionUserID())->sessionUserID();

            $parts = explode("-",$this->id);
            $parts[0]; 
            $parts[1]; 

            $sticker = "sticker";
            $tarpaulin = "tarpaulin";
            $temporaryplate = "temporaryplate";
            $product = "product";

            $statusOrder = "PENDING";
            $page = "PENDING-ORDER";
            $payment = "DONE";

            $image = $_FILES['imageReceipt'];

            if($parts[0] == $sticker){
                $stmt = $conn->prepare("UPDATE cart_tbl SET status_order = ? WHERE user_id = ? AND order_table_name = ? AND order_table_id = ?");
                $stmt->bind_param("sisi", $statusOrder, $userId, $sticker, $parts[1]);
                $stmt->execute();
                if ($stmt->affected_rows > 0) {
        
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
                                    $imageDestination = '../../images/all-receipt/'. $imageNameNew;
                                    move_uploaded_file($imageTemp, $imageDestination);

                                    $stmt1 = $conn->prepare("UPDATE order_sticker_tbl SET page = ?, status_order = ?, deliver_method = ?, reference_num = ?, receipt = ?, payment = ? WHERE user_id = ? AND order_sticker_main_id = ?");
                                    $stmt1->bind_param("ssssssii",$page, $statusOrder, $this->deliverMethod, $this->referenceNum, $imageNameNew, $payment, $userId, $parts[1]);
                                    $stmt1->execute();
                                    if($stmt1->affected_rows > 0){
                                        $stmt->close();
                                        $stmt1->close();
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
            }else if($parts[0] == "tarpaulinOne"){
                $stmt = $conn->prepare("UPDATE cart_tbl SET status_order = ? WHERE user_id = ? AND order_table_name = ? AND order_table_id = ?");
                $stmt->bind_param("sisi", $statusOrder, $userId, $tarpaulin, $parts[1]);
                $stmt->execute();
                if ($stmt->affected_rows > 0) {
        
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
                                    $imageDestination = '../../images/all-receipt/'. $imageNameNew;
                                    move_uploaded_file($imageTemp, $imageDestination);

                                    $stmt1 = $conn->prepare("UPDATE order_ready_to_print_tbl SET page = ?, status_order = ?, deliver_method = ?, reference_num = ?, receipt = ?, payment = ? WHERE user_id = ? AND order_ready_to_print_id = ?");
                                    $stmt1->bind_param("ssssssii",$page, $statusOrder, $this->deliverMethod, $this->referenceNum, $imageNameNew, $payment, $userId, $parts[1]);
                                    $stmt1->execute();
                                    if($stmt1->affected_rows > 0){
                                        $stmt->close();
                                        $stmt1->close();
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
            }else if($parts[0] == "temporaryPlate"){
                $stmt = $conn->prepare("UPDATE cart_tbl SET status_order = ? WHERE user_id = ? AND order_table_name = ? AND order_table_id = ?");
                $stmt->bind_param("sisi", $statusOrder, $userId, $temporaryplate, $parts[1]);
                $stmt->execute();
                if ($stmt->affected_rows > 0) {
        
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
                                    $imageDestination = '../../images/all-receipt/'. $imageNameNew;
                                    move_uploaded_file($imageTemp, $imageDestination);

                                    $stmt1 = $conn->prepare("UPDATE order_temp_plate_tbl SET page = ?, status_order = ?, deliver_method = ?, reference_num = ?, receipt = ?, payment = ? WHERE user_id = ? AND order_temp_plate_id = ?");
                                    $stmt1->bind_param("ssssssii",$page, $statusOrder, $this->deliverMethod, $this->referenceNum, $imageNameNew, $payment, $userId, $parts[1]);
                                    $stmt1->execute();
                                    if($stmt1->affected_rows > 0){
                                        $stmt->close();
                                        $stmt1->close();
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
            }else if($parts[0] == $product){
                $stmt = $conn->prepare("UPDATE cart_tbl SET status_order = ? WHERE user_id = ? AND order_table_name = ? AND order_table_id = ?");
                $stmt->bind_param("sisi", $statusOrder, $userId, $product, $parts[1]);
                $stmt->execute();
                if ($stmt->affected_rows > 0) {
        
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
                                    $imageDestination = '../../images/all-receipt/'. $imageNameNew;
                                    move_uploaded_file($imageTemp, $imageDestination);

                                    $stmt1 = $conn->prepare("UPDATE order_product_tbl SET page = ?, status_order = ?, deliver_method = ?, reference_num = ?, receipt = ?, payment = ? WHERE user_id = ? AND order_product_id = ?");
                                    $stmt1->bind_param("ssssssii",$page, $statusOrder, $this->deliverMethod, $this->referenceNum, $imageNameNew, $payment, $userId, $parts[1]);
                                    $stmt1->execute();
                                    if($stmt1->affected_rows > 0){
                                        $stmt->close();
                                        $stmt1->close();
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
        }
    }

?>