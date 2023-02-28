<?php
    if((isset($_POST["id"])) && (isset($_POST["jobNameEdit"])) && (isset($_POST["jobNumEdit"]))){

        $id = sanitize($_POST['id']);
        $jobNameEdit = sanitize($_POST['jobNameEdit']);
        $jobNumEdit = sanitize($_POST['jobNumEdit']);

        $classDisplayCutFileEditContainer = new classDisplayCutFileEditContainer($id, $jobNameEdit, $jobNumEdit);
        $classDisplayCutFileEditContainer->setEditContainer();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classDisplayCutFileEditContainer{
        private $id;
        private $jobNameEdit;
        private $jobNumEdit;

        public function __construct($id, $jobNameEdit, $jobNumEdit){
            $this->id = $id;
            $this->jobNameEdit = $jobNameEdit;
            $this->jobNumEdit = $jobNumEdit;
        }

        public function setEditContainer(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            // Variable
            $conn = $classConnDB->conn();

            // prepare the SQL statement with placeholders for the job name, job number, datetime varchar, and datetime
            $sql = "UPDATE cut_file_tbl SET job_name = ?, job_no = ? WHERE cut_file_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("sii", $this->jobNameEdit, $this->jobNumEdit, $this->id);

            // Execute the statement
            if($stmt->execute()){
                // close the prepared statement and database connection
                $stmt->close();
                $conn->close();
                echo "edited";
            }
        }
    }
?>