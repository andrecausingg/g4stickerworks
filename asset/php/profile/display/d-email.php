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
                    <form id="updateFormEmail">
                        <!-- Email error -->
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <label class="yot-text-fs-xl" style="font-weight: bolder;" for="emailProfile">Email</label>
                            <!-- Error Email-->
                            <div class="yot-text-end">
                                <span class="yot-tc-red yot-text-end" id="validateEmailErrProfile" style="display: none;">Invalid email.<br></span> 
                                <span class="yot-tc-red yot-text-end" id="domainEmailErrProfile" style="display: none;">Email is not from a trusted domain.<br>Allowed only are "gmail.com", "yahoo.com", "outlook.com", "aol.com", "triots.com"<br></span> 
                                <span class="yot-tc-red yot-text-end" id="existEmailErrProfile" style="display: none;">Email is already exist.<br></span>
                            </div>
                        </div>
        
                        <!-- Email -->
                        <div class="yot-form-group yot-form-group-container">
                            <input class="yot-form-input" type="email" name="emailProfile" id="emailProfile" style="padding-left:38px;" value="'.$row["email"].'">
                            <i class="fa-solid fa-envelope yot-form-group-icon-left yot-text-fs-xxl"></i>
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