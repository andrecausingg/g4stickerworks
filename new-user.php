<?php
    require_once("./asset/php/helper/global/global.php");
    $classSessionLogin = new classSessionLogin();
    $classSessionLogin->sessionLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./asset/images/g4works-favicon-16x16.png">

    <!-- Css -->
    <link rel="stylesheet" href="./asset/scss/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3967252a9e.js" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>

    <div class="yot-overlay-mid-container">
        <!-- Create Form Container -->
        <div class="yot-form-container">
            <!-- Profile -->
            <div class="yot-mb-8">
                <h2 class="yot-tc-blue1">You're One step away and good to go.</h2>
            </div>
            
            <form id="createFormNewUser">

                <!-- First Name -->
                <div class="yot-form-group">
                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                        <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="firstName">First Name</label>
                        <!-- Error First Name-->
                        <div class="yot-text-end">
                            <span class="yot-tc-red yot-text-end" id="firstNameErr" style="display: none;">Invalid first name.<br></span> 
                        </div>
                    </div>

                    <input class="yot-form-input" type="text" name="firstName" id="firstName">
                </div>

                <!-- Last Name -->
                <div class="yot-form-group">
                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                        <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="lastName">Last Name</label>
                        <!-- Error Last Name-->
                        <div class="yot-text-end">
                            <span class="yot-tc-red yot-text-end" id="lastNameErr" style="display: none;">Invalid last name.<br></span> 
                        </div>
                    </div>
                    <input class="yot-form-input" type="text" name="lastName" id="lastName">
                </div>

                <!-- Phone Number -->
                <div class="yot-form-group">
                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                        <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="phoneNumber">Phone Number</label>
                        <!-- Error Phone Number-->
                        <div class="yot-text-end">
                            <span class="yot-tc-red yot-text-end" id="phoneNumErr" style="display: none;">Invalid phone number.<br></span> 
                        </div>
                    </div>
                    <input class="yot-form-input" type="text" name="phoneNumber" id="phoneNumber" maxlength="11">
                </div>

                <div class="yot-text-center">
                    <input class="yot-btn-blue1" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <script src="./asset/js/new-user/new-user.js"></script>
</body>
</html>