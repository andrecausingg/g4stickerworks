<?php
    if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["phoneNumber"])){
        $firstName = sanitize($_POST["firstName"]);
        $lastName = sanitize($_POST["lastName"]);
        $phoneNumber = sanitize($_POST["phoneNumber"]);

        $classNewUser = new classNewUser($firstName, $lastName, $phoneNumber);
        $classNewUser->update();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classNewUser{
        private $firstName;
        private $lastName;
        private $phoneNumber;

        public function construct($firstName, $lastName, $phoneNumber){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->phoneNumber = $phoneNumber;
        }


        function update(){
            require_once "../helper/global/global.php";
        
            $conn = (new classConnDB())->conn();
            $id = (new classSessionUserID())->sessionUserID();

            echo $id;

            // Prepare the query
            $stmt = $conn->prepare("UPDATE user_tbl SET first_name=?, last_name=?, phone_number=? WHERE user_id=?");
            // Bind the parameters
            $stmt->bind_param("ssii", $first_name, $last_name, $phone_number, $id);
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