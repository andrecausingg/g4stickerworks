<?php
    $classDisplayData = new classDisplayData();
    $classDisplayData->getDataTiktok();

    class classDisplayData{
        public function getDataTiktok(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            // Variable
            $conn = $classConnDB->conn();

            echo '
                <table class="yot-table-blue-theme">
                <tr>
                    <th>Url Tiktok</th>
                    <th>Action</th>
                </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM all_footer_tbl WHERE tiktok <> ''");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td>
                            <span id="invalidUrlTiktokErrUpdate" class="yot-tc-red" style="display:none">Invalid Url</span>
                            <textarea class="yot-form-input yot-tff-sas" type="text" name="updateTiktokUrl" id="updateTiktokUrl" style="height:80px;resize:none;" >'.htmlspecialchars($row["tiktok"]).'</textarea>
                        </td>
                        <td>
                            <button class="yot-btn-blue1 updateIcon" role="tiktok" data-id="'. htmlspecialchars($row["all_footer_id"]).'">Update</button>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
