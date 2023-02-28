<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

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
    <header class="yot-header yot-bg-white yot-hide-for-desktop yot-z-index-1">
        <!-- Nav -->
        <nav class="yot-flex yot-flex-ai-c-jc-sb yot-pa-8">
            <!-- Logo -->
            <a href="#"><img src="./asset/images/g4works-logo.png" alt="" width="64" height="64"></a>

            <!-- Hamburger -->
            <div class="yot-hide-for-desktop">
                <i id="hamburgerIndex" class="fa-solid fa-bars yot-tc-blue1" style="font-size: 36px;"></i>
            </div>
        </nav>
    </header>

    <!-- Overlay Mobile -->
    <div id="overlayMobileBgIndex" class="yot-overlay-bg-trans yot-bg-black1 overlayLeftSideBar yot-z-index-2" style="display:none"></div>
    <div id="overlayMobileIndex" class="yot-w-75 yot-flex yot-flex-fd-c yot-vh-100 yot-bg-white yot-overlay-left overlayLeftSideBar over-view-overlay-mobile yot-z-index-2" style="display:none; overflow-y: scroll;">
        <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="padding: 8px 16px 8px 8px">
            <a href="#"><img src="./asset/images/g4works-logo.png" alt="" width="64" height="64"></a>
            <i id="hamburgerCloseIndex" class="fa-solid fa-xmark yot-tc-blue1" style="font-size: 46px; display: none;"></i>
        </div>

        <div style="padding:0px 16px">
            <!-- General -->
            <div>
                <h4 class="yot-mb-8">GENERAL</h4>
                <div class="yot-pl-48">
                    <div class="yot-mb-16">
                        <a href="overview" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Over View</a>
                    </div>
                    <div class="yot-mb-16">
                        <a href="orders" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Orders</a>
                    </div>
                    <div class="yot-mb-16">
                        <a href="visitors" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Visitors</a>
                    </div>
                </div>
            </div>

            <!-- Management -->
            <div>
                <h4 class="yot-mb-8">MANAGEMENT</h4>
                <div class="yot-pl-48">
                    <!-- Accounts -->
                    <div class="yot-mb-8">
                        <div class="accountPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1">
                            <span style="font-size: 24px; font-weight: bolder;">Accounts</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl"></i></span>
                        </div>
                        <div class="AdEmUsContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <a href="admin-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Admin</a>
                            <a href="user-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Users</a>
                        </div>
                    </div>

                    <!-- Pages -->
                    <div class="yot-mb-8">
                        <div class="pagesPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bb-blue yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Pages</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-down yot-text-fs-xxl faAngleRightPages"></i></span>
                        </div>
                        <div class="InPrSeGaContainerOverView yot-ml-48 yot-flex yot-flex-fd-c">
                            <a href="index-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Home</a>
                            <a href="product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Product</a>
                            <a href="services-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Services</a>
                            <a href="contact-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Contact Us</a>
                            <a href="about-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">About Us</a>
                            <a href="gallery-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Gallery</a>
                            <a href="all-footer-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">All Footer</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Office -->
            <div>
                <h4 class="yot-mb-8">OFFICE WORKS</h4>
                <div class="yot-pl-48">
                    <!-- Work -->
                    <div class="yot-mb-8">
                        <div class="workPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Work</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRightWork"></i></span>
                        </div>
                        <div class="jobContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <a href="job" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Job</a>
                            <a href="cut-file" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Cut File</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Container -->
    <div class="g-main-container yot-vh-100 yot-w-100 yot-content-space-margin-t-80 yot-content-space-margin-t-80-remove" style="padding: 0;">
        <!-- Left -->
        <div class="g-main-item-left yot-hide-for-mobile yot-bg-white yot-pa-16" style="overflow-y: scroll;">
            <div class="yot-flex yot-flex-fd-c yot-mb-16">
                <div style="width:64px; height: 64px; margin: auto auto;">
                    <a href="#"><img src="./asset/images/g4works-logo.png" alt="" width="64" height="64"></a>
                </div>
            </div>
            
            <!-- General -->
            <div>
                <h4 class="yot-mb-8">GENERAL</h4>
                <div class="yot-pl-48">
                    <div class="yot-mb-16">
                        <a href="overview" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Over View</a>
                    </div>
                    <div class="yot-mb-16">
                        <a href="orders" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Orders</a>
                    </div>
                    <div class="yot-mb-16">
                        <a href="visitors" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Visitors</a>
                    </div>
                </div>
            </div>
    
            <!-- Management -->
            <div class="yot-mb-16">
                <h4 class="yot-mb-8">MANAGEMENT</h4>
                <div class="yot-pl-48">
                    <!-- Accounts -->
                    <div class="yot-mb-8">
                        <div class="accountPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Accounts</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRight"></i></span>
                        </div>
                        <div class="AdEmUsContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <a href="admin-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Admin</a>
                            <a href="user-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Users</a>
                        </div>
                    </div>
                    
                    <!-- Pages -->
                    <div class="yot-mb-8">
                        <div class="pagesPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bb-blue yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Pages</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-down yot-text-fs-xxl faAngleRightPages"></i></span>
                        </div>
                        <div class="InPrSeGaContainerOverView yot-ml-48 yot-flex yot-flex-fd-c">
                            <a href="index-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Home</a>
                            <a href="product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Product</a>
                            <a href="services-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Services</a>
                            <a href="contact-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Contact Us</a>
                            <a href="about-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">About Us</a>
                            <a href="gallery-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Gallery</a>
                            <a href="all-footer-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">All Footer</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Office -->
            <div>
                <h4 class="yot-mb-8">OFFICE WORKS</h4>
                <div class="yot-pl-48">
                    <!-- Work -->
                    <div class="yot-mb-8">
                        <div class="workPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Work</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRightWork"></i></span>
                        </div>
                        <div class="jobContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <a href="job" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Job</a>
                            <a href="cut-file" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Cut File</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right -->
        <div class="g-main-item-right" style="padding: 24px;">
            <!-- Title -->
            <h2 class="yot-mb-16 yot-resize-font-64">Home Page</h2>
            
            <!-- Edit Container -->
            <div class="over-view-container">
                <!-- Hero Section -->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item1 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Hero Section</h3>
                    </div>
                    <div>
                        <button class="yot-btn-white1 yot-mb-8">Edit</button> <br>
                    </div>
                </div>

                <!-- Product Section -->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item2 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Product Section</h3>
                    </div>
                    <div>
                        <button class="yot-btn-white1 yot-mb-8">Edit</button> <br>
                    </div>
                </div>

                <!-- Services Section -->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item3 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Services Section</h3>
                    </div>
                    <div>
                        <button class="yot-btn-white1 yot-mb-8">Edit</button> <br>
                    </div>
                </div>

                <!-- Contact Us section -->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item4 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Contact Us Section</h3>
                    </div>
                    <div>
                        <button class="yot-btn-white1 yot-mb-8">Edit</button> <br>
                    </div>
                </div>
            </div>

            <!-- Edit Container -->
            <div class="over-view-container">
                <!-- About Us Section -->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item1 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">About Us Section</h3>
                    </div>
                    <div>
                        <button class="yot-btn-white1 yot-mb-8">Edit</button> <br>
                    </div>
                </div>
            </div>

            <!-- Index page Container -->
            <div class="yot-content-space-margin-t-80 yot-container">
                <!-- Hero Section -->
                <section class="yot-row yot-flex-ai-c" style="padding:0;">
                    <!-- Description -->
                    <div class="yot-tc-blue1 yot-col-50" >
                        <h1 class="yot-resize-font-64 yot-mb-16" style="line-height: 1;">WE DESIGN,PRINT and INSTALL</h1>
                        <p class="yot-resize-font-18">Tarpaulin Printing, Sticker Printing, Wall Décor,
                            Office Glass Décor, Product Labels, Sintra Board
                            Printing, Motorcycle Car, Company Vehicle, 
                            Wrapping & Customize, Decals </p>
                    </div>
        
                    <!-- Image -->
                    <div class="yot-col-50">
                        <img src="./asset/images/undraw_designer_girl_re_h54c.svg" alt="" width="300" height="300">
                    </div>
                </section>
        
                <!-- Product Section -->
                <section class="yot-content-space-margin-t-160">
                    <!-- Title And Btn -->
                    <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                        <div class="yot-tc-blue1">
                            <h1 class="yot-resize-font-64">PRODUCTS</h1>
                            <p class="yot-resize-font-18 yot-mb-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, aut rem a praesentium natus</p>
                        </div>
        
                        <div>
                            <select class="yot-btn-blue1" name="" id="">
                                <option value="">Decals</option>
                                <option value="">Tarpaulin</option>
                                <option value="">Tarpaulin</option>
                                <option value="">Tarpaulin</option>
                            </select>
                        </div>
                    </div>
        
                    <!-- List Of Products -->
                    <div class="yot-row">
                        <div class="yot-col-25">
                            <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                            <p>Name: mio i 125</p>
                            <p>Color: Blue</p>
                            <p>Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempore excepturi molestias eos deserunt commodi labore similique</p>
                        </div>
        
                        <div class="yot-col-25">
                            <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                            <p>Name: mio i 125</p>
                            <p>Color: Blue</p>
                            <p>Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempore excepturi molestias eos deserunt commodi labore similique</p>
                        </div>
        
                        <div class="yot-col-25">
                            <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                            <p>Name: mio i 125</p>
                            <p>Color: Blue</p>
                            <p>Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempore excepturi molestias eos deserunt commodi labore similique</p>
                        </div>
        
                        <div class="yot-col-25">
                            <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                            <p>Name: mio i 125</p>
                            <p>Color: Blue</p>
                            <p>Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempore excepturi molestias eos deserunt commodi labore similique</p>
                        </div>
                    </div>
                    
                </section>
        
                <!-- Service Section -->
                <section class="yot-content-space-margin-t-160">
                    <!-- Title And Btn -->
                    <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                        <div class="yot-tc-blue1">
                            <h1 class="yot-resize-font-64">SERVICES</h1>
                            <p class="yot-resize-font-18 yot-mb-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, aut rem a praesentium natus</p>
                        </div>
        
                        <div>
                            <button class="yot-btn-blue1">View More</button>
                        </div>
                    </div>
        
                    <!-- List Of Services -->
                    <div class="yot-w-100">
                        <h1>Tarpaulin Printing,  Sticker,  Printing,  Wall Decor,  Office Glass Decor,  Product Labels,  Sintra Board Printing,  Motorcycle & Car,  Company Vehicle,  Wrapping & Customize Decals</h1>
                    </div>
                </section>
        
                <!-- Contact Us Section -->
                <section class="yot-content-space-margin-t-160">
                    <!-- Title-->
                    <div class="yot-tc-blue1 yot-text-center">
                        <h1 class="yot-resize-font-64">CONTACT US</h1>
                        <p class="yot-resize-font-18 yot-mb-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, aut rem a praesentium natus</p>
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
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <h4 class="yot-ml-4">Facebook</h4>
                                </div>
                                <div>
                                    <h4>www.facebook.com/g4stickershop</h4>
                                </div>
                            </div>
        
                            <!-- Tiktok -->
                            <div class="yot-bg-white yot-w-100 yot-pa-16 yot-tc-blue1 yot-tc-pink1 yot-mb-8">
                                <div class="yot-flex" style="font-size: 24px;">
                                    <i class="fa-brands fa-tiktok"></i>
                                    <h4 class="yot-ml-4">Tiktok</h4>
                                </div>
                                <div>
                                    <h4>www.tiktok.com/g4stickershop</h4>
                                </div>
                            </div>
        
                            <!-- Email -->
                            <div class="yot-bg-white yot-w-100 yot-pa-16 yot-tc-blue1 yot-tc-red yot-mb-8">
                                <div class="yot-flex" style="font-size: 24px;">
                                    <i class="fa-solid fa-envelope"></i>
                                    <h4 class="yot-ml-4">Email</h4>
                                </div>
                                <div>
                                    <h4>g4stickershop@gmail.com</h4>
                                </div>
                            </div>
        
                            <!-- Contact No. -->
                            <div class="yot-bg-white yot-w-100 yot-pa-16 yot-tc-blue1 yot-tc-blue3 yot-mb-8">
                                <div class="yot-flex" style="font-size: 24px;">
                                    <i class="fa-solid fa-mobile"></i>
                                    <h4 class="yot-ml-4">Contact No.</h4>
                                </div>
                                <div>
                                    <h4>09123456789</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>
        
                <!-- About Us Section -->
                <section class="yot-content-space-margin-t-160">
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
                    <div class="yot-row yot-flex-ai-c">
                        <!-- Mission -->
                        <div class="yot-col-33-33 yot-mb-8">
                            <h1>Mission</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ipsum expedita voluptas debitis officia, quod magnam officiis magni odit minus ab ipsa est id quam. At molestias dolor harum ratione!</p>
                        </div>
        
                        <!-- Img -->
                        <div class="yot-col-33-33 yot-mb-8">
                            <img src="./asset/images/undraw_newspaper_re_syf5.svg" alt="">
                        </div>
        
                        <!-- Vission -->
                        <div class="yot-col-33-33 yot-mb-8">
                            <h1>Vission</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ipsum expedita voluptas debitis officia, quod magnam officiis magni odit minus ab ipsa est id quam. At molestias dolor harum ratione!</p>
                        </div>
                    </div>
                    
                </section>
            </div>
        </div>
    </div>

    <!-- Update Container Hero Section-->
    <div id="updateBgContainer" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
    <div id="updateFormContainer" class="yot-overlay-mid-container" style="display:none;">
        <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
            <form id="updateHeroSection">
                <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">Update Hero Section</h2>
                    <i id="updteCloseFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Title -->
                <div class="yot-form-group">
                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="titleHeroSection">Title</label>
                    <textarea class="yot-form-input yot-tff-sas" type="text" name="titleHeroSection" id="titleHeroSection" style="height:80px;resize:none;" ></textarea>
                </div>

                <!-- Subtitle -->
                <div class="yot-form-group">
                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="subTitleHeroSection">Sub Title</label>
                    <textarea class="yot-form-input yot-tff-sas" type="text" name="subTitleHeroSection" id="subTitleHeroSection" style="height:80px;resize:none;" ></textarea>
                </div>

                <!-- Image -->
                <div class="yot-form-group">
                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="imageHeroSection">Image</label>
                    <input class="yot-form-input" type="file" name="imageHeroSection" id="imageHeroSection">
                </div>

                <div class="yot-text-center">
                    <input class="yot-btn-blue1" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <!-- Update Container Product Section-->
    <div id="updateBgContainer" class="yot-overlay-bg-trans yot-bg-black1" style="display:"></div>
    <div id="updateFormContainer" class="yot-overlay-mid-container" style="display:;">
        <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
            <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                <h2 class="yot-tc-blue1">Update <br> Product Section</h2>
                
                <i id="updteCloseFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
            </div>

            <div class="yot-mb-16">
                <select class="yot-form-select yot-form-select-option" name="" id="">
                    <option value="">- Select All -</option>
                    <option value="">Full Decals</option>
                    <option value="">Stock Decals</option>
                    <option value="">Temporary Plate Acrylic</option>
                    <option value="">Temporary Plate Yero</option>
                    <option value="">Sticker Mags</option>
                    <option value="">Soviener Mug</option>
                    <option value="">Pack</option>
                    <option value="">Costumize</option>
                </select>
            </div>

            <form id="updateProductSection">
                <!-- Title -->
                <div class="yot-form-group">
                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="titleProductSection">Title</label>
                    <textarea class="yot-form-input yot-tff-sas" type="text" name="titleProductSection" id="titleProductSection" style="height:80px;resize:none;" ></textarea>
                </div>

                <!-- Subtitle -->
                <div class="yot-form-group">
                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="subTitleProductSection">Sub Title</label>
                    <textarea class="yot-form-input yot-tff-sas" type="text" name="subTitleProductSection" id="subTitleProductSection" style="height:80px;resize:none;" ></textarea>
                </div>

                <!-- Images-->
                <div class="yot-form-group">
                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="imageProductSection">Multiple Images</label>
                    <input class="yot-form-input" type="file" name="imageProductSection" id="imageProductSection">
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