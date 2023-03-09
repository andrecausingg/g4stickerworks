<?php
    if((isset($_POST["id"])) && (isset($_POST["email"])) && (isset($_POST["password"]))){

        $id = sanitize($_POST['id']);
        $email = sanitize($_POST['email']);
        $password = sanitize($_POST['password']);

        $classDisplayCutFileEditContainer = new classDisplayCutFileEditContainer($id, $email, $password);
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
        private $email;
        private $password;

        public function __construct($id, $email, $password){
            $this->id = $id;
            $this->email = $email;
            $this->password = $password;
        }

        public function setEditContainer(){
            // File Path
            require_once "../../../asset/php/helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            // Variable
            $conn = $classConnDB->conn();

            // prepare the SQL statement with placeholders 
            $sql = "UPDATE user_tbl SET email = ?, password = ? WHERE user_id = ?";
            // create a prepared statement
            $stmt = $conn->prepare($sql);
            // bind the parameters to the placeholders
            $stmt->bind_param("ssi", $this->email, $this->password, $this->id);

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