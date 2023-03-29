<?php
    $classDisplayData = new classDisplayData();
    $classDisplayData->getData();

    class classDisplayData{
        public function getData(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $conn = (new classConnDB())->conn();
            $userId = (new classSessionUserID())->sessionUserID();

            $page = 'CART';
            $status = 'PENDING';

            $idTemporaryPlate = array();

            // DISPLAY Temporary Plate
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_temp_plate_tbl WHERE user_id = '$userId' AND page = '$page' AND status = '$status' ORDER BY order_temp_plate_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $idTemporaryPlate[] = $row["order_temp_plate_id"];
            }

            $idTemporaryPlatePayNow = implode(",", $idTemporaryPlate);
            echo '<input type="hidden" name="orderMainIdTemporaryPlate" id="orderMainIdTemporaryPlate" value="' . $idTemporaryPlatePayNow . '">';
        }
    }
?>