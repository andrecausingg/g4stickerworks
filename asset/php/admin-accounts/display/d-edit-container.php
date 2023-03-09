<?php
    if((isset($_POST["id"]))){
        $id = sanitize($_POST['id']);

        $classDisplayContainerEdit = new classDisplayContainerEdit();

        $classDisplayContainerEdit->setId($id);
        $classDisplayContainerEdit->getContainerEdit();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classDisplayContainerEdit{
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
            $fetch_data = mysqli_query($classConnDB->conn(), "SELECT * FROM user_tbl WHERE user_id = '$this->id'");
            while($row = mysqli_fetch_assoc($fetch_data)){

                echo'
                    <div id="editbgContainer" class="yot-overlay-bg-trans yot-bg-black1"></div>
                    <div id="editformContainer" class="yot-overlay-mid-container">
                        <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                            <form id="editFormAdminAccounts">
                                <input class="yot-form-input" type="hidden" name="idEdit" id="idEdit" value="'.$row["user_id"].'">
                                
                                <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                                    <h2 class="yot-tc-blue1">UPDATE</h2>
                                    <i id="editCloseFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                                </div>
            
                                <!-- Email -->
                                <div class="yot-form-group">
                                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                                        <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="email">Email</label>
                                        <div class="yot-flex yot-flex-fd-c-ai-e">
                                            <span id="emailExistErrEdit" class="emailExistErr yot-tc-red" style="display:none">Email Already Exist.</span>
                                            <span id="emailEmptyErrEdit" class="yot-tc-red" style="display:none">The email field is required.</span>
                                            <span id="emailInvalidErrEdit" class="yot-tc-red" style="display:none">Invalid email.</span>
                                            <span id="emailDomainEmailErrEdit" class="yot-tc-red yot-text-fs-xsm" style="display:none">The email is not from a trusted domain.</span>
                                        </div>
                                    </div>
                                    <input class="yot-form-input" type="text" name="emailEdit" id="emailEdit" value="'.$row["email"].'">
                                </div>
            
                                <!-- Label and Password Err New-->
                                <div class="yot-flex yot-flex-ai-c-jc-sb">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="password">New Password</label>
                                    <div class="yot-flex yot-flex-fd-c">
                                        <span id="passwordMin8ErrNewEdit" class="yot-tc-red yot-text-end" style="display:none">Password needs minimum 8 characters.</span>
                                        <span id="passwordEmptyErrNewEdit" class="yot-tc-red yot-text-end" style="display:none">The password field is required.</span>
                                    </div>
                                </div>

                                <!-- New Password -->
                                <div class="yot-form-group yot-form-group-container">
                                    <input class="yot-form-input" type="password" name="passwordNewEdit" id="passwordNewEdit" style="padding-left: 40px;padding-right: 40px;">
                                    <i class="fa-solid fa-lock yot-form-group-icon-left yot-text-fs-xxl"></i>
                                    <i class="fa-solid fa-eye-slash yot-form-group-icon-right yot-text-fs-xxl yot-active-icon yot-z-index-1" id="showPasswordNew"></i>
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