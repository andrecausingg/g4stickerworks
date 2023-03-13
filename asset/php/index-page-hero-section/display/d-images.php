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
                <div class="yot-mb-8">
                    <img src="../../../../../g4stickerworks/asset/images/'.$row["image"].'" alt="" style="width: 300px; height: 300px; border-radius: 50%; margin:auto;">
                </div>
            ';
        }
    }
}
?>
