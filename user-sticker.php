<?php
    require_once("./asset/php/helper/global/global.php");
    $classSessionLogin = new classSessionLogin();
    $classSessionLogin->sessionLogin();

    $classSessionLoginUser = new classSessionLoginUser();
    $classSessionLoginUser->sessionLoginUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticker</title>

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
                <a href="user-sticker" class="yot-text-fs-xl yot-active-bb-blue">Sticker</a> <span class="yot-mlr-4"></span>
                <a href="user-temporary-plate" class="yot-text-fs-xl yot-active-bbh1">Temporary Plate</a> <span class="yot-mlr-4"></span>
            </div>

            <!-- Nav Links -->
            <div class="yot-hide-for-mobile yot-flex yot-flex-ai-c">
                <a href="user-profile" class="yot-text-fs-xl yot-active-bbh1">Profile</a> <span class="yot-mlr-4">|</span>
                <a href="user-my-cart" class="yot-text-fs-xl yot-active-bbh1">My Cart </a> <span class="yot-mlr-4">|</span>
                <!-- <a href="user-my-orders" class="yot-text-fs-xl yot-active-bbh1">My Orders</a> <span class="yot-mlr-4">|</span> -->
                <!-- My Order -->
                <div style="position: relative">
                    <div class="tarpaulinContainerUserProduct yot-flex yot-active-bbh1 yot-cursor-pointer">
                        <span class="tarpaulinNavLink yot-text-fs-xl">My Order</span>
                    </div>
                    <div class="rPmLContainer yot-ml-48 yot-flex yot-flex-fd-c yot-bg-white yot-pa-16" style="display:none; position: absolute; width: 150px; right: -40px;">
                        <a href="user-my-orders-pending" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">PENDING</a>
                        <a href="user-my-orders-reject" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1 yot-tc-red">REJECT</a>
                        <a href="user-my-orders-done" class="yot-text-fs-xl yot-active-bbh1 yot-tc-green">DONE</a>
                    </div>
                </div> <span class="yot-mlr-4">|</span>
                <div class="yot-text-center">
                    <a class="yot-btn-blue1" href="logout" style="color:white">Log out</a>
                </div>
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
            <a href="user-sticker" class="yot-active-bb-blue" style="font-size: 36px; font-weight: bolder;">Sticker</a>
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
        <!-- <div class="yot-mb-16">
            <a href="user-my-orders" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">My Orders</a>
        </div> -->
        <!-- My Order -->
        <div class="yot-mb-8">
            <div class="tarpaulinContainerUserProduct yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-cursor-pointer">
                <span style="font-size: 36px; font-weight: bolder;">My Order</span>
                <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRight"></i></span>
            </div>
            <div class="rPmLContainer yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                <a href="user-my-orders-pending" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">PENDING</a>
                <a href="user-my-orders-reject" class="yot-mb-8 yot-active-bbh1 yot-tc-red" style="font-size: 18px; font-weight: bolder;">REJECT</a>
                <a href="user-my-orders-done" class="yot-mb-8 yot-active-bbh1 yot-tc-green" style="font-size: 18px; font-weight: bolder;">DONE</a>
            </div>
        </div>
        <div class="yot-text-center">
            <a class="yot-btn-blue1" href="logout" style="color:white">Log out</a>
        </div>
    </div>

    <!-- Main -->
    <div class="yot-content-space-margin-t-120 yot-container">
        <!-- Title-->
        <div class="yot-text-center yot-tc-blue1 yot-mb-16">
            <h1 class="yot-resize-font-64">Sticker</h1>
        </div>

        <div class="yot-container">
            <div class="yot-row">
                <!-- Upload Image -->
                <div class="yot-col-50 yot-mb-16">
                    <!-- Display Image -->
                    <div id="displayImageSticker" class="yot-bg-white image-container-RTP yot-mb-16"></div>
                    <!-- Form -->
                    <form id="createStickerForm">
                        <div class="yot-w-75" style="margin: auto;">
                            <div class="yot-flex yot-flex-fd-c-ai-c-jc-c">
                                <label for="image"><h4>Upload Image</h4></label>
                                <span class="yot-tc-red" id="emptyErrImage" style="display: none;">Upload Image field is required.<br></span>
                            </div>
                            <input class="yot-form-input" type="file" id="imageSticker" name="imageSticker">
                        </div>
                </div>

                <div class="yot-col-50">
                        <!-- Widht and Height -->
                        <div class="yot-flex yot-flex-ai-c">
                            <!-- Width -->
                            <div class="yot-form-group yot-w-50">
                                <!-- Label and Err Width -->
                                <div class="yot-flex yot-flex-fd-c">
                                    <label for="width"><h4>Width(Inch)</h4></label>
                                    <span class="yot-tc-red" id="emptyErrWidth" style="display: none;">Width field is required.<br></span>
                                </div>
                                <input class="yot-form-input" type="text" name="width" id="width">
                                <!-- Proportion Width -->
                                <!-- <div class="yot-flex yot-flex-ai-c-jc-s">
                                    <input type="checkbox" id="widthProportion" name="widthProportion" value="widthProportion" value="Width Proportion">
                                    <label for="widthProportion"><h5>Proportion</h5></label>
                                </div> -->
                            </div>

                            <h4 class="yot-ma-16" style="margin-top: 34px;">X</h4>

                            <!-- Height -->
                            <div class="yot-form-group yot-w-50">
                                <div class="yot-flex yot-flex-fd-c">
                                    <label for="height"><h4>Height(Inch)</h4></label>
                                    <span class="yot-tc-red" id="emptyErrHeight" style="display: none;">Height field is required.<br></span>
                                </div>
                                <input class="yot-form-input" type="text" name="height" id="height">

                                <!-- Proportion Height -->
                                <!-- <div class="yot-flex yot-flex-ai-c-jc-s">
                                    <input type="checkbox" id="heightProportion" name="heightProportion" value="Height Proportion">
                                    <label for="heightProportion"><h5>Proportion</h5></label>
                                </div> -->
                            </div>
                        </div>

                        <!-- Quantity and Cover -->
                        <div class="yot-flex yot-flex-ai-c">
                            <div class="yot-form-group yot-w-50">
                                <!-- Label and Err Quantity -->
                                <div class="yot-flex yot-flex-fd-c">
                                    <label for="quantity"><h4>Quantity</h4></label>
                                    <span class="yot-tc-red" id="emptyErrQuantity" style="display: none;">Quantity field is required.<br></span>
                                </div>
                                <input class="yot-form-input" type="text" name="quantity" id="quantity">
                            </div>
                            <span class="yot-mlr-8"></span>
                            <div class="yot-form-group yot-w-50">
                                <!-- Label and Err Cover -->
                                <div class="yot-flex yot-flex-fd-c">
                                    <label for="cover"><h4>Cover</h4></label>
                                    <span class="yot-tc-red" id="emptyErrCover" style="display: none;">Cover field is required.<br></span>
                                </div>
                                <select class="yot-form-input" name="cover" id="cover">
                                    <option value="">- Select Cover -</option>
                                    <option value="YES">Lamanited</option>
                                    <option value="NO">Not Lamanited</option>
                                </select>
                            </div>
                        </div>

                        <div class="yot-form-group">
                            <!-- Price -->
                            <div class="yot-text-center">
                                <h2>Total Price</h2>
                                <h2 id="totalPrice">0.00</h2>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="yot-form-group">
                            <label for="quantity"><h4>Message</h4></label>
                            <textarea class="yot-form-input" style="resize: none; height: 150px;" name="message" id="message"></textarea>
                        </div>

                        <!-- Submit Btn -->
                        <div class="yot-text-center">
                            <input class="yot-btn-blue1" type="submit" value="Add to Cart">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Container-->
    <div id="createSuccessAlert" class="yot-bg-green yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Add to Cart:</h3>
            <i id="createSuccessAlertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">The order has been successfully added to the cart.</p>
    </div>

    <script src="./asset/js/all/global.js"></script>
    <script src="./asset/js/user-sticker/create.js"></script>
</body>
</html>