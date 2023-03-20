<?php
    // Set the Verification Code
    if(isset($_POST["verificationCode"])){
        $verificationCode = $_POST["verificationCode"];

        $classEmailVerification = new classEmailVerification();
        $classEmailVerification->setVerificationCode($verificationCode);
        $classEmailVerification->create();
    }

    // Start of Class
    class classEmailVerification{
        protected $verificationCode;

        // METHODS
        // Set the all the data
        function setVerificationCode($verificationCode){
            $this->verificationCode = $verificationCode;
        }

        function create(){
            require_once "../helper/global/global.php";
            require_once "/xampp/htdocs/g4stickerworks/asset/php/index/signup.php";

            $conn = (new classConnDB())->conn();
            $sixDigitCode = (new classSixDigitCode())->sixDigitCodeF();
            $activated = "activated";

            if(isset($_SESSION["emailCheckExistSignUp"]) || isset($_SESSION["emailSignUp"])){
                $email = $_SESSION["emailCheckExistSignUp"] ?? $_SESSION["emailSignUp"] ?? null;
            }

            $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if($row["activate_code"] == $this->verificationCode){
                        // prepare the SQL statement with placeholders 
                        $sql = "UPDATE user_tbl SET status = ?, activate_code = ? WHERE email = ?";
                        // create a prepared statement
                        $stmt2 = $conn->prepare($sql);
                        // bind the parameters to the placeholders
                        $stmt2->bind_param("sss", $activated, $sixDigitCode, $email);

                        // Execute the statement
                        if($stmt2->execute()){
                            // close the prepared statement
                            $stmt2->close();
                            echo "verified";
                        } else {
                            echo "failed";
                            $stmt2->close();
                        }
                    } else {
                        echo "wrongCode";
                    }
                }
            }
            
            // close the result set and database connection
            $result->close();
            $stmt->close();
            $conn->close();
        }
    } // End of Class
?>
