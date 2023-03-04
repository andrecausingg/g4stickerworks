<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Footer Page</title>

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
                            <a href="index-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Home</a>
                            <a href="product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Product</a>
                            <a href="services-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Services</a>
                            <a href="contact-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Contact Us</a>
                            <a href="about-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">About Us</a>
                            <a href="gallery-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Gallery</a>
                            <a href="all-footer-page" class="yot-mb-8  yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">All Footer</a>
                            
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
                        <a href="visitors" style="font-size: 24px; font-weight: bolder;" class="yot-active-bbh1">Visitors</a>
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
                            <a href="index-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Home</a>
                            <a href="product-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Product</a>
                            <a href="services-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Services</a>
                            <a href="contact-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Contact Us</a>
                            <a href="about-us-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">About Us</a>
                            <a href="gallery-page" class="yot-mb-8 yot-active-bbh1" style="font-size: 18px !important; font-weight: bolder;">Gallery</a>
                            <a href="all-footer-page" class="yot-mb-8  yot-active-bb-blue" style="font-size: 18px !important; font-weight: bolder;">All Footer</a>
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
        </div>

        <!-- Right -->
        <div class="g-main-item-right" style="padding: 24px;">
            <!-- Title -->
            <div class="yot-row yot-flex-ai-c-jc-sb yot-bg-white yot-pa-8">
                <h2 class="yot-mb-16 yot-resize-font-64">All Footer Pages</h2>
                <div class="yot-text-center yot-pa-16">
                    <button id="createBtn" class="yot-btn-blue1">Create</button>
                    <button id="updateBtn" class="yot-btn-blue1">Update</button>
                    <button id="deleteBtn" class="yot-btn-blue1">Delete</button>
                </div>
            </div>

            <!-- Footer -->
            <footer class="yot-w-100 yot-row yot-bg-blue1 yot-tc-white yot-mt-24" style="padding: 24px;">
                <!-- Navs -->
                <div class="yot-col-25 yot-flex yot-flex-fd-c-ai-c">
                    <h2 class="yot-mb-8">Quick Links</h2>
                    <a href="index" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Home</a>
                    <a href="product" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Product</a>
                    <a href="services" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Services</a>
                    <a href="contact" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Contacts</a>
                    <a href="about" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">About Us</a>
                    <a href="gallery" class="yot-mb-16 yot-active-bbh2" style="color:white; font-size: 20px;">Gallery</a>
                </div>

                <!-- Social Media -->
                <div class="yot-col-25 yot-flex yot-flex-fd-c-ai-c yot-tc-white">
                    <h2 class="yot-mb-8">Social Media</h2>
                    <!-- Facebook -->   
                    <div class="yot-mb-8 yot-text-fs-xl">
                        <div class="yot-text-center">
                            <i class="fa-brands fa-facebook-f yot-mr-4"></i>
                            Facebook
                        </div>
                        <div id="facebookUrlContainer" class="yot-text-center"></div>
                    </div>

                    <!-- Tiktok -->
                    <div class="yot-mb-8 yot-text-fs-xl">
                        <div class="yot-text-center">
                            <i class="fa-brands fa-tiktok"></i>
                            Tiktok
                        </div>
                        <div id="tiktokUrlContainer" class="yot-text-center"></div>
                    </div>

                    <!-- Instagram -->
                    <div class="yot-mb-8 yot-text-fs-xl">
                        <div class="yot-text-center">
                            <i class="fa-brands fa-instagram"></i>
                            Instagram
                        </div>
                        <div id="instagramUrlContainer" class="yot-text-center"></div>
                    </div>
                </div>

                <!-- Contacts -->
                <div class="yot-col-25 yot-flex yot-flex-fd-c-ai-c">
                    <h2 class="yot-mb-8">Contacts</h2>
                    <!-- Email -->
                    <div class="yot-mb-8 yot-text-fs-xl">
                        <div class="yot-text-center">
                            <i class="fa-solid fa-envelope"></i> 
                            Email
                        </div>

                        <div id="emailContainer" class="yot-text-center"></div>
                    </div>
                    
                    <!-- Contact No. -->
                    <div class="yot-mb-8 yot-text-fs-xl">
                        <div class="yot-text-center">
                            <i class="fa-solid fa-mobile"></i>
                            Phone
                        </div>

                        <div id="phoneContainer" class="yot-text-center"></div>
                    </div>
                </div>

                <!-- Location -->
                <div class="yot-col-25 yot-flex yot-flex-fd-c-ai-c">
                    <h2 class="yot-mb-8">Location</h2>

                    <div class="yot-mb-8 yot-text-fs-xl">
                        <div class="yot-text-center">
                        <i class="fa-solid fa-location-dot"></i>
                            Address
                        </div>
                        <div id="addressContainer" class="yot-text-center"></div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Create Container -->
        <div id="createBgContainer" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
        <div id="createFormContainer" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <!-- Title -->
                <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">CREATE</h2>
                    <i id="createCloseFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Select Container -->
                <div class="yot-mb-8">
                    <select class="yot-form-select yot-form-select-option yot-w-50" name="createSelect" id="createSelect">
                        <option value="select">- Select -</option>
                        <option value="facebook">Facebook</option>
                        <option value="tiktok">Tiktok</option>
                        <option value="instagram">Instagram</option>
                        <option value="email">Email</option>
                        <option value="phone">Phone</option>
                        <option value="address">Address</option>
                    </select>
                </div>

                <!-- Facebook Form Container -->
                <div id="createContainerFacebook" style="display:none;">
                    <form id="createFormFacebook">
                        <!-- Url -->
                        <div class="yot-form-group">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="facebookUrl">Url Facebook</label>
                                <span id="invalidUrlFacebookErr" class="yot-tc-red" style="display:none">Invalid Url</span>
                            </div>
                            <input class="yot-form-input" type="text" name="facebookUrl" id="facebookUrl">
                        </div>

                        <div class="yot-text-center">
                            <input class="yot-btn-blue1" type="submit" value="Submit">
                        </div>
                    </form>
                </div>

                <!-- Tiktok Form Container -->
                <div id="createContainerTiktok" style="display:none;">
                    <form id="createFormTiktok">
                        <!-- Url -->
                        <div class="yot-form-group">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="tiktokUrl">Url Tiktok</label>
                                <span id="invalidUrlTiktokErr" class="yot-tc-red" style="display:none">Invalid Url</span>
                            </div>
                            <input class="yot-form-input" type="text" name="tiktokUrl" id="tiktokUrl">
                        </div>

                        <div class="yot-text-center">
                            <input class="yot-btn-blue1" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
                
                <!-- Instagram Form Container -->
                <div id="createContainerInstagram" style="display:none;">
                    <form id="createFormInstagram">
                        <!-- Url -->
                        <div class="yot-form-group">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="instagramUrl">Url Instagram</label>
                                <span id="invalidUrlInstagramErr" class="yot-tc-red" style="display:none">Invalid Url</span>
                            </div>
                            <input class="yot-form-input" type="text" name="instagramUrl" id="instagramUrl">
                        </div>

                        <div class="yot-text-center">
                            <input class="yot-btn-blue1" type="submit" value="Submit">
                        </div>
                    </form>
                </div>

                <!-- Email Form Container -->
                <div id="createContainerEmail" style="display:none;">
                    <form id="createFormEmail">
                        <!-- Url -->
                        <div class="yot-form-group">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="email">Email</label>
                                <span id="invalidEmailErr" class="yot-tc-red" style="display:none">Invalid Email</span>
                            </div>
                            <input class="yot-form-input" type="email" name="email" id="email">
                        </div>

                        <div class="yot-text-center">
                            <input class="yot-btn-blue1" type="submit" value="Submit">
                        </div>
                    </form>
                </div>

                <!-- Phone Form Container -->
                <div id="createContainerPhone" style="display:none;">
                    <form id="createFormPhone">
                        <!-- Phone -->
                        <div class="yot-form-group">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="phone">Phone</label>
                                <span id="invalidPhoneErr" class="yot-tc-red" style="display:none">Please enter a valid phone number</span>
                            </div>
                            <input class="yot-form-input" type="text" name="phone" id="phone" maxlength="11">
                        </div>

                        <div class="yot-text-center">
                            <input class="yot-btn-blue1" type="submit" value="Submit">
                        </div>
                    </form>
                </div>

                <!-- Address Form Container -->
                <div id="createContainerAddress" style="display:none;">
                    <form id="createFormAddress">
                        <!-- Address -->
                        <div class="yot-form-group">
                            <div class="yot-flex yot-flex-ai-c-jc-sb">
                                <label class="yot-text-fs-xl yot-mb-4" style="font-weight: bolder;" for="address">Address</label>
                                <span id="invalidAddressErr" class="yot-tc-red" style="display:none">Please enter a valid address</span>
                            </div>
                            <input class="yot-form-input" type="text" name="address" id="address">
                        </div>

                        <div class="yot-text-center">
                            <input class="yot-btn-blue1" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- delete Container -->
        <div id="deleteBgContainer" class="yot-overlay-bg-trans yot-bg-black1" style="display:none;"></div>
        <div id="deleteFormContainer" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <!-- Title -->
                <div class="yot-mb-16 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">DELETE</h2>
                    <i id="deleteCloseFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Select Container -->
                <div class="yot-mb-8">
                    <select class="yot-form-select yot-form-select-option yot-w-50" name="deleteSelect" id="deleteSelect">
                        <option value="">- Select -</option>
                        <option value="facebook">Facebook</option>
                        <option value="tiktok">Tiktok</option>
                        <option value="instagram">Instagram</option>
                        <option value="email">Email</option>
                        <option value="phone">Phone</option>
                        <option value="address">Address</option>
                    </select>
                </div>

                <!-- Delete Data Table -->
                <div class="yot-w-100" id="deleteDisplayDataAllTable" style="max-height:300px; overflow-y:scroll"></div>
            </div>
        </div>

        <!-- Update Container -->
        <div id="updateBgContainer" class="yot-overlay-bg-trans yot-bg-black1" style="display:none"></div>
        <div id="updateFormContainer" class="yot-overlay-mid-container" style="display:none;">
            <div class="yot-overlay-mid-child yot-bg-white yot-pa-16 yot-overlay-mid-container-form">
                <!-- Title -->
                <div class="yot-mb-8 yot-flex yot-flex-ai-c yot-flex-jc-sb">
                    <h2 class="yot-tc-blue1">UPDATE</h2>
                    <i id="updateCloseFormIcon" class="fa-solid fa-circle-xmark yot-text-fs-xxl"></i>
                </div>

                <!-- Select Container -->
                <div class="yot-mb-8">
                    <select class="yot-form-select yot-form-select-option yot-w-50" name="updateSelect" id="updateSelect">
                        <option value="">- Select -</option>
                        <option value="facebook">Facebook</option>
                        <option value="tiktok">Tiktok</option>
                        <option value="instagram">Instagram</option>
                        <option value="email">Email</option>
                        <option value="phone">Phone</option>
                        <option value="address">Address</option>
                    </select>
                </div>

                <!-- Delete Data Table -->
                <div class="yot-w-100" id="updateDisplayDataAllTable" style="max-height:300px; overflow-y:scroll"></div>
            </div>
        </div>
    </div>

    <!-- Success Container-->
    <div id="successAlertInsert" class="yot-bg-green yot-tc-white z-index-3 yot-pa-16 yot-alert-container" style="display:none">
        <div class="yot-flex yot-flex-ai-c-jc-sb">
            <h3>Successful Insertion:</h3>
            <i id="successAlertCloseIconInsert" class="fa-solid fa-circle-xmark yot-text-fs-xl "></i>
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

    <script src="./asset/js/all-footer-page/create-facebook.js"></script>
    <script src="./asset/js/all-footer-page/create-tiktok.js"></script>
    <script src="./asset/js/all-footer-page/create-instagram.js"></script>
    <script src="./asset/js/all-footer-page/create-email.js"></script>
    <script src="./asset/js/all-footer-page/create-phone.js"></script>
    <script src="./asset/js/all-footer-page/create-address.js"></script>

    <script src="./asset/js/all-footer-page/delete.js"></script>

    <script src="./asset/js/all-footer-page/update.js"></script>

    <script src="./asset/js/all-footer-page/display/d-data.js"></script>
</body>
</html>