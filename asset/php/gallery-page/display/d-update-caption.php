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
                    <th>Caption</th>
                    <th>Action</th>
                </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM gallery_page_tbl WHERE caption <> ''");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td>
                            <textarea class="yot-form-input yot-tff-sas" data-id="'.htmlspecialchars($row["gallery_page_id"]).'" type="text" style="height:80px;resize:none;">'.htmlspecialchars($row["caption"]).'</textarea>
                        </td>
                        <td>
                            <button class="yot-btn-blue1 updateIcon" data-id="'. htmlspecialchars($row["gallery_page_id"]).'">Update</button>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
