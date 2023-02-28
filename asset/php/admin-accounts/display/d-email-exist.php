<?php
if (isset($_POST["email"])) {
    $email = sanitize($_POST['email']);

    $classAdminAccountsEmailExist = new classAdminAccountsEmailExist();
    $classAdminAccountsEmailExist->setEmail($email);
    $classAdminAccountsEmailExist->getErr();
}

// Sanitize Input
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

class classAdminAccountsEmailExist {
    // Properties
    private $email;

    // Method
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getErr() {
        // File Path
        require_once "../../helper/global/global.php";

        // Class
        $classConnDB = new classConnDB();
        $classDateTime = new classDateTime();

        // Variable
        $conn = $classConnDB->conn();

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
        }
    }
}
?>
