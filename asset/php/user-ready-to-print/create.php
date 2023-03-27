<?php



class classUpload {
    public function handle() {
        // File Path
        require_once "../helper/global/global.php";

        // Class
        $classConnDB = new classConnDB();
        $classDateTime = new classDateTime();

        // Variable
        $conn = $classConnDB->conn();
        $dateTimeVarChar = $classDateTime->getDateTime();

        // Get form data
        $width = $_POST['width'];
        $height = $_POST['height'];
        $quantity = $_POST['quantity'];
        $imageData = $_POST['imageData'];

        // Decode base64 image data
        $imageData = str_replace('data:image/png;base64,', '', $imageData);
        $imageData = str_replace(' ', '+', $imageData);
        $decodedImageData = base64_decode($imageData);

        // Generate unique image name
        $imageNameNew = uniqid('', true).'.png';
        $imageDestination = '../../images/'.$imageNameNew;
        file_put_contents($imageDestination, $decodedImageData);

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO ready_to_print_tbl (width, height, quantity, image, created_at_varchar, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("iiiss", $width, $height, $quantity, $imageNameNew, $dateTimeVarChar);
        if($stmt->execute()){
            if($stmt->affected_rows > 0){
                $stmt->close();
                $conn->close();
                return "created";
            }
        } else {
            return "errorUploadingData";
        }
    }
}

?>