<?php
    $classDisplayCutFile = new classDisplayCutFile();
    $classDisplayCutFile->getData();

    class classDisplayCutFile{
        public function getData(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $conn = (new classConnDB())->conn();

            echo '
                <table class="yot-table-blue-theme">
                    <tr>
                        <th>Name</th>
                        <th>Order No.</th>
                        <th>Width(INCH)</th>
                        <th>Height(INCH)</th>   
                        <th>Image</th>
                        <th>Cover</th>
                        <th>Message</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Page</th>
                        <th>Status</th>
                        <th>Reference No.</th>
                        <th>Receipt</th>
                        <th>Payment</th>
                        <th>Created</th>
                    </tr>
            ';
            
            // DISPLAY
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_sticker_tbl ORDER BY order_sticker_main_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $userId = $row["user_id"];

                $order = $row["order_id_sticker"]; // assuming $row["message"] contains the string you want to split
                $split_order = chunk_split($order, 10, "\n"); // split the message into chunks of 50 characters, with a line break after each chunk
                $message = $row["message"]; // assuming $row["message"] contains the string you want to split
                $split_message = chunk_split($message, 200, "\n"); // split the message into chunks of 50 characters, with a line break after each chunk
                echo'
                    <tr>
                        <td>'.$this->getUserProfile($userId, $conn).'</td>
                        <td>'.$split_order.'</td>
                        <td>'.$row["width"].'</td>
                        <td>'.$row["height"].'</td>
                        <td><img src="../../../../../g4stickerworks/asset/images/all-orders/'.$row["image"].'" alt="" height="50"></td>
                        <td>'.$row["cover"].'</td>
                        <td>'.$split_message.'</td>
                        <td>'.$row["quantity"].'</td>
                        <td>'.$row["total_price"].'</td>
                        <td>'.$row["page"].'</td>
                        <td>'.$row["status_order"].'</td>
                        <td>'.$row["reference_num"].'</td>
                        <td><img src="../../../../../g4stickerworks/asset/images/all-receipt/'.$row["receipt"].'" alt="" height="50"></td>
                        <td>'.$row["payment"].'</td>
                        <td>'.$row["created_at_varchar"].'</td>
                    </tr>
                ';
            }

            echo'</table>';
        }

        public function getUserProfile($userId, $conn){
            $fetch_data = mysqli_query($conn, "SELECT * FROM user_tbl WHERE user_id");
            while($row = mysqli_fetch_assoc($fetch_data)){
                return ucfirst($row["first_name"]) . " " . ucfirst($row["last_name"]);
            }
        }
    }
?>