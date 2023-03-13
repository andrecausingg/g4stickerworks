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
        $stmt = $conn->prepare("(SELECT 'temp_plate_tbl' AS temp_plate_tbl, image FROM temp_plate_tbl WHERE image <> '' ORDER BY RAND() LIMIT 1)
                                UNION ALL
                                (SELECT 'tarpauline_tbl' AS tarpauline_tbl, image FROM tarpauline_tbl WHERE image <> '' ORDER BY RAND() LIMIT 1)
                                UNION ALL
                                (SELECT 'sticker_label_tbl' AS sticker_label_tbl, image FROM sticker_label_tbl WHERE image <> '' ORDER BY RAND() LIMIT 1)
                                UNION ALL
                                (SELECT 'decals_tbl' AS decals_tbl, image FROM decals_tbl WHERE image <> '' ORDER BY RAND() LIMIT 1)");

        $stmt->execute();
        $result = $stmt->get_result();

        // start the first row
        echo '<div class="yot-row yot-flex-ai-c-jc-c">';

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
