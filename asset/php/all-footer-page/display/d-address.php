<?php
$classDisplayData = new classDisplayData();
$classDisplayData->getData();

class classDisplayData{
    public function getData(){
        // File Path
        require_once "../../helper/global/global.php"; 

        // Class
        $classConnDB = new classConnDB();

        // Variable
        $conn = $classConnDB->conn();
        
        // DISPLAY
        $stmt = $conn->prepare("SELECT * FROM all_footer_tbl");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            $address = htmlspecialchars($row["address"], ENT_QUOTES, 'UTF-8');

            echo '
                <span>'. $address .'</span>
            ';
        }
    }
}
?>
