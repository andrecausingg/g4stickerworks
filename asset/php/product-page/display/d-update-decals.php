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

            echo '
                <table class="yot-table-blue-theme">
                    <tr>
                        <th>Image</th>
                        <th>Type of Decals</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Date and Time</th>
                        <th>Action</th>
                    </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM decals_tbl WHERE image <> '' ORDER BY decals_id DESC");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td class="pp-table-images yot-flex yot-flex-fd-c-ai-c">
                            <img src="../../../../../g4stickerworks/asset/images/all-products/'.$row["image"].'" alt="">
                            <input class="yot-form-input" type="file" name="imageDecalsUpdate" id="imageDecalsUpdate" data-id="'. htmlspecialchars($row["decals_id"]).'">
                        </td>
                        <td>'.htmlspecialchars($row["decals_type"]).'</td>
                        <td>'.htmlspecialchars($row["brand"]).'</td>
                        <td>'.htmlspecialchars($row["model"]).'</td>
                        <td>'.htmlspecialchars($row["created_at_varchar"]).'</td>
                        <td><button class="yot-btn-blue1 updateIconDecals" data-id="'. htmlspecialchars($row["decals_id"]).'">Update</button></td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }

?>
