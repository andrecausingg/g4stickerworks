<?php
if(isset($_POST["email"]) && isset($_POST["verificationCode"])){
    $email = sanitize($_POST["email"]);
    $verificationCode = sanitize($_POST["verificationCode"]);

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
        $sixDigitCode = (new classSixDigitCode())->sixDigitCodeF();

        $activated = "activated";

        $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
        $stmt->bind_param("s", $this->email);
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
                    $stmt2->bind_param("sss", $activated, $sixDigitCode, $this->email);

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
