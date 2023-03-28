<?php
    if((isset($_POST["email"])) && (isset($_POST["password"]))){
        $email = sanitize($_POST['email']);
        $password = sanitize($_POST['password']);

        $classInsertAdminAccounts = new classInsertAdminAccounts($email,$password);
        $classInsertAdminAccounts->insert();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classInsertAdminAccounts{
        // Properties
        private $email;
        private $password;

        // Method
        public function __construct($email, $password){
            $this->email = $email;
            $this->password = $password;
        }

        public function insert(){
            // File Path
            require_once "../helper/global/global.php";
        
            // Class
            $classConnDB = new classConnDB();
            $classDateTime = new classDateTime();
        
            // Variable
            $conn = $classConnDB->conn();
            $dateTimeVarChar = $classDateTime->getDateTime();
            $role = "admin";
            $status = "activated";
        
            // Prepare a statement to prevent mysqli injection
            $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
            // Bind the email parameter to the statement
            $stmt->bind_param("s", $this->email);
            // Execute the statement
            $stmt->execute();
            // Store the result set
            $result = $stmt->get_result();
            
            // Check if the email already exists
            if ($result->num_rows > 0) {
                echo "emailExist";
            }else{
                // prepare the SQL statement with placeholders for the email, password, datetime varchar, and datetime
                $sql = "INSERT INTO user_tbl (email, password, status, role, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
                // create a prepared statement
                $stmt = $conn->prepare($sql);
                // bind the parameters to the placeholders
                $stmt->bind_param("sssss", $this->email, $this->password, $status, $role, $dateTimeVarChar);
                // execute the statement
                if($stmt->execute()){
                    // close the prepared statement and database connection
                    $stmt->close();
                    $conn->close();
                    echo "inserted";
                }
            }
        }
    }
?>