<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neydra</title>

    <!-- Css -->
    <link rel="stylesheet" href="./assets/scss/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3640b3ce59.js" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<body>
    <!-- Main Container -->
    <main class="yot-flex yot-flex-fd-c-ai-c-jc-c yot-container yot-vh-100">
        <!-- Main -->
        <div class="yot-row">
            <!-- Neydra Description -->
            <div class="yot-col-50">
                <h1 class="yot-resize-font-64">Connect, share, <br> and grow with <span class="yot-tc-orange">NEYDRA.</span></h1>
                <div>
                    <button id="loginBtn" class="yot-btn1 yot-btn-round">Log in</button>
                    <button id="signupBtn" class="yot-btn1 yot-btn-round">Sign up</button>
                </div>
            </div>
    
            <!-- Image -->
            <div class="yot-col-50">
                <img src="./assets/images/undraw/undraw_share_re_9kfx.svg" alt="Neydra Share" height="300">
            </div>
        </div>

        <!-- Login Parent Container -->
        <div class="yot-overlay-mid-container loginContainer" style="display: none;">
            <!-- Login Child Container -->
            <div class="yot-overlay-mid-child">
                <!-- Close Btn Container -->
                <div class="yot-text-end yot-mb-8">
                    <i class="fa-solid fa-circle-xmark yot-text-fs-xxl yot-active-icon closeBtn"></i>
                </div>

                <!-- Nav Btn -->
                <div class="yot-flex">
                    <button class="yot-btn1 yot-w-100 yot-mr-4 yot-active">Log in</button>
                    <button class="yot-btn1 yot-w-100 yot-ml-4 signUpBtnForm">Sign up</button>
                </div>
                
                <!-- Login Container -->
                <div>
                    <!-- Description Container -->
                    <div class="yot-mtb-8">
                        <h2>Log In to Your Account</h2>
                        <p>Welcome! Please enter your login credentials to access your account.</p>
                    </div>

                    <!-- Err Account Not Found -->
                    <div class="yot-bg-red yot-pa-16 errAccountNotFound yot-text-center" style="position: relative; display: none;">
                        <i class="fa-solid fa-circle-xmark yot-text-fs-xxl yot-active-icon closeBtnAccountNotFound" style="position: absolute; left: 50%; top:-10px; transform: translate(-50%, 0);"></i>
                        <span>Account Not Found.</span> <br>
                    </div>

                    <!-- Err Email or Password is Incorrect -->
                    <div class="yot-bg-red yot-pa-16 errEmailOrPassword yot-text-center" style="position: relative; display: none;">
                        <i class="fa-solid fa-circle-xmark yot-text-fs-xxl yot-active-icon closeBtnEmailOrPassword" style="position: absolute; left: 50%; top:-10px; transform: translate(-50%, 0);"></i>
                        <span>Email or Password is Incorrect.</span>
                    </div>
                    
                    <!-- Login Form  -->
                    <form id="formLogIn">
                        <!-- Email -->
                        <div class="yot-form-group yot-form-group-container">
                            <input class="yot-form-input-ls yot-form-group-input-text-l yot-tc-black loginEmail" type="text" name="loginEmail" id="loginEmail">
                            <i class="fa-solid fa-envelope yot-form-group-icon-left yot-text-fs-xxl"></i>
                        </div>

                        <!-- Password -->
                        <div class="yot-form-group yot-form-group-container">
                            <input class="yot-form-input-ls yot-form-group-input-text-lr logInPassword" type="password" name="logInPassword" id="logInPassword">
                            <i class="fa-solid fa-lock yot-form-group-icon-left yot-text-fs-xxl"></i>
                            <i class="fa-solid fa-eye yot-form-group-icon-right yot-text-fs-xxl yot-active-icon yot-z-index-1" id="show-password"></i>
                        </div>

                        <!-- Forgot Password -->
                        <a href="#" class="yot-tc-white">Forgot Password?</a>

                        <!-- Submit -->
                        <div class="yot-text-center">
                            <input class="yot-btn1 yot-btn-round" type="submit" value="Log In">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sign Up Parent Container -->
        <div class="yot-overlay-mid-container signUpContainer" style="display: none;">
            <!-- Sign Up Child Container -->
            <div class="yot-overlay-mid-child">
                <!-- Close Btn Container -->
                <div class="yot-text-end yot-mb-8">
                    <i class="fa-solid fa-circle-xmark yot-text-fs-xxl yot-active-icon closeBtn"></i>
                </div>

                <!-- Nav Btn -->
                <div class="yot-flex">
                    <button class="yot-btn1 yot-w-100 yot-mr-4 loginBtnForm">Log in</button>
                    <button class="yot-btn1 yot-w-100 yot-ml-4 yot-active">Sign up</button>
                </div>

                <!-- Description Container -->
                <div class="yot-mtb-8">
                    <h2>Create a New Account</h2>
                    <p>Create your account in just a few easy steps</p>
                </div>
                
                <!-- Sign Up Container -->
                <div style="height: 450px; overflow-y: auto;" class="yot-scrollbar">
                    <!-- Sign Up Form  -->
                    <form id="formSignUp">
                        <!-- Nick Name -->
                        <div class="yot-form-group yot-mb-16">
                            <label for="nickName" class="yot-text-center yot-mb-4 yot-text-fs-m">Nick Name</label>
                            <span class="yot-tc-red yot-text-end errSpecialCharNickName" style="display: none;">The NICK NAME cannot contain special characters or spaces.</span>
                            <span class="yot-tc-red yot-text-end errEmptyNickName" style="display: none;">The Nick Name field is required.</span>
                            <input class="yot-form-input-ls nickName" type="text" name="nickName" id="nickName">
                        </div>

                        <!-- Birth Day -->
                        <div class="yot-text-center">
                            <label for="birthDay" class="yot-text-center yot-mb-4 yot-text-fs-m">Birth Day</label> <br>
                        </div>
                        <div class="yot-text-end">
                            <span class="yot-tc-red yot-text-end errEmptyBirthMonth" style="display: none;">The Month field is required.<br></span> 
                            <span class="yot-tc-red yot-text-end errEmptyBirthDay" style="display: none;">The Day field is required.<br></span> 
                            <span class="yot-tc-red yot-text-end errEmptyBirthYear" style="display: none;">The Year field is required.<br></span> 
                            <span class="yot-tc-red yot-text-end err18Up" style="display: none;">You must be 18 years old or older to use this site.<br></span> 
                        </div>
                        <div class="yot-flex yot-mb-16">
                            <!-- Month -->
                            <select class="yot-form-input-ls birthMonth" name="month" id="month" style="padding: 16px;">
                                <option value="">- Month -</option>
                            </select>
                            <!-- Day -->
                            <select class="yot-form-input-ls yot-mlr-4 birthDay" name="day" id="day" style="padding: 8px;">
                                <option value="">- Day -</option>
                            </select>
                            <!-- Year -->
                            <select class="yot-form-input-ls birthYear" name="year" id="year" style="padding: 8px;">
                                <option value="">- Year -</option>
                            </select>
                        </div>

                        <!-- Gender Name -->
                        <div class="yot-form-group yot-mb-16">
                            <label for="nickName" class="yot-text-center yot-mb-4 yot-text-fs-m">Gender</label>
                            <span class="yot-tc-red yot-text-end errEmptyGender" style="display: none;">The Gender field is required.<br></span> 
                            <select class="yot-form-input-ls gender" name="gender" id="gender">
                                <option value="">- Select Gender -</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="She">She/Her/Hers</option>
                                <option value="He">He/Him/His</option>
                                <option value="They">They</option>
                            </select>
                        </div>

                        <div class="yot-ma-24" style="border: 2px solid white;"></div>

                        <!-- Email -->
                        <div class="yot-text-center">
                            <label for="email" class="yot-text-center yot-mb-4 yot-text-fs-m">Email</label>
                        </div>
                        <div class="yot-text-end">
                            <span class="yot-tc-red yot-text-end errDomainEmail" style="display: none;">Email is not from a trusted domain.<br></span> 
                            <span class="yot-tc-red yot-text-end errEmailExist" style="display: none;">Email is already exist.<br></span>
                            <span class="yot-tc-red yot-text-end errInvalidEmail" style="display: none;">Invalid email.<br></span> 
                            <span class="yot-tc-red yot-text-end errEmptyEmail" style="display: none;">The Email field is required.<br></span> 
                        </div>
                        <div class="yot-form-group yot-form-group-container yot-mb-16">
                            <input class="yot-form-input-ls yot-form-group-input-text-l yot-tc-black emailSignUp" type="email" name="emailSignUp" id="emailSignUp">
                            <i class="fa-solid fa-envelope yot-form-group-icon-left yot-text-fs-xxl"></i>
                        </div>

                        <!-- Password -->
                        <div class="yot-text-center">
                            <label for="password" class="yot-text-center yot-mb-4 yot-text-fs-m">Password</label>
                        </div>
                        <div class="yot-text-end">
                            <span class="yot-tc-red yot-text-end errPass" style="display: none;">The password must be at least 8 characters long.<br></span> 
                            <span class="yot-tc-red yot-text-end errEmptyPass" style="display: none;">The Password field is required.<br></span> 
                        </div>
                        <div class="yot-form-group yot-form-group-container yot-mb-16">
                            <input class="yot-form-input-ls yot-form-group-input-text-lr passwordSignUp" type="password" name="passwordSignUp" id="passwordSignUp">
                            <i class="fa-solid fa-lock yot-form-group-icon-left yot-text-fs-xxl"></i>
                            <i class="fa-solid fa-eye yot-form-group-icon-right yot-text-fs-xxl yot-active-icon yot-z-index-1" id="signup-show-password"></i>
                        </div>

                        <div class="yot-text-center yot-mtb-16">
                            <span class="yot-tc-red errOnTop" style="display: none;">Check on the top there an error.<br></span> 
                        </div>

                        <!-- Loader -->
                        <div class="yot-mb-16 yot-flex yot-flex-ai-c-jc-c signUpLoader" style="display: none;">
                            <div class="yot-loader"></div>
                            <span>Loading...</span>
                        </div>

                        <!-- Submit -->
                        <div class="yot-text-center">
                            <input class="yot-btn1 yot-btn-round btnSubmit" type="submit" value="Sign Up">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="./assets/js/index/global.js"></script>
    <script src="./assets/js/index/signup.js"></script>
    <script src="./assets/js/index/login.js"></script>

</body>
</html>