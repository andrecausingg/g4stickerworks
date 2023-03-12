<?php
    $classDisplayData = new classDisplayData();
    $classDisplayData->getDataCaption();

    class classDisplayData{
        public function getDataCaption(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            // Variable
            $conn = $classConnDB->conn();

            echo '
                <table class="yot-table-blue-theme">
                    <tr>
                        <th>Image</th>
                        <th>Date And Time</th>
                        <th>Action</th>
                    </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM sticker_label_tbl WHERE image <> '' ORDER BY sticker_label_id DESC");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td class="pp-table-images yot-flex yot-flex-fd-c-ai-c">
                            <img src="../../../../../g4stickerworks/asset/images/all-products/'.$row["image"].'" alt="">
                            <input data-id="'.htmlspecialchars($row["sticker_label_id"]).'" class="yot-form-input" type="file" name="imageUpdateStickerLabel" id="imageUpdateStickerLabel">
                        </td>
                        <td>'.htmlspecialchars($row["created_at_varchar"]).'</td>
                        <td>
                            <button class="yot-btn-blue1 updateIconImageStickerLabel yot-text-fs-xsm" data-id="'. htmlspecialchars($row["sticker_label_id"]).'">Update</button>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
