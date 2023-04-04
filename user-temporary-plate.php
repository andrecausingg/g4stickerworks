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
    <title>Temporary Plate</title>

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
                </div> <span class="yot-mlr-4"></span>-->
                <a href="user-sticker" class="yot-text-fs-xl yot-active-bbh1">Sticker</a> <span class="yot-mlr-4"></span>
                <a href="user-temporary-plate" class="yot-text-fs-xl yot-active-bb-blue">Temporary Plate</a> <span class="yot-mlr-4"></span>
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
                    <div class="rPmLContainer yot-ml-48 yot-flex yot-flex-fd-c yot-bg-white yot-pa-16" style="display:none; position: absolute; width: 200px; right: -60px;">
                        <a href="user-my-orders-pending" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">PENDING</a>
                        <a href="user-my-orders-verified" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">VERIFIED</a>
                        <a href="user-my-orders-ready" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">READY TO GET</a>
                        <a href="user-my-orders-reject" class="yot-text-fs-xl yot-mb-8 yot-active-bbh1">REJECT</a>
                        <a href="user-my-orders-done" class="yot-text-fs-xl yot-active-bbh1">DONE</a>
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

        <div class="yot-flex yot-flex-ai-c-jc-sb" style="margin: 8px 0px 16px 0px;">
            <a href="user-ready-to-print" class="yot-active-bbh1" style="font-size: 36px; font-weight: bolder;">Tarpaulin</a>
            <i id="hamburgerCloseIndex" class="fa-solid fa-xmark yot-tc-blue-1" style="font-size: 46px; display: none;"></i>
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
            <a href="user-temporary-plate" class="yot-active-bb-blue" style="font-size: 36px; font-weight: bolder;">Temporary Plate</a>
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
                <a href="user-my-orders-verified" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">VERIFIED</a>
                <a href="user-my-orders-ready" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">READY TO GET</a>
                <a href="user-my-orders-reject" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">REJECT</a>
                <a href="user-my-orders-done" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">DONE</a>
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
            <h1 class="yot-resize-font-64">Temporary Plate</h1>
        </div>

        <!-- Format -->
        <div class="yot-row yot-bg-white1">
            <div class="yot-col-25 yot-text-center" style="padding:16px;">
                <h2>Format 1</h2>
                <img src="./asset/images/temp-plate-mvfile.png" alt="">
                <button id="formatOneBtn" class="yot-btn-blue1">Select</button>
            </div>
            <div class="yot-col-25 yot-text-center" style="padding:16px;">
                <h2>Format 2</h2>
                <img src="./asset/images/temp-plate-number.png" alt="">
                <button id="formatTwoBtn" class="yot-btn-blue1">Select</button>
            </div>
            <div class="yot-col-25 yot-text-center" style="padding:16px;">
                <h2>Format 3</h2>
                <img src="./asset/images/temp-plate-num-temporary-plate.png" alt="">
                <button id="formatThreeBtn" class="yot-btn-blue1">Select</button>
            </div>
            <div class="yot-col-25 yot-text-center" style="padding:16px;">
                <h2>Format 4</h2>
                <img src="./asset/images/temp-plate-num-virtual-plate.png" alt="">
                <button id="formatFourBtn" class="yot-btn-blue1">Select</button>
            </div>
        </div>

        <!-- Format 1 Create Container -->
        <div id="bgCreateContainer" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
        <div id="createFormContainerFormatOne" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <form id="createFormFormatOne">
                    <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                        <h2 class="yot-tc-blue1">Format 1</h2>
                        <i id="closeFormatOneFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                    </div>

                    <!-- Registered -->
                    <div class="yot-form-group">
                        <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="staus">Status</label>
                        <input class="yot-form-input" style="border:1px solid hsl(122, 39%, 49%); font-weight:bolder;" type="text" name="statusPlateFormatOne" id="statusPlateFormatOne" value="Registered" disabled>
                    </div>

                    <!-- Type of Plate and Quantity-->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <!-- Type of Plate -->
                            <div class="yot-flex yot-flex-fd-c yot-text-start yot-w-50">
                                <div class="yot-flex yot-flex-fd-c">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="typeOfPlate">Type of Plate</label>
                                    <span class="yot-tc-red" id="emptyErrTypeOfPlateFormatOne" style="display: none;">Type of Plate field is required.<br></span>
                                </div>
                                <select class="yot-form-input" name="typeOfPlateFormatOne" id="typeOfPlateFormatOne">
                                    <option value="">- Select Plate -</option>
                                    <option value="Acrylic">Acrylic</option>
                                    <option value="Steel">Steel</option>
                                </select>
                            </div>

                            <span class="yot-mlr-4"></span>

                            <!-- Quantity -->
                            <div class="yot-flex yot-flex-fd-c yot-w-50">
                                <div class="yot-flex yot-flex-fd-c">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="quantityFormatOne">Quantity</label>
                                    <span class="yot-tc-red" id="emptyErrQuantityFormatOne" style="display: none;">Quantity field is required.<br></span>
                                </div>
                                <input class="yot-form-input" type="text" name="quantityFormatOne" id="quantityFormatOne">
                            </div>
                        </div>
                    </div>

                    <!-- MV File -->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <!-- Err Mv File Four Digit -->
                            <div class="yot-text-start">
                                <label class="yot-mb-4 yot-text-center" style="font-weight: bolder;" for="mvFileFourDigitFormatOne"> <span class="yot-text-fs-xl ">MV File</span> <br> <span class="yot-text-fs-tiny">Four Digit</span><br></label>
                                <span class="yot-tc-red yot-text-start" id="emptyErrMvFileFourDigitFormatOne" style="display: none;">This Field is required.<br></span>
                                <span class="yot-tc-red yot-text-end" id="lessFourErrMvFileFourDigitFormatOne" style="display: none;">This Field must four digit.<br></span>
                            </div>
                            <!-- Err Mv File Seven Digit -->
                            <div class="yot-text-end">
                                <label class="yot-mb-4 yot-text-center" style="font-weight: bolder;" for="mvFileSecenDigitFormatOne"> <span class="yot-text-fs-xl ">MV File Seven Digit</span> <br> <span class="yot-text-fs-tiny">Seven Digit</span><br></label>
                                <span class= "yot-tc-red yot-text-end" id="emptyErrMvFileSevenDigitFormatOne" style="display: none;">This Field is required.<br></span>
                                <span class= "yot-tc-red yot-text-end" id="lessSevenErrMvFileSevenDigitFormatOne" style="display: none;">This Field must seven digit.<br></span>
                            </div>
                        </div>
                        <div class="yot-flex yot-flex-ai-c">
                            <input class="yot-form-input yot-w-33-33" type="text" name="mvFileFourDigitFormatOne" id="mvFileFourDigitFormatOne" maxlength="4">
                            <span class="yot-mlr-8"><div style="border:3px solid black; width:15px;"></div></span>
                            <input class="yot-form-input yot-w-66-66" type="text" name="mvFileSevenDigitFormatOne" id="mvFileSevenDigitFormatOne" maxlength="7">
                        </div>
                    </div>

                    <!-- Region and Dealer-->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <!-- Region -->
                            <div>
                                <div class="yot-flex yot-flex-fd-c">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="regionFormatOne">Region</label>
                                    <span class="yot-tc-red" id="emptyErrRegionFormatOne" style="display: none;">Region is required.<br></span>
                                </div>
                                <select class="yot-form-input" name="regionFormatOne" id="regionFormatOne">
                                    <option value="">- Select Region -</option>
                                </select>
                            </div>

                            <span class="yot-mlr-4"></span>

                            <!-- Dealer -->
                            <div>
                                <div class="yot-flex yot-flex-fd-c yot-text-end">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="dealerFormatOne">Dealer</label>
                                    <span class="yot-tc-red" id="emptyErrDealerFormatOne" style="display: none;">Dealer is required.<br></span>
                                </div>
                                <input class="yot-form-input" type="text" name="dealerFormatOne" id="dealerFormatOne">
                            </div>
                        </div>
                    </div>

                    <!-- Total Price -->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="totalPriceOne">Total Price</label>
                            <h2 id="totalPriceFormatOne">0.00</h2>
                        </div>
                    </div>

                    <div class="yot-text-center">
                        <input class="yot-btn-blue1" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Format 2 Create Container -->
        <div id="createFormContainerFormatTwo" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <form id="createFormFormatTwo">
                    <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                        <h2 class="yot-tc-blue1">Format 2</h2>
                        <i id="closeFormatTwoFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                    </div>

                    <!-- Registered -->
                    <div class="yot-form-group">
                        <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="staus">Status</label>
                        <input class="yot-form-input" style="border:1px solid hsl(122, 39%, 49%); font-weight:bolder;" type="text" name="statusPlateF" id="statusPlateF" value="Registered" disabled>
                    </div>

                    <!-- Type of Plate and Quantity-->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <!-- Type of Plate -->
                            <div class="yot-flex yot-flex-fd-c yot-text-start yot-w-50">
                                <div class="yot-flex yot-flex-fd-c">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="typeOfPlate">Type of Plate</label>
                                    <span class="yot-tc-red" id="emptyErrTypeOfPlateFormatTwo" style="display: none;">Type of Plate field is required.<br></span>
                                </div>
                                <select class="yot-form-input" name="typeOfPlateFormatTwo" id="typeOfPlateFormatTwo">
                                    <option value="">- Select Plate -</option>
                                    <option value="Acrylic">Acrylic</option>
                                    <option value="Steel">Steel</option>
                                </select>
                            </div>

                            <span class="yot-mlr-4"></span>

                            <!-- Quantity -->
                            <div class="yot-flex yot-flex-fd-c yot-w-50">
                                <div class="yot-flex yot-flex-fd-c">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="quantityFormatTwo">Quantity</label>
                                    <span class="yot-tc-red" id="emptyErrQuantityFormatTwo" style="display: none;">Quantity field is required.<br></span>
                                </div>
                                <input class="yot-form-input" type="text" name="quantityFormatTwo" id="quantityFormatTwo">
                            </div>
                        </div>
                    </div>

                    <!-- Registered No. -->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-fd-c">
                            <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="registeredNumFormatTwo">Registered No.</label>
                            <span class="yot-tc-red" id="emptyErrRegisteredNumFormatTwo" style="display: none;">Registered No. Field is required<br></span>
                        </div>
                        <input class="yot-form-input" type="text" name="registeredNumFormatTwo" id="registeredNumFormatTwo">
                    </div>

                    <!-- Region and Dealer-->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <!-- Region -->
                            <div>
                                <div class="yot-flex yot-flex-fd-c">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="regionFormatTwo">Region</label>
                                    <span class="yot-tc-red" id="emptyErrRegionFormatTwo" style="display: none;">Region is required.<br></span>
                                </div>
                                <select class="yot-form-input" name="regionFormatTwo" id="regionFormatTwo">
                                    <option value="">- Select Region -</option>
                                </select>
                            </div>

                            <span class="yot-mlr-4"></span>

                            <!-- Dealer -->
                            <div>
                                <div class="yot-flex yot-flex-fd-c yot-text-end">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="dealerFormatTwo">Dealer</label>
                                    <span class="yot-tc-red" id="emptyErrDealerFormatTwo" style="display: none;">Dealer is required.<br></span>
                                </div>
                                <input class="yot-form-input" type="text" name="dealerFormatTwo" id="dealerFormatTwo">
                            </div>
                        </div>
                    </div>

                    <!-- Total Price -->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="totalPriceTwo">Total Price</label>
                            <h2 id="totalPriceFormatTwo">0.00</h2>
                        </div>
                    </div>

                    <div class="yot-text-center">
                        <input class="yot-btn-blue1" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>

        <!-- Format 3 Create Container -->
        <div id="createFormContainerFormatThree" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <form id="createFormFormatThree">
                    <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                        <h2 class="yot-tc-blue1">Format 3</h2>
                        <i id="closeFormatThreeFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                    </div>

                    <!-- Registered -->
                    <div class="yot-form-group">
                        <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="staus">Status</label>
                        <input class="yot-form-input" style="border:1px solid hsl(122, 39%, 49%); font-weight:bolder;" type="text" name="statusPlateF" id="statusPlateF" value="Registered" disabled>
                    </div>

                    <!-- Type of Plate and Quantity-->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <!-- Type of Plate -->
                            <div class="yot-flex yot-flex-fd-c yot-text-start yot-w-50">
                                <div class="yot-flex yot-flex-fd-c">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="typeOfPlate">Type of Plate</label>
                                    <span class="yot-tc-red" id="emptyErrTypeOfPlateFormatThree" style="display: none;">Type of Plate field is required.<br></span>
                                </div>
                                <select class="yot-form-input" name="typeOfPlateFormatThree" id="typeOfPlateFormatThree">
                                    <option value="">- Select Plate -</option>
                                    <option value="Acrylic">Acrylic</option>
                                    <option value="Steel">Steel</option>
                                </select>
                            </div>

                            <span class="yot-mlr-4"></span>

                            <!-- Quantity -->
                            <div class="yot-flex yot-flex-fd-c yot-w-50">
                                <div class="yot-flex yot-flex-fd-c">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="quantityFormatThree">Quantity</label>
                                    <span class="yot-tc-red" id="emptyErrQuantityFormatThree" style="display: none;">Quantity field is required.<br></span>
                                </div>
                                <input class="yot-form-input" type="text" name="quantityFormatThree" id="quantityFormatThree">
                            </div>
                        </div>
                    </div>

                    <!-- Registered No. -->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-fd-c">
                            <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="registeredNumFormatThree">Registered No.</label>
                            <span class="yot-tc-red" id="emptyErrRegisteredNumFormatThree" style="display: none;">Registered No. Field is required<br></span>
                        </div>
                        <input class="yot-form-input" type="text" name="registeredNumFormatThree" id="registeredNumFormatThree">
                    </div>

                    <!-- Status Plate -->
                    <div class="yot-form-group">
                        <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="statusPlate">Status Plate</label>
                        <input class="yot-form-input" style="border:1px solid hsl(122, 39%, 49%); font-weight:bolder;" type="text" name="statusPlateTemporaryPlateThree" id="statusPlateTemporaryPlateThree" value="TEMPORARY PLATE" disabled>
                    </div>

                    <!-- Total Price -->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="totalPriceThree">Total Price</label>
                            <h2 id="totalPriceFormatThree">0.00</h2>
                        </div>
                    </div>

                    <div class="yot-text-center">
                        <input class="yot-btn-blue1" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>

        <!-- Format 4 Create Container -->
        <div id="createFormContainerFormatFour" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <form id="createFormFormatFour">
                    <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                        <h2 class="yot-tc-blue1">Format 4</h2>
                        <i id="closeFormatFourFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                    </div>

                    <!-- Registered -->
                    <div class="yot-form-group">
                        <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="staus">Status</label>
                        <input class="yot-form-input" style="border:1px solid hsl(122, 39%, 49%); font-weight:bolder;" type="text" name="statusPlateF" id="statusPlateF" value="Registered" disabled>
                    </div>

                    <!-- Type of Plate and Quantity-->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <!-- Type of Plate -->
                            <div class="yot-flex yot-flex-fd-c yot-text-start yot-w-50">
                                <div class="yot-flex yot-flex-fd-c">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="typeOfPlate">Type of Plate</label>
                                    <span class="yot-tc-red" id="emptyErrTypeOfPlateFormatFour" style="display: none;">Type of Plate field is required.<br></span>
                                </div>
                                <select class="yot-form-input" name="typeOfPlateFormatFour" id="typeOfPlateFormatFour">
                                    <option value="">- Select Plate -</option>
                                    <option value="Acrylic">Acrylic</option>
                                    <option value="Steel">Steel</option>
                                </select>
                            </div>

                            <span class="yot-mlr-4"></span>

                            <!-- Quantity -->
                            <div class="yot-flex yot-flex-fd-c yot-w-50">
                                <div class="yot-flex yot-flex-fd-c">
                                    <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="quantityFormatFour">Quantity</label>
                                    <span class="yot-tc-red" id="emptyErrQuantityFormatFour" style="display: none;">Quantity field is required.<br></span>
                                </div>
                                <input class="yot-form-input" type="text" name="quantityFormatFour" id="quantityFormatFour">
                            </div>
                        </div>
                    </div>

                    <!-- Registered No. -->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-fd-c">
                            <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="registeredNumFormatFour">Registered No.</label>
                            <span class="yot-tc-red" id="emptyErrRegisteredNumFormatFour" style="display: none;">Registered No. Field is required<br></span>
                        </div>
                        <input class="yot-form-input" type="text" name="registeredNumFormatFour" id="registeredNumFormatFour">
                    </div>

                    <!-- Status Plate -->
                    <div class="yot-form-group">
                        <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="statusPlate">Status Plate</label>
                        <input class="yot-form-input" style="border:1px solid hsl(122, 39%, 49%); font-weight:bolder;" type="text" name="statusPlateTemporaryPlateFour" id="statusPlateTemporaryPlateFour" value="VIRTUAL PLATE" disabled>
                    </div>

                    <!-- Total Price -->
                    <div class="yot-form-group">
                        <div class="yot-flex yot-flex-ai-c-jc-sb">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="totalPriceFour">Total Price</label>
                            <h2 id="totalPriceFormatFour">0.00</h2>
                        </div>
                    </div>

                    <div class="yot-text-center">
                        <input class="yot-btn-blue1" type="submit" value="Submit">
                    </div>
                </form>
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
    <script src="./asset/js/user-temporary-plate/create-format-1.js"></script>
    <script src="./asset/js/user-temporary-plate/create-format-2.js"></script>
    <script src="./asset/js/user-temporary-plate/create-format-3.js"></script>
    <script src="./asset/js/user-temporary-plate/create-format-4.js"></script>
</body>
</html>