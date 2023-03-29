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

            $totalPriceSticker = 0;
            $totalPriceReadyToPrint = 0;
            $totalPricetemporaryPlate = 0;
            $page = 'CART';
            $status = 'PENDING';

            // DISPLAY Sticker
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_sticker_tbl WHERE user_id = '$userId' AND page = '$page' AND status = '$status' ORDER BY order_sticker_main_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $totalPriceSticker += $row["total_price"]; 
            }

            // DISPLAY Tarpaulin Ready tO Print
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_ready_to_print_tbl WHERE user_id = '$userId' AND page = '$page' AND status = '$status' ORDER BY order_ready_to_print_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $totalPriceReadyToPrint += $row["total_price"]; 
            }

            // DISPLAY Temporary Plate
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_temp_plate_tbl WHERE user_id = '$userId' AND page = '$page' AND status = '$status' ORDER BY order_temp_plate_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $totalPricetemporaryPlate += $row["total_price"]; 
            }

            $totalPrice = $totalPriceReadyToPrint + $totalPricetemporaryPlate + $totalPriceSticker;

            echo number_format($totalPrice, 2, '.', '');
        }
    }
?>