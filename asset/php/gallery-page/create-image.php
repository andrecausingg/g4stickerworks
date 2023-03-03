<?php
    $classUpload = new classUpload();
    echo $classUpload->handle();

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
    
            $image = $_FILES['imageGallery'];
    
            if(!isset($image)){
                echo 'putimagefirst';
                // return json_encode(['status' => 'error', 'message' => 'All fields are required']);
            }
    
            $imageName = $image['name'];
            $imageSize = $image['size'];
            $imageTemp = $image['tmp_name'];
            $imageError = $image['error'];
            $imageType = $image['type'];
            $imageExt = explode('.', $imageName);
            $imageActualExt = strtolower(end($imageExt));
            $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
            if(in_array($imageActualExt, $allowed)){
                if($imageError === 0){
                    if($imageSize < 5000000){
                        $imageNameNew = uniqid('', true).".".$imageActualExt;
                        $imageDestination = '/asset/images/gallery/'.$imageNameNew;
                        move_uploaded_file($imageTemp, $imageDestination);
    
                        // Use prepared statement to prevent SQL injection
                        $stmt = $conn->prepare("INSERT INTO gallery_page_tbl (image, created_at_var, created_at) VALUES (?, ?, NOW())");
                        $stmt->bind_param("ss", $imageNameNew, $dateTimeVarChar);
                        if($stmt->execute()){
                            $stmt->close();
                            $conn->close();
                            echo "created";
                        }
    
                        if($stmt->affected_rows > 0){
                            echo 'ImageclassUploadedsuccessfully';
                            // return json_encode(['status' => 'success', 'message' => 'Image classUploaded successfully']);
                        }
                    } else {
                        echo 'Imagetoolarge';
                        // return json_encode(['status' => 'error', 'message' => 'Image too large']);
                    }
                } else {
                    echo 'ErrorclassUploadingimage';
                    // return json_encode(['status' => 'error', 'message' => 'Error classUploading image']);
                }
            } else {
                echo 'Invalidfiletype';
                // return json_encode(['status' => 'error', 'message' => 'Invalid file type']);
            }
        }
    }
    
?>