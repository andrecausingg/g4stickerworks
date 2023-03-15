<?php
    if(isset($_POST["email"])){
        $email = sanitize($_POST["email"]);

        $classSignUp = new classSignUp($email);
        $classSignUp->create();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Start of Class
    class classSignUp{
        protected $email;

        // METHODS
        // Set the all the data
        function __construct($email){
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }

        function create(){
            require_once "../helper/global/global.php";
        
            $conn = (new classConnDB())->conn();
            $sixDigitCode = (new classSixDigitCode())->sixDigitCodeF();
        
            $stmt = $conn->prepare("SELECT status FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if($row["status"] == 'activated') {
                        echo "emailExist";
                    }else{
                        // prepare the SQL statement with placeholders
                        $sql = "UPDATE user_tbl SET activate_code = ? WHERE email = ?";
                        // create a prepared statement
                        $stmt = $conn->prepare($sql);
                        // bind the parameters to the placeholders
                        $stmt->bind_param("is", $sixDigitCode, $this->email);
                        // Execute the statement
                        if($stmt->execute()){
                            // close the prepared statement and database connection
                            if($stmt->close() && $conn->close()){
                                echo"sendingCode";
                            }
                        }
                    }
                }
            }
        }
    } // End of Class
?>