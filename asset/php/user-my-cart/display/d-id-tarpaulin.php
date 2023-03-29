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

            $idTarpaulin = array();

            // DISPLAY Tarpaulin Ready tO Print
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_ready_to_print_tbl WHERE user_id = '$userId' AND page = '$page' AND status = '$status' ORDER BY order_ready_to_print_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $idTarpaulin[] = $row["order_ready_to_print_id"];
            }

            $idTarpaulinPayNow = implode(",", $idTarpaulin);
            echo '<input type="hidden" name="orderMainIdTarpaulin" id="orderMainIdTarpaulin" value="' . $idTarpaulinPayNow . '">';
        }
    }
?>