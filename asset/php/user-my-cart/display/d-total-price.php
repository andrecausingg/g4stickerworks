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

            // Default Price
            $totalPrice = 0.00;

            // For Error
            $emptyCart = 0;

            // Accumulator Total Price
            $totalPriceSticker = 0;
            $totalPriceReadyToPrint = 0;
            $totalPricetemporaryPlate = 0;
            $totalPriceProduct = 0;

            // Query
            $page = 'CART';
            $status = 'PENDING';

            $statusOrder = 'NOTPAID';

            $fetch_data = mysqli_query($conn, "SELECT * FROM cart_tbl WHERE user_id = '$userId' AND status_order = '$statusOrder' ORDER BY cart_id DESC");
            if(mysqli_num_rows($fetch_data) == 0){
                $emptyCart = 1;
                echo '<span id="totalPrice">'. number_format($totalPrice, 2, '.', '') .'</span>';
            }else{
                // DISPLAY Sticker
                $fetch_data = mysqli_query($conn, "SELECT * FROM order_sticker_tbl WHERE user_id = '$userId' AND page = '$page' AND status_order = '$statusOrder' ORDER BY order_sticker_main_id DESC");
                while($row = mysqli_fetch_assoc($fetch_data)){
                    $totalPriceSticker += $row["total_price"]; 
                }

                // DISPLAY Tarpaulin Ready tO Print
                $fetch_data = mysqli_query($conn, "SELECT * FROM order_ready_to_print_tbl WHERE user_id = '$userId' AND page = '$page' AND status_order = '$statusOrder' ORDER BY order_ready_to_print_id DESC");
                while($row = mysqli_fetch_assoc($fetch_data)){
                    $totalPriceReadyToPrint += $row["total_price"]; 
                }

                // DISPLAY Temporary Plate
                $fetch_data = mysqli_query($conn, "SELECT * FROM order_temp_plate_tbl WHERE user_id = '$userId' AND page = '$page' AND status_order = '$statusOrder' ORDER BY order_temp_plate_id DESC");
                while($row = mysqli_fetch_assoc($fetch_data)){
                    $totalPricetemporaryPlate += $row["total_price"]; 
                }

                // DISPLAY Product
                $fetch_data = mysqli_query($conn, "SELECT * FROM order_product_tbl WHERE user_id = '$userId' AND page = '$page' AND status_order = '$statusOrder' ORDER BY order_product_id DESC");
                while($row = mysqli_fetch_assoc($fetch_data)){
                    $totalPriceProduct += $row["total_price"]; 
                }

                $totalPrice = $totalPriceReadyToPrint + $totalPricetemporaryPlate + $totalPriceSticker + $totalPriceProduct;

                echo '<span id="totalPrice">'. number_format($totalPrice, 2, '.', '') .'</span>';
            }
        }
    }
?>