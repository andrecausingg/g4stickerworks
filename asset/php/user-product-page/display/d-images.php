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
                    <h4 class="yot-mb-4">Price: '.$row["price"].' </h4>
                    <p class="yot-mb-8">Description: '.ucfirst($row["description"]).' </p>
                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                        <div class="yot-flex yot-flex-fd-c-ai-c">
                            <h4>Quantity</h4>

                            <div class="yot-flex yot-flex-ai-c">
                                <i quantity-id="'.$row["user_product_id"].'" class="fa-solid fa-square-plus yot-text-fs-xxl plusIcon"></i>
                                <h4 class="yot-mlr-8 quantityProduct" quantity-count-id ="'.$row["user_product_id"].'">1</h4>
                                <i quantity-id="'.$row["user_product_id"].'" class="fa-solid fa-square-minus yot-text-fs-xxl minusIcon"></i>
                            </div>
                        </div>

                        
                        <div class="yot-text-center">
                            <button class="yot-btn-blue1 yot-text-fs-xsm addToCart" data-id="'.$row["user_product_id"].'">Add to Cart</button>
                        </div>
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
