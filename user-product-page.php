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
                   <!-- Orders -->
                   <div class="yot-mb-8">
                        <div class="orderPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Orders</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-right yot-text-fs-xxl faAngleRightOrder"></i></span>
                        </div>
                        <div class="orderContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display:none">
                            <a href="orders-all" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">All Orders</a>
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
                            <a href="user-product-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">User Product</a>
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
                            <a href="orders-all" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px; font-weight: bolder;">All Orders</a>
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
                            <a href="user-product-page" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">User Product</a>
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
        <div class="g-main-item-right" style="padding: 24px;">
            <!-- Title with Btn Form-->
            <div class="yot-row yot-flex-ai-c-jc-sb yot-bg-white yot-pa-8">
                <h2 class="yot-mb-8 yot-resize-font-64">User Product</h2>
                <div class="yot-text-center yot-pa-8">
                    <button id="addProductBtn" class="yot-btn-blue1">Product</button>
                </div>
            </div>

            <!-- User Product -->
            <div id="displayUserProducts"></div>

            <!-- User page Container -->
            <div class="yot-content-space-margin-t-80 yot-container">

                <!-- Create Update Delete Product-->
                <div id="createBgContainerProduct" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
                <div id="createFormContainerProduct" class="yot-overlay-mid-container" style="display:none;">
                    <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                        <!-- Product -->
                        <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                            <h2 id="captionProduct" class="yot-tc-blue1">CREATE</h2>
                            <i id="createCloseFormIconProduct" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                        </div>

                        <div class="yot-flex yot-flex-ai-c-jc-sb yot-mb-16">
                            <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="Product">Product</label>
                            <select class="yot-form-select yot-form-select-option" name="selectOptionProduct" id="selectOptionProduct">
                                <option value="create">Create</option>
                                <option value="update">Update</option>
                                <option value="delete">Delete</option>
                            </select>
                        </div>

                        <!-- Create Form Container -->
                        <div id="createDisplayContainerProduct">
                            <form id="createFormProduct">
                                <div class="yot-form-group">
                                    <!-- Error -->
                                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                                        <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="Product">Product Name</label>
                                        <span class="yot-tc-red" id="emptyErrName" style="display: none;">Product Name field is required.<br></span>
                                    </div>
                                    <input class="yot-form-input" type="text" name="name" id="name">
                                </div>

                                <div class="yot-form-group">
                                    <!-- Error -->
                                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                                        <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="Product">Description</label>
                                        <span class="yot-tc-red" id="emptyErrDescription" style="display: none;">Description field is required.<br></span>
                                    </div>
                                    <input class="yot-form-input" type="text" name="description" id="description">
                                </div>

                                <div class="yot-form-group">
                                    <!-- Error -->
                                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                                        <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="Product">Price</label>
                                        <span class="yot-tc-red" id="emptyErrPrice" style="display: none;">Price field is required.<br></span>
                                    </div>
                                    <input class="yot-form-input" type="text" name="price" id="price">
                                </div>

                                
                                <div class="yot-form-group">
                                    <!-- Error -->
                                    <div class="yot-flex yot-flex-ai-c-jc-sb">
                                        <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="Product">Image</label>
                                        <span class="yot-tc-red" id="emptyErrimageUserProduct" style="display: none;">Image field is required.<br></span>
                                    </div>
                                    <input class="yot-form-input" type="file" name="imageUserProduct" id="imageUserProduct">
                                </div>

                                <div class="yot-text-center">
                                    <input class="yot-btn-blue1" type="submit" value="Submit">
                                </div>
                            </form>
                        </div>

                        <!-- Update Container -->
                        <div id="updateDisplayContainerProduct" style="display:none"></div>

                        <!-- Delete Container -->
                        <div id="deleteDisplayContainerProduct" style="display:none"></div>
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
            <i id="alertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">Only JPG, JPEG, and PNG files are allowed.</p>
    </div>

    <!-- Error Container Uploading Image -->
    <div id="errorUploadingimageAlert" class="yot-bg-red yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Error Uploading image</h3>
            <i id="alertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">There's Something Wrong!</p>
    </div>

    <!-- Error Container Invalidfiletype -->
    <div id="errorImagetoolargeAlert" class="yot-bg-red yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Error File too Big</h3>
            <i id="alertCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">Allowed size is 50mb</p>
    </div>

    <script src="./asset/js/all/global.js"></script>
    <script src="./asset/js/user-product-page/create.js"></script>
    <script src="./asset/js/user-product-page/display/d-images.js"></script>
</body>
</html>