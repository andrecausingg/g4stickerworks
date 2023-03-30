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
    <title>My Cart</title>

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
                <a href="user-profile" class="yot-text-fs-xl yot-active-bbh1">Profile</a> <span class="yot-mlr-4">|</span>
                <a href="user-my-cart" class="yot-text-fs-xl yot-active-bb-blue">My Cart </a> <span class="yot-mlr-4">|</span>
                <a href="user-my-orders" class="yot-text-fs-xl yot-active-bbh1">My Orders</a> <span class="yot-mlr-4">|</span>
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
    <div id="overlayMobileBgIndex" class="yot-overlay-bg-trans yot-bg-black1 overlayLeftSideBar yot-z-index-1" style="display:none"></div>
    <div id="overlayMobileIndex" class="yot-w-75 yot-flex yot-flex-fd-c  yot-vh-100 yot-bg-white yot-overlay-left yot-pa-16 yot-z-index-1 overlayLeftSideBar" style="display:none">
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
            <a href="user-profile" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Profile</a>
        </div>
        <div class="yot-mb-16">
            <a href="user-my-cart" class="yot-active-bb-blue" style="font-size: 36px; font-weight: bolder;"></i>My Cart </a>
        </div>
        <div class="yot-mb-16">
            <a href="user-my-orders" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">My Orders</a>
        </div>
        <div class="yot-text-center">
            <a class="yot-btn-blue1" href="logout" style="color:white">Log out</a>
        </div>
    </div>

    <!-- My Cart Container -->
    <div class="yot-content-space-margin-t-120 yot-container g-main-container">
        <div class="yot-col-33-33 yot-pa-8 g-main-left yot-flex yot-flex-fd-c-ai-c-jc-c">
            <div class="yot-mb-4"></div>

            <div id="allOrdersIdSticker"></div>
            <div id="allOrdersIdTarpaulin"></div>
            <div id="allOrdersIdTemporaryPlate"></div>

            <div class="yot-container-w-tablet-size-up yot-pa-4" >
                <div class="yot-flex yot-flex-fd-c-ai-c-jc-c">
                    <h1>Total Price:</h1>
                    <div class="yot-flex yot-flex-ai-c" style="font-size:40px; font-weight:bolder;">
                        <i class="fa-solid fa-peso-sign"></i><div id="displayTotalPrice"></div>
                    </div>
                </div>
            </div>

            <div id="payNowContainer">
                <button id="payNowBtn" class="yot-btn-blue1">Pay Now</button>
            </div>
        </div>

        <!-- <div id="displayCartList" style="margin:auto"></div> -->

        <div id="displayCartList" class="g-main-right yot-col-66-66 yot-pa-16 cart-list-user-my-cart"></div>
    </div>

    <!-- Create -->
    <div id="createBgContainer" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
        <div id="createFormContainer" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <!-- Title -->
                <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 id="titleCaption" class="yot-tc-blue1">Payment</h2>
                    <i id="createCloseFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Create Form Container -->
                <div id="createDisplayContainer">
                    <form id="createPaymentForm">
                        <!-- Deliver Method Option -->
                        <div class="yot-form-group">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <label for="referenceNo" class="yot-text-fs-l"><b>Delivery Method</b></label>
                                <span class="yot-tc-red" id="emptyErrDeliverMethod" style="display: none;">Delivery Method field is required.<br></span>
                            </div>
                            <select class="yot-form-input" name="deliverMethod" id="deliverMethod">
                            <option value="">- Select Delivery Method -</option>
                                <option value="Courier">Courier</option>
                                <option value="Pick up">Pick up</option>
                            </select>
                        </div>

                        <!-- Reference No -->
                        <div class="yot-form-group">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <label for="referenceNo" class="yot-text-fs-l"><b>Reference No.</b></label>
                                <span class="yot-tc-red" id="emptyErrReferenceNum" style="display: none;">Reference No. field is required.<br></span>
                            </div>
                            <input class="yot-form-input" type="text" name="referenceNum" id="referenceNum">
                        </div>

                        <!-- Receipt -->
                        <div class="yot-form-group">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <label for="uploadReceipt" class="yot-text-fs-l"><b>Upload Receipt</b></label>
                                <span class="yot-tc-red" id="emptyErrReceipt" style="display: none;">Receipt field is required.<br></span>
                            </div>
                            <input class="yot-form-input" type="file" name="imageReceipt" id="imageReceipt">
                        </div>

                        <div class="yot-mb-4">
                            <p style="font-weight:bolder;">* Please note that our company has a no cancel policy once the order has been placed. We appreciate your understanding and cooperation.</p>
                        </div>

                        <div class="yot-text-center">
                            <input class="yot-btn-blue1" type="submit" value="Submit">
                        </div>
                    </form>
                </div>

                <!-- Update Container -->
                <div id="updateDisplayContainer" style="display:none"></div>

                <!-- Delete Container -->
                <div id="deleteDisplayContainer" style="display:none"></div>
            </div>
        </div>
    </div>

    <!-- Delete Container-->
    <div id="successAlertDelete" class="yot-bg-red yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Cancel:</h3>
            <i id="successAlertCloseIconDelete" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">The Product was successfully cancel.</p>
    </div>

    <script src="./asset/js/all/global.js"></script>
    <script src="./asset/js/user-my-cart/display/d-data.js"></script>
    <script src="./asset/js/user-my-cart/update.js"></script>
    <script src="./asset/js/user-my-cart/delete.js"></script>
</body>
</html>