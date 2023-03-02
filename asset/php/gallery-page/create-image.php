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

            $image = $_FILES['profileImage'];

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
                        $imageDestination = '../../public-image/'.$imageNameNew;
                        move_classUploaded_file($imageTemp, $imageDestination);
                        // $this->saveToDatabase($caption, $imageDestination);
                        $query_insert = mysqli_query($classConnDB->conn(),"INSERT INTO posts_tbl (user_id, content, image, is_profile, created_at_var, created_at) VALUES ('$id', '$caption', '$imageNameNew', '1', '$dateTimeVarChar', NOW())");
                        if($query_insert){
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