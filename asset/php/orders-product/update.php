<?php
    if(isset($_POST["id"]) && isset($_POST["val"])){
            
        $id = sanitize1($_POST['id']);
        $val = sanitize1($_POST['val']);

        $classUpdate = new classUpdate($id, $val);
        $classUpdate->getUpdate();
    }
    
    // Sanitize1 Input
    function sanitize1($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    class classUpdate{
        private $id;
        private $val;
    
        public function __construct($id, $val){
            $this->id = $id;
            $this->val = $val;
        }

        public function getUpdate(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
        
            // Class
            $conn = (new classConnDB())->conn();

            $parts = explode("-",$this->id);
            $parts[0]; 
            $parts[1]; 
            $parts[2]; 

            // prepare the SQL statement with placeholders
            $sql = "UPDATE cart_tbl SET status_order = ? WHERE user_id = ? AND order_table_name = ? AND order_table_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("sisi",  $this->val, $parts[2], $parts[0], $parts[1]);
            // Execute the statement
            if($stmt->execute()){
                // prepare the SQL statement with placeholders
                $sql1 = "UPDATE order_product_tbl SET page = ?, status_order = ? WHERE user_id = ? AND order_product_id = ?";
                // create a prepared statement
                $stmt1 = $conn->prepare($sql1);
                // bind the parameters to the placeholders
                $stmt1->bind_param("ssii", $this->val, $this->val, $parts[2], $parts[1]);
                if($stmt1->execute()){
                    // close the prepared statement and database connection
                    $stmt->close();
                    $stmt1->close();

                    $conn->close();
                    echo "updated";
                }
            }
        }
    }
?>