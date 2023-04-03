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
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Date and Time</th>
                        <th>Action</th>
                    </tr>
            ';
            
            // DISPLAY
            $stmt = $conn->prepare("SELECT * FROM user_product_tbl WHERE image <> '' ORDER BY user_product_id DESC");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo'
                    <tr>
                        <td class="pp-table-images yot-flex yot-flex-fd-c-ai-c">
                            <img src="../../../../../g4stickerworks/asset/images/user-all-products/'.$row["image"].'" alt="">
                            <input data-id="'.htmlspecialchars($row["user_product_id"]).'" class="yot-form-input" type="file" name="imageUserProductUpdate" id="imageUserProductUpdate">
                        </td>
                        <td>'.htmlspecialchars($row["name"]).'</td>
                        <td>'.htmlspecialchars($row["description"]).'</td>
                        <td>'.htmlspecialchars($row["price"]).'</td>
                        <td>'.htmlspecialchars($row["created_at_varchar"]).'</td>
                        <td><button class="yot-btn-blue1 updateIconUserProduct" data-id="'. htmlspecialchars($row["user_product_id"]).'">Update</button></td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>
