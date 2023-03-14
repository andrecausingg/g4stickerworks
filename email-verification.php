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

    <div class="yot-overlay-mid-container">
            <!-- Create Form Container -->
            <div class="yot-form-container">
                <!-- Profile -->
                <div class="yot-mb-8">
                    <h1 class="yot-tc-blue1">Welcome User</h1>
                    <h2 class="yot-tc-blue1">You're One step away and good to go.</h2>
                </div>

                <!-- Password and Confirm Password Error -->
                <div class="yot-text-center yot-mtb-16">
                    <span class="yot-tc-red yot-text-end yot-text-fs-l" id="" style="display: none;">The verification code is Incorrect!<br></span> 
                </div>
                
                <form id="emailVerificationForm">
                    <!-- First Name -->
                    <div class="yot-form-group">
                        <div class="yot-mb-4 yot-flex yot-flex-ai-c-jc-sb">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="verificationCode">Verification Code</label>
                            <button class="yot-btn-blue1">Resend Code</button>
                        </div>
                        <input class="yot-form-input" type="text" name="" id="" maxlength="6">
                    </div>

                    <div class="yot-text-center">
                        <input class="yot-btn-blue1" type="submit" value="Submit">
                    </div>
                </form>
            </div>
    </div>
    <script src="./asset/js/all/global.js"></script>

</body>
</html>