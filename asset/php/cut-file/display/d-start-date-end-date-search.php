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
            $conn = $classConnDB->conn();
    
            // Create query
            $query = "SELECT * FROM cut_file_tbl";
            $queryParams = array();
    
            if (!empty($this->search)) {
                $search = $this->search;
                $queryParams[] = "job_name LIKE '%$search%' OR job_no LIKE '%$search%'";
            }
    
            if ($this->startDate !== "undefined--undefined") {
                $startDate = $this->startDate;
                $queryParams[] = "DATE(create_at) >= '$startDate'";
            }
    
            if ($this->endDate !== "undefined--undefined") {
                $endDate = $this->endDate;
                $queryParams[] = "DATE(create_at) <= '$endDate'";
            }
    
            if (!empty($queryParams)) {
                $query .= " WHERE " . implode(" AND ", $queryParams);
            }

            // Add the ORDER BY clause to sort the results by date and time in descending order
            $query .= " ORDER BY cut_file_id DESC";
    
            // Execute query
            $result = mysqli_query($conn, $query);

            // Display data
            if ($result->num_rows > 0) {
                echo '<table class="yot-table-blue-theme"><tr><th>Job Name</th><th>Job No.</th><th>Date and Time</th><th>Action</th></tr>';
    
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                              <td>'. $row["job_name"] .'</td>
                              <td>'. $row["job_no"] .'</td>
                              <td>'. $row["create_at_varchar"] .'</td>
                              <td class="yot-flex">
                                  <i class="fa-solid fa-trash yot-text-fs-xxl yot-mlr-8 yot-active-bbh1 deleteIcon" data-id="'. $row["cut_file_id"] .'"></i>
                                  <i class="fa-solid fa-file-pen yot-text-fs-xxl yot-active-bbh1 editIcon" data-id="'. $row["cut_file_id"] .'"></i>
                              </td>
                          </tr>';
                }
    
                echo '</table>';
            } else {
                echo "No results found.";
            }
        }
    }
?>