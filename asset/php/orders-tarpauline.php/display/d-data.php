<?php
    $classDisplayCutFile = new classDisplayCutFile();
    $classDisplayCutFile->getData();

    class classDisplayCutFile{
        public function getData(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            echo '
                <table class="yot-table-blue-theme">
                    <tr>
                        <th>User I.D</th>
                        <th>Order No.</th>
                        <th>Width</th>
                        <th>Height</th>   
                        <th>Image</th>
                        <th>Message</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Page</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Created</th>
                    </tr>
            ';
            
            // DISPLAY
            $fetch_data = mysqli_query($classConnDB->conn(), "SELECT * FROM order_ready_to_print_tbl ORDER BY order_ready_to_print_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){

                echo'
                    <tr>
                        <td>'.$row["user_id"].'</td>
                        <td>'.$row["order_id_ready_to_print"].'</td>
                        <td>'.$row["width"].'</td>
                        <td>'.$row["height"].'</td>
                        <td>'.$row["mv_file"].'</td>
                        <td>'.$row["register_num"].'</td>
                        <td>'.$row["region"].'</td>
                        <td>'.$row["dealer"].'</td>
                        <td>'.$row["status_plate"].'</td>
                        <td>'.$row["quantity"].'</td>
                        <td>'.$row["total_price"].'</td>
                        <td>'.$row["page"].'</td>
                        <td>'.$row["status"].'</td>
                        <td>'.$row["payment"].'</td>
                        <td>'.$row["created_at_varchar"].'</td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>