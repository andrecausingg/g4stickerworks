<?php
    if(isset($_POST["typeOfPlateFormatOne"]) && isset($_POST["mvFileFormatOne"]) && isset($_POST["regionFormatOne"]) && isset($_POST["dealerFormatOne"])){
        $typeOfPlateFormatOne = sanitize1($_POST['typeOfPlateFormatOne']);
        $mvFileFormatOne = sanitize1($_POST['mvFileFormatOne']);
        $regionFormatOne = sanitize1($_POST['regionFormatOne']);
        $dealerFormatOne = sanitize1($_POST['dealerFormatOne']);

        $classCreate = new classCreate($typeOfPlateFormatOne, $mvFileFormatOne, $regionFormatOne, $dealerFormatOne);
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
        private $mvFileFormatOne;
        private $regionFormatOne;
        private $dealerFormatOne;

        // Method
        public function __construct($typeOfPlateFormatOne, $mvFileFormatOne, $regionFormatOne, $dealerFormatOne){
            $this->typeOfPlateFormatOne = $typeOfPlateFormatOne;
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

            $format = "Format 1";
            $totalPrice = 250.00;
            $page = "My Cart";
            $status = "Pending";
            $payment = "None";

            // prepare the SQL statement with placeholders 
            $sql = "INSERT INTO order_temp_plate_tbl (user_id, order_id_temp_plate, type_of_plate, format, mv_file, region, dealer, total_price, page, status, payment, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("issssssdssss", $userId, $uniqueId, $this->typeOfPlateFormatOne, $format, $this->mvFileFormatOne, $this->regionFormatOne, $this->dealerFormatOne, $totalPrice, $page, $status, $payment, $dateTimeVarChar);
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