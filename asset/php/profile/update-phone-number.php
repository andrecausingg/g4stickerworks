<?php
    if(isset($_POST["phoneNumber"])){
        $phoneNumber = sanitizee($_POST["phoneNumber"]);

        $classPhoneNumber = new classPhoneNumber($phoneNumber);
        $classPhoneNumber->update();
    }

    // Sanitize Input
    function sanitizee($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classPhoneNumber{
        private $phoneNumber;

        public function __construct($phoneNumber){
            $this->phoneNumber = $phoneNumber;
        }

        function update(){
            require_once "../helper/global/global.php";
        
            $conn = (new classConnDB())->conn();
            $id = (new classSessionUserID())->sessionUserID();

            // Prepare the query
            $stmt = $conn->prepare("UPDATE user_tbl SET phone_number=? WHERE user_id=?");
            // Bind the parameters
            $stmt->bind_param("ii", $this->phoneNumber, $id);
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
