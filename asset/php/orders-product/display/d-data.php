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
                        <th>Product Name</th>
                        <th>Description</th>   
                        <th>Image</th>
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
            $fetch_data = mysqli_query($conn, "SELECT * FROM order_product_tbl ORDER BY order_product_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $userId = $row["user_id"];
                $decreaseDescription = substr($row["description"], 0, 10) . '...';

                $order = $row["order_id_product"]; // assuming $row["message"] contains the string you want to split
                $split_order = chunk_split($order, 10, "\n"); // split the message into chunks of 50 characters, with a line break after each chunk
                echo'
                    <tr>
                        <td>'.$this->getUserProfile($userId, $conn).'</td>
                        <td>'.$split_order.'</td>
                        <td>'.$row["name"].'</td>
                        <td>'.$decreaseDescription.'</td>
                        <td><img src="../../../../../g4stickerworks/asset/images/user-all-products/'.$row["image"].'" alt="" height="50"></td>
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
                            $this->getSelectTagStatusOrder($row["status_order"], $row["order_product_id"]);
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

        public function getSelectTagStatusOrder($statusOrder, $orderMainId){
            if($statusOrder == "NOTPAID"){
                echo '
                    <select data-id="'.$orderMainId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
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
                <select data-id="'.$orderMainId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
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
                <select data-id="'.$orderMainId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
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
                    <select data-id="'.$orderMainId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
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
                    <select data-id="'.$orderMainId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
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
                    <select data-id="'.$orderMainId.'" class="yot-form-input changeStatusOrder" name="cars" id="cars" style="width:150px">
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