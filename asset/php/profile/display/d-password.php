<?php
    $classProfile = new classProfile();
    $classProfile->getData();

    class classProfile{
        function getData(){
            require_once "../../helper/global/global.php";

            $conn = (new classConnDB())->conn();
            $id = (new classSessionUserID())->sessionUserID();

            $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE user_id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                echo'
                    <form id="updateFormPassword">
                        <!-- Password and Confirm Password Error -->
                        <div class="yot-text-center yot-mtb-8">
                            <span class="yot-tc-red yot-text-end" id="passwordAndConfirmPasswordErr" style="display: none;">The password and confirm password not match!<br></span> 
                        </div>
        
                        <!-- Password Error -->
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <label class="yot-text-fs-xl" style="font-weight: bolder;" for="passwordUpdatePassword">New Password</label>
                            <!-- Error Password-->
                            <div class="yot-text-end">
                                <span class="yot-tc-red yot-text-end" id="less8CharPassErrUpdatePassword" style="display: none;">The password must be at least 8 characters long.<br></span> 
                            </div>
                        </div>
        
                        <!-- Password -->
                        <div class="yot-form-group yot-form-group-container">
                            <input class="yot-form-input" type="password" name="passwordUpdatePassword" id="passwordUpdatePassword" style="padding:14px 38px;">
                            <i class="fa-solid fa-lock yot-form-group-icon-left yot-text-fs-xxl"></i>
                            <i class="fa-solid fa-eye-slash yot-form-group-icon-right yot-text-fs-xxl yot-active-icon yot-z-index-1" id="showPasswordUpdatePassword"></i>
                        </div>
        
                        <!-- Confirm Password Err -->
                        <div class="yot-flex yot-flex-ai-c-jc-sb    ">
                            <label class="yot-text-fs-xl" style="font-weight: bolder;" for="confirmPasswordUpdatePassword">New Confirm Password</label>
                            <!-- Error Password-->
                            <div class="yot-text-end">
                                <span class="yot-tc-red yot-text-end" id="less8CharConfirmPassErrUpdatePassword" style="display: none;">The confirm password must be at least 8 characters long.<br></span> 
                            </div>
                        </div>
        
                        <!-- Confirm Password -->
                        <div class="yot-form-group yot-form-group-container">
                            <input class="yot-form-input" type="password" name="confirmPasswordUpdatePassword" id="confirmPasswordUpdatePassword" style="padding:14px 38px;">
                            <i class="fa-solid fa-lock yot-form-group-icon-left yot-text-fs-xxl"></i>
                            <i class="fa-solid fa-eye-slash yot-form-group-icon-right yot-text-fs-xxl yot-active-icon yot-z-index-1" id="showConfirmPasswordUpdatePassword"></i>
                        </div>

                        <div class="yot-text-center">
                            <input class="yot-btn-blue1" type="submit" value="Submit">
                        </div>
                    </form>
                ';
            }
            
            // close the result set and database connection
            $result->close();
            $stmt->close();
            $conn->close();
        }
    }
?>