<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>

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
    <!-- Verified Container -->
    <div id="successEmailVerifiedContainer" class="yot-overlay-mid-container yot-z-index-1" style="display:none;">
        <div class="yot-overlay-mid-child yot-pa-16 yot-overlay-mid-container-form yot-text-center">
            <h2>Congratulations, your email address has been verified successfully!</h2>
            <h4 class="yot-mb-8">You may now proceed to log in to your account.</h4>
            <div>
                <button class="yot-btn-blue1" id="loginNav">Log In</button>
            </div>
        </div>
    </div>

    <div class="yot-overlay-mid-container" id="emailVerificationFormContainer">
        <!-- Create Form Container -->
        <div class="yot-form-container">
            <!-- Profile -->
            <div class="yot-mb-8">
                <h2 class="yot-tc-blue1">Please enter your new password to update it in the form below.</h2>
            </div>

            <!-- Password and Confirm Password Error -->
            <div class="yot-text-center yot-mtb-16">
                <span class="yot-tc-red yot-text-end yot-text-fs-l" id="verificationCodeErr" style="display: none;">The verification code is Incorrect!<br></span> 
                <span class="yot-tc-green yot-text-end yot-text-fs-l" id="resendCodeAlert" style="display: none;">Resend Code After <span id="count">30</span>sec<br></span> 
            </div>

            <form id="updatePasswordForm">
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

                <!-- Submit -->
                <div class="yot-text-center" id="submitSignUpBtn">
                    <input class="yot-btn-blue1" type="submit" value="Submit">
                </div>
            </form>

            <!-- Disable btn -->
            <div class="yot-flex yot-flex-fd-c-ai-c" id="submitDisEmailVerContainer" style="display: none;">
                <button class="yot-btn-dis yot-flex yot-flex-ai-c">Signing Up <span class="yot-mlr-4"></span> <div class="yot-loader-blue1"></div></button>
            </div>
        </div>
    </div>

    <script src="./asset/js/update-password/update-password.js"></script>
</body>
</html>