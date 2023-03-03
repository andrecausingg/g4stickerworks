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
        $stmt = $conn->prepare("SELECT * FROM gallery_page_tbl WHERE image <> '' ORDER BY gallery_page_id DESC");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){

           echo'
                <div>
                    <img src="../../../../../g4stickerworks/asset/images/gallery/'.$row["image"].'" alt="">
                </div>
           ';
        }
    }
}
?>
