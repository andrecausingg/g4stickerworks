<?php
    if(isset($_POST["typeOfPlateFormatThree"]) && isset($_POST["quantityFormatThree"]) && isset($_POST["registeredNumFormatThree"])){
        $typeOfPlateFormatThree = sanitize1($_POST['typeOfPlateFormatThree']);
        $quantityFormatThree = sanitize1($_POST['quantityFormatThree']);
        $registeredNumFormatThree = sanitize1($_POST['registeredNumFormatThree']);

        $classCreate = new classCreate($typeOfPlateFormatThree, $quantityFormatThree, $registeredNumFormatThree);
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
        private $typeOfPlateFormatThree;
        private $quantityFormatThree;
        private $registeredNumFormatThree;

        // Method
        public function __construct($typeOfPlateFormatThree, $quantityFormatThree, $registeredNumFormatThree){
            $this->typeOfPlateFormatThree = $typeOfPlateFormatThree;
            $this->quantityFormatThree = $quantityFormatThree;
            $this->registeredNumFormatThree = $registeredNumFormatThree;
        }

        public function create(){
            // File Path
            require_once "../helper/global/global.php";

            // Class
            $conn = (new classConnDB())->conn();
            $dateTimeVarChar = (new classDateTime())->getDateTime();
            $userId = (new classSessionUserID())->sessionUserID();
            $uniqueId = (new classUniqueOrderId())->uniqueOrderId();

            $format = "FORMAT 3";
            $totalPrice = 250.00 * $this->quantityFormatThree;
            $page = "CART";
            $status = "PENDING";
            $payment = "NONE";
            $statusPlate = "TEMPORARY PLATE";

            // prepare the SQL statement with placeholders 
            $sql = "INSERT INTO order_temp_plate_tbl (user_id, order_id_temp_plate, type_of_plate, format, register_num, status_plate, quantity, total_price, page, status, payment, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("isssssidssss", $userId, $uniqueId, $this->typeOfPlateFormatThree, $format, $this->registeredNumFormatThree, $statusPlate, $this->quantityFormatThree, $totalPrice, $page, $status, $payment, $dateTimeVarChar);
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