<?php
if(isset($_POST["search"]) || isset($_POST["startDate"]) || isset($_POST["endDate"]) || isset($_POST["filterStatusOrder"])){
    $search = sanitize1($_POST["search"]);
    $startDate = sanitize1($_POST["startDate"]);
    $endDate = sanitize1($_POST["endDate"]);
    $filterStatusOrder = sanitize1($_POST["filterStatusOrder"]);

    $classSearch = new classSearch($search, $startDate, $endDate, $filterStatusOrder);
    $classSearch->getSearch();
}

// Sanitize1 Input
function sanitize1($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

class ClassSearch{
    private $search;
    private $startDate;
    private $endDate;
    private $filterStatusOrder;

    public function __construct($search, $startDate, $endDate, $filterStatusOrder){
        $this->search = $search;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->filterStatusOrder = $filterStatusOrder;
    }

    public function getSearch(){
        // Require Global File
        require_once "../../helper/global/global.php";
    
        // Connect to database
        $conn = (new classConnDB())->conn();

        // Create query
        $query = "SELECT * FROM order_ready_to_print_tbl WHERE 1=1";
        $queryParams = array();

        // Add a condition to the query if the search parameter is not empty
        if (isset($this->search) && !empty($this->search)) {
            $search = "%{$this->search}%";
            $query .= " AND order_id_ready_to_print LIKE ?";
            $queryParams[] = $search;
        }

        // Add a condition to the query if the startDate parameter is not empty
        if (isset($this->startDate) && $this->startDate !== "undefined--undefined") {
            $startDate = $this->startDate;
            $query .= " AND DATE(created_at) >= ?";
            $queryParams[] = $startDate;
        }

        // Add a condition to the query if the endDate parameter is not empty
        if (isset($this->endDate) && $this->endDate !== "undefined--undefined") {
            $endDate = $this->endDate;
            $query .= " AND DATE(created_at) <= ?";
            $queryParams[] = $endDate;
        }

         // Add a condition to the query if the filterStatusOrder parameter is not empty
        if (isset($this->filterStatusOrder) && !empty($this->filterStatusOrder)) {
            $statusOrder = $this->filterStatusOrder;
            $query .= " AND status_order = ?";
            $queryParams[] = $statusOrder;
        }

        $query .= " ORDER BY order_ready_to_print_id DESC";

        // Prepare statement
        $stmt = $conn->prepare($query);
    
        // Bind parameters
        if (!empty($queryParams)) {
            $types = str_repeat('s', count($queryParams));
            $stmt->bind_param($types, ...$queryParams);
        }
    
        // Execute query
        $stmt->execute();
    
        // Get result
        $result = $stmt->get_result();
    
        // Display data
        if ($result->num_rows > 0) {
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
                
            while ($row = $result->fetch_assoc()) {
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
    
            echo '</table>';
        } else {
            echo '
                <div class="yot-flex yot-flex-fd-c-ai-c">
                    <h1>No Result Found</h1>
                    <img src="../../../../../g4stickerworks/asset/images/undraw_empty_re_opql.svg" alt="" style="width:300px; height:300px">
                </div>
            ';
        }
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
