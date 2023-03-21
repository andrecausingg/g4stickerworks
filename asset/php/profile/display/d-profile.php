<?php
    $classProfile = new classProfile();
    $classProfile->getData();

    class classProfile{
        function getData(){
            require_once "../../helper/global/global.php";

            $conn = (new classConnDB())->conn();
            $id = (new classSessionUserID())->sessionUserID();
            $classHidePassword = new classHidePassword();

            $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE user_id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                echo'
                    <!-- Personal Informatio and Security Container -->
                    <div class="yot-img-circle-128 yot-mb-16 yot-flex yot-flex-jc-c">
                        <div class="yot-flex yot-flex-fd-c-ai-c">
                            <img src="./asset/images/profile-user.png" alt="">
                            <h1>'. ucfirst($row["first_name"]). " " . ucfirst($row["last_name"]). '</h1>
                        </div>
                    </div>

                    <!-- Title Personal Information-->
                    <div class="yot-text-center">
                        <h1 class="yot-mb-8 yot-tc-blue1">Personal Information</h1>
                    </div>

                    <!-- Name And Phone Number Container -->
                    <div class="yot-row"  style="padding: 0;">
                        <!-- Name -->
                        <div class="yot-bg-white yot-col-50 yot-ma-4" style="border-radius: 10px; padding:16px;">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <h3>Name</h3>
                                <i id="iconFNameAndLName" class="fa-solid fa-user yot-text-fs-xxl yot-active-bbh1"></i>
                            </div>
                            <h4>'. ucfirst($row["first_name"]). " " . ucfirst($row["last_name"]). '</h4>
                        </div>

                        <!-- Phone Number -->
                        <div class="yot-bg-white yot-col-50 yot-ma-4" style="border-radius: 10px; padding:16px;">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <h3>Phone Number</h3>
                                <i id="iconPhone" class="fa-solid fa-mobile yot-text-fs-xxl yot-active-bbh1"></i>
                            </div>
                            <h4>'.$row["phone_number"].'</h4>
                        </div>
                    </div>

                    <!-- Title Security -->
                    <div class="yot-text-center">
                        <h1 class="yot-mb-8 yot-tc-blue1">Security</h1>
                    </div>

                    <div class="yot-row"  style="padding: 0;">
                        <div class="yot-bg-white yot-col-50 yot-ma-4" style="border-radius: 10px; padding:16px;">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <h3>Email</h3>
                                <i id="iconEmail" class="fa-solid fa-envelope yot-text-fs-xxl yot-active-bbh1"></i>
                            </div>
                            <h4>'.$row["email"].'</h4>
                        </div>

                        <div class="yot-bg-white yot-col-50 yot-ma-4" style="border-radius: 10px; padding:16px;">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <h3>Password</h3>
                                <i id="iconPassword" class="fa-solid fa-key yot-text-fs-xxl yot-active-bbh1"></i>
                            </div>
                            <h4>'. $classHidePassword->getHidePassword($row["password"]) .'</h4>
                        </div>
                    </div>
                ';
            }
            
            // close the result set and database connection
            $result->close();
            $stmt->close();
            $conn->close();
        }
    }
?>