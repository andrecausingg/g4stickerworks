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
        $count = 0; // initialize counter variable
        
        // DISPLAY
        $stmt = $conn->prepare("SELECT * FROM user_product_tbl WHERE image <> '' ORDER BY user_product_id DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        // start the first row
        echo '<div class="yot-row yot-flex-ai-c-jc-c">';
        
        while($row = $result->fetch_assoc()){
            // increment counter variable
            $count++;

            // add new column for each image
            echo '<div class="yot-col-25 yot-bg-white" style="margin:4px; padding:8px">
                    <img src="../../../../../g4stickerworks/asset/images/user-all-products/'.$row["image"].'" alt="">
                    <h4>Name: '.ucfirst($row["name"]).' </h4>
                    <p class="yot-mb-4">Description: '.ucfirst($row["description"]).' </p>
                    <h5 class="yot-mb-4">Price: '.ucfirst($row["price"]).' </h5>
                    <div class="yot-text-center">
                        <button class="yot-btn-blue1" data-id="'.$row["user_product_id"].'">Add to Cart</button>
                    </div>
                </div>';

            // check if current iteration is a multiple of 4
            if ($count % 4 == 0){
                // close the row and start a new one if current iteration is a multiple of 4
                echo '</div><div class="yot-row yot-flex-ai-c-jc-c">';
            }
        }

        // close the last row
        echo '</div>';
    }
}
?>
