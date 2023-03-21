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
                    <form id="updateFormPhoneNumber">
                        <!-- Phone Number -->
                        <div class="yot-form-group">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="phoneNumber">Phone Number</label>
                                <!-- Error Phone Number-->
                                <div class="yot-text-end">
                                    <span class="yot-tc-red yot-text-end" id="phoneNumErr" style="display: none;">Invalid phone number.<br></span> 
                                </div>
                            </div>
                            <input class="yot-form-input" type="text" name="phoneNumber" id="phoneNumber" maxlength="11" value="'.$row["phone_number"].'">
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