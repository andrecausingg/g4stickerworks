<?php
    $classDisplayData = new classDisplayData();
    $classDisplayData->getDataPhone();

    class classDisplayData{
        public function getDataPhone(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            // Variable
            $conn = $classConnDB->conn();

            echo '
                <table class="yot-table-blue-theme">
                <tr>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM all_footer_tbl WHERE cellphone_num <> ''");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td>
                            <span id="invalidPhoneErrUpdate" class="yot-tc-red" style="display:none">Please enter a valid phone number</span>
                            <textarea class="yot-form-input yot-tff-sas" type="text" name="updatePhoneUrl" id="updatePhoneUrl" style="height:80px;resize:none;" >'.htmlspecialchars($row["cellphone_num"]).'</textarea>
                        </td>
                        <td>
                            <button class="yot-btn-blue1 updateIcon" role="phone" data-id="'. htmlspecialchars($row["all_footer_id"]).'">Update</button>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
