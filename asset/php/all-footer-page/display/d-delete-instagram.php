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
                        <td>'.htmlspecialchars($row["instagram"]).'</td>
                        <td class="yot-flex">
                            <i class="fa-solid fa-trash yot-text-fs-xxl yot-mlr-8 yot-active-bbh1 deleteIcon" role="instagram" data-id="'. htmlspecialchars($row["all_footer_id"]).'"></i>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
