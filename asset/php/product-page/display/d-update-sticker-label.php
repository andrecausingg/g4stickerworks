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
                    <th>Upload File</th>
                    <th>Image</th>
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
                        <td>
                            <input data-id="'.htmlspecialchars($row["sticker_label_id"]).'" class="yot-form-input" type="file" name="imageUpdate" id="imageUpdate">
                        </td>
                        <td>
                            <img src="../../../../../g4stickerworks/asset/images/all-products/'.$row["image"].'" alt="">
                        </td>
                        <td>
                            <button class="yot-btn-blue1 updateIconImage yot-text-fs-xsm" data-id="'. htmlspecialchars($row["sticker_label_id"]).'">Update</button>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
