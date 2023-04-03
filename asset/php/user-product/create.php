<?php
    if(isset($_POST["id"]) && isset($_POST["quantity"])){
        $id = sanitize1($_POST['id']);
        $quantity = sanitize1($_POST["quantity"]);

        $classCreate = new classCreate($id, $quantity);
        $classCreate->create();
    }
    
    // Sanitize Input
    function sanitize1($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    class classCreate{
        private $id;
        private $quantity;

        public function __construct($id, $quantity){
            $this->id = $id;
            $this->quantity = $quantity;
        }
    
        public function create(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
    
            // Class
            $conn = (new classConnDB())->conn();
            $dateTimeVarChar = (new classDateTime())->getDateTime();
            $userId = (new classSessionUserID())->sessionUserID();
            $uniqueId = (new classUniqueOrderId())->uniqueOrderId();

            $tableName = "product";
            $page = "CART";
            $statusOrder = "NOTPAID";
            $payment = "NONE";

            $stmt = $conn->prepare("SELECT * FROM user_product_tbl WHERE user_product_id = ?");
            $stmt->bind_param("i",  $this->id);
            $stmt->execute();
            $fetch_data = $stmt->get_result();

            while($row = mysqli_fetch_assoc($fetch_data)){
                $totalPrice = $this->quantity * $row["price"];

                // prepare the SQL statement with placeholders 
                $sql1 = "INSERT INTO order_product_tbl (user_id, order_id_product, name, description, quantity, total_price, image, page, payment, status_order, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
                // create a prepared statement
                $stmt1 = $conn->prepare($sql1);
                // bind the parameters to the placeholders
                $stmt1->bind_param("isssidsssss", $userId, $uniqueId, $row["name"], $row["description"], $this->quantity, $totalPrice, $row["image"], $page, $payment, $statusOrder, $dateTimeVarChar);
                // execute the statement
                if($stmt1->execute()){
                    // retrieve the last inserted row
                    $last_insert_id = mysqli_insert_id($conn);
                    
                    $stmt2 = $conn->prepare("SELECT * FROM order_product_tbl WHERE order_product_id = ?");
                    $stmt2->bind_param("i", $last_insert_id);
                    $stmt2->execute();
                    $fetch_data = $stmt2->get_result();
                    while($row = mysqli_fetch_assoc($fetch_data)){
                        // prepare the SQL statement with placeholders 
                        $sql2 = "INSERT INTO cart_tbl (user_id, order_table_name, order_table_id, status_order, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
                        // create a prepared statement
                        $stmt2 = $conn->prepare($sql2);
                        // bind the parameters to the placeholders
                        $stmt2->bind_param("issss", $userId, $tableName, $last_insert_id, $statusOrder, $dateTimeVarChar);
                        // execute the statement
                        if($stmt2->execute()){

                            $conn->close();
                            echo "created";

                        }
                    }
                }
            }
        }

        
    }
?>
