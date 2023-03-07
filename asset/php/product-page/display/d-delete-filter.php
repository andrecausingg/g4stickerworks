<?php
    if(isset($_POST["decal"]) || isset($_POST["brand"]) || isset($_POST["model"])){
        $decalSelectFilter = sanitize($_POST["decal"]);
        $brandSelectFilter = sanitize($_POST["brand"]);
        $modelSelectFilter = sanitize($_POST["model"]);

        $classFilter = new classFilter($decalSelectFilter, $brandSelectFilter, $modelSelectFilter);
        $classFilter->getFilter();
    }
    
    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classFilter{
        private $decalSelectFilter;
        private $brandSelectFilter;
        private $modelSelectFilter;
    
        public function __construct($decalSelectFilter, $brandSelectFilter, $modelSelectFilter){
            $this->decalSelectFilter = $decalSelectFilter;
            $this->brandSelectFilter = $brandSelectFilter;
            $this->modelSelectFilter = $modelSelectFilter;
        }
    
        public function getFilter(){
            // Require Global File
            require_once "../../helper/global/global.php";
    
            // Connect to database
            $classConnDB = new ClassConnDB();
            $conn = $classConnDB->conn();

            // Create query
            $query = "SELECT * FROM decals_tbl";
            $queryParams = array();

            // Check if decalSelectFilter is not empty and add the filter to the query
            if (!empty($this->decalSelectFilter)) {
                $decalSelectFilter = $this->decalSelectFilter;
                $queryParams[] = "decals_type LIKE '%$decalSelectFilter%'";
            }

            // Check if brandSelectFilter is not empty and add the filter to the query
            if (!empty($this->brandSelectFilter)) {
                $brandSelectFilter = $this->brandSelectFilter;
                $queryParams[] = "brand LIKE '%$brandSelectFilter%'";
            }

            // Check if modelSelectFilter is not empty and add the filter to the query
            if (!empty($this->modelSelectFilter)) {
                $modelSelectFilter = $this->modelSelectFilter;
                $queryParams[] = "model LIKE '%$modelSelectFilter%'";
            }

            // Check if any filters were added and execute the query
            if (!empty($queryParams)) {
                // Add WHERE clause to the query if any filters were added
                $query .= " WHERE " . implode(" AND ", $queryParams);

                // Add the ORDER BY clause to sort the results by date and time in descending order
                $query .= " ORDER BY decals_id DESC";

                // Execute the query here
            }

            // Execute query
            $result = mysqli_query($conn, $query);

            // Display data
            if ($result->num_rows > 0) {
                echo '                
                    <table class="yot-table-blue-theme">
                    <tr>
                        <th>Image</th>
                        <th>Type of Decals</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Date and Time</th>
                        <th>Action</th>
                    </tr>
                ';
    
                while ($row = $result->fetch_assoc()) {
                    echo '
                        <tr>
                            <td class="pp-table-images yot-flex yot-flex-fd-c-ai-c">
                                <img src="../../../../../g4stickerworks/asset/images/all-products/'.$row["image"].'" alt="">
                            </td>
                            <td>'.htmlspecialchars($row["decals_type"]).'</td>
                            <td>'.htmlspecialchars($row["brand"]).'</td>
                            <td>'.htmlspecialchars($row["model"]).'</td>
                            <td>'.htmlspecialchars($row["created_at_varchar"]).'</td>
                            <td><button class="yot-btn-blue1 deleteIconDecals" data-id="'. htmlspecialchars($row["decals_id"]).'">Delete</button></td>
                        </tr>
                    ';
                }
    
                echo '</table>';
            } else {
                echo '<div class="yot-flex yot-flex-fd-c-ai-c">
                    <h1>No Result Found</h1>
                    <img src="../../../../../g4stickerworks/asset/images/undraw_empty_re_opql.svg" alt="" style="width:300px; height:300px">
                </div>';
            }
        }
    }
?>