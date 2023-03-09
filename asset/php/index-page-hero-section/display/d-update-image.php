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
            $stmt = $conn->prepare("SELECT * FROM home_hero_section_tbl WHERE image <> ''");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td>
                            <input data-id="'.htmlspecialchars($row["home_hero_section_id"]).'" class="yot-form-input" type="file" name="imageUpdate" id="imageUpdate">
                        </td>
                        <td>
                            <img src="../../../../../g4stickerworks/asset/images/'.$row["image"].'" alt="">
                        </td>
                        <td>
                            <button class="yot-btn-blue1 updateIconImage yot-text-fs-xsm" data-id="'. htmlspecialchars($row["home_hero_section_id"]).'">Update</button>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
