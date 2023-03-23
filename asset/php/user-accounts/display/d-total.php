<?php
    $classDisplayAdminAccounts = new classDisplayAdminAccounts();
    $classDisplayAdminAccounts->getTotal();
    
    class classDisplayAdminAccounts{
        public function getTotal(){
            // File Path
            require_once "../../helper/global/global.php"; 
    
            // Class
            $classConnDB = new classConnDB();
    
            // Variable
            $conn = $classConnDB->conn();
    
            // prepare the SQL statement with placeholders 
            $sql = "SELECT COUNT(*) FROM user_tbl WHERE role = 'user' ";
    
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