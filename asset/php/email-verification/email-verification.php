<?php
    if(isset($_POST["email"]) && isset($_POST["verificationCode"])){
        $email = sanitize($_POST["email"]);
        $verificationCode = sanitize($_POST["verificationCode"]);

        echo $email;
        echo $verificationCode;

        $classEmailVerification = new classEmailVerification($email, $verificationCode);
        $classEmailVerification->create();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Start of Class
    class classEmailVerification{
        protected $email;
        protected $verificationCode;

        // METHODS
        // Set the all the data
        function __construct($email, $verificationCode){
            $this->email = $email;
            $this->verificationCode = $verificationCode;
        }

        function create(){
            require_once "../helper/global/global.php";

            $conn = (new classConnDB())->conn();
            
            $activated = "activated";

            $stmt = $conn->prepare("SELECT status FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if($row["activate_code"] != $this->verificationCode){
                        echo "wrongCode";
                    }else{
                        // prepare the SQL statement with placeholders for the job name, job number, datetime varchar, and datetime
                        $sql = "UPDATE user_tbl SET status = ?";
                        // create a prepared statement
                        $stmt = $conn->prepare($sql);
                        // bind the parameters to the placeholders
                        $stmt->bind_param("s", $activated);

                        // Execute the statement
                        if($stmt->execute()){
                            // close the prepared statement and database connection
                            $stmt->close();
                            $conn->close();
                            echo "verified";
                        }
                    }
                }
            }
        }
    } // End of Class
?>