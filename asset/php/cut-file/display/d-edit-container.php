<?php
    if((isset($_POST["id"]))){
        $id = sanitize($_POST['id']);

        $classDisplayContainerCutFileEdit = new classDisplayContainerCutFileEdit();

        $classDisplayContainerCutFileEdit->setId($id);
        $classDisplayContainerCutFileEdit->getContainerEdit();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classDisplayContainerCutFileEdit{
        private $id;

        public function setId($id){
            $this->id = $id;
        }

        public function getContainerEdit(){
            // File Path
            require_once "../../helper/global/global.php"; 

            // Class
            $classConnDB = new classConnDB();

            // DISPLAY
            $fetch_data = mysqli_query($classConnDB->conn(), "SELECT * FROM cut_file_tbl WHERE cut_file_id = '$this->id'");
            while($row = mysqli_fetch_assoc($fetch_data)){

                echo'
                    <div id="bgEditContainer" class="yot-overlay-bg-trans yot-bg-black1"></div>
                    <div id="editFormContainerCutFile" class="yot-overlay-mid-container">
                        <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                            <form id="editFormCutFile">
                                <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                                    <h2 class="yot-tc-blue1">Update</h2>
                                    <i id="closeCutFileFormIconEdit" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                                    <input type="hidden" name="idEdit" id="idEdit" value="'.$row["cut_file_id"].'">
                                </div>
            
                                <!-- Job Name -->
                                <div class="yot-form-group">
                                    <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="jobName">Job Name</label>
                                    <input class="yot-form-input" type="text" name="jobNameEdit" id="jobNameEdit" value="'. $row["job_name"] .'">
                                </div>
            
                                <!-- Job No -->
                                <div class="yot-form-group">
                                    <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="jobNum">Job No.</label>
                                    <input class="yot-form-input" type="text" name="jobNumEdit" id="jobNumEdit" value="'. $row["job_no"].'">
                                </div>
            
                                <div class="yot-text-center">
                                    <input class="yot-btn-blue1" type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                ';
            }
        }
    }
?>