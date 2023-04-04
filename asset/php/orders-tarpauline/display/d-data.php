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
                        <th>User I.D</th>
                        <th>Order No.</th>
                        <th>Width(FOOT)</th>
                        <th>Height(FOOT)</th>   
                        <th>Image</th>
                        <th>Message</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Reference No.</th>
                        <th>Receipt</th>
                        <th>Deliver Method</th>
                        <th>Page</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
            ';
            
            // DISPLAY
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_ready_to_print_tbl ORDER BY order_ready_to_print_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $userId = $row["user_id"];
                $order = $row["order_id_ready_to_print"]; // assuming $row["message"] contains the string you want to split
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
                        <td>'.$split_message.'</td>
                        <td>'.$row["quantity"].'</td>
                        <td>'.$row["total_price"].'</td>
                        <td>'.$row["reference_num"].'</td>
                        '; if($row["receipt"] != ""){
                            echo '
                                <td><img src="../../../../../g4stickerworks/asset/images/all-receipt/'.$row["receipt"].'" alt="" height="50"></td>
                            ';
                        }else{
                            echo '
                                <td></td>
                            ';
                        }
                    echo'
                        <td>'.$row["deliver_method"].'</td>
                        <td>'.$row["page"].'</td>
                        <td>'.$row["status_order"].'</td>
                        <td>'.$row["payment"].'</td>
                        <td>'.$row["created_at_varchar"].'</td>
                        <td>
                        ';
                            $this->getSelectTagStatusOrder($row["status_order"], $row["order_ready_to_print_id"], $userId);
                        echo'
                        </td>
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

        public function getSelectTagStatusOrder($statusOrder, $orderMainId, $userId){
            $tableName = "tarpaulin";

            if($statusOrder == "NOTPAID"){
                echo '
                    <select data-id="'.$tableName."-".$orderMainId."-".$userId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
                        <option value="NOTPAID" selected>NOTPAID</option>
                        <option value="PENDING">PENDING</option>
                        <option value="VERIFIED">VERIFIED</option>
                        <option value="REJECT">REJECT</option>
                        <option value="READY">READY</option>
                        <option value="DONE">DONE</option>
                    </select>
                ';
            }else if($statusOrder == "PENDING"){
                echo'
                <select data-id="'.$tableName."-".$orderMainId."-".$userId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
                <option value="NOTPAID">NOTPAID</option>
                        <option value="PENDING" selected>PENDING</option>
                        <option value="VERIFIED">VERIFIED</option>
                        <option value="REJECT">REJECT</option>
                        <option value="READY">READY</option>
                        <option value="DONE">DONE</option>
                    </select>
                ';
            }else if($statusOrder == "VERIFIED"){
                echo'
                <select data-id="'.$tableName."-".$orderMainId."-".$userId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
                    <option value="NOTPAID">NOTPAID</option>
                        <option value="PENDING">PENDING</option>
                        <option value="VERIFIED" selected>VERIFIED</option>
                        <option value="REJECT">REJECT</option>
                        <option value="READY">READY</option>
                        <option value="DONE">DONE</option>
                    </select>
                ';
            }else if($statusOrder == "REJECT"){
                echo'
                    <select data-id="'.$tableName."-".$orderMainId."-".$userId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
                        <option value="NOTPAID">NOTPAID</option>
                        <option value="PENDING">PENDING</option>
                        <option value="VERIFIED">VERIFIED</option>
                        <option value="REJECT" selected>REJECT</option>
                        <option value="READY">READY</option>
                        <option value="DONE">DONE</option>
                    </select>
                ';
            }else if($statusOrder == "READY"){
                echo'
                    <select data-id="'.$tableName."-".$orderMainId."-".$userId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
                        <option value="NOTPAID">NOTPAID</option>
                        <option value="PENDING">PENDING</option>
                        <option value="VERIFIED">VERIFIED</option>
                        <option value="REJECT">REJECT</option>
                        <option value="READY" selected>READY</option>
                        <option value="DONE">DONE</option>
                    </select>
                ';
            }else if($statusOrder == "DONE"){
                echo'
                    <select data-id="'.$tableName."-".$orderMainId."-".$userId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
                        <option value="NOTPAID">NOTPAID</option>
                        <option value="PENDING">PENDING</option>
                        <option value="VERIFIED">VERIFIED</option>
                        <option value="REJECT">REJECT</option>
                        <option value="READY">READY</option>
                        <option value="DONE" selected>DONE</option>
                    </select>
                ';
            }
        }
    }
?>