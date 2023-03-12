<?php
    $classDisplay = new classDisplay();
    $classDisplay->getData();

    class classDisplay{
        public function getData(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            echo '
                <table class="yot-table-blue-theme">
                <tr>
                    <th>I.P Address</th>
                    <th>Country</th>
                    <th>Created</th>
                </tr>
            ';
            
            // DISPLAY
            $fetch_data = mysqli_query($classConnDB->conn(), "SELECT * FROM visitor_tbl ORDER BY visitor_id DESC");
            while($row = mysqli_fetch_assoc($fetch_data)){

                echo'
                    <tr>
                        <td>'. $row["ip_address"] .'</td>
                        <td>'. $row["country"] .'</td>
                        <td>'. $row["create_at_varchar"] .'</td>
                    </tr>
                ';
            }

            echo'</table>';
        }
    }
?>