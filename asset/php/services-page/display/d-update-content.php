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
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM services_page_tbl WHERE content <> ''");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td>
                            <textarea class="yot-form-input yot-tff-sas" data-id="'.htmlspecialchars($row["services_id"]).'" type="text" style="height:80px;resize:none;">'.htmlspecialchars($row["content"]).'</textarea>
                        </td>
                        <td>
                            <button class="yot-btn-blue1 updateIconContent" data-id="'. htmlspecialchars($row["services_id"]).'">Update</button>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
