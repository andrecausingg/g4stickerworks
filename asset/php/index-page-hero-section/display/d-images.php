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
        $stmt = $conn->prepare("SELECT * FROM home_hero_section_tbl WHERE image <> ''");
        $stmt->execute();
        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()){
            echo'
                <!-- Img -->
                <div class="yot-col-50 yot-mb-8" style="margin:auto auto;">
                    <img src="../../../../../g4stickerworks/asset/images/'.$row["image"].'" alt="" width="300" height="300">
                </div>
            ';
        }
    }
}
?>
