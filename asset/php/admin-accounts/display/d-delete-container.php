<?php
    if((isset($_POST["id"]))){
        $id = sanitize($_POST['id']);

        $classDisplayContainerDelete = new classDisplayContainerDelete();

        $classDisplayContainerDelete->setId($id);
        $classDisplayContainerDelete->getContainerDelete();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classDisplayContainerDelete{
        private $id;

        public function setId($id){
            $this->id = $id;
        }

        public function getContainerDelete(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            // DISPLAY
            $fetch_data = mysqli_query($classConnDB->conn(), "SELECT * FROM user_tbl WHERE user_id = '$this->id'");
            while($row = mysqli_fetch_assoc($fetch_data)){

                echo'
                    <!-- Delete Container -->
                    <div id="deleteBgContainer" class=" yot-overlay-bg-trans yot-bg-black1"></div>
                    <div id="deleteFormContainer" class=" yot-overlay-mid-container">
                        <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form yot-text-center">
                            <h1 class="yot-tc-red">Are you sure you want to delete?</h1>
            
                            <div class="yot-flex yot-flex-fd-c-ai-c yot-bg-white yot-pa-8 yot-ma-8">
                                <input type="hidden" name="id" id="id" value="'.$row["user_id"].'">
                                <h4>'. $row["email"] .'</h4>
                                <h4>'. $row["created_at_varchar"] .'</h4>
                            </div>
            
                            <div class="yot-mt-16">
                                <button id="cancelDelete" class="yot-btn-blue1">Cancel</button>
                                <button id="confirmDelete" class="yot-btn-blue1">Confirm</button>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
    }
?>