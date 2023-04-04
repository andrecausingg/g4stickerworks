<?php
    require_once("./asset/php/helper/global/global.php");
    $classSessionLogin = new classSessionLogin();
    $classSessionLogin->sessionLogin();

    $classSessionLoginAdmin = new classSessionLoginAdmin();
    $classSessionLoginAdmin->sessionLoginAdmin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Products</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./asset/images/g4works-favicon-16x16.png">

    <!-- Css -->
    <link rel="stylesheet" href="./asset/scss/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3967252a9e.js" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Date Picker -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                <i id="hamburgerIndex" class="fa-solid fa-bars yot-tc-blue1 yot-mr-8" style="font-size: 36px;"></i>
                <i id="statsIconOrder" class="fa-solid fa-chart-bar yot-tc-blue1 yot-hide-for-small-mobile-up" style="font-size: 36px;"></i>
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
                    <!-- Orders -->
                    <div class="yot-mb-16">
                        <div class="orderPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bb-blue yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Orders</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-down yot-text-fs-xxl faAngleRightOrder"></i></span>
                        </div>
                        <div class="orderContainerOverView yot-ml-48 yot-flex yot-flex-fd-c">
                        <!-- <a href="orders-all" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">All Orders</a> -->
                            <a href="orders-products" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px; font-weight: bolder;">Products</a>
                            <a href="orders-tarpauline" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Tarpauline</a>
                            <a href="orders-sticker" class="yot-mb-8 yot-active-bbh1 " style="font-size: 18px; font-weight: bolder;">Sticker</a>
                            <a href="orders-temporary-plate" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Temporary Plate</a>
                        </div>
                    </div>
                    <!-- <div class="yot-mb-16">
                        <a href="visitors" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Visitors</a>
                    </div> -->
                </div>
            </div>

            <!-- Management -->
            <div>
                <h4 class="yot-mb-8">MANAGEMENT</h4>
                <div class="yot-pl-48">
                    <!-- Accounts -->
                    <div class="yot-mb-16">
                        <div class="accountPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1">
                            <span style="font-size: 24px; font-weight: bolder;">Accounts</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl"></i></span>
                        </div>
                        <div class="AdEmUsContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <a href="admin-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Admin</a>
                            <a href="users-accounts" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Users</a>
                        </div>
                    </div>

                    <!-- Pages -->
                    <div class="yot-mb-16">
                        <div class="pagesPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Pages</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRightPages"></i></span>
                        </div>
                        <div class="InPrSeGaContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <a href="user-product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">User Product</a>
                            <a href="index-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Home</a>
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
                    <div class="yot-mb-16">
                        <div class="workPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Work</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRightWork"></i></span>
                        </div>
                        <div class="jobContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <!-- <a href="job" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Job</a> -->
                            <a href="cut-file" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Cut File</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="yot-text-center">
                <a class="yot-btn-blue1" href="logout" style="color:white">Log out</a>
            </div>
        </div>

    </div>

    <!-- Overlay Order Stats -->
    <div id="overlayMobileOrderStatsBg" class="yot-overlay-bg-trans yot-bg-black1 overlayLeftSideBar yot-z-index-2" style="display:none"></div>
    <div id="overlayMobileOrder" class="yot-w-75 yot-flex yot-flex-fd-c yot-vh-100 yot-bg-white yot-overlay-left overlayLeftSideBar over-view-overlay-mobile yot-z-index-2" style="display:none; overflow-y:scroll;">
        <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="padding: 8px 16px 8px 8px">
            <a href="#"><img src="./asset/images/g4works-logo.png" alt="" width="64" height="64"></a>
            <i id="hamburgerCloseOrder" class="fa-solid fa-xmark yot-tc-blue1" style="font-size: 46px; display: none;"></i>
        </div>

        <div style="padding:0px 16px">
            <!-- Container -->
            <div>
                <!--  -->
                <div class="yot-bg-white yot-mb-8 over-view-item1 yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="border-radius: 8px; padding: 16px;">
                    <h3 class="yot-tc-black">Pendings</h3>
                    <h2 class="yot-tc-black">0</span>
                </div>

                <!--  -->
                <div class="yot-bg-white yot-mb-8 over-view-item1 yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="border-radius: 8px; padding: 16px;">
                    <h3 class="yot-tc-black">Cancel</h3>
                    <h2 class="yot-tc-black">0</span>
                </div>

                <!--  -->
                <div class="yot-bg-white yot-mb-8 over-view-item1 yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="border-radius: 8px; padding: 16px;">
                    <h3 class="yot-tc-black">Done</h3>
                    <h2 class="yot-tc-black">0</span>
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
                    <!-- Orders -->
                    <div class="yot-mb-8">
                        <div class="orderPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bb-blue yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Orders</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-down yot-text-fs-xxl faAngleRightOrder"></i></span>
                        </div>
                        <div class="orderContainerOverView yot-ml-48 yot-flex yot-flex-fd-c">
                            <!-- <a href="orders-all" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">All Orders</a> -->
                            <a href="orders-products" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px; font-weight: bolder;">Products</a>
                            <a href="orders-tarpauline" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Tarpauline</a>
                            <a href="orders-sticker" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Sticker</a>
                            <a href="orders-temporary-plate" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Temporary Plate</a>
                        </div>
                    </div>
                    <!-- <div class="yot-mb-16">
                        <a href="visitors" style="font-size: 24px; font-weight: bolder;" class="">Visitors</a>
                    </div> -->
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
                        <div class="pagesPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Pages</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRightPages"></i></span>
                        </div>
                        <div class="InPrSeGaContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <a href="user-product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">User Product</a>
                            <a href="index-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Home</a>
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
                            <!-- <a href="job" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Job</a> -->
                            <a href="cut-file" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Cut File</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="yot-text-center">
                <a class="yot-btn-blue1" href="logout" style="color:white">Log out</a>
            </div>
        </div>

        <!-- Right -->
        <div class="g-main-item-right" style="padding: 24px; position: relative;">
            <div class="yot-flex-tab yot-flex-ai-c-jc-sb yot-mb-8">
                <!-- Title -->
                <h2 class="yot-mb-8 yot-resize-font-64">Products</h2>

               <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-mlr-4">
                    <div class="yot-form-group yot-mr-4">
                        <label for="startDate" class="yot-text-fs-l"><b>Start Date</b></label>
                        <input type="text" name="" class="datepicker yot-form-input" placeholder="Month/Day/Year">
                    </div>
                    <div class="yot-form-group yot-ml-4">
                        <label for="endDate" class="yot-text-fs-l"><b>End Date</b></label>
                        <input type="text" name="" class="datepicker yot-form-input" placeholder="Month/Day/Year">
                    </div>
               </div> 

               <div class="yot-mb-8">
               <label for="search" class="yot-text-fs-l"><b>Search Order No.</b></label>
                    <input type="search" name="" id="" class="yot-btn-round yot-form-input" placeholder="Search">
               </div>
            </div>

            <!-- Container -->
            <div class="over-view-container yot-hide-for-small-mobile-down">
                <div class="yot-bg-white yot-mb-8 over-view-item1 yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="border-radius: 8px; padding: 16px;">
                    <h3 class="yot-tc-black">Not Paid</h3>
                    <h2 class="yot-tc-black">0</span>
                </div>

                <div class="yot-bg-white yot-mb-8 over-view-item1 yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="border-radius: 8px; padding: 16px;">
                    <h3 class="yot-tc-black">Pending</h3>
                    <h2 class="yot-tc-black">0</span>
                </div>

                <div class="yot-bg-white yot-mb-8 over-view-item1 yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="border-radius: 8px; padding: 16px;">
                    <h3 class="yot-tc-black">Verified</h3>
                    <h2 class="yot-tc-black">0</span>
                </div>

                <div class="yot-bg-white yot-mb-8 over-view-item1 yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="border-radius: 8px; padding: 16px;">
                    <h3 class="yot-tc-black">Reject</h3>
                    <h2 class="yot-tc-black">0</span>
                </div>
            </div>

            <!-- Container -->
            <div class="over-view-container yot-hide-for-small-mobile-down">
                <div class="yot-bg-white yot-mb-8 over-view-item1 yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="border-radius: 8px; padding: 16px;">
                    <h3 class="yot-tc-black">Ready</h3>
                    <h2 class="yot-tc-black">0</span>
                </div>

                <div class="yot-bg-white yot-mb-8 over-view-item1 yot-flex yot-flex-ai-c-jc-sb yot-mb-8" style="border-radius: 8px; padding: 16px;">
                    <h3 class="yot-tc-black">Done</h3>
                    <h2 class="yot-tc-black">0</span>
                </div>
            </div>

            <!-- Table -->
            <div class="yot-w-100" id="displayProduct" style="max-height:650px; overflow-y:scroll"></div>

        </div>
    </div>

    <!-- Cancel -->
    <div class=" yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
    <div class="yot-overlay-mid-container" style="display: none;">
        <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form yot-text-center">
            <h1 class="yot-mb-16">Are you sure you want to Cancel?</h1>
            <div>
                <button class="yot-btn-blue1">Yes</button>
                <button class="yot-btn-blue1">No</button>
            </div>
        </div>
    </div>

    <!-- Done -->
    <div class=" yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
    <div class="yot-overlay-mid-container" style="display: none;">
        <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form yot-text-center">
            <h1 class="yot-mb-16">Are you sure you want to mark as Done?</h1>
            <div>
                <button class="yot-btn-blue1">Yes</button>
                <button class="yot-btn-blue1">No</button>
            </div>
        </div>
    </div>

    <script src="./asset/js/all/global.js"></script>
    <script src="./asset/js/order/order.js"></script>
    <script src="./asset/js/api/jquery-date-picker/date-picker.js"></script>
    <script src="./asset/js/orders-product/display/d-order-product.js"></script>
</body>
</html>