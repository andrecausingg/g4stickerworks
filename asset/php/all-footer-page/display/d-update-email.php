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
                        <td>'.htmlspecialchars($row["email"]).'</td>
                        <td class="yot-flex">
                            <i class="fa-solid fa-file-pen yot-text-fs-xxl yot-mlr-8 yot-active-bbh1 updateIcon" role="email" data-id="'. htmlspecialchars($row["all_footer_id"]).'"></i>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
