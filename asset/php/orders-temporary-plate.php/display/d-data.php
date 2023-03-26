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
                        <th>Type Of Plate</th>
                        <th>Format</th>   
                        <th>Mv-File</th>
                        <th>Register No.</th>
                        <th>Region</th>
                        <th>Delear</th>
                        <th>Status Plate</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Page</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Created</th>
                    </tr>
            ';
            
            // DISPLAY
            $fetch_data = mysqli_query($classConnDB->conn(), "SELECT * FROM order_temp_plate_tbl ORDER BY order_temp_plate_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){

                echo'
                    <tr>
                        <td>'.$row["user_id"].'</td>
                        <td>'.$row["order_id_temp_plate"].'</td>
                        <td>'.$row["type_of_plate"].'</td>
                        <td>'.$row["format"].'</td>
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