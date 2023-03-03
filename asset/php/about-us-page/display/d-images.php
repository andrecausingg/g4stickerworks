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
        $stmt = $conn->prepare("SELECT * FROM about_us_page_tbl WHERE image <> '' ORDER BY about_us_page_id DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()){
            echo'
                <!-- Img -->
                <div class="yot-col-50 yot-mb-8" style="margin:auto auto;">
                    <img src="../../../../../g4stickerworks/asset/images/about-us/'.$row["image"].'" alt="">                
                </div>
            ';
        }
    }
}
?>
