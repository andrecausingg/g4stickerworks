<?php
$classDisplayData = new classDisplayData();
$classDisplayData->getData();

class classDisplayData{
    public function getData(){
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
                <th>Email</th>
                <th>Password</th>
                <th>Date and Time</th>
                <th>Action</th>
            </tr>
        ';
        
        // DISPLAY
        $stmt = $conn->prepare("SELECT * FROM user_tbl ORDER BY user_id DESC");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            echo'
                <tr>
                    <td>'.htmlspecialchars($row["email"]).'</td>
                    <td>'. $classHidePassword->getHidePassword(htmlspecialchars($row["password"])) .'</td>
                    <td>'. htmlspecialchars($row["created_at_varchar"]) .'</td>
                    <td class="yot-flex">
                        <i class="fa-solid fa-trash yot-text-fs-xxl yot-mlr-8 yot-active-bbh1 deleteIcon" data-id="'. htmlspecialchars($row["user_id"]).'"></i>
                        <i class="fa-solid fa-file-pen yot-text-fs-xxl yot-active-bbh1 editIcon" data-id="'. htmlspecialchars($row["user_id"]) .'"></i>
                    </td>
                </tr>
            ';
        }

        echo'</table>';
    }
}
?>
