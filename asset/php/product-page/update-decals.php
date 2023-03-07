<?php
if(isset($_POST["id"])) {
    $id = sanitize($_POST["id"]);

    $classUpload = new classUpload();
    $classUpload->setId($id);
    echo $classUpload->handle();
}

// Sanitize Input
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

class classUpload {
    private $id;

    public function setId($id){
        $this->id = $id;
    }

    public function handle() {
        // File Path
        require_once "../helper/global/global.php";
    
        // Class
        $classConnDB = new classConnDB();
        $classDateTime = new classDateTime();

        // Variable
        $conn = $classConnDB->conn();

        $image = $_FILES['file'];

        if(!isset($image)){
            echo 'putimagefirst';
        }

        $imageName = $image['name'];
        $imageSize = $image['size'];
        $imageTemp = $image['tmp_name'];
        $imageError = $image['error'];
        $imageType = $image['type'];
        $imageExt = explode('.', $imageName);
        $imageActualExt = strtolower(end($imageExt));
        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($imageActualExt, $allowed)){
            if($imageError === 0){
                if($imageSize < 50000000){
                    $imageNameNew = uniqid('', true).".".$imageActualExt;
                    $imageDestination = '../../images/all-products/'.$imageNameNew;
                    move_uploaded_file($imageTemp, $imageDestination);

                    // Use prepared statement to prevent SQL injection
                    $stmt = $conn->prepare("UPDATE decals_tbl SET image = ? WHERE decals_id = ?");
                    $stmt->bind_param("si", $imageNameNew, $this->id);
                    if($stmt->execute()){
                        if($stmt->affected_rows > 0){
                            $stmt->close();
                            $conn->close();
                            echo "updated";
                        }
                    }
                } else {
                    echo 'imagetoolarge';
                }
            } else {
                echo 'errorUploadingimage';
            }
        } else {
            echo 'invalidfiletype';
        }
    }
}

?>