<?php
    $classDisplayCutFile = new classDisplayCutFile();
    $classDisplayCutFile->getData();

    class classDisplayCutFile{
        public function getData(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            echo '
                <table class="yot-table-blue-theme">
                <tr>
                    <th>Job Name</th>
                    <th>Job No.</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
            ';
            
            // DISPLAY
            $fetch_data = mysqli_query($classConnDB->conn(), "SELECT * FROM cut_file_tbl ORDER BY cut_file_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){

                echo'
                    <tr>
                        <td>'. $row["job_name"] .'</td>
                        <td>'. $row["job_no"] .'</td>
                        <td>'. $row["create_at_varchar"] .'</td>
                        <td class="yot-flex">
                            <i class="fa-solid fa-trash yot-text-fs-xxl yot-mlr-8 yot-active-bbh1 deleteIcon" data-id="'. $row["cut_file_id"].'"></i>
                            <i class="fa-solid fa-file-pen yot-text-fs-xxl yot-active-bbh1 editIcon" data-id="'. $row["cut_file_id"] .'"></i>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>