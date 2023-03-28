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
    <title>Make Layout</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/asset/images/g4works-favicon-16x16.png">

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

                <!-- Tarpaulin -->
                <div style="position: relative">
                    <div class="tarpaulinContainerUserProduct yot-flex yot-active-bb-blue yot-cursor-pointer">
                        <span class="tarpaulinNavLink yot-text-fs-xl">Tarpaulin</span>
                    </div>
                    <div class="rPmLContainer yot-ml-48 yot-flex yot-flex-fd-c yot-bg-white yot-pa-16" style="display:none; position: absolute; width: 200px; right: -111px;">
                        <a href="user-ready-to-print" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">Ready To Print</a>
                        <a href="user-make-layout" class="yot-text-fs-xl yot-active-bb-blue">Make Layout</a>
                    </div>
                </div> <span class="yot-mlr-4"></span>

                <a href="user-sticker" class="yot-text-fs-xl yot-active-bbh1">Sticker</a> <span class="yot-mlr-4"></span>
                <a href="user-temporary-plate" class="yot-text-fs-xl yot-active-bbh1">Temporary Plate</a> <span class="yot-mlr-4"></span>
            </div>

            <!-- Nav Links -->
            <div class="yot-hide-for-mobile yot-flex yot-flex-ai-c">
                <a href="user-profile" class="yot-text-fs-xl yot-active-bbh1">Profile</a> <span class="yot-mlr-4">|</span>
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
        <!-- Tarpaulin -->
        <div class="yot-mb-8">
            <div class="tarpaulinContainerUserProduct yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-active-bb-blue yot-cursor-pointer">
                <span style="font-size: 36px; font-weight: bolder;">Tarpaulin</span>
                <span class="yot-ml-16"><i class="fa-solid fa-angle-down yot-text-fs-xxl faAngleRight"></i></span>
            </div>
            <div class="rPmLContainer yot-ml-48 yot-flex yot-flex-fd-c">
                <a href="user-ready-to-print" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">Ready to Print</a>
                <a href="user-make-layout" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px; font-weight: bolder;">Make Layout</a>
            </div>
        </div>
        <div class="yot-mb-16">
            <a href="user-sticker" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Sticker</a>
        </div>
        <div class="yot-mb-16">
            <a href="user-temporary-plate" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Temporary Plate</a>
        </div>
        <div class="yot-mb-16">
            <a href="user-profile" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Profile</a>
        </div>
        <div class="yot-mb-16">
            <a href="user-my-cart" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;"></i>My Cart </a>
        </div>
        <div class="yot-mb-16">
            <a href="user-my-orders" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">My Orders</a>
        </div>
    </div>

    <!-- Make Layout Container -->
    <div class="yot-content-space-margin-t-120 yot-container">
        <!-- Title -->
        <div class="yot-text-center yot-tc-blue1 yot-mb-16">
            <h1 class="yot-resize-font-64">Make Layout</h1>
        </div>

        <div class="yot-container">
            <div class="yot-row yot-mb-16">
                <div class="yot-col-50">
                    <h2>Example Image</h2>
                    <div class="yot-bg-white image-container-RTP yot-mb-16">
                        <img src="./asset/images/vms.png" alt="" >
                    </div>
                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                        <div class="yot-flex yot-flex-ai-c">
                            <input type="checkbox" name="" id="">
                            <h5>I don't have Image</h5>
                        </div>
                        <button class="yot-btn-blue1">Upload Image</button>
                    </div>
                </div>

                <div class="yot-col-50">
                    <h2>Images to Insert in Layout</h2>
                    <div class="yot-bg-white image-container-RTP yot-mb-16">
                        <img src="./asset/images/vms.png" alt="" >
                    </div>
                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                        <div class="yot-flex yot-flex-ai-c">
                            <input type="checkbox" name="" id="">
                            <h5>I don't have Image</h5>
                        </div>
                        <button class="yot-btn-blue1">Upload Image</button>
                    </div>
                </div>
            </div>

            <div class="yot-col-50" style="margin: auto;">
                <!-- Widht and Height -->
                <div class="yot-flex yot-flex-ai-c">
                    <div class="yot-form-group yot-w-50">
                        <label for="width"><h4>Width(Foot)</h4></label>
                        <input class="yot-form-input" type="text" name="" id="">

                        <!-- Proportion Width -->
                        <div class="yot-flex yot-flex-ai-c-jc-s">
                            <input type="checkbox" id="widthProportion" name="widthProportion" value="widthProportion" value="Width Proportion">
                            <label for="widthProportion"><h5>Proportion</h5></label>
                        </div>
                    </div>

                    <h4 class="yot-ma-16" style="margin-top: 34px;">X</h4>

                    <div class="yot-form-group yot-w-50">
                        <label for="height"><h4>Height(Foot)</h4></label>
                        <input class="yot-form-input" type="text" name="" id="">

                        <!-- Proportion Height -->
                        <div class="yot-flex yot-flex-ai-c-jc-s">
                            <input type="checkbox" id="heightProportion" name="heightProportion" value="Height Proportion">
                            <label for="heightProportion"><h5>Proportion</h5></label>
                        </div>
                    </div>
                </div>

                <div class="yot-flex yot-flex-ai-c">
                    <div class="yot-form-group yot-w-50">
                        <label for="quantity"><h4>Quantity</h4></label>
                        <input class="yot-form-input" type="text" name="" id="">
                    </div>
                    <span class="yot-mlr-4"></span>
                    <div class="yot-form-group yot-w-50">
                        <label for="dateWantToGet"><h4>Date want to get</h4></label>
                        <input type="text" name="" class="datepicker yot-form-input" placeholder="Month/Day/Year">
                    </div>
                </div>

                <!-- Price -->
                <div class="yot-form-group yot-text-center  ">
                    <h1>Total Price</h1>
                    <h1>0.00</h1>
                </div>

                <div>
                    <div class="yot-form-group yot-w-100">
                        <label for="quantity"><h4>Message</h4></label>
                        <textarea class="yot-form-input" style="resize: none; height: 150px;" name="" id=""></textarea>
                    </div>
                </div>

                <div class="yot-text-center">
                    <button class="yot-btn-blue1">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./asset/js/all/global.js"></script>
    <script src="./asset/js/api/jquery-date-picker/date-picker.js"></script>
</body>
</html>