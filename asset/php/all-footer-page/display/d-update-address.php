<?php
    $classDisplayData = new classDisplayData();
    $classDisplayData->getDataAddress();

    class classDisplayData{
        public function getDataAddress(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            // Variable
            $conn = $classConnDB->conn();

            echo '
                <table class="yot-table-blue-theme">
                <tr>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM all_footer_tbl WHERE address <> ''");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td>
                            <span id="invalidAddressErrUpdate" class="yot-tc-red" style="display:none">Please enter a valid address</span>
                            <textarea class="yot-form-input yot-tff-sas" type="text" name="updateAddress" id="updateAddress" style="height:80px;resize:none;" >'.htmlspecialchars($row["address"]).'</textarea>
                        </td>
                        <td>
                            <button class="yot-btn-blue1 updateIcon" role="address" data-id="'. htmlspecialchars($row["all_footer_id"]).'">Update</button>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
