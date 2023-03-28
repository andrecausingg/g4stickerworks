<?php
    if(isset($_POST["typeOfPlateFormatTwo"]) && isset($_POST["quantityFormatTwo"]) && isset($_POST["registeredNumFormatTwo"]) && isset($_POST["regionFormatTwo"]) && isset($_POST["dealerFormatTwo"])){
        $typeOfPlateFormatTwo = sanitize1($_POST['typeOfPlateFormatTwo']);
        $quantityFormatTwo = sanitize1($_POST['quantityFormatTwo']);
        $registeredNumFormatTwo = sanitize1($_POST['registeredNumFormatTwo']);
        $regionFormatTwo = sanitize1($_POST['regionFormatTwo']);
        $dealerFormatTwo = sanitize1($_POST['dealerFormatTwo']);


        $classCreate = new classCreate($typeOfPlateFormatTwo, $quantityFormatTwo, $registeredNumFormatTwo, $regionFormatTwo, $dealerFormatTwo);
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
        private $typeOfPlateFormatTwo;
        private $quantityFormatTwo;
        private $registeredNumFormatTwo;
        private $regionFormatTwo;
        private $dealerFormatTwo;

        // Method
        public function __construct($typeOfPlateFormatTwo, $quantityFormatTwo, $registeredNumFormatTwo, $regionFormatTwo, $dealerFormatTwo){
            $this->typeOfPlateFormatTwo = $typeOfPlateFormatTwo;
            $this->quantityFormatTwo = $quantityFormatTwo;
            $this->registeredNumFormatTwo = $registeredNumFormatTwo;
            $this->regionFormatTwo = $regionFormatTwo;
            $this->dealerFormatTwo = $dealerFormatTwo;
        }

        public function create(){
            // File Path
            require_once "../helper/global/global.php";

            // Class
            $conn = (new classConnDB())->conn();
            $dateTimeVarChar = (new classDateTime())->getDateTime();
            $userId = (new classSessionUserID())->sessionUserID();
            $uniqueId = (new classUniqueOrderId())->uniqueOrderId();

            $format = "FORMAT 2";
            $totalPrice = 250.00 * $this->quantityFormatTwo;
            $page = "CART";
            $status = "PENDING";
            $payment = "NONE";

            // prepare the SQL statement with placeholders 
            $sql = "INSERT INTO order_temp_plate_tbl (user_id, order_id_temp_plate, type_of_plate, format, register_num, region, dealer, quantity, total_price, page, status, payment, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("issssssidssss", $userId, $uniqueId, $this->typeOfPlateFormatTwo, $format, $this->registeredNumFormatTwo, $this->regionFormatTwo, $this->dealerFormatTwo, $this->quantityFormatTwo, $totalPrice, $page, $status, $payment, $dateTimeVarChar);
            // execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "created";
            }
        }
    }
?>