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
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM about_us_page WHERE image <> '' ORDER BY gallery_page_id DESC");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td><img src="../../../../../g4stickerworks/asset/images/gallery/'.$row["image"].'" alt=""></td>
                        <td class="yot-flex">
                            <i class="fa-solid fa-trash yot-text-fs-xxl yot-mlr-8 yot-active-bbh1 deleteIconImage" data-id="'. htmlspecialchars($row["gallery_page_id"]).'"></i>
                        </td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
