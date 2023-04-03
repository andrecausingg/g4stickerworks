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
    <title>Contact Us Page</title>

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
                   <!-- Orders -->
                   <div class="yot-mb-8">
                        <div class="orderPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Orders</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRightOrder"></i></span>
                        </div>
                        <div class="orderContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <!-- <a href="orders-all" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">All Orders</a> -->
                            <a href="orders-products" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Products</a>
                            <a href="orders-tarpauline" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Tarpauline</a>
                            <a href="orders-sticker" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Sticker</a>
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
                            <a href="user-product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">User Product</a>
                            <a href="index-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Home</a>
                            <a href="product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Product</a>
                            <a href="services-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Services</a>
                            <a href="contact-us-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Contact Us</a>
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
                        <div class="orderPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Orders</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRightOrder"></i></span>
                        </div>
                        <div class="orderContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <!-- <a href="orders-all" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">All Orders</a> -->
                            <a href="orders-products" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Products</a>
                            <a href="orders-tarpauline" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Tarpauline</a>
                            <a href="orders-sticker" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Sticker</a>
                            <a href="orders-temporary-plate" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Temporary Plate</a>
                        </div>
                    </div>
                    <!-- <div class="yot-mb-16">
                        <a href="visitors" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Visitors</a>
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
                        <a href="user-product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">User Product</a>
                            <a href="index-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Home</a>
                            <a href="product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Product</a>
                            <a href="services-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Services</a>
                            <a href="contact-us-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Contact Us</a>
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
        <div class="g-main-item-right" style="padding: 24px;">
            <!-- Title with Btn Form-->
            <div class="yot-row yot-flex-ai-c-jc-sb yot-bg-white yot-pa-8">
                <h2 class="yot-mb-8 yot-resize-font-64">Contact Us Page</h2>
                <div class="yot-text-center yot-pa-16">
                    <button id="subTitleBtn" class="yot-btn-blue1">Sub Title</button>
                    <!-- <button id="imagesBtn" class="yot-btn-blue1">Images</button> -->
                </div>
            </div>
            
            <!-- contact Us -->
            <div class="yot-content-space-margin-t-80 yot-container">
                <!-- Contact Us Section -->
                <section>
                    <!-- Title-->
                    <div class="yot-tc-blue1 yot-text-center">
                        <h1 class="yot-resize-font-64">CONTACT US</h1>
                        <p id="displaySubTitle" class="yot-resize-font-18 yot-mb-16"></p>
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
            </div>

            <!-- Create Update Delete Sub Title Container -->
            <div id="createBgContainerSubTitle" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
            <div id="createFormContainerSubtitle" class="yot-overlay-mid-container" style="display:none;">
                <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                    <!-- Title -->
                    <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                        <h2 id="titleCaption" class="yot-tc-blue1">CREATE</h2>
                        <i id="createCloseFormIconSubtitle" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                    </div>

                    <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                        <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="subTitle">Sub Title</label>
                        <select class="yot-form-select yot-form-select-option" name="selectOptionSubTitle" id="selectOptionSubTitle">
                            <option value="create">Create</option>
                            <option value="update">Update</option>
                            <option value="delete">Delete</option>
                        </select>
                    </div>

                    <!-- Create Form Container -->
                    <div id="createDisplayContainerSubTitle">
                        <form id="createFormSubTitle">
                            <div class="yot-form-group">
                                <textarea class="yot-form-input yot-tff-sas" type="text" name="subTitle" id="subTitle" style="height:100px;resize:none;" ></textarea>
                            </div>

                            <div class="yot-text-center">
                                <input class="yot-btn-blue1" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>

                    <!-- Update Container -->
                    <div id="updateDisplayContainerSubTitle" style="display:none"></div>

                    <!-- Delete Container -->
                    <div id="deleteDisplayContainerSubTitle" style="display:none"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Container-->
    <div id="createSuccessAlert" class="yot-bg-green yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Insertion:</h3>
            <i id="createSuccessAlertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">The record was successfully inserted.</p>
    </div>

    <!-- Delete Container-->
    <div id="deleteSuccessAlert" class="yot-bg-red yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Deletion:</h3>
            <i id="deleteSuccessAlertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">The record was successfully deleted.</p>
    </div>

    <!-- Success Update Container-->
    <div id="updateSuccessAlert" class="yot-bg-orange yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Update:</h3>
            <i id="updateSuccessAlertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">The record was successfully updated.</p>
    </div>


    <script src="./asset/js/all/global.js"></script>

    <script src="./asset/js/contact-us-page/create-sub-title.js"></script>
    <script src="./asset/js/contact-us-page/update-sub-title.js"></script>
    <script src="./asset/js/contact-us-page/delete-sub-title.js"></script>

    <script src="./asset/js/contact-us-page/display/d-data.js"></script>
</body>
</html>