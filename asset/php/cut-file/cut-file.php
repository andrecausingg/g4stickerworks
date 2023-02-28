<?php
    if((isset($_POST["jobName"])) && (isset($_POST["jobNum"]))){
        $jobName = sanitize($_POST['jobName']);
        $jobNum = sanitize($_POST['jobNum']);

        $classCutFile = new classCutFile($jobName,$jobNum);
        $classCutFile->insert();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classCutFile{
        // Properties
        private $jobName;
        private $jobNum;

        // Method
        public function __construct($jobName, $jobNum){
            $this->jobName = $jobName;
            $this->jobNum = $jobNum;
        }

        public function insert(){
            // File Path
            require_once "../helper/global/global.php";

            // Class
            $classConnDB = new classConnDB();
            $classDateTime = new classDateTime();
            $classDefaultDateTime = new classDefaultDateTime();

            // Variable
            $conn = $classConnDB->conn();
            $dateTimeVarChar = $classDateTime->getDateTime();

            // prepare the SQL statement with placeholders for the job name, job number, datetime varchar, and datetime
            $sql = "INSERT INTO cut_file_tbl (job_name, job_no, date_time_varchar, date_time) VALUES (?, ?, ?, NOW())";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("sis", $this->jobName, $this->jobNum, $dateTimeVarChar);
            // execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "insert";
            }

        }
    }
?>