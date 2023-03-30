<?php
    if(isset($_POST["typeOfPlateFormatOne"]) && isset($_POST["quantityFormatOne"]) && isset($_POST["mvFileFormatOne"]) && isset($_POST["regionFormatOne"]) && isset($_POST["dealerFormatOne"])){
        $typeOfPlateFormatOne = sanitize1($_POST['typeOfPlateFormatOne']);
        $quantityFormatOne = sanitize1($_POST['quantityFormatOne']);
        $mvFileFormatOne = sanitize1($_POST['mvFileFormatOne']);
        $regionFormatOne = sanitize1($_POST['regionFormatOne']);
        $dealerFormatOne = sanitize1($_POST['dealerFormatOne']);

        $classCreate = new classCreate($typeOfPlateFormatOne, $quantityFormatOne, $mvFileFormatOne, $regionFormatOne, $dealerFormatOne);
        $classCreate->create();
    }

    // Sanitize1 Input
    function sanitize1($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classCreate{
        // Properties
        private $typeOfPlateFormatOne;
        private $quantityFormatOne;
        private $mvFileFormatOne;
        private $regionFormatOne;
        private $dealerFormatOne;

        // Method
        public function __construct($typeOfPlateFormatOne, $quantityFormatOne, $mvFileFormatOne, $regionFormatOne, $dealerFormatOne){
            $this->typeOfPlateFormatOne = $typeOfPlateFormatOne;
            $this->quantityFormatOne = $quantityFormatOne;
            $this->mvFileFormatOne = $mvFileFormatOne;
            $this->regionFormatOne = $regionFormatOne;
            $this->dealerFormatOne = $dealerFormatOne;
        }

        public function create(){
            // File Path
            require_once "../helper/global/global.php";
        
            // Class
            $conn = (new classConnDB())->conn();
            $dateTimeVarChar = (new classDateTime())->getDateTime();
            $userId = (new classSessionUserID())->sessionUserID();
            $uniqueId = (new classUniqueOrderId())->uniqueOrderId();
        
            $format = "FORMAT 1";
            $totalPrice = 250.00 * $this->quantityFormatOne;
            $page = "CART";
            $payment = "NONE";
            $statusOrder = "NOTPAID";
            
            // Variable second Insert
            $order_table_name = "temporaryplate";

            // prepare the SQL statement with placeholders 
            $sql = "INSERT INTO order_temp_plate_tbl (user_id, order_id_temp_plate, type_of_plate, format, mv_file, region, dealer, quantity, total_price, page, status_order, payment, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("issssssidssss", $userId, $uniqueId, $this->typeOfPlateFormatOne, $format, $this->mvFileFormatOne, $this->regionFormatOne, $this->dealerFormatOne, $this->quantityFormatOne, $totalPrice, $page, $statusOrder, $payment, $dateTimeVarChar);
            // execute the statement
            if($stmt->execute()){
                // get the last insert ID
                $last_insert_id = $conn->insert_id;                
                $sql = "INSERT INTO cart_tbl (user_id, order_table_name, order_table_id, status_order, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
                $stmt1 = $conn->prepare($sql);
                $stmt1->bind_param("isiss", $userId, $order_table_name, $last_insert_id, $statusOrder, $dateTimeVarChar);
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
    }
?>