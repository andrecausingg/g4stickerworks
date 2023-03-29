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

            $idSticker = array();

            // DISPLAY Sticker
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_sticker_tbl WHERE user_id = '$userId' AND page = '$page' AND status = '$status' ORDER BY order_sticker_main_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $idSticker[] = $row["order_sticker_main_id"];
            }

            $idStickerPayNow = implode(",", $idSticker);
            echo '<input type="hidden" name="orderMainIdSticker" id="orderMainIdSticker" value="' . $idStickerPayNow . '">';
        }
    }
?>