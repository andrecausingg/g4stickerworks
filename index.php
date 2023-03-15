<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
    <!-- Header -->
    <header class="yot-header yot-bg-white">
        <!-- Nav -->
        <nav class="yot-flex yot-flex-ai-c-jc-sb yot-container yot-pa-8">
            <!-- Logo -->
            <a href="#"><img src="./asset/images/g4works-logo.png" alt="" width="64" height="64"></a>

            <!-- Nav Links -->
            <div class="yot-hide-for-mobile yot-flex">
                <a href="index" class="yot-text-fs-xl yot-active-bb-blue">Home</a> <span class="yot-mlr-4"></span> 
                <!-- List Products -->
                <div style="position: relative">
                    <div class="tarpaulinContainerUserProduct yot-flex yot-active-bbh1 yot-cursor-pointer">
                        <span class="tarpaulinNavLink yot-text-fs-xl">Products</span>
                    </div>
                    <div class="rPmLContainer yot-ml-48 yot-flex yot-flex-fd-c yot-bg-white yot-pa-16" style="display:none; position: absolute; width: 200px; right: -111px;">
                        <a href="decals" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Decals</a>
                        <a href="temporary-plate" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Temporary Plate</a>
                        <a href="sticker-label" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Sticker Labels</a>
                        <a href="tarpauline" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Tarpauline</a>
                    </div>
                </div> <span class="yot-mlr-4"></span>
                <a href="services" class="yot-text-fs-xl yot-active-bbh1">Services</a> <span class="yot-mlr-4"></span>
                <a href="contact-us" class="yot-text-fs-xl yot-active-bbh1">Contact Us</a> <span class="yot-mlr-4"></span>
                <a href="about-us" class="yot-text-fs-xl yot-active-bbh1">About Us</a> <span class="yot-mlr-4"></span>
                <a href="gallery" class="yot-text-fs-xl yot-active-bbh1">Gallery</a>
            </div>

            <!-- Nav Links -->
            <div class="yot-hide-for-mobile yot-flex yot-flex-ai-c">
                <button class="logInBtn yot-btn yot-btn-blue1 yot-mr-4">Log In</button>
                <button class="signUpBtn yot-btn yot-btn-blue1 yot-ml-4">Sign Up</button>
            </div>

            <!-- Hamburger -->
            <div class="yot-hide-for-desktop">
                <i id="hamburgerIndex" class="fa-solid fa-bars yot-tc-blue1" style="font-size: 36px;"></i>
            </div>
        </nav>
    </header>

    <!-- Overlay Mobile -->
    <div id="overlayMobileBgIndex" class="yot-overlay-bg-trans yot-bg-black1  overlayLeftSideBar" style="display:none"></div>
    <div id="overlayMobileIndex" class="yot-w-75 yot-flex yot-flex-fd-c  yot-vh-100 yot-bg-white yot-overlay-left yot-pa-16 overlayLeftSideBar" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb" style="margin: 8px 0px 16px 0px;">
            <a href="index" class="yot-active-bb-blue" style="font-size: 36px; font-weight: bolder;">Home</a>
            <i id="hamburgerCloseIndex" class="fa-solid fa-xmark yot-tc-blue-1" style="font-size: 46px; display: none;"></i>
        </div>
        <div class="yot-mb-16">                 
            <!-- Pages -->        
            <div class="yot-mb-8">
                <div class="pagesPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-cursor-pointer">
                    <span style="font-size: 36px; font-weight: bolder;">Products</span>
                    <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRightPages"></i></span>
                </div>
                <div class="InPrSeGaContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                    <a href="decals" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Decals</a>
                    <a href="temporary-plate" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Temporary Plate</a>
                    <a href="sticker-label" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Sticker Labels</a>
                    <a href="tarpauline" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Tarpauline</a>
                </div>
            </div>
        </div>
        <div class="yot-mb-16">
            <a href="services" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Services</a>
        </div>
        <div class="yot-mb-16">
            <a href="contact-us" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Contact Us</a>
        </div>
        <div class="yot-mb-16">
            <a href="about-us" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">About Us</a>
        </div>
        <div class="yot-mb-16">
            <a href="gallery" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Gallery</a>
        </div>

        <!-- Log In and Sign Up-->
        <div>
            <button class="logInBtn yot-btn yot-btn-blue1 yot-mr-4">Log In</button>
            <button class="signUpBtn yot-btn yot-btn-blue1 yot-ml-4">Sign Up</button>
        </div>
    </div>

    <!-- Log In -->
    <div class="bgLogInSignUp yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
    <div id="logInContainer" class="yot-overlay-mid-container" style="display: none;">
        <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
            <form id="logInForm">
                <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">Log In</h2>
                    <i id="closeLogInIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Email error -->
                <div class="yot-flex yot-flex-ai-c-jc-sb">
                    <label class="yot-text-fs-xl" style="font-weight: bolder;" for="emailLogIn">Email</label>
                    <!-- Error Email-->
                    <div class="yot-text-end">
                        <span class="yot-tc-red yot-text-end" id="validateEmailErrLogIn" style="display: none;">Invalid email.<br></span> 
                        <span class="yot-tc-red yot-text-end" id="existEmailErrLogIn" style="display: none;">Email is already exist.<br></span>
                    </div>
                </div>

                <!-- Email -->
                <div class="yot-form-group yot-form-group-container">
                    <input class="yot-form-input" type="email" name="emailLogIn" id="emailLogIn" style="padding-left:38px;">
                    <i class="fa-solid fa-envelope yot-form-group-icon-left yot-text-fs-xxl"></i>
                </div>

                <!-- Password Error -->
                <div class="yot-flex yot-flex-ai-c-jc-sb">
                    <label class="yot-text-fs-xl" style="font-weight: bolder;" for="passwordLogIn">Password</label>
                    <!-- Error Password-->
                    <div class="yot-text-end">
                        <span class="yot-tc-red yot-text-end" id="less8CharPassErrLogIn" style="display: none;">The password must be at least 8 characters long.<br></span> 
                    </div>
                </div>

                <!-- Password -->
                <div class="yot-form-group yot-form-group-container">
                    <input class="yot-form-input" type="password" name="passwordLogIn" id="passwordLogIn" style="padding:14px 38px;">
                    <i class="fa-solid fa-lock yot-form-group-icon-left yot-text-fs-xxl"></i>
                    <i class="fa-solid fa-eye-slash yot-form-group-icon-right yot-text-fs-xxl yot-active-icon yot-z-index-1" id="showPasswordLogIn"></i>
                </div>

                <!-- Nav Form -->
                <div class="yot-mb-16 yot-flex yot-flex-ai-c-jc-sb">
                    <span class="yot-cursor-pointer forgotPasswordSpan">Forgot Password</span>
                    <span class="yot-cursor-pointer signUpSpan">Sign Up</span>
                </div>

                <!-- Submit -->
                <div class="yot-text-center">
                    <input class="yot-btn-blue1" type="submit" value="Log In">
                </div>
            </form>
        </div>
    </div>

    <!-- Sign Up -->
    <div id="signUpContainer" class="yot-overlay-mid-container" style="display: none;">
        <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
            <form id="signUpForm">
                <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">Sign Up</h2>
                    <i id="closeSignUpIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Password and Confirm Password Error -->
                <div class="yot-text-center yot-mtb-8">
                    <span class="yot-tc-red yot-text-end" id="passwordAndConfirmPasswordErr" style="display: none;">The password and confirm password not match!<br></span> 
                </div>

                <!-- Email error -->
                <div class="yot-flex yot-flex-ai-c-jc-sb">
                    <label class="yot-text-fs-xl" style="font-weight: bolder;" for="emailSignUp">Email</label>
                    <!-- Error Email-->
                    <div class="yot-text-end">
                        <span class="yot-tc-red yot-text-end" id="validateEmailErrSignUp" style="display: none;">Invalid email.<br></span> 
                        <span class="yot-tc-red yot-text-end" id="domainEmailErrSignUp" style="display: none;">Email is not from a trusted domain.<br>Allowed only are "gmail.com", "yahoo.com", "outlook.com", "aol.com", "triots.com"<br></span> 
                        <span class="yot-tc-red yot-text-end" id="existEmailErrSignUp" style="display: none;">Email is already exist.<br></span>
                    </div>
                </div>

                <!-- Email -->
                <div class="yot-form-group yot-form-group-container">
                    <input class="yot-form-input" type="email" name="emailSignUp" id="emailSignUp" style="padding-left:38px;">
                    <i class="fa-solid fa-envelope yot-form-group-icon-left yot-text-fs-xxl"></i>
                </div>

                <!-- Password Error -->
                <div class="yot-flex yot-flex-ai-c-jc-sb">
                    <label class="yot-text-fs-xl" style="font-weight: bolder;" for="passwordSignUp">Password</label>
                    <!-- Error Password-->
                    <div class="yot-text-end">
                        <span class="yot-tc-red yot-text-end" id="less8CharPassErrSignUp" style="display: none;">The password must be at least 8 characters long.<br></span> 
                    </div>
                </div>

                <!-- Password -->
                <div class="yot-form-group yot-form-group-container">
                    <input class="yot-form-input" type="password" name="passwordSignUp" id="passwordSignUp" style="padding:14px 38px;">
                    <i class="fa-solid fa-lock yot-form-group-icon-left yot-text-fs-xxl"></i>
                    <i class="fa-solid fa-eye-slash yot-form-group-icon-right yot-text-fs-xxl yot-active-icon yot-z-index-1" id="showPasswordSignUp"></i>
                </div>

                <div class="yot-flex yot-flex-ai-c-jc-sb    ">
                    <label class="yot-text-fs-xl" style="font-weight: bolder;" for="confirmPasswordSignUp">Confirm Password</label>
                    <!-- Error Password-->
                    <div class="yot-text-end">
                        <span class="yot-tc-red yot-text-end" id="less8CharConfirmPassErrSignUp" style="display: none;">The confirm password must be at least 8 characters long.<br></span> 
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="yot-form-group yot-form-group-container">
                    <input class="yot-form-input" type="password" name="confirmPasswordSignUp" id="confirmPasswordSignUp" style="padding:14px 38px;">
                    <i class="fa-solid fa-lock yot-form-group-icon-left yot-text-fs-xxl"></i>
                    <i class="fa-solid fa-eye-slash yot-form-group-icon-right yot-text-fs-xxl yot-active-icon yot-z-index-1" id="showConfirmPasswordSignUp"></i>
                </div>

                <!-- Nav Form -->   
                <div class="yot-mb-16 yot-flex yot-flex-ai-c-jc-sb">
                    <span class="yot-cursor-pointer forgotPasswordSpan">Forgot Password</span>
                    <span class="yot-cursor-pointer logInSpan">Log In</span>
                </div>

                <!-- Submit -->
                <div class="yot-text-center" id="submitSignUpBtn">
                    <input class="yot-btn-blue1" type="submit" value="Sign Up">
                </div>
            </form>

            <!-- Disable btn -->
            <div class="yot-flex yot-flex-fd-c-ai-c" id="submitDisSignUpBtn" style="display: none;">
                <button class="yot-btn-dis yot-flex yot-flex-ai-c">Signing Up <span class="yot-mlr-4"></span> <div class="yot-loader-blue1"></div></button>
            </div>
        </div>
    </div>

    <!-- Forgot Password -->
    <div id="forgotPasswordContainer" class="yot-overlay-mid-container" style="display: none;">
        <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
            <form id="forgotPasswordForm">
                <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">Forgot Password</h2>
                    <i id="closeForgotPassword" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Email error -->
                <div class="yot-flex yot-flex-ai-c-jc-sb">
                    <label class="yot-text-fs-xl" style="font-weight: bolder;" for="emailForgotPassword">Email</label>
                    <!-- Error Email-->
                    <div class="yot-text-end">
                        <span class="yot-tc-red yot-text-end" id="validateEmailErrForgotPassword" style="display: none;">Invalid email.<br></span> 
                        <span class="yot-tc-red yot-text-end" id="domainEmailErrForgotPassword" style="display: none;">Email is not from a trusted domain.<br></span> 
                        <span class="yot-tc-red yot-text-end" id="existEmailErrForgotPassword" style="display: none;">Email is already exist.<br></span>
                    </div>
                </div>

                <!-- Email -->
                <div class="yot-form-group yot-form-group-container">
                    <input class="yot-form-input" type="email" name="emailForgotPassword" id="emailForgotPassword" style="padding-left:38px;">
                    <i class="fa-solid fa-envelope yot-form-group-icon-left yot-text-fs-xxl"></i>
                </div>

                <!-- Nav Form -->
                <div class="yot-mb-16 yot-flex yot-flex-ai-c-jc-sb">
                    <span class="yot-cursor-pointer logInSpan">Log In</span>
                    <span class="yot-cursor-pointer signUpSpan">Sign Up</span>
                </div>

                <!-- Submit -->
                <div class="yot-text-center">
                    <input class="yot-btn-blue1" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <div class="index-hero-bg"></div>

    <main class="yot-content-space-margin-t-120 yot-container">
        <!-- Hero Section -->
        <section class="yot-row yot-flex-ai-c" style="padding:0;">
            <!-- Description -->
            <div class="yot-tc-white yot-col-50" >
                <h1 id="titleDisplayIndexHero" class="yot-resize-font-64 yot-mb-16"></h1>
                <p id="subTitleIndexHero" class="yot-resize-font-18"></p>
            </div>

            <!-- Image -->
            <div class="yot-col-50">
                <div id="imageDisplayIndexHero"></div>
            </div>
        </section>

        <!-- Product Section -->
        <section class="yot-content-space-margin-t-80">
            <!-- Title And Btn -->
            <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                <div class="yot-tc-blue1">
                    <h1 class="yot-resize-font-64">PRODUCTS</h1>
                </div>
            </div>

            <!-- List Of Products -->
            <div id="randProductDisplay"></div>
            
        </section>

        <!-- Service Section -->
        <section class="yot-content-space-margin-t-80">
            <!-- Title And Btn -->
            <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                <div class="yot-tc-blue1">
                    <h1 class="yot-resize-font-64">SERVICES</h1>
                    <p id="displaySubTitleServices" class="yot-resize-font-18 yot-mb-16"></p>
                </div>
            </div>

            <!-- List Of Services -->
            <div class="yot-w-100">
                <h1 id="displayContentServices"></h1>
            </div>
        </section>

        <!-- Contact Us Section -->
        <section class="yot-content-space-margin-t-80">
            <!-- Title-->
            <div class="yot-tc-blue1 yot-text-center">
                <h1 class="yot-resize-font-64">CONTACT US</h1>
                <p class="yot-resize-font-18 yot-mb-16">At our company, we value communication and are always eager to hear from our clients. Whether you have questions about our services, need a quote, or just want to say hello, we encourage you to get in touch. You can reach us by phone, email, or through our Social Media Pages. Our friendly and knowledgeable team is available to assist you with any inquiries you may have, and we strive to respond to all messages as quickly as possible. We look forward to hearing from you and working together to achieve your goals. Contact us today and let's start a conversation!</p>
            </div>

            <!-- Img and Contact List -->
            <div class="yot-row yot-flex-ai-c">
                <!-- Img -->
                <div class="yot-col-50 yot-mb-8">
                    <img src="./asset/images/undraw_newspaper_re_syf5.svg" alt="">
                </div>

                <!-- Contact List -->
                <div class="yot-col-50">
                    <!-- Facebook -->
                    <div class="yot-bg-white yot-w-100 yot-pa-16 yot-tc-blue1 yot-mb-8">
                        <div class="yot-flex" style="font-size: 24px;">
                            <i class="fa-solid fa-envelope"></i>
                            <h4 class="yot-ml-4">Facebook</h4>
                        </div>
                        <div id="facebookUrlContainerContactUs"></div>
                    </div>

                    <!-- Tiktok -->
                    <div class="yot-bg-white yot-w-100 yot-pa-16 yot-tc-blue1 yot-tc-pink1 yot-mb-8">
                        <div class="yot-flex" style="font-size: 24px;">
                            <i class="fa-brands fa-tiktok"></i>
                            <h4 class="yot-ml-4">Tiktok</h4>
                        </div>
                        <div id="tiktokUrlContainerContactUs"></div>
                    </div>
                    
                    <!-- Instagram -->
                    <div class="yot-bg-white yot-w-100 yot-pa-16 yot-tc-yellow1 yot-mb-8">
                        <div class="yot-flex" style="font-size: 24px;">
                            <i class="fa-brands fa-tiktok"></i>
                            <h4 class="yot-ml-4">Instagram</h4>
                        </div>
                        <div id="instagramUrlContainerContactUs"></div>
                    </div>

                    <!-- Email -->
                    <div class="yot-bg-white yot-w-100 yot-pa-16 yot-tc-blue1 yot-tc-red yot-mb-8">
                        <div class="yot-flex" style="font-size: 24px;">
                            <i class="fa-solid fa-envelope"></i>
                            <h4 class="yot-ml-4">Email</h4>
                        </div>
                        <div id="emailContainerContactUs"></div>
                    </div>

                    <!-- Contact No. -->
                    <div class="yot-bg-white yot-w-100 yot-pa-16 yot-tc-blue1 yot-tc-blue3 yot-mb-8">
                        <div class="yot-flex" style="font-size: 24px;">
                            <i class="fa-solid fa-mobile"></i>
                            <h4 class="yot-ml-4">Contact No.</h4>
                        </div>
                        <div id="phoneContainerContactUs"></div>
                    </div>
                </div>
            </div>
            
        </section>

        <!-- About Us Section -->
        <section class="yot-content-space-margin-t-80">
            <!-- Title-->
            <div class="yot-tc-blue1 yot-text-center">
                <h1 class="yot-resize-font-64">ABOUT US</h1>
                <p id="displaySubTitleAboutUs" class="yot-resize-font-18 yot-mb-16"></p>
            </div>

            <div id="displayImagesAboutUs" class="yot-text-center"></div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="yot-w-100 yot-row yot-bg-blue1 yot-tc-white yot-content-space-margin-t-80" style="padding:24px">
        <!-- Navs -->
        <div class="yot-col-25 yot-flex yot-flex-fd-c-ai-c">
            <h2 class="yot-mb-8">Quick Links</h2>
            <a href="index" class="yot-mb-16 yot-active-bb-white" style="color:white; font-size: 20px;">Home</a>
            <a href="product" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Product</a>
            <a href="services" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Services</a>
            <a href="contact-us" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Contacts</a>
            <a href="about-us" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">About Us</a>
            <a href="gallery" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Gallery</a>
        </div>

        <!-- Social Media -->
        <div class="yot-col-25 yot-flex yot-flex-fd-c-ai-c yot-tc-white">
            <h2 class="yot-mb-8">Social Media</h2>
            <!-- Facebook -->   
            <div class="yot-mb-8 yot-text-fs-xl">
                <div class="yot-text-center">
                    <i class="fa-brands fa-facebook-f yot-mr-4"></i>
                    Facebook
                </div>
                <div id="facebookUrlContainer" class="yot-text-center"></div>
            </div>

            <!-- Tiktok -->
            <div class="yot-mb-8 yot-text-fs-xl">
                <div class="yot-text-center">
                    <i class="fa-brands fa-tiktok"></i>
                    Tiktok
                </div>
                <div id="tiktokUrlContainer" class="yot-text-center"></div>
            </div>

            <!-- Instagram -->
            <div class="yot-mb-8 yot-text-fs-xl">
                <div class="yot-text-center">
                    <i class="fa-brands fa-instagram"></i>
                    Instagram
                </div>
                <div id="instagramUrlContainer" class="yot-text-center"></div>
            </div>
        </div>

        <!-- Contacts -->
        <div class="yot-col-25 yot-flex yot-flex-fd-c-ai-c">
            <h2 class="yot-mb-8">Contacts</h2>
            <!-- Email -->
            <div class="yot-mb-8 yot-text-fs-xl">
                <div class="yot-text-center">
                    <i class="fa-solid fa-envelope"></i> 
                    Email
                </div>

                <div id="emailContainer" class="yot-text-center"></div>
            </div>
            
            <!-- Contact No. -->
            <div class="yot-mb-8 yot-text-fs-xl">
                <div class="yot-text-center">
                    <i class="fa-solid fa-mobile"></i>
                    Phone
                </div>

                <div id="phoneContainer" class="yot-text-center"></div>
            </div>
        </div>

        <!-- Location -->
        <div class="yot-col-25 yot-flex yot-flex-fd-c-ai-c">
            <h2 class="yot-mb-8">Location</h2>

            <div class="yot-mb-8 yot-text-fs-xl">
                <div class="yot-text-center">
                <i class="fa-solid fa-location-dot"></i>
                    Address
                </div>
                <div id="addressContainer" class="yot-text-center"></div>
            </div>
        </div>
    </footer>

    <script src="./asset/js/all/global.js"></script>
    <script src="./asset/js/all/display-global/d-global-data.js"></script>

    <script src="./asset/js/index/index.js"></script>
    <script src="./asset/js/index/signup.js"></script>

</body>
</html>