<?php
    require_once("./asset/php/helper/global/global.php");
    $classSessionEmailSignup = new classSessionEmailSignup();
    $classSessionEmailSignup->sessionEmailSignup();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>

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
                <h2 class="yot-tc-blue1">Please verify your email address by entering the code we sent to you.</h2>
            </div>

            <!-- Password and Confirm Password Error -->
            <div class="yot-text-center yot-mtb-16">
                <span class="yot-tc-red yot-text-end yot-text-fs-l" id="verificationCodeErr" style="display: none;">The verification code is Incorrect!<br></span> 
                <span class="yot-tc-green yot-text-end yot-text-fs-l" id="resendCodeAlert" style="display: none;">Resend Code After <span id="count">30</span>sec<br></span> 
            </div>

            <div class="yot-mb-4 yot-flex yot-flex-ai-c-jc-sb">
                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="verificationCode">Verification Code</label>
                <button id="resendCode" class="yot-btn-blue1">Resend Code</button>
            </div>
            
            <form id="emailVerificationForm">
                <div class="yot-form-group">
                    <input class="yot-form-input" type="text" name="verificationCode" id="verificationCode" maxlength="6">
                </div>

                <!-- Submit -->
                <div class="yot-text-center" id="submitEmailVerContainer">
                    <input class="yot-btn-blue1" type="submit" value="Sign Up">
                </div>
            </form>

            <!-- Disable btn -->
            <div class="yot-flex yot-flex-fd-c-ai-c" id="submitDisEmailVerContainer" style="display: none;">
                <button class="yot-btn-dis yot-flex yot-flex-ai-c">Signing Up <span class="yot-mlr-4"></span> <div class="yot-loader-blue1"></div></button>
            </div>
        </div>
    </div>

    <script src="./asset/js/email-verification/email-verification.js"></script>
</body>
</html>