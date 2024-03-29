<?php
    if(isset($_POST["firstName"]) && isset($_POST["lastName"])){
        $firstName = sanitizee($_POST["firstName"]);
        $lastName = sanitizee($_POST["lastName"]);

        $classFNameAndLastName = new classFNameAndLastName($firstName, $lastName);
        $classFNameAndLastName->update();
    }

    // Sanitize Input
    function sanitizee($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classFNameAndLastName{
        private $firstName;
        private $lastName;

        public function __construct($firstName, $lastName){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        function update(){
            require_once "../helper/global/global.php";
        
            $conn = (new classConnDB())->conn();
            $id = (new classSessionUserID())->sessionUserID();

            // Prepare the query
            $stmt = $conn->prepare("UPDATE user_tbl SET first_name=?, last_name=? WHERE user_id=?");
            // Bind the parameters
            $stmt->bind_param("ssi", $this->firstName, $this->lastName, $id);
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
