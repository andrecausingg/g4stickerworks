<?php
    if(isset($_POST["emailProfile"])){
        $email = sanitizee($_POST["emailProfile"]);

        $classEmail = new classEmail($email);
        $classEmail->update();
    }

    // Sanitize Input
    function sanitizee($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classEmail{
        private $email;

        public function __construct($email){
            $this->email = $email;
        }

        function update(){
            require_once "../helper/global/global.php";
        
            $conn = (new classConnDB())->conn();
            $id = (new classSessionUserID())->sessionUserID();

            // Prepare the query
            $stmt = $conn->prepare("UPDATE user_tbl SET email=? WHERE user_id=?");
            // Bind the parameters
            $stmt->bind_param("si", $this->email, $id);
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
