<?php
    $classDisplayData = new classDisplayData();
    $classDisplayData->getDataInstagram();

    class classDisplayData{
        public function getDataInstagram(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            // Variable
            $conn = $classConnDB->conn();

            echo '
                <table class="yot-table-blue-theme">
                <tr>
                    <th>Url Instagram</th>
                    <th>Action</th>
                </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM all_footer_tbl WHERE instagram <> ''");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td>
                            <span id="invalidUrlInstagramErrUpdate" class="yot-tc-red" style="display:none">Invalid Url</span>
                            <textarea class="yot-form-input yot-tff-sas" type="text" name="updateInstagramUrl" id="updateInstagramUrl" style="height:80px;resize:none;" >'.htmlspecialchars($row["instagram"]).'</textarea>
                        </td>
                        <td>
                            <button class="yot-btn-blue1 updateIcon" role="instagram" data-id="'. htmlspecialchars($row["all_footer_id"]).'">Update</button>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
