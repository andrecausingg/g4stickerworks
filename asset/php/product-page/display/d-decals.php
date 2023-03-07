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
        $count = 0; // initialize counter variable
        
        // DISPLAY
        $stmt = $conn->prepare("SELECT * FROM decals_tbl WHERE image <> '' ORDER BY decals_id DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        // start the first row
        echo '<div class="yot-row yot-flex-ai-c-jc-sb">';
        
        while($row = $result->fetch_assoc()){
            // increment counter variable
            $count++;

            // add new column for each image
            echo '<div class="yot-col-25"><img src="../../../../../g4stickerworks/asset/images/all-products/'.$row["image"].'" alt=""></div>';

            // check if current iteration is a multiple of 4
            if ($count % 4 == 0) {
                // close the row and start a new one if current iteration is a multiple of 4
                echo '</div><div class="yot-row yot-flex-ai-c-jc-sb">';
            }
        }

        // close the last row
        echo '</div>';
    }
}
?>
