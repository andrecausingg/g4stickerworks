<?php
if(isset($_POST["search"]) || isset($_POST["startDate"]) || isset($_POST["endDate"])){
    $search = sanitize($_POST["search"]);
    $startDate = sanitize($_POST["startDate"]);
    $endDate = sanitize($_POST["endDate"]);

    $classSearch = new classSearch($search, $startDate, $endDate);
    $classSearch->getSearch();
}

// Sanitize Input
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

class ClassSearch{
    private $search;
    private $startDate;
    private $endDate;

    public function __construct($search, $startDate, $endDate){
        $this->search = $search;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function getSearch(){
        // Require Global File
        require_once "../../helper/global/global.php";
    
        // Connect to database
        $classConnDB = new ClassConnDB();
        $classHidePassword = new classHidePassword();

        // Variable
        $conn = $classConnDB->conn();
    
        // Create query
        $query = "SELECT * FROM user_tbl ";
        $queryParams = array();

        // Add a condition to the query if the search parameter is not empty
        if (isset($this->search) && !empty($this->search)) {
            $search = $this->search;
            $queryParams[] = "email LIKE '%$search%'";
        }

        // Add a condition to the query if the startDate parameter is not empty
        if (isset($this->startDate) && $this->startDate !== "undefined--undefined") {
            $startDate = $this->startDate;
            $queryParams[] = "DATE(created_at) >= '$startDate'";
        }

        // Add a condition to the query if the endDate parameter is not empty
        if (isset($this->endDate) && $this->endDate !== "undefined--undefined") {
            $endDate = $this->endDate;
            $queryParams[] = "DATE(created_at) <= '$endDate'";
        }

        // Add the WHERE clause to the query if any conditions were added
        if (!empty($queryParams)) {
            $query .= " WHERE " . implode(" AND ", $queryParams);
        }

        if($this->search == ""){
            $query .= "WHERE role='admin' ORDER BY user_id DESC ";
        }else{
            // Add the ORDER BY clause to sort the results by user_id in descending order, and filter by the 'user' role
            $query .= " AND role = 'admin' ORDER BY user_id DESC";
        }

        // Execute query
        $result = mysqli_query($conn, $query);
    
        // Display data
        if ($result->num_rows > 0) {
            echo '
                <table class="yot-table-blue-theme">
                <tr>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Date and Time</th>
                    <th>Action</th>
                </tr>
            ';
                
            while ($row = $result->fetch_assoc()) {
                echo '
                <tr>
                    <td>'. $row["email"] .'</td>
                    <td>'. $classHidePassword->getHidePassword($row["password"]) .'</td>
                    <td>'. $row["created_at_varchar"] .'</td>
                    <td class="yot-flex">
                        <i class="fa-solid fa-trash yot-text-fs-xxl yot-mlr-8 yot-active-bbh1 deleteIcon" data-id="'. $row["user_id"].'"></i>
                        <i class="fa-solid fa-file-pen yot-text-fs-xxl yot-active-bbh1 editIcon" data-id="'. $row["user_id"] .'"></i>
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
    
}
?>
