<?php
    $classTotal = new classTotal();
    $classTotal->getTotal();
    
    class classTotal{
        public function getTotal(){
            // File Path
            require_once "../../helper/global/global.php"; 
    
            // Class
            $conn = (new classConnDB())->conn();
    
            // prepare the SQL statement with placeholders
            $sql = "SELECT COUNT(*) FROM order_sticker_tbl WHERE status_order = 'DONE' ";
    
            // create a prepared statement
            $stmt = $conn->prepare($sql);
    
            // execute statement
            $stmt->execute();
    
            // bind result variable and fetch result
            $stmt->bind_result($count);
            $stmt->fetch();
    
            // display result
            echo '<h2 class="yot-tc-black">'.$count.'</span>';
    
            // close statement and database connection
            $stmt->close();
            $conn->close();
        }
    }
?>