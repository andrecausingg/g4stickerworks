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
        $stmt = $conn->prepare("SELECT * FROM gallery_page_tbl WHERE caption <> ''");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            $caption = htmlspecialchars($row["caption"], ENT_QUOTES, 'UTF-8');

            echo '
                '. $caption .'
            ';
        }
    }
}
?>
