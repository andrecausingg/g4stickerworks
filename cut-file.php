<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cut File</title>

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
                        <div class="workPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bb-blue yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Work</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-down yot-text-fs-xxl faAngleRightWork"></i></span>
                        </div>
                        <div class="jobContainerOverView yot-ml-48 yot-flex yot-flex-fd-c">
                            <a href="job" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Job</a>
                            <a href="cut-file" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Cut File</a>
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
                        <a href="visitors" style="font-size: 24px; font-weight: bolder;" class="">Visitors</a>
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
                        <div class="AdEmUsContainerOverView yot-ml-48 yot-flex yot-flex-fd-c" style="display: none;">
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
                        <div class="workPageContainerOverView yot-flex yot-flex-ai-c-jc-sb yot-mb-8 yot-active-bb-blue yot-active-bbh1 yot-cursor-pointer">
                            <span style="font-size: 24px; font-weight: bolder;">Work</span>
                            <span class="yot-ml-16"><i class="fa-solid fa-angle-down yot-text-fs-xxl faAngleRightWork"></i></span>
                        </div>
                        <div class="jobContainerOverView yot-ml-48 yot-flex yot-flex-fd-c">
                            <a href="job" class="yot-mb-8 yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Job</a>
                            <a href="cut-file" class="yot-mb-8 yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">Cut File</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right -->
        <div class="g-main-item-right" style="padding: 24px;">

            <div>
                <div class="yot-flex-tab yot-flex-ai-c-jc-sb yot-mb-8">
                    <!-- Title -->
                    <h2 class="yot-mb-8 yot-resize-font-64">Cut File</h2>
    
                   <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-mlr-4">
                        <div class="yot-form-group yot-mr-4">
                            <label for="startDate" class="yot-text-fs-l"><b>Start Date</b></label>
                            <input type="text" name="startDate" id="startDate" class="datepicker yot-form-input" placeholder="Month/Day/Year">
                        </div>
                        <div class="yot-form-group yot-ml-4">
                            <label for="endDate" class="yot-text-fs-l"><b>End Date</b></label>
                            <input type="text" name="startDate" id="endDate" class="datepicker yot-form-input" placeholder="Month/Day/Year">
                        </div>
                   </div> 
    
                   <div class="yot-form-group yot-mb-8">
                        <label for="search" class="yot-text-fs-l"><b>Search</b></label>
                        <input type="input" name="search" id="search" class="yot-btn-round yot-form-input" placeholder="Search">
                   </div>
                </div>
    
                <!-- Container -->
                <div class="over-view-container">
                    <!--  -->
                    <div class="yot-bg-white yot-mb-8 over-view-item1 yot-mb-8" style="border-radius: 8px; padding: 16px;">
                        <div class="yot-flex yot-flex-ai-c-jc-sb ">
                            <h3 class="yot-tc-black">Cut Files</h3>
                            <div class="yot-text-end yot-mt-8">
                                <button id="createBtnCutFile" class="yot-btn-blue1">Create</button>
                            </div>
                        </div>
                        <h2 id="totalCutFile" class="yot-tc-black">0</span>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="yot-w-100" id="displayCutFile" style="max-height:500px; overflow-y:scroll"></div>
        </div>

        <!-- Create Container -->
        <div id="bgCreateContainer" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
        <div id="createFormContainerCutFile" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <form id="createFormCutFile">
                    <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                        <h2 class="yot-tc-blue1">CREATE</h2>
                        <i id="closeCutFileFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                    </div>

                    <!-- Job Name -->
                    <div class="yot-form-group">
                        <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="jobName">Job Name</label>
                        <input class="yot-form-input" type="text" name="jobName" id="jobName">
                    </div>

                    <!-- Job No -->
                    <div class="yot-form-group">
                        <label class="yot-text-fs-xl yot-mb-4 yot-text-center" style="font-weight: bolder;" for="jobNum">Job No.</label>
                        <input class="yot-form-input" type="text" name="jobNum" id="jobNum">
                    </div>

                    <div class="yot-text-center">
                        <input class="yot-btn-blue1" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>

        <!-- Delete Container -->
        <div class="displayDeleteContainerCutFile"></div>

        <!-- Edit Container -->
        <div class="displayEditContainerCutFile"></div>
    </div>

    <!-- Success Container-->
    <div id="successAlertCutFile" class="yot-bg-green yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Insertion:</h3>
            <i id="successAlertCutFileCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">The record was successfully inserted.</p>
    </div>

    <!-- Delete Container-->
    <div id="deleteAlertCutFile" class="yot-bg-red yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Deletion:</h3>
            <i id="successDeleteCutFileCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">The record was successfully deleted.</p>
    </div>

    <!-- Success Edit Container-->
    <div id="successEditAlertCutFile" class="yot-bg-orange yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Update:</h3>
            <i id="successEditAlertCutFileCloseIcon" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
        </div>
        <p class="yot-text-fs-l">The record was successfully updated.</p>
    </div>

    <script src="./asset/js/all/global.js"></script>
    <script src="./asset/js/api/jquery-date-picker/date-picker.js"></script>

    <script src="./asset/js/cut-file/cut-file.js"></script>
    <script src="./asset/js/cut-file/display/d-cut-file.js"></script>
</body>
</html>