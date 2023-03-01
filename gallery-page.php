<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>

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
                            <!-- <a href="emp-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Employee</a> -->
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
                            <a href="index-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Home</a>
                            <a href="product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Product</a>
                            <a href="services-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Services</a>
                            <a href="contact-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Contact Us</a>
                            <a href="about-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">About Us</a>
                            <a href="gallery-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Gallery</a>
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
                            <!-- <a href="employee-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Employee</a> -->
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
                            <a href="index-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Home</a>
                            <a href="product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Product</a>
                            <a href="services-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Services</a>
                            <a href="contact-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Contact Us</a>
                            <a href="about-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">About Us</a>
                            <a href="gallery-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Gallery</a>
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
            <div class="yot-row yot-flex-ai-c-jc-sb">
                <h2 class="yot-mb-16 yot-resize-font-64">Gallery Pages</h2>
                <div class="yot-text-center yot-bg-white yot-pa-16">
                    <button id="createBtn" class="yot-btn-blue1">Create</button>
                    <button id="updateBtn" class="yot-btn-blue1">Update</button>
                    <button id="deleteBtn" class="yot-btn-blue1">Delete</button>
                </div>
            </div>
            
            <!-- Gallery Section -->
            <section >
                <!-- Title -->
                <div class="yot-mb-16 yot-tc-blue1 yot-text-center">
                    <h1 class="yot-resize-font-64">Gallery</h1>
                    <p class="yot-resize-font-18 yot-mb-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, aut rem a praesentium natus</p>
                </div>

                <div class="yot-row">
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
        
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
        
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
        
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
                </div>

                <div class="yot-row">
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
        
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
        
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
        
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
                </div>

                <div class="yot-row">
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
        
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
        
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
        
                    <div class="yot-col-25">
                        <img src="./asset/images/products/mio-i-125/mio-i-125-blue.png" alt="">
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="./asset/js/all/global.js"></script>
</body>
</html>