<?php
    if(isset($_POST["vKey"]) && isset($_POST["password"])){
        $vKey = sanitize($_POST["vKey"]);
        $password = sanitize($_POST["password"]);

        $updatePassword = new updatePassword($vKey, $password);
        $updatePassword->update();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class updatePassword{
        protected $vKey;
        protected $password;

        public function __construct($vKey, $password){
            $this->vKey = $vKey;
            $this->password = $password;
        }

        function update(){
            require_once "../helper/global/global.php";
        
            $conn = (new classConnDB())->conn();
            $queryUrlRand = (new classQueryUrlRand())->queryUrlRand();
        
            $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE update_pass_key = ?");
            $stmt->bind_param("s", $this->vKey);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                // prepare the SQL statement with placeholders
                $sql = "UPDATE user_tbl SET update_pass_key = ?, password = ? WHERE update_pass_key = ?";
                // create a prepared statement
                $stmt1 = $conn->prepare($sql);
                // bind the parameters to the placeholders
                $stmt1->bind_param("sss", $queryUrlRand, $this->password, $this->vKey);
                // Execute the statement
                if($stmt1->execute()){
                    // close the prepared statement and database connection
                    if($stmt1->close() && $conn->close()){
                        echo "updated";
                    }
                }
            }
        }
    }
?>