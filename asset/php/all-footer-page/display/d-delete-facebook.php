<?php
    $classDisplayData = new classDisplayData();
    $classDisplayData->getDataFacebook();

    class classDisplayData{
        public function getDataFacebook(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();
            $classHidePassword = new classHidePassword();

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
                        <td>'.htmlspecialchars($row["facebook"]).'</td>
                        <td class="yot-flex">
                            <i class="fa-solid fa-trash yot-text-fs-xxl yot-mlr-8 yot-active-bbh1 deleteIcon" role="facebook" data-id="'. htmlspecialchars($row["all_footer_id"]).'"></i>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
