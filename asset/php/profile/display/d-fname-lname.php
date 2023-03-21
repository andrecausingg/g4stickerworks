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
                    <form id="updateFormProfile">
                        <div class="yot-form-group">
                            <label class="yot-text-fs-xl" style="font-weight: bolder;" for="firstName">First Name</label>
                            <!-- Error First Name-->
                            <div class="yot-text-end">
                                <span class="yot-tc-red yot-text-end" id="firstNameErr" style="display: none;">Invalid first name.<br></span> 
                            </div>
                            <input class="yot-form-input" type="text" name="firstName" id="firstName" value="'.$row["first_name"].'">
                        </div>

                        <div class="yot-form-group">
                            <label class="yot-text-fs-xl" style="font-weight: bolder;" for="lName">Last Name</label>
                            <!-- Error Last Name-->
                            <div class="yot-text-end">
                                <span class="yot-tc-red yot-text-end" id="lastNameErr" style="display: none;">Invalid last name.<br></span> 
                            </div>
                            <input class="yot-form-input" type="text" name="lastName" id="lastName" value="'.$row["last_name"].'">
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