<?php
    $classDisplayData = new classDisplayData();
    $classDisplayData->getDataEmail();

    class classDisplayData{
        public function getDataEmail(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            // Variable
            $conn = $classConnDB->conn();

            echo '
                <table class="yot-table-blue-theme">
                <tr>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM all_footer_tbl WHERE email <> ''");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td>
                            <span id="invalidEmailErrUpdate" class="yot-tc-red" style="display:none">Invalid Email</span>
                            <textarea class="yot-form-input yot-tff-sas" type="text" name="updateEmailUrl" id="updateEmailUrl" style="height:80px;resize:none;" >'.htmlspecialchars($row["email"]).'</textarea>
                        </td>
                        <td>
                            <button class="yot-btn-blue1 updateIcon" role="email" data-id="'. htmlspecialchars($row["all_footer_id"]).'">Update</button>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
