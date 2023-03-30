<?php
    if(isset($_POST["typeOfPlateFormatFour"]) && isset($_POST["quantityFormatFour"]) && isset($_POST["registeredNumFormatFour"])){
        $typeOfPlateFormatFour = sanitize1($_POST['typeOfPlateFormatFour']);
        $quantityFormatFour = sanitize1($_POST['quantityFormatFour']);
        $registeredNumFormatFour = sanitize1($_POST['registeredNumFormatFour']);

        $classCreate = new classCreate($typeOfPlateFormatFour, $quantityFormatFour, $registeredNumFormatFour);
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
        private $typeOfPlateFormatFour;
        private $quantityFormatFour;
        private $registeredNumFormatFour;

        // Method
        public function __construct($typeOfPlateFormatFour, $quantityFormatFour, $registeredNumFormatFour){
            $this->typeOfPlateFormatFour = $typeOfPlateFormatFour;
            $this->quantityFormatFour = $quantityFormatFour;
            $this->registeredNumFormatFour = $registeredNumFormatFour;
        }

        public function create(){
            // File Path
            require_once "../helper/global/global.php";

            // Class
            $conn = (new classConnDB())->conn();
            $dateTimeVarChar = (new classDateTime())->getDateTime();
            $userId = (new classSessionUserID())->sessionUserID();
            $uniqueId = (new classUniqueOrderId())->uniqueOrderId();

            $format = "FORMAT 4";
            $totalPrice = 250.00 * $this->quantityFormatFour;
            $page = "CART";
            $statusOrder = "NOTPAID";
            $payment = "NONE";
            $statusPlate = "VIRTUAL PLATE";

            // Variable second Insert
            $order_table_name = "temporaryplate";

            // prepare the SQL statement with placeholders 
            $sql = "INSERT INTO order_temp_plate_tbl (user_id, order_id_temp_plate, type_of_plate, format, register_num, status_plate, quantity, total_price, page, status_order, payment, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("isssssidssss", $userId, $uniqueId, $this->typeOfPlateFormatFour, $format, $this->registeredNumFormatFour, $statusPlate, $this->quantityFormatFour, $totalPrice, $page, $statusOrder, $payment, $dateTimeVarChar);
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