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
    <title>Product Page</title>

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
    <div id="overlayMobileIndex" class="yot-w-75 yot-flex yot-flex-fd-c yot-vh-100 yot-bg-white yot-overlay-left overlayLeftSideBar over-view-overlay-mobile yot-z-index-2" style="display:none;overflow-y: scroll;">
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
                            <a href="orders-tarpauline" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Tarpaulin</a>
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
                            <a href="product-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Product</a>
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
                            <a href="orders-tarpauline" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Tarpaulin</a>
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
                            <a href="product-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Product</a>
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
        <div class="g-main-item-right" style="padding: 24px;">
            <!-- Title -->
            <h2 class="yot-mb-16 yot-resize-font-64">Product Page</h2>
            
            <!-- Btn Form Container -->
            <div class="over-view-container">
                <!-- Decals  -->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item1 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Decals</h3>
                    </div>
                    <div>
                        <button id="decalsFormBtn" class="yot-btn-white1 yot-mb-8">Decals Form</button>
                    </div>
                </div>

                <!-- Temporary Plate No  -->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item2 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Temporary Plate No.</h3>
                    </div>
                    <div>
                        <button id="TempPlateFormBtn" class="yot-btn-white1 yot-mb-8">Temp Plate Form</button>
                    </div>
                </div>

                <!-- Product Sticker Labels -->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item3 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Sticker Labels</h3>
                    </div>
                    <div>
                        <button id="stickerLabelFormBtn" class="yot-btn-white1 yot-mb-8">Sticker Labels Form</button>
                    </div>
                </div>

                <!-- Tarpauline -->
                <div class="yot-bg-blue1 yot-mb-8 over-view-item3 yot-text-center" style="border-radius: 8px; padding: 8px;">
                    <div class="yot-mb-8">
                        <h3 class="yot-tc-white">Tarpauline</h3>
                    </div>
                    <div>
                        <button id="tarpaulineFormBtn" class="yot-btn-white1 yot-mb-8">Tarp Form</button>
                    </div>
                </div>
            </div>
            
            <!-- Create Update Delete Container Decals-->
            <div id="createBgContainerDecals" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
            <div id="createFormContainerDecals" class="yot-overlay-mid-container" style="display:none;">
                <div id="mainFormContainer" class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                    <!-- Title -->
                    <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                        <h2 id="titleCaptionDecals" class="yot-tc-blue1">CREATE</h2>

                        <i id="createCloseFormIconDecals" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                    </div>

                    <!-- Select Create Update Delete Form -->
                    <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                        <h2>Decals</h2>
                        <select class="yot-form-select yot-form-select-option" name="selectOptionDecals" id="selectOptionDecals">
                            <option value="create">Create</option>
                            <option value="update">Update</option>
                            <option value="delete">Delete</option>
                        </select>
                    </div>

                    <!-- Filter Update-->
                    <div id="filterDecalsUpdate" class="yot-row yot-flex-ai-c-jc-se yot-hide-for-mobile" style="display:none">
                        <!-- Select Decals -->
                        <div class="yot-form-group yot-flex yot-flex-fd-c-ai-c yot-col-100">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="decals">Type</label>
                            <select class="yot-form-select yot-form-select-option"  name="decalSelectFilterUpdate" id="decalSelectFilterUpdate">
                                <option value="">- Select Decals -</option>
                                <option value="Full Decals">Full Decals</option>
                                <option value="Stock Decals">Stock Decals</option>
                                <option value="Sticker Mags">Sticker Mags</option>
                            </select>
                        </div>

                        <!-- Select Brand -->
                        <div id="brandContainerFilterUpdate" class="yot-form-group yot-flex yot-flex-fd-c-ai-c yot-col-100">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="brand">Brand</label>
                            <select class="yot-form-select yot-form-select-option" name="brandSelectFilterUpdate" id="brandSelectFilterUpdate"></select>
                        </div>

                        <!-- Select Model -->
                        <div id="modelContainerFilterUpdate" class="yot-form-group yot-flex yot-flex-fd-c-ai-c yot-col-100">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="model">Model</label>
                            <select class="yot-form-select yot-form-select-option" name="modelSelectFilterUpdate" id="modelSelectFilterUpdate"></select>
                        </div>
                    </div>

                    <!-- Filter Delete-->
                    <div id="filterDecalsDelete" class="yot-row yot-flex-ai-c-jc-se yot-hide-for-mobile" style="display:none">
                        <!-- Select Decals -->
                        <div class="yot-form-group yot-flex yot-flex-fd-c-ai-c yot-col-100">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="decals">Type</label>
                            <select class="yot-form-select yot-form-select-option"  name="decalSelectFilter" id="decalSelectFilter">
                                <option value="">- Select Decals -</option>
                                <option value="Full Decals">Full Decals</option>
                                <option value="Stock Decals">Stock Decals</option>
                                <option value="Sticker Mags">Sticker Mags</option>
                            </select>
                        </div>

                        <!-- Select Brand -->
                        <div id="brandContainerFilter" class="yot-form-group yot-flex yot-flex-fd-c-ai-c yot-col-100">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="brand">Brand</label>
                            <select class="yot-form-select yot-form-select-option" name="brandSelectFilter" id="brandSelectFilter"></select>
                        </div>

                        <!-- Select Model -->
                        <div id="modelContainerFilter" class="yot-form-group yot-flex yot-flex-fd-c-ai-c yot-col-100">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="model">Model</label>
                            <select class="yot-form-select yot-form-select-option" name="modelSelectFilter" id="modelSelectFilter"></select>
                        </div>
                    </div>

                    <!-- Create Form Container -->
                    <div id="createDisplayContainerDecals">
                        <form id="createFormDecals">
                            <!-- Select Decals -->
                            <div class="yot-form-group yot-flex yot-flex-fd-c-ai-c">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="decals">Type of Decals</label>
                                <select class="yot-form-select yot-form-select-option yot-w-50"  name="selectDecals" id="selectDecals">
                                    <option value="">- Select Decals -</option>
                                    <option value="Full Decals">Full Decals</option>
                                    <option value="Stock Decals">Stock Decals</option>
                                    <option value="Sticker Mags">Sticker Mags</option>
                                </select>
                            </div>

                            <!-- Select Brand -->
                            <div class="yot-form-group yot-flex yot-flex-fd-c-ai-c selectContainerBrand" style="display:none">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="brand">Brand</label>
                                <select class="yot-form-select yot-form-select-option yot-w-50" name="brandSelect" id="brandSelect"></select>
                            </div>

                            <!-- Select Model -->
                            <div class="yot-form-group yot-flex yot-flex-fd-c-ai-c selectContainerModel" style="display:none">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="model">Model</label>
                                <select class="yot-form-select yot-form-select-option yot-w-50" name="modelSelect" id="modelSelect"></select>
                            </div>

                            <!-- Select upload Image -->
                            <div class="yot-form-group yot-flex-fd-c-ai-c uploadImageContainerDecals" style="display:none">.
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="uploadImageDecals">Upload Image</label>
                                <input class="yot-form-input" type="file" name="imageDecals" id="imageDecals">
                            </div>

                            <!-- Price -->
                            <div class="yot-form-group yot-flex-fd-c-ai-c" style="display:none">.
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="uploadImageDecals">Price</label>
                                <input class="yot-form-input" type="file" name="priceDecals" id="priceDecals">
                            </div>

                            <!-- Submit Btn -->
                            <div class="yot-text-center submitContainerDecals" style="display:none">
                                <input class="yot-btn-blue1" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>

                    <!-- Update Container -->
                    <div id="updateDisplayContainerDecals" style="display:none;">
                        <!-- Table For Delete-->
                        <div class="yot-w-100" id="updateDisplayDecals" style="overflow-y:scroll;max-height:400px; "></div>
                    </div>

                    <!-- Delete Container -->
                    <div id="deleteDisplayContainerDecals" style="display:none;">
                        <!-- Table For Delete-->
                        <div class="yot-w-100" id="deleteDisplayDecals" style="overflow-y:scroll;max-height:400px; "></div>
                    </div>
                </div>
            </div>

            <!-- Create Update Delete Container Template-->
            <div id="createBgContainerTempPlate" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
            <div id="createFormContainerTempPlate" class="yot-overlay-mid-container" style="display:none;">
                <div id="mainFormContainerTempPlate" class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                    <!-- Title -->
                    <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                        <h2 id="titleCaptionTempPlate" class="yot-tc-blue1">CREATE</h2>

                        <i id="createCloseFormIconTempPlate" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                    </div>

                    <!-- Select Create Update Delete Form -->
                    <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                        <h2>Temporary Plate</h2>
                        <select class="yot-form-select yot-form-select-option" name="selectOptionTempPlate" id="selectOptionTempPlate">
                            <option value="create">Create</option>
                            <option value="update">Update</option>
                            <option value="delete">Delete</option>
                        </select>
                    </div>

                    <!-- Create Form Container -->
                    <div id="createDisplayContainerTempPlate">
                        <form id="createFormTempPlate">
                            <!-- Select TempPlate -->
                            <div class="yot-form-group yot-flex yot-flex-fd-c-ai-c">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="tempPlate">Temporary Plate</label>
                                <select class="yot-form-select yot-form-select-option yot-w-50"  name="selectTempPlate" id="selectTempPlate">
                                    <option value="">- Select -</option>
                                    <option value="Acrylic">Acrylic</option>
                                    <option value="Steel">Steel</option>
                                </select>
                            </div>

                            <!-- Select upload Image -->
                            <div class="yot-form-group yot-flex-fd-c-ai-c">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="uploadImageTempPlate">Upload Image</label>
                                <input class="yot-form-input" type="file" name="imageTempPlate" id="imageTempPlate">
                            </div>

                            <!-- Submit Btn -->
                            <div class="yot-text-center">
                                <input class="yot-btn-blue1" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>

                    <!-- Update Container -->
                    <div id="updateDisplayContainerTempPlate" style="display:none;">
                        <!-- Table For Delete-->
                        <div class="yot-w-100" id="updateDisplayTempPlate" style="overflow-y:scroll;max-height:400px; "></div>
                    </div>

                    <!-- Delete Container -->
                    <div id="deleteDisplayContainerTempPlate" style="display:none;">
                        <!-- Table For Delete-->
                        <div class="yot-w-100" id="deleteDisplayTempPlate" style="overflow-y:scroll;max-height:400px; "></div>
                    </div>
                </div>
            </div>

            <!-- Create Update Delete Container Product Sticker Labels-->
            <div id="createBgContainerStickerLabel" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
            <div id="createFormContainerStickerLabel" class="yot-overlay-mid-container" style="display:none;">
                <div id="mainFormContainerStickerLabel" class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                    <!-- Title -->
                    <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                        <h2 id="titleCaptionStickerLabel" class="yot-tc-blue1">CREATE</h2>

                        <i id="createCloseFormIconStickerLabel" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                    </div>

                    <!-- Select Create Update Delete Form -->
                    <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                        <h2>Sticker Labels</h2>
                        <select class="yot-form-select yot-form-select-option" name="selectOptionStickerLabel" id="selectOptionStickerLabel">
                            <option value="create">Create</option>
                            <option value="update">Update</option>
                            <option value="delete">Delete</option>
                        </select>
                    </div>

                    <!-- Create Form Container -->
                    <div id="createDisplayContainerStickerLabel">
                        <form id="createFormStickerLabel">
                            <!-- Select upload Image -->
                            <div class="yot-form-group yot-flex-fd-c-ai-c">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="uploadImageStickerLabel">Upload Image</label>
                                <input class="yot-form-input" type="file" name="imageStickerLabel" id="imageStickerLabel">
                            </div>

                            <!-- Submit Btn -->
                            <div class="yot-text-center">
                                <input class="yot-btn-blue1" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>

                    <!-- Update Container -->
                    <div id="updateDisplayContainerStickerLabel" style="display:none;">
                        <!-- Table For Delete-->
                        <div class="yot-w-100" id="updateDisplayStickerLabel" style="overflow-y:scroll;max-height:400px; "></div>
                    </div>

                    <!-- Delete Container -->
                    <div id="deleteDisplayContainerStickerLabel" style="display:none;">
                        <!-- Table For Delete-->
                        <div class="yot-w-100" id="deleteDisplayStickerLabel" style="overflow-y:scroll;max-height:400px; "></div>
                    </div>
                </div>
            </div>

            <!-- Create Update Delete Container Tarpauline-->
            <div id="createBgContainerTarpauline" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
            <div id="createFormContainerTarpauline" class="yot-overlay-mid-container" style="display:none;">
                <div id="mainFormContainerTarpauline" class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                    <!-- Title -->
                    <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                        <h2 id="titleCaptionTarpauline" class="yot-tc-blue1">CREATE</h2>

                        <i id="createCloseFormIconTarpauline" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                    </div>

                    <!-- Select Create Update Delete Form -->
                    <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                        <h2>Tarpauline</h2>
                        <select class="yot-form-select yot-form-select-option" name="selectOptionTarpauline" id="selectOptionTarpauline">
                            <option value="create">Create</option>
                            <option value="update">Update</option>
                            <option value="delete">Delete</option>
                        </select>
                    </div>

                    <!-- Create Form Container -->
                    <div id="createDisplayContainerTarpauline">
                        <form id="createFormTarpauline">
                            <!-- Select upload Image -->
                            <div class="yot-form-group yot-flex-fd-c-ai-c">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="uploadImageTarpauline">Upload Image</label>
                                <input class="yot-form-input" type="file" name="imageTarpauline" id="imageTarpauline">
                            </div>

                            <!-- Submit Btn -->
                            <div class="yot-text-center">
                                <input class="yot-btn-blue1" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>

                    <!-- Update Container -->
                    <div id="updateDisplayContainerTarpauline" style="display:none;">
                        <!-- Table For Delete-->
                        <div class="yot-w-100" id="updateDisplayTarpauline" style="overflow-y:scroll;max-height:400px; "></div>
                    </div>

                    <!-- Delete Container -->
                    <div id="deleteDisplayContainerTarpauline" style="display:none;">
                        <!-- Table For Delete-->
                        <div class="yot-w-100" id="deleteDisplayTarpauline" style="overflow-y:scroll;max-height:400px; "></div>
                    </div>
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

    <!-- Error Container Invalid File Type -->
    <div id="invalidfiletypeAlert" class="yot-bg-red yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Error Invalid File Type</h3>
            <i id="alertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl alertCloseIcon"></i>
        </div>
        <p class="yot-text-fs-l">Only JPG, JPEG, and PNG files are allowed.</p>
    </div>

    <!-- Error Container Uploading Image -->
    <div id="errorUploadingimageAlert" class="yot-bg-red yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Error Uploading image</h3>
            <i id="alertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl alertCloseIcon"></i>
        </div>
        <p class="yot-text-fs-l">There's Something Wrong!</p>
    </div>

    <!-- Error Container Invalidfiletype -->
    <div id="errorImagetoolargeAlert" class="yot-bg-red yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Error File too Big</h3>
            <i id="alertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl alertCloseIcon"></i>
        </div>
        <p class="yot-text-fs-l">Allowed size is 50mb</p>
    </div>

    <script src="./asset/js/all/global.js"></script>
    <script src="./asset/js/product-page/display/d-data.js"></script>
    <script src="./asset/js/product-page/create-decals.js"></script>
    <script src="./asset/js/product-page/update-decals.js"></script>
    <script src="./asset/js/product-page/delete-decals.js"></script>

    <script src="./asset/js/product-page/create-temp-plate.js"></script>
    <script src="./asset/js/product-page/update-temp-plate.js"></script>
    <script src="./asset/js/product-page/delete-temp-plate.js"></script>

    <script src="./asset/js/product-page/create-sticker-label.js"></script>
    <script src="./asset/js/product-page/update-sticker-label.js"></script>
    <script src="./asset/js/product-page/delete-sticker-label.js"></script>

    <script src="./asset/js/product-page/create-tarpauline.js"></script>
    <script src="./asset/js/product-page/update-tarpauline.js"></script>
    <script src="./asset/js/product-page/delete-tarpauline.js"></script>
</body>
</html>