<?php
    require_once("./asset/php/helper/global/global.php");
    $classSessionLogin = new classSessionLogin();
    $classSessionLogin->sessionLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

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
    <header class="yot-header yot-bg-white">
        <!-- Nav -->
        <nav class="yot-flex yot-flex-ai-c-jc-sb yot-container yot-pa-8">
            <!-- Logo -->
            <a href="#"><img src="./asset/images/g4works-logo.png" alt="" width="64" height="64"></a>

            <!-- Nav Links -->
            <div class="yot-hide-for-mobile yot-flex">
                <a href="user-product" class="yot-text-fs-xl yot-active-bbh1">Products</a> <span class="yot-mlr-4"></span>
                <a href="user-ready-to-print" class="yot-text-fs-xl yot-active-bbh1">Tarpaulin</a> <span class="yot-mlr-4"></span>
                <!-- Tarpaulin -->
                <!-- <div style="position: relative">
                    <div class="tarpaulinContainerUserProduct yot-flex yot-active-bbh1 yot-cursor-pointer">
                        <span class="tarpaulinNavLink yot-text-fs-xl">Tarpaulin</span>
                    </div>
                    <div class="rPmLContainer yot-ml-48 yot-flex yot-flex-fd-c yot-bg-white yot-pa-16" style="display:none; position: absolute; width: 200px; right: -111px;">
                        <a href="user-ready-to-print" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Ready To Print</a>
                        <a href="user-make-layout" class="yot-text-fs-xl yot-active-bbh1">Make Layout</a>
                    </div>
                </div> <span class="yot-mlr-4"></span> -->
                <a href="user-sticker" class="yot-text-fs-xl yot-active-bbh1">Sticker</a> <span class="yot-mlr-4"></span>
                <a href="user-temporary-plate" class="yot-text-fs-xl yot-active-bbh1">Temporary Plate</a> <span class="yot-mlr-4"></span>
            </div>

            <!-- Nav Links -->
            <div class="yot-hide-for-mobile yot-flex yot-flex-ai-c">
                <a href="user-profile" class="yot-text-fs-xl yot-active-bb-blue">Profile</a> <span class="yot-mlr-4">|</span>
                <a href="user-my-cart" class="yot-text-fs-xl yot-active-bbh1">My Cart </a> <span class="yot-mlr-4">|</span>
                <a href="user-my-orders" class="yot-text-fs-xl yot-active-bbh1">My Orders</a>
            </div>

            <!-- Hamburger -->
            <div class="yot-hide-for-desktop">
                <i id="hamburgerIndex" class="fa-solid fa-bars yot-tc-blue1" style="font-size: 36px;"></i>
            </div>
        </nav>
    </header>

    <!-- Overlay Mobile -->
    <div id="overlayMobileBgIndex" class="yot-overlay-bg-trans yot-bg-black1 overlayLeftSideBar" style="display:none"></div>
    <div id="overlayMobileIndex" class="yot-w-75 yot-flex yot-flex-fd-c  yot-vh-100 yot-bg-white yot-overlay-left yot-pa-16 overlayLeftSideBar" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb" style="margin: 8px 0px 16px 0px;">
            <a href="user-product" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Products</a>
            <i id="hamburgerCloseIndex" class="fa-solid fa-xmark yot-tc-blue-1" style="font-size: 46px; display: none;"></i>
        </div>
        <div class="yot-mb-16">
            <a href="user-ready-to-print" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Tarpaulin</a>
        </div>
        <!-- Tarpaulin -->
        <!-- <div class="yot-mb-8">
            <div class="tarpaulinContainerUserProduct yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                <span style="font-size: 36px; font-weight: bolder;">Tarpaulin</span>
                <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRight"></i></span>
            </div>
            <div class="rPmLContainer yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                <a href="user-ready-to-print" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Ready to Print</a>
                <a href="user-make-layout" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Make Layout</a>
            </div>
        </div> -->
        <div class="yot-mb-16">
            <a href="user-sticker" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Sticker</a>
        </div>
        <div class="yot-mb-16">
            <a href="user-temporary-plate" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Temporary Plate</a>
        </div>
        <div class="yot-mb-16">
            <a href="user-profile" class="yot-active-bb-blue" style="font-size: 36px; font-weight: bolder;">Profile</a>
        </div>
        <div class="yot-mb-16">
            <a href="user-my-cart" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;"></i>My Cart </a>
        </div>
        <div class="yot-mb-16">
            <a href="user-my-orders" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">My Orders</a>
        </div>
    </div>
    <!-- Profile Container Data -->
    <div id="displayProfileInfo" class="yot-content-space-margin-t-120 yot-container yot-overlay-mid-container-form-tablet-size-up"></div>

    <!-- Update Container First and Last Name-->
    <div id="updateBgContainerForm" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
        <!-- Update First Name and Last Name Container -->
        <div id="updateContainerFormFNameAndLName" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <!-- Title -->
                <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">Update</h2>
                    <i id="updateCloseFormIconFNameAndLName" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Update Container -->
                <div id="updateDisplayContainerFNameAndLName"></div>
            </div>
        </div>

        <!-- Update Phone Number -->
        <div id="updateContainerFormPhoneNumber" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <!-- Title -->
                <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">Update</h2>
                    <i id="updateCloseFormIconPhoneNumber" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Update Container -->
                <div id="updateDisplayContainerPhoneNumber"></div>
            </div>
        </div>

        <!-- Update Email -->
        <div id="updateContainerFormEmail" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <!-- Title -->
                <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">Update</h2>
                    <i id="updateCloseFormIconEmail" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Update Container -->
                <div id="updateDisplayContainerEmail"></div>
            </div>
        </div>

        <!-- Update Password -->
        <div id="updateContainerFormPassword" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <!-- Title -->
                <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">Update</h2>
                    <i id="updateCloseFormIconPassword" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Update Container -->
                <div id="updateDisplayContainerPassword"></div>
            </div>
        </div>
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
    <script src="./asset/js/profile/display/d-data.js"></script>
    <script src="./asset/js/profile/update-fname-lname.js"></script>
    <script src="./asset/js/profile/update-phone-number.js"></script>
    <script src="./asset/js/profile/update-email.js"></script>
    <script src="./asset/js/profile/update-password.js"></script>
</body>
</html>