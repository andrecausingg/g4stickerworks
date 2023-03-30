<?php
    if(isset($_POST["id"])){
        $id = sanitize($_POST['id']);
        $classDeleteAdminAccounts = new classDeleteAdminAccounts();
        $classDeleteAdminAccounts->setId($id);
        $classDeleteAdminAccounts->getDeleteContainer();
    }
    
    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    class classDeleteAdminAccounts{
        private $id;
    
        public function setId($id){
            $this->id = $id;
        }
    
        // Get Nick Name
        public function getDeleteContainer(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 
    
            // Class
            $classConnDB = new classConnDB();
    
            // Variable
            $conn = $classConnDB->conn();

            $parts = explode("-",$this->id);
            $parts[0]; 
            $parts[1]; 

            $sticker = "sticker";
            $tarpaulin = "tarpaulin";
            $temporaryplate = "temporaryplate";


            if($parts[0] == "sticker"){
                // prepare the SQL statement with placeholders 
                $sql = "DELETE FROM order_sticker_tbl WHERE order_sticker_main_id = ?";
                // create a prepared statement
                $stmt = $conn->prepare($sql);
                // bind the parameters to the placeholders
                $stmt->bind_param("i",$parts[1]);
        
                // Execute the statement
                if($stmt->execute()){
                    // close the prepared statement and database connection
                    $stmt->close();

                    // prepare the SQL statement with placeholders 
                    $sql = "DELETE FROM cart_tbl WHERE order_table_id = ? AND order_table_name = 'sticker'";
                    // create a prepared statement
                    $stmt1 = $conn->prepare($sql);
                    // bind the parameters to the placeholders
                    $stmt1->bind_param("i",$parts[1]);
            
                    // Execute the statement
                    if($stmt1->execute()){
                        // close the prepared statement and database connection
                        $stmt1->close();
                        $conn->close();
                        echo "deleted";
                    }
                }
            }else if($parts[0] == "tarpaulinOne"){
                // prepare the SQL statement with placeholders 
                $sql = "DELETE FROM order_ready_to_print_tbl WHERE order_ready_to_print_id = ?";
                // create a prepared statement
                $stmt = $conn->prepare($sql);
                // bind the parameters to the placeholders
                $stmt->bind_param("i",$parts[1]);
        
                // Execute the statement
                if($stmt->execute()){
                    // close the prepared statement and database connection
                    $stmt->close();

                    // prepare the SQL statement with placeholders 
                    $sql = "DELETE FROM cart_tbl WHERE order_table_id = ? AND order_table_name = 'tarpaulin'";
                    // create a prepared statement
                    $stmt1 = $conn->prepare($sql);
                    // bind the parameters to the placeholders
                    $stmt1->bind_param("i",$parts[1]);
            
                    // Execute the statement
                    if($stmt1->execute()){
                        // close the prepared statement and database connection
                        $stmt1->close();
                        $conn->close();
                        echo "deleted";
                    }
                }
            }else if($parts[0] == "temporaryPlate"){
                // prepare the SQL statement with placeholders 
                $sql = "DELETE FROM order_temp_plate_tbl WHERE order_temp_plate_id = ?";
                // create a prepared statement
                $stmt = $conn->prepare($sql);
                // bind the parameters to the placeholders
                $stmt->bind_param("i",$parts[1]);
        
                // Execute the statement
                if($stmt->execute()){
                    // close the prepared statement and database connection
                    $stmt->close();

                    // prepare the SQL statement with placeholders 
                    $sql = "DELETE FROM cart_tbl WHERE order_table_id = ? AND order_table_name = 'temporaryplate'";
                    // create a prepared statement
                    $stmt1 = $conn->prepare($sql);
                    // bind the parameters to the placeholders
                    $stmt1->bind_param("i",$parts[1], );
            
                    // Execute the statement
                    if($stmt1->execute()){
                        // close the prepared statement and database connection
                        $stmt1->close();
                        $conn->close();
                        echo "deleted";
                    }
                }
            }
        }
    }
?>