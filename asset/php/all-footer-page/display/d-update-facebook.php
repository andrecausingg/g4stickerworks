<?php
    $classDisplayData = new classDisplayData();
    $classDisplayData->getDataFacebook();

    class classDisplayData{
        public function getDataFacebook(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            // Variable
            $conn = $classConnDB->conn();

            echo '
                <table class="yot-table-blue-theme">
                <tr>
                    <th>Url Facebook</th>
                    <th>Action</th>
                </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM all_footer_tbl WHERE facebook <> ''");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td><textarea class="yot-form-input yot-tff-sas" type="text" name="updateFacebookUrl" id="updateFacebookUrl" style="height:80px;resize:none;" >'.htmlspecialchars($row["facebook"]).'</textarea></td>
                        <td>
                            <button class="yot-btn-blue1 updateIcon" role="facebook" data-id="'. htmlspecialchars($row["all_footer_id"]).'">Update</button>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
