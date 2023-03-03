<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/asset/images/g4works-favicon-16x16.png">

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
                <a href="index.html" class="yot-text-fs-xl yot-active-bbh1">Home</a> <span class="yot-mlr-4"></span> 
                <!-- List Products -->
                <div style="position: relative">
                    <div class="tarpaulinContainerUserProduct yot-flex yot-active-bbh1 yot-cursor-pointer">
                        <span class="tarpaulinNavLink yot-text-fs-xl">Products</span>
                    </div>
                    <div class="rPmLContainer yot-ml-48 yot-flex yot-flex-fd-c yot-bg-white yot-pa-16" style="display:none; position: absolute; width: 200px; right: -111px;">
                        <a href="decals.html" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Decals</a>
                        <a href="temporary-plate" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Temporary Plate</a>
                        <a href="sticker-labels" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Sticker Labels</a>
                        <a href="tarpauline" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Tarpauline</a>
                    </div>
                </div> <span class="yot-mlr-4"></span>
                <a href="services.html" class="yot-text-fs-xl yot-active-bbh1">Services</a> <span class="yot-mlr-4"></span>
                <a href="contact.html" class="yot-text-fs-xl yot-active-bbh1">Contact Us</a> <span class="yot-mlr-4"></span>
                <a href="about.html" class="yot-text-fs-xl yot-active-bb-blue">About Us</a> <span class="yot-mlr-4"></span>
                <a href="gallery.html" class="yot-text-fs-xl yot-active-bbh1">Gallery</a>
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
            <a href="index.html" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Home</a>
            <i id="hamburgerCloseIndex" class="fa-solid fa-xmark yot-tc-blue-1" style="font-size: 46px; display: none;"></i>
        </div>
        <div class="yot-mb-16">
            <a href="product.html" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Product</a>
        </div>
        <div class="yot-mb-16">
            <a href="services.html" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Services</a>
        </div>
        <div class="yot-mb-16">
            <a href="contact.html" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Contact Us</a>
        </div>
        <div class="yot-mb-16">
            <a href="about.html" class="yot-active-bb-blue" style="font-size: 36px; font-weight: bolder;">About Us</a>
        </div>
        <div class="yot-mb-16">
            <a href="gallery.html" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Gallery</a>
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
            <form>
                <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">Log In</h2>
                    <i id="closeLogInIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>
                <!-- Email -->
                <div class="yot-form-group">
                    <label class="yot-text-fs-xl" style="font-weight: bolder;" for="email">Email</label>
                    <input class="yot-form-input" type="email" name="" id="">
                </div>
                <!-- Password -->
                <div class="yot-form-group">
                    <label class="yot-text-fs-xl" style="font-weight: bolder;" for="password">Password</label>
                    <input class="yot-form-input" type="password" name="" id="">
                </div>

                <div class="yot-mb-16 yot-flex yot-flex-ai-c-jc-sb">
                    <a href="#">Forgot Password?</a>
                    <span class="yot-cursor-pointer" id="signUpSpan">Sign Up</span>
                </div>

                <div class="yot-text-center">
                    <input class="yot-btn-blue1" type="submit" value="Log In">
                </div>
            </form>
        </div>
    </div>

    <!-- Sign Up -->
    <div id="signUpContainer" class="yot-overlay-mid-container" style="display: none;">
        <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
            <form>
                <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">Sign Up</h2>
                    <i id="closeSignUpIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>
                <!-- Email -->
                <div class="yot-form-group">
                    <label class="yot-text-fs-xl" style="font-weight: bolder;" for="email">Email</label>
                    <input class="yot-form-input" type="email" name="" id="">
                </div>
                <!-- Password -->
                <div class="yot-form-group">
                    <label class="yot-text-fs-xl" style="font-weight: bolder;" for="password">Password</label>
                    <input class="yot-form-input" type="password" name="" id="">
                </div>
                <!-- Confirm Password -->
                <div class="yot-form-group">
                    <label class="yot-text-fs-xl" style="font-weight: bolder;" for="password">Confirm Password</label>
                    <input class="yot-form-input" type="password" name="" id="">
                </div>

                <div class="yot-mb-16 yot-flex yot-flex-ai-c-jc-sb">
                    <a href="#">Forgot Password?</a>
                    <span class="yot-cursor-pointer" id="logInSpan">Log In</span>
                </div>

                <div class="yot-text-center">
                    <input class="yot-btn-blue1" type="submit" value="Log In">
                </div>
            </form>
        </div>
    </div>

    <div class="yot-content-space-margin-t-120 yot-container">
        <!-- About Us Section -->
        <section>
            <!-- Title-->
            <div class="yot-tc-blue1 yot-text-center">
                <h1 class="yot-resize-font-64">ABOUT US</h1>
                <p class="yot-resize-font-18 yot-mb-16">Gabriel 4 Sticker Shop (G4 Sticker Works) 
                    is a  printing and installation 
                    business which caters any type 
                    of sticker and tarpaulin needs 
                    of clients for personal or 
                    business purpose.
                    
                    Our 6 years of experience has 
                    enabled us to provide the best
                    possible designing , printing 
                    and installation
                    where  we focus to quality 
                    resulting in satisfied client and 
                    have lasting business relationships.
                    
                    The foundation of our business 
                    is integrity, honesty and
                    client relationship.</p>
            </div>

            <!-- Mission Img Vission -->
            <div class="yot-text-center yot-row">
                <!-- Mission and Vission -->
                <div class="yot-col-50 yot-mb-8" style="margin:auto auto;">
                    <!-- Mission -->
                    <div>
                        <h3>Mission</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio perspiciatis quidem incidunt quaerat omnis enim repellat hic, doloremque optio alias in, quos sequi ratione? Ut dolores dicta necessitatibus laboriosam asperiores!</p>
                    </div>

                    <!-- Vission -->
                    <div>
                        <h3>Vission</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio perspiciatis quidem incidunt quaerat omnis enim repellat hic, doloremque optio alias in, quos sequi ratione? Ut dolores dicta necessitatibus laboriosam asperiores!</p>
                    </div>
                </div>
                
                <!-- Img -->
                <div class="yot-col-50 yot-mb-8" style="margin:auto auto;">
                    <img src="./asset/images/undraw_newspaper_re_syf5.svg" alt="">
                </div>
            </div>
            
        </section>
    </div>

    <!-- Footer -->
    <footer class="yot-w-100 yot-row yot-bg-blue1 yot-tc-white yot-content-space-margin-t-80" style="padding:24px">
        <!-- Navs -->
        <div class="yot-col-25 yot-flex yot-flex-fd-c-ai-c">
            <h2 class="yot-mb-8">Quick Links</h2>
            <a href="index.html" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Home</a>
            <a href="product.html" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Product</a>
            <a href="services.html" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Services</a>
            <a href="contact.html" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Contacts</a>
            <a href="about.html" class="yot-mb-16 yot-active-bb-white" style="color:white; font-size: 20px;">About Us</a>
            <a href="gallery.html" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Gallery</a>
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
    <script src="./asset/js/login/login.js"></script>
</body>
</html>