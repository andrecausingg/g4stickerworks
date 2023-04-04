<?php
    $classDisplayTotal = new classDisplayTotal();
    $classDisplayTotal->getTotal();
    
    class classDisplayTotal{
        public function getTotal(){
            // File Path
            require_once "../../helper/global/global.php"; 
    
            // Class
            $classConnDB = new classConnDB();
    
            // Variable
            $conn = $classConnDB->conn();
    
            // prepare the SQL statement with placeholders for the job name, job number, datetime varchar, and datetime
            $sql = "SELECT COUNT(*) FROM order_product_tbl";
    
            // create a prepared statement
            $stmt = $conn->prepare($sql);
    
            // execute statement
            $stmt->execute();
    
            // bind result variable and fetch result
            $stmt->bind_result($count);
            $stmt->fetch();
    
            // display result
            echo $count;
    
            // close statement and database connection
            $stmt->close();
            $conn->close();
        }
    }
?>