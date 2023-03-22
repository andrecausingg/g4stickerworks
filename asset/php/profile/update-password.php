<?php
    if(isset($_POST["password"])){
        $password = sanitizee($_POST["password"]);

        $classPassword = new classPassword($password);
        $classPassword->update();
    }

    // Sanitize Input
    function sanitizee($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classPassword{
        private $password;

        public function __construct($password){
            $this->password = $password;
        }

        function update(){
            require_once "../helper/global/global.php";
        
            $conn = (new classConnDB())->conn();
            $id = (new classSessionUserID())->sessionUserID();

            // Prepare the query
            $stmt = $conn->prepare("UPDATE user_tbl SET password=? WHERE user_id=?");
            // Bind the parameters
            $stmt->bind_param("si", $this->password, $id);
            // Execute the query
            if($stmt->execute()){
                echo"updated";
                // Close the statement and database connection
                $stmt->close();
                $conn->close();
            }
        }
    }
?>
